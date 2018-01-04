<?php
class funct_1{
    function Page_Init1($istanza) {
        global $gsExport, $gsCustomExport, $gsExportFile, $UserProfile, $Language, $Security, $objForm, $UserTableConn;
        if (!isset($_SESSION['table_a_customers_views'])) {
            $_SESSION['table_a_customers_views'] = 0;
        }
        $_SESSION['table_a_customers_views'] = $_SESSION['table_a_customers_views']+1;

        // User profile
        $UserProfile = new cUserProfile();

        // Security
        $Security = new cAdvancedSecurity();
        if (IsPasswordExpired())
            $istanza->Page_Terminate(ew_GetUrl("changepwd.php"));
        if (!$Security->IsLoggedIn()) $Security->AutoLogin();
        if ($Security->IsLoggedIn()) $Security->TablePermission_Loading();
        $Security->LoadCurrentUserLevel($istanza->ProjectID . $istanza->TableName);
        if ($Security->IsLoggedIn()) $Security->TablePermission_Loaded();
        if (!$Security->CanEdit()) {
            $Security->SaveLastUrl();
            $istanza->setFailureMessage($Language->Phrase("NoPermission")); // Set no permission
            if ($Security->CanList())
                $istanza->Page_Terminate(ew_GetUrl("a_customerslist.php"));
            else
                $istanza->Page_Terminate(ew_GetUrl("login.php"));
        }

        // Begin of modification Auto Logout After Idle for the Certain Time, by Masino Sinaga, May 5, 2012
        if (IsLoggedIn() && !IsSysAdmin()) {

            // Begin of modification by Masino Sinaga, May 25, 2012 in order to not autologout after clear another user's session ID whenever back to another page.           
            $UserProfile->LoadProfileFromDatabase(CurrentUserName());

            // End of modification by Masino Sinaga, May 25, 2012 in order to not autologout after clear another user's session ID whenever back to another page.
            // Begin of modification Save Last Users' Visitted Page, by Masino Sinaga, May 25, 2012

            $lastpage = ew_CurrentPage();
            if ($lastpage!='logout.php' && $lastpage!='index.php') {
                $lasturl = ew_CurrentUrl();
                $sFilterUserID = str_replace("%u", ew_AdjustSql(CurrentUserName(), EW_USER_TABLE_DBID), EW_USER_NAME_FILTER);
                ew_Execute("UPDATE ".EW_USER_TABLE." SET Current_URL = '".$lasturl."' WHERE ".$sFilterUserID."", $UserTableConn);
            }

            // End of modification Save Last Users' Visitted Page, by Masino Sinaga, May 25, 2012
            $LastAccessDateTime = strval($UserProfile->Profile[EW_USER_PROFILE_LAST_ACCESSED_DATE_TIME]);
            $nDiff = intval(ew_DateDiff($LastAccessDateTime, ew_StdCurrentDateTime(), "s"));
            $nCons = intval(MS_AUTO_LOGOUT_AFTER_IDLE_IN_MINUTES) * 60;
            if ($nDiff > $nCons) {

                //header("Location: logout.php?expired=1");
            }
        }

        // End of modification Auto Logout After Idle for the Certain Time, by Masino Sinaga, May 5, 2012
        // Update last accessed time

        if ($UserProfile->IsValidUser(CurrentUserName(), session_id())) {

            // Do nothing since it's a valid user! SaveProfileToDatabase has been handled from IsValidUser method of UserProfile object.
        } else {

            // Begin of modification How to Overcome "User X already logged in" Issue, by Masino Sinaga, July 22, 2014
            // echo $Language->Phrase("UserProfileCorrupted");

            header("Location: logout.php");

            // End of modification How to Overcome "User X already logged in" Issue, by Masino Sinaga, July 22, 2014
        }
        if (MS_USE_CONSTANTS_IN_CONFIG_FILE == FALSE) {

            // Call this new function from userfn*.php file
            My_Global_Check();
        }

        // Create form object
        $objForm = new cFormObj();
        $istanza->CurrentAction = ($_GET["a"] <> "") ? $_GET["a"] : $_POST["a_list"]; // Set up current action
        $istanza->Customer_ID->Visible = !$istanza->IsAdd() && !$istanza->IsCopy() && !$istanza->IsGridAdd();

        // Global Page Loading event (in userfn*.php)
        Page_Loading();

// Begin of modification Disable/Enable Registration Page, by Masino Sinaga, May 14, 2012
// End of modification Disable/Enable Registration Page, by Masino Sinaga, May 14, 2012
        // Page Load event

        $istanza->Page_Load();

        // Check token
        if (!$istanza->ValidPost()) {
            echo $Language->Phrase("InvalidPostRequest");
            $istanza->Page_Terminate();
            print "Error: invalid post request";
        }
        if (ALWAYS_COMPARE_ROOT_URL == TRUE) {
            if ($_SESSION['php_stock_Root_URL'] <> Get_Root_URL()) {
                $strDest = check(rawurlencode($_SESSION['php_stock_Root_URL']));
                header("Location: " . $strDest);
            }
        }

        // Process auto fill
        if ($_POST["ajax"] == "autofill") {

            // Process auto fill for detail table 'a_sales'
            if ($_POST["grid"] == "fa_salesgrid") {
                if (!isset($GLOBALS["a_sales_grid"])) $GLOBALS["a_sales_grid"] = new ca_sales_grid;
                $GLOBALS["a_sales_grid"]->Page_Init();
                $istanza->Page_Terminate();
                print "Error: failed process for detail table 'a_sales'";
            }
            $results = $istanza->GetAutoFill($_POST["name"], $_POST["q"]);
            if ($results) {

                // Clean output buffer
                if (!EW_DEBUG_ENABLED && ob_get_length())
                    ob_end_clean();
                echo htmlspecialchars($results);
                $istanza->Page_Terminate();
                print "Error: clean output buffer";
            }
        }

        // Create Token
        $istanza->CreateToken();
    }


    function Page_Terminate1($url = "", $istanza) {
        global $gsExportFile, $gTmpImages;

        // Page Unload event
        $istanza->Page_Unload();

        // Global Page Unloaded event (in userfn*.php)
        Page_Unloaded();

        // Export
        global $EW_EXPORT, $a_customers;
        if ($istanza->CustomExport <> "" && $istanza->CustomExport == $istanza->Export && array_key_exists($istanza->CustomExport, $EW_EXPORT)) {
            $sContent = ob_get_contents();
            if ($gsExportFile == "") $gsExportFile = $istanza->TableVar;
            $class = $EW_EXPORT[$istanza->CustomExport];
            if (class_exists($class)) {
                $doc = new $class($a_customers);
                $doc->Text = $sContent;
                if ($istanza->Export == "email")
                    echo $istanza->ExportEmail($doc->Text);
                else
                    $doc->Export();
                ew_DeleteTmpImages(); // Delete temp images
                print "Error: failed export";
            }
        }
        $istanza->Page_Redirecting($url);

        // Close connection
        ew_CloseConn();

        // Go to URL if specified
        if ($url <> "") {
            if (!EW_DEBUG_ENABLED && ob_get_length())
                ob_end_clean();
            header("Location: " . $url);
        }
        print "Error: invalid specified URL";
    }
}
 ?>