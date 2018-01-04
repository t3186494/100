<?php include_once "function_2.php"?>
<?php

class function_1 extends function_2
{
    /**
     *
     */

        function PageName()
        {
            return ew_CurrentPage();
        }

        // Page URL
        function PageUrl()
        {
            $PageUrl = ew_CurrentPage() . "?";
            if ($this->UseTokenInUrl) $PageUrl .= "t=" . $this->TableVar . "&"; // Add page token
            return $PageUrl;
        }

        // Message
        function getMessage()
        {
            return @$_SESSION[EW_SESSION_MESSAGE];
        }

        function setMessage($v)
        {
            ew_AddMessage($_SESSION[EW_SESSION_MESSAGE], $v);
        }

        function getFailureMessage()
        {
            return @$_SESSION[EW_SESSION_FAILURE_MESSAGE];
        }

        function setFailureMessage($v)
        {
            ew_AddMessage($_SESSION[EW_SESSION_FAILURE_MESSAGE], $v);
        }

        function getSuccessMessage()
        {
            return @$_SESSION[EW_SESSION_SUCCESS_MESSAGE];
        }

        function setSuccessMessage($v)
        {
            ew_AddMessage($_SESSION[EW_SESSION_SUCCESS_MESSAGE], $v);
        }

        function getWarningMessage()
        {
            return @$_SESSION[EW_SESSION_WARNING_MESSAGE];
        }

        function setWarningMessage($v)
        {
            ew_AddMessage($_SESSION[EW_SESSION_WARNING_MESSAGE], $v);
        }

        // Methods to clear message
        function ClearMessage()
        {
            $_SESSION[EW_SESSION_MESSAGE] = "";
        }

        function ClearFailureMessage()
        {
            $_SESSION[EW_SESSION_FAILURE_MESSAGE] = "";
        }

        function ClearSuccessMessage()
        {
            $_SESSION[EW_SESSION_SUCCESS_MESSAGE] = "";
        }

        function ClearWarningMessage()
        {
            $_SESSION[EW_SESSION_WARNING_MESSAGE] = "";
        }

        function ClearMessages()
        {
            $_SESSION[EW_SESSION_MESSAGE] = "";
            $_SESSION[EW_SESSION_FAILURE_MESSAGE] = "";
            $_SESSION[EW_SESSION_SUCCESS_MESSAGE] = "";
            $_SESSION[EW_SESSION_WARNING_MESSAGE] = "";
        }

    // Message Showing event
    // $type = ''|'success'|'failure'|'warning'
    function Message_Showing(&$msg, $type) {
        if ($type == 'success') {

            //$msg = "your success message";
        } elseif ($type == 'failure') {

            //$msg = "your failure message";
        } elseif ($type == 'warning') {

            //$msg = "your warning message";
        } else {

            //$msg = "your message";
        }
    }

        // Show message
        function ShowMessage()
        {

            // $hidden = TRUE;
            $hidden = MS_USE_JAVASCRIPT_MESSAGE;
            $html = "";

            // Message
            $sMessage = $this->getMessage();
            $this->Message_Showing($sMessage, "");
            if ($sMessage <> "") { // Message in Session, display
                if (!$hidden)
                    $sMessage = "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>" . $sMessage;
                $html .= "<div class=\"alert alert-info ewInfo\">" . $sMessage . "</div>";
                $_SESSION[EW_SESSION_MESSAGE] = ""; // Clear message in Session
            }

            // Warning message
            $sWarningMessage = $this->getWarningMessage();
            $this->Message_Showing($sWarningMessage, "warning");
            if ($sWarningMessage <> "") { // Message in Session, display
                if (!$hidden)
                    $sWarningMessage = "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>" . $sWarningMessage;
                $html .= "<div class=\"alert alert-warning ewWarning\">" . $sWarningMessage . "</div>";
                $_SESSION[EW_SESSION_WARNING_MESSAGE] = ""; // Clear message in Session
            }

            // Success message
            $sSuccessMessage = $this->getSuccessMessage();
            $this->Message_Showing($sSuccessMessage, "success");
            if ($sSuccessMessage <> "") { // Message in Session, display

                // if (!$hidden)
                //	 $sSuccessMessage = "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>" . $sSuccessMessage;
                // $html .= "<div class=\"alert alert-success ewSuccess\">" . $sSuccessMessage . "</div>";
                // Begin of modification Auto Hide Message, by Masino Sinaga, January 24, 2013

                if (@MS_AUTO_HIDE_SUCCESS_MESSAGE) {

                    //$sSuccessMessage = "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>";
                    $html .= "<p class=\"alert alert-success msSuccessMessage\" id=\"ewSuccessMessage\">" . $sSuccessMessage . "</p>";
                } else {
                    if (!$hidden)
                        $sSuccessMessage = "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>" . $sSuccessMessage;
                    $html .= "<div class=\"alert alert-success ewSuccess\">" . $sSuccessMessage . "</div>";
                }

                // End of modification Auto Hide Message, by Masino Sinaga, January 24, 2013
                $_SESSION[EW_SESSION_SUCCESS_MESSAGE] = ""; // Clear message in Session
            }

            // Failure message
            $sErrorMessage = $this->getFailureMessage();
            $this->Message_Showing($sErrorMessage, "failure");
            if ($sErrorMessage <> "") { // Message in Session, display
                if (!$hidden)
                    $sErrorMessage = "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>" . $sErrorMessage;
                $html .= "<div class=\"alert alert-danger ewError\">" . $sErrorMessage . "</div>";
                $_SESSION[EW_SESSION_FAILURE_MESSAGE] = ""; // Clear message in Session
            }

            // echo "<div class=\"ewMessageDialog\"" . (($hidden) ? " style=\"display: none;\"" : "") . ">" . $html . "</div>";
            if (@MS_AUTO_HIDE_SUCCESS_MESSAGE || MS_USE_JAVASCRIPT_MESSAGE == 0) {
                echo $html;
            } else {
                if (MS_USE_ALERTIFY_FOR_MESSAGE_DIALOG) {
                    if ($html <> "") {
                        $html = str_replace("'", "\'", $html);
                        echo "<script type='text/javascript'>alertify.alert('" . $html . "', function (ok) { }).set('title', ewLanguage.Phrase('AlertifyAlert'));</script>";
                    }
                } else {
                    echo "<div class=\"ewMessageDialog\"" . (($hidden) ? " style=\"display: none;\"" : "") . ">" . $html . "</div>";
                }
            }
        }

    function LoadRow() {
        global $Security, $Language;
        $sFilter = $this->KeyFilter();

        // Call Row Selecting event
        $this->Row_Selecting($sFilter);

        // Load SQL based on filter
        $this->CurrentFilter = $sFilter;
        $sSql = $this->SQL();
        $conn = &$this->Connection();
        $res = FALSE;
        $rs = ew_LoadRecordset($sSql, $conn);
        if ($rs && !$rs->EOF) {
            $res = TRUE;
            $this->LoadRowValues($rs); // Load row values
            $rs->Close();
        }
        return $res;
    }

    // Load row values from recordset
    function LoadRowValues(&$rs) {
        if (!$rs || $rs->EOF) return;

        // Call Row Selected event
        $row = &$rs->fields;
        $this->Row_Selected($row);
        $this->Customer_ID->setDbValue($rs->fields('Customer_ID'));
        $this->Customer_Number->setDbValue($rs->fields('Customer_Number'));
        $this->Customer_Name->setDbValue($rs->fields('Customer_Name'));
        $this->Address->setDbValue($rs->fields('Address'));
        $this->City->setDbValue($rs->fields('City'));
        $this->Country->setDbValue($rs->fields('Country'));
        $this->Contact_Person->setDbValue($rs->fields('Contact_Person'));
        $this->Phone_Number->setDbValue($rs->fields('Phone_Number'));
        $this->_Email->setDbValue($rs->fields('Email'));
        $this->Mobile_Number->setDbValue($rs->fields('Mobile_Number'));
        $this->Notes->setDbValue($rs->fields('Notes'));
        $this->Balance->setDbValue($rs->fields('Balance'));
        $this->Date_Added->setDbValue($rs->fields('Date_Added'));
        $this->Added_By->setDbValue($rs->fields('Added_By'));
        $this->Date_Updated->setDbValue($rs->fields('Date_Updated'));
        $this->Updated_By->setDbValue($rs->fields('Updated_By'));
        if (!isset($GLOBALS["a_sales_grid"])) $GLOBALS["a_sales_grid"] = new ca_sales_grid;
        $sDetailFilter = $GLOBALS["a_sales"]->SqlDetailFilter_a_customers();
        $sDetailFilter = str_replace("@Customer_ID@", ew_AdjustSql($this->Customer_Number->DbValue, "DB"), $sDetailFilter);
        $GLOBALS["a_sales"]->setCurrentMasterTable("a_customers");
        $sDetailFilter = $GLOBALS["a_sales"]->ApplyUserIDFilters($sDetailFilter);
        $this->a_sales_Count = $GLOBALS["a_sales"]->LoadRecordCount($sDetailFilter);
    }

    function LoadDbValues(&$rs) {
        if (!$rs || !is_array($rs) && $rs->EOF) return;
        $row = is_array($rs) ? $rs : $rs->fields;
        $this->Customer_ID->DbValue = $row['Customer_ID'];
        $this->Customer_Number->DbValue = $row['Customer_Number'];
        $this->Customer_Name->DbValue = $row['Customer_Name'];
        $this->Address->DbValue = $row['Address'];
        $this->City->DbValue = $row['City'];
        $this->Country->DbValue = $row['Country'];
        $this->Contact_Person->DbValue = $row['Contact_Person'];
        $this->Phone_Number->DbValue = $row['Phone_Number'];
        $this->_Email->DbValue = $row['Email'];
        $this->Mobile_Number->DbValue = $row['Mobile_Number'];
        $this->Notes->DbValue = $row['Notes'];
        $this->Balance->DbValue = $row['Balance'];
        $this->Date_Added->DbValue = $row['Date_Added'];
        $this->Added_By->DbValue = $row['Added_By'];
        $this->Date_Updated->DbValue = $row['Date_Updated'];
        $this->Updated_By->DbValue = $row['Updated_By'];
    }

}
?>