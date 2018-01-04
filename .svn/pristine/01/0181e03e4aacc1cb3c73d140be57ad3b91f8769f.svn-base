<?php
class funct_0{
    function funct($istanza){
        if (!is_numeric($istanza->StartRec) || $istanza->StartRec == "") { // Avoid invalid start record counter
            $istanza->StartRec = 1; // Reset start record counter
            $istanza->setStartRecordNumber($istanza->StartRec);
        } elseif (intval($istanza->StartRec) > intval($istanza->TotalRecs)) { // Avoid starting record > total records
            $istanza->StartRec = intval(($istanza->TotalRecs-1)/$istanza->DisplayRecs)*$istanza->DisplayRecs+1; // Point to last page first record
            $istanza->setStartRecordNumber($istanza->StartRec);
        } elseif (($istanza->StartRec-1) % $istanza->DisplayRecs <> 0) {
            $istanza->StartRec = intval(($istanza->StartRec-1)/$istanza->DisplayRecs)*$istanza->DisplayRecs+1; // Point to page boundary
            $istanza->setStartRecordNumber($istanza->StartRec);
        }
    }

    function ValidateForm($istanza){
        global $Language, $gsFormError;

        // Initialize form error message
        $gsFormError = "";

        // Check if validation required
        if (!EW_SERVER_VALIDATE)
            return ($gsFormError == "");
        if (!$istanza->Customer_Number->FldIsDetailKey && !is_null($istanza->Customer_Number->FormValue) && $istanza->Customer_Number->FormValue == "") {
            ew_AddMessage($gsFormError, str_replace("%s", $istanza->Customer_Number->FldCaption(), $istanza->Customer_Number->ReqErrMsg));
        }
        if (!$istanza->Customer_Name->FldIsDetailKey && !is_null($istanza->Customer_Name->FormValue) && $istanza->Customer_Name->FormValue == "") {
            ew_AddMessage($gsFormError, str_replace("%s", $istanza->Customer_Name->FldCaption(), $istanza->Customer_Name->ReqErrMsg));
        }
        if (!$istanza->Address->FldIsDetailKey && !is_null($istanza->Address->FormValue) && $istanza->Address->FormValue == "") {
            ew_AddMessage($gsFormError, str_replace("%s", $istanza->Address->FldCaption(), $istanza->Address->ReqErrMsg));
        }
        if (!$istanza->City->FldIsDetailKey && !is_null($istanza->City->FormValue) && $istanza->City->FormValue == "") {
            ew_AddMessage($gsFormError, str_replace("%s", $istanza->City->FldCaption(), $istanza->City->ReqErrMsg));
        }
        if (!$istanza->Country->FldIsDetailKey && !is_null($istanza->Country->FormValue) && $istanza->Country->FormValue == "") {
            ew_AddMessage($gsFormError, str_replace("%s", $istanza->Country->FldCaption(), $istanza->Country->ReqErrMsg));
        }
        if (!$istanza->Contact_Person->FldIsDetailKey && !is_null($istanza->Contact_Person->FormValue) && $istanza->Contact_Person->FormValue == "") {
            ew_AddMessage($gsFormError, str_replace("%s", $istanza->Contact_Person->FldCaption(), $istanza->Contact_Person->ReqErrMsg));
        }
        if (!$istanza->Phone_Number->FldIsDetailKey && !is_null($istanza->Phone_Number->FormValue) && $istanza->Phone_Number->FormValue == "") {
            ew_AddMessage($gsFormError, str_replace("%s", $istanza->Phone_Number->FldCaption(), $istanza->Phone_Number->ReqErrMsg));
        }
        if (!$istanza->_Email->FldIsDetailKey && !is_null($istanza->_Email->FormValue) && $istanza->_Email->FormValue == "") {
            ew_AddMessage($gsFormError, str_replace("%s", $istanza->_Email->FldCaption(), $istanza->_Email->ReqErrMsg));
        }
        if (!$istanza->Mobile_Number->FldIsDetailKey && !is_null($istanza->Mobile_Number->FormValue) && $istanza->Mobile_Number->FormValue == "") {
            ew_AddMessage($gsFormError, str_replace("%s", $istanza->Mobile_Number->FldCaption(), $istanza->Mobile_Number->ReqErrMsg));
        }
        if (!$istanza->Notes->FldIsDetailKey && !is_null($istanza->Notes->FormValue) && $istanza->Notes->FormValue == "") {
            ew_AddMessage($gsFormError, str_replace("%s", $istanza->Notes->FldCaption(), $istanza->Notes->ReqErrMsg));
        }

        // Validate detail grid
        $DetailTblVar = explode(",", $istanza->getCurrentDetailTable());
        if (in_array("a_sales", $DetailTblVar) && $GLOBALS["a_sales"]->DetailEdit) {
            if (!isset($GLOBALS["a_sales_grid"])) $GLOBALS["a_sales_grid"] = new ca_sales_grid(); // get detail page object
            $GLOBALS["a_sales_grid"]->ValidateGridForm();
        }

        // Return validate result
        $ValidateForm = ($gsFormError == "");

        // Call Form_CustomValidate event
        $sFormCustomError = "";
        $ValidateForm = $ValidateForm && $istanza->Form_CustomValidate($sFormCustomError);
        if ($sFormCustomError <> "") {
            ew_AddMessage($gsFormError, $sFormCustomError);
        }
        return $ValidateForm;

    }
    
    function SetUpStartRec($istanza){
        if ($istanza->DisplayRecs == 0)
            return;
        if ($istanza->IsPageRequest()) { // Validate request
            if ($_GET[EW_TABLE_START_REC] <> "") { // Check for "start" parameter
                $istanza->StartRec = $_GET[EW_TABLE_START_REC];
                $istanza->setStartRecordNumber($istanza->StartRec);
            } elseif ($_GET[EW_TABLE_PAGE_NO] <> "") {
                $PageNo = $_GET[EW_TABLE_PAGE_NO];
                if (is_numeric($PageNo)) {
                    $istanza->StartRec = ($PageNo-1)*$istanza->DisplayRecs+1;
                    if ($istanza->StartRec <= 0) {
                        $istanza->StartRec = 1;
                    } elseif ($istanza->StartRec >= intval(($istanza->TotalRecs-1)/$istanza->DisplayRecs)*$istanza->DisplayRecs+1) {
                        $istanza->StartRec = intval(($istanza->TotalRecs-1)/$istanza->DisplayRecs)*$istanza->DisplayRecs+1;
                    }
                    $istanza->setStartRecordNumber($istanza->StartRec);
                }
            }
        }
        $istanza->StartRec = $istanza->getStartRecordNumber();

        // Check if correct start record counter
        if (!is_numeric($istanza->StartRec) || $istanza->StartRec == "") { // Avoid invalid start record counter
            $istanza->StartRec = 1; // Reset start record counter
            $istanza->setStartRecordNumber($istanza->StartRec);
        } elseif (intval($istanza->StartRec) > intval($istanza->TotalRecs)) { // Avoid starting record > total records
            $istanza->StartRec = intval(($istanza->TotalRecs-1)/$istanza->DisplayRecs)*$istanza->DisplayRecs+1; // Point to last page first record
            $istanza->setStartRecordNumber($istanza->StartRec);
        } elseif (($istanza->StartRec-1) % $istanza->DisplayRecs <> 0) {
            $istanza->StartRec = intval(($istanza->StartRec-1)/$istanza->DisplayRecs)*$istanza->DisplayRecs+1; // Point to page boundary
            $istanza->setStartRecordNumber($istanza->StartRec);
        }
    }
}
?>