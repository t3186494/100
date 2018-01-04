<?php
class page_init{
    function Page_Init1($istanza){
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
        if (!$Security->CanList()) {
            $Security->SaveLastUrl();
            $istanza->setFailureMessage($Language->Phrase("NoPermission")); // Set no permission
            $istanza->Page_Terminate(ew_GetUrl("index.php"));
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
            $LastAccessDateTime = strval(@$UserProfile->Profile[EW_USER_PROFILE_LAST_ACCESSED_DATE_TIME]);
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
        if (@MS_USE_CONSTANTS_IN_CONFIG_FILE == FALSE) {

            // Call this new function from userfn*.php file
            My_Global_Check();
        }

        // Get export parameters
        $custom = "";
        if (@$_GET["export"] <> "") {
            $istanza->Export = $_GET["export"];
            $custom = @$_GET["custom"];
        } elseif (@$_POST["export"] <> "") {
            $istanza->Export = $_POST["export"];
            $custom = @$_POST["custom"];
        } elseif (ew_IsHttpPost()) {
            if (@$_POST["exporttype"] <> "")
                $istanza->Export = $_POST["exporttype"];
            $custom = @$_POST["custom"];
        } else {
            $istanza->setExportReturnUrl(ew_CurrentUrl());
        }
        $gsExportFile = $istanza->TableVar; // Get export file, used in header

        // Begin of modification Permission Access for Export To Feature, by Masino Sinaga, To prevent users entering from URL, May 12, 2012
        global $gsExport;
        if ($gsExport=="print") {
            if (!$Security->CanExportToPrint() && !$Security->IsAdmin()) {
                echo $Language->Phrase("nopermission");
                print "Error: No permission!";
            }
        } elseif ($gsExport=="excel") {
            if (!$Security->CanExportToExcel() && !$Security->IsAdmin()) {
                echo $Language->Phrase("nopermission");
                print "Error: No permission!";
            }
        } elseif ($gsExport=="word") {
            if (!$Security->CanExportToWord() && !$Security->IsAdmin()) {
                echo $Language->Phrase("nopermission");
                print "Error: No permission!";
            }
        } elseif ($gsExport=="html") {
            if (!$Security->CanExportToHTML() && !$Security->IsAdmin()) {
                echo $Language->Phrase("nopermission");
                print "Error: No permission!";
            }
        } elseif ($gsExport=="csv") {
            if (!$Security->CanExportToCSV() && !$Security->IsAdmin()) {
                echo $Language->Phrase("nopermission");
                print "Error: No permission!";
            }
        } elseif ($gsExport=="xml") {
            if (!$Security->CanExportToXML() && !$Security->IsAdmin()) {
                echo $Language->Phrase("nopermission");
                print "Error: No permission!";
            }
        } elseif ($gsExport=="pdf") {
            if (!$Security->CanExportToPDF() && !$Security->IsAdmin()) {
                echo $Language->Phrase("nopermission");
                print "Error: No permission!";
            }
        } elseif ($gsExport=="email") {
            if (!$Security->CanExportToEmail() && !$Security->IsAdmin()) {
                echo $Language->Phrase("nopermission");
                print "Error: No permission!";
            }
        }

        // End of modification Permission Access for Export To Feature, by Masino Sinaga, To prevent users entering from URL, May 12, 2012
        // Get custom export parameters

        if ($istanza->Export <> "" && $custom <> "") {
            $istanza->CustomExport = $istanza->Export;
            $istanza->Export = "print";
        }
        $gsCustomExport = $istanza->CustomExport;
        $gsExport = $istanza->Export; // Get export parameter, used in header

        // Update Export URLs
        if (defined("EW_USE_PHPEXCEL"))
            $istanza->ExportExcelCustom = FALSE;
        if ($istanza->ExportExcelCustom)
            $istanza->ExportExcelUrl .= "&amp;custom=1";
        if (defined("EW_USE_PHPWORD"))
            $istanza->ExportWordCustom = FALSE;
        if ($istanza->ExportWordCustom)
            $istanza->ExportWordUrl .= "&amp;custom=1";
        if ($istanza->ExportPdfCustom)
            $istanza->ExportPdfUrl .= "&amp;custom=1";
        $istanza->CurrentAction = (@$_GET["a"] <> "") ? $_GET["a"] : @$_POST["a_list"]; // Set up current action

        // Get grid add count
        $gridaddcnt = @$_GET[EW_TABLE_GRID_ADD_ROW_COUNT];
        if (is_numeric($gridaddcnt) && $gridaddcnt > 0)
            $istanza->GridAddRowCount = $gridaddcnt;

        // Set up list options
        $istanza->SetupListOptions();

        // Setup export options
        $istanza->SetupExportOptions();

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
                header("Location: " . $_SESSION['php_stock_Root_URL']);
            }
        }

        // Process auto fill
        if (@$_POST["ajax"] == "autofill") {

            // Process auto fill for detail table 'a_sales'
            if (@$_POST["grid"] == "fa_salesgrid") {
                if (!isset($GLOBALS["a_sales_grid"])) $GLOBALS["a_sales_grid"] = new ca_sales_grid;
                $GLOBALS["a_sales_grid"]->Page_Init();
                $istanza->Page_Terminate();
                print "Error: failed process for detail table 'a_sales'";
            }
            $results = $istanza->GetAutoFill(@$_POST["name"], @$_POST["q"]);
            if ($results) {

                // Clean output buffer
                if (!EW_DEBUG_ENABLED && ob_get_length())
                    ob_end_clean();
                echo $results;
                $istanza->Page_Terminate();
                print "Error: clean output buffer";
            }
        }

        // Create Token
        $istanza->CreateToken();

        // Setup other options
        $istanza->SetupOtherOptions();

        // Set up custom action (compatible with old version)
        foreach ($istanza->CustomActions as $name => $action)
            $istanza->ListActions->Add($name, $action);

        // Show checkbox column if multiple action
        foreach ($istanza->ListActions->Items as $listaction) {
            if ($listaction->Select == EW_ACTION_MULTIPLE && $listaction->Allow) {
                $istanza->ListOptions->Items["checkbox"]->Visible = TRUE;
                break;
            }
        }
    }
}
?>