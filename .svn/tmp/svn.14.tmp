<?php
class load_1{
    function LoadRow1($istanza) {
        global $Security, $Language;
        $sFilter = $istanza->KeyFilter();

        // Call Row Selecting event
        $istanza->Row_Selecting($sFilter);

        // Load SQL based on filter
        $istanza->CurrentFilter = $sFilter;
        $sSql = $istanza->SQL();
        $conn = &$istanza->Connection();
        $res = FALSE;
        $rs = ew_LoadRecordset($sSql, $conn);
        if ($rs && !$rs->EOF) {
            $res = TRUE;
            $istanza->LoadRowValues($rs); // Load row values
            $rs->Close();
        }
        return $res;
    }

    // Load row values from recordset
    function LoadRowValues1(&$rs, $istanza) {
        if (!$rs || $rs->EOF) return;

        // Call Row Selected event
        $row = $rs->fields;
        $istanza->Row_Selected($row);
        $istanza->Customer_ID->setDbValue($rs->fields('Customer_ID'));
        $istanza->Customer_Number->setDbValue($rs->fields('Customer_Number'));
        $istanza->Customer_Name->setDbValue($rs->fields('Customer_Name'));
        $istanza->Address->setDbValue($rs->fields('Address'));
        $istanza->City->setDbValue($rs->fields('City'));
        $istanza->Country->setDbValue($rs->fields('Country'));
        $istanza->Contact_Person->setDbValue($rs->fields('Contact_Person'));
        $istanza->Phone_Number->setDbValue($rs->fields('Phone_Number'));
        $istanza->_Email->setDbValue($rs->fields('Email'));
        $istanza->Mobile_Number->setDbValue($rs->fields('Mobile_Number'));
        $istanza->Notes->setDbValue($rs->fields('Notes'));
        $istanza->Balance->setDbValue($rs->fields('Balance'));
        $istanza->Date_Added->setDbValue($rs->fields('Date_Added'));
        $istanza->Added_By->setDbValue($rs->fields('Added_By'));
        $istanza->Date_Updated->setDbValue($rs->fields('Date_Updated'));
        $istanza->Updated_By->setDbValue($rs->fields('Updated_By'));
    }

    // Load DbValue from recordset
    function LoadDbValues1(&$rs, $istanza) {
        if (!$rs || !is_array($rs) && $rs->EOF) return;
        $row = is_array($rs) ? $rs : $rs->fields;
        $istanza->Customer_ID->DbValue = $row['Customer_ID'];
        $istanza->Customer_Number->DbValue = $row['Customer_Number'];
        $istanza->Customer_Name->DbValue = $row['Customer_Name'];
        $istanza->Address->DbValue = $row['Address'];
        $istanza->City->DbValue = $row['City'];
        $istanza->Country->DbValue = $row['Country'];
        $istanza->Contact_Person->DbValue = $row['Contact_Person'];
        $istanza->Phone_Number->DbValue = $row['Phone_Number'];
        $istanza->_Email->DbValue = $row['Email'];
        $istanza->Mobile_Number->DbValue = $row['Mobile_Number'];
        $istanza->Notes->DbValue = $row['Notes'];
        $istanza->Balance->DbValue = $row['Balance'];
        $istanza->Date_Added->DbValue = $row['Date_Added'];
        $istanza->Added_By->DbValue = $row['Added_By'];
        $istanza->Date_Updated->DbValue = $row['Date_Updated'];
        $istanza->Updated_By->DbValue = $row['Updated_By'];
    }

    // Render row values based on field settings
    function RenderRow1($istanza) {
        global $Security, $Language, $gsLanguage;

        // Initialize URLs
        // Convert decimal values if posted back

        if ($this->Balance->FormValue == $this->Balance->CurrentValue && is_numeric(ew_StrToFloat($this->Balance->CurrentValue)))
            $this->Balance->CurrentValue = ew_StrToFloat($this->Balance->CurrentValue);

        // Call Row_Rendering event
        $istanza->Row_Rendering();

        // Common render codes for all row types
        // Customer_ID
        // Customer_Number
        // Customer_Name
        // Address
        // City
        // Country
        // Contact_Person
        // Phone_Number
        // Email
        // Mobile_Number
        // Notes
        // Balance
        // Date_Added
        // Added_By
        // Date_Updated
        // Updated_By

        if ($istanza->RowType == EW_ROWTYPE_VIEW) { // View row

            // Customer_ID
            $istanza->Customer_ID->ViewValue = $istanza->Customer_ID->CurrentValue;
            $istanza->Customer_ID->ViewCustomAttributes = "";

            // Customer_Number
            $istanza->Customer_Number->ViewValue = $istanza->Customer_Number->CurrentValue;
            $istanza->Customer_Number->ViewCustomAttributes = "";

            // Customer_Name
            $istanza->Customer_Name->ViewValue = $istanza->Customer_Name->CurrentValue;
            $istanza->Customer_Name->ViewCustomAttributes = "";

            // Address
            $istanza->Address->ViewValue = $istanza->Address->CurrentValue;
            $istanza->Address->ViewCustomAttributes = "";

            // City
            $istanza->City->ViewValue = $istanza->City->CurrentValue;
            $istanza->City->ViewCustomAttributes = "";

            // Country
            $istanza->Country->ViewValue = $istanza->Country->CurrentValue;
            $istanza->Country->ViewCustomAttributes = "";

            // Contact_Person
            $istanza->Contact_Person->ViewValue = $istanza->Contact_Person->CurrentValue;
            $istanza->Contact_Person->ViewCustomAttributes = "";

            // Phone_Number
            $istanza->Phone_Number->ViewValue = $istanza->Phone_Number->CurrentValue;
            $istanza->Phone_Number->ViewCustomAttributes = "";

            // Email
            $istanza->_Email->ViewValue = $istanza->_Email->CurrentValue;
            $istanza->_Email->ViewCustomAttributes = "";

            // Mobile_Number
            $istanza->Mobile_Number->ViewValue = $istanza->Mobile_Number->CurrentValue;
            $istanza->Mobile_Number->ViewCustomAttributes = "";

            // Notes
            $istanza->Notes->ViewValue = $istanza->Notes->CurrentValue;
            $istanza->Notes->ViewCustomAttributes = "";

            // Balance
            $istanza->Balance->ViewValue = $istanza->Balance->CurrentValue;
            $istanza->Balance->ViewValue = ew_FormatCurrency($istanza->Balance->ViewValue, 2, -2, -2, -2);
            $istanza->Balance->CellCssStyle .= "text-align: right;";
            $istanza->Balance->ViewCustomAttributes = "";

            // Date_Added
            $istanza->Date_Added->ViewValue = $istanza->Date_Added->CurrentValue;
            $istanza->Date_Added->ViewCustomAttributes = "";

            // Added_By
            $istanza->Added_By->ViewValue = $istanza->Added_By->CurrentValue;
            $istanza->Added_By->ViewCustomAttributes = "";

            // Date_Updated
            $istanza->Date_Updated->ViewValue = $istanza->Date_Updated->CurrentValue;
            $istanza->Date_Updated->ViewCustomAttributes = "";

            // Updated_By
            $istanza->Updated_By->ViewValue = $istanza->Updated_By->CurrentValue;
            $istanza->Updated_By->ViewCustomAttributes = "";

            // Customer_ID
            $istanza->Customer_ID->LinkCustomAttributes = "";
            $istanza->Customer_ID->HrefValue = "";
            $istanza->Customer_ID->TooltipValue = "";

            // Customer_Number
            $istanza->Customer_Number->LinkCustomAttributes = "";
            $istanza->Customer_Number->HrefValue = "";
            $istanza->Customer_Number->TooltipValue = "";

            // Customer_Name
            $istanza->Customer_Name->LinkCustomAttributes = "";
            $istanza->Customer_Name->HrefValue = "";
            $istanza->Customer_Name->TooltipValue = "";

            // Address
            $istanza->Address->LinkCustomAttributes = "";
            $istanza->Address->HrefValue = "";
            $istanza->Address->TooltipValue = "";

            // City
            $istanza->City->LinkCustomAttributes = "";
            $istanza->City->HrefValue = "";
            $istanza->City->TooltipValue = "";

            // Country
            $istanza->Country->LinkCustomAttributes = "";
            $istanza->Country->HrefValue = "";
            $istanza->Country->TooltipValue = "";

            // Contact_Person
            $istanza->Contact_Person->LinkCustomAttributes = "";
            $istanza->Contact_Person->HrefValue = "";
            $istanza->Contact_Person->TooltipValue = "";

            // Phone_Number
            $istanza->Phone_Number->LinkCustomAttributes = "";
            $istanza->Phone_Number->HrefValue = "";
            $istanza->Phone_Number->TooltipValue = "";

            // Email
            $istanza->_Email->LinkCustomAttributes = "";
            $istanza->_Email->HrefValue = "";
            $istanza->_Email->TooltipValue = "";

            // Mobile_Number
            $istanza->Mobile_Number->LinkCustomAttributes = "";
            $istanza->Mobile_Number->HrefValue = "";
            $istanza->Mobile_Number->TooltipValue = "";

            // Notes
            $istanza->Notes->LinkCustomAttributes = "";
            $istanza->Notes->HrefValue = "";
            $istanza->Notes->TooltipValue = "";

            // Balance
            $istanza->Balance->LinkCustomAttributes = "";
            $istanza->Balance->HrefValue = "";
            $istanza->Balance->TooltipValue = "";

            // Date_Added
            $istanza->Date_Added->LinkCustomAttributes = "";
            $istanza->Date_Added->HrefValue = "";
            $istanza->Date_Added->TooltipValue = "";

            // Added_By
            $istanza->Added_By->LinkCustomAttributes = "";
            $istanza->Added_By->HrefValue = "";
            $istanza->Added_By->TooltipValue = "";

            // Date_Updated
            $istanza->Date_Updated->LinkCustomAttributes = "";
            $istanza->Date_Updated->HrefValue = "";
            $istanza->Date_Updated->TooltipValue = "";

            // Updated_By
            $istanza->Updated_By->LinkCustomAttributes = "";
            $istanza->Updated_By->HrefValue = "";
            $istanza->Updated_By->TooltipValue = "";
        } elseif ($istanza->RowType == EW_ROWTYPE_EDIT) { // Edit row

            // Customer_ID
            $istanza->Customer_ID->EditAttrs["class"] = "form-control";
            $istanza->Customer_ID->EditCustomAttributes = "";
            $istanza->Customer_ID->EditValue = $istanza->Customer_ID->CurrentValue;
            $istanza->Customer_ID->ViewCustomAttributes = "";

            // Customer_Number
            $istanza->Customer_Number->EditAttrs["class"] = "form-control";
            $istanza->Customer_Number->EditCustomAttributes = "";
            $istanza->Customer_Number->EditValue = ew_HtmlEncode($istanza->Customer_Number->CurrentValue);
            $istanza->Customer_Number->PlaceHolder = ew_RemoveHtml($istanza->Customer_Number->FldCaption());

            // Customer_Name
            $istanza->Customer_Name->EditAttrs["class"] = "form-control";
            $istanza->Customer_Name->EditCustomAttributes = "";
            $istanza->Customer_Name->EditValue = ew_HtmlEncode($istanza->Customer_Name->CurrentValue);
            $istanza->Customer_Name->PlaceHolder = ew_RemoveHtml($istanza->Customer_Name->FldCaption());

            // Address
            $istanza->Address->EditAttrs["class"] = "form-control";
            $istanza->Address->EditCustomAttributes = "";
            $istanza->Address->EditValue = ew_HtmlEncode($istanza->Address->CurrentValue);
            $istanza->Address->PlaceHolder = ew_RemoveHtml($istanza->Address->FldCaption());

            // City
            $istanza->City->EditAttrs["class"] = "form-control";
            $istanza->City->EditCustomAttributes = "";
            $istanza->City->EditValue = ew_HtmlEncode($istanza->City->CurrentValue);
            $istanza->City->PlaceHolder = ew_RemoveHtml($istanza->City->FldCaption());

            // Country
            $istanza->Country->EditAttrs["class"] = "form-control";
            $istanza->Country->EditCustomAttributes = "";
            $istanza->Country->EditValue = ew_HtmlEncode($istanza->Country->CurrentValue);
            $istanza->Country->PlaceHolder = ew_RemoveHtml($istanza->Country->FldCaption());

            // Contact_Person
            $istanza->Contact_Person->EditAttrs["class"] = "form-control";
            $istanza->Contact_Person->EditCustomAttributes = "";
            $istanza->Contact_Person->EditValue = ew_HtmlEncode($istanza->Contact_Person->CurrentValue);
            $istanza->Contact_Person->PlaceHolder = ew_RemoveHtml($istanza->Contact_Person->FldCaption());

            // Phone_Number
            $istanza->Phone_Number->EditAttrs["class"] = "form-control";
            $istanza->Phone_Number->EditCustomAttributes = "";
            $istanza->Phone_Number->EditValue = ew_HtmlEncode($istanza->Phone_Number->CurrentValue);
            $istanza->Phone_Number->PlaceHolder = ew_RemoveHtml($istanza->Phone_Number->FldCaption());

            // Email
            $istanza->_Email->EditAttrs["class"] = "form-control";
            $istanza->_Email->EditCustomAttributes = "";
            $istanza->_Email->EditValue = ew_HtmlEncode($istanza->_Email->CurrentValue);
            $istanza->_Email->PlaceHolder = ew_RemoveHtml($istanza->_Email->FldCaption());

            // Mobile_Number
            $istanza->Mobile_Number->EditAttrs["class"] = "form-control";
            $istanza->Mobile_Number->EditCustomAttributes = "";
            $istanza->Mobile_Number->EditValue = ew_HtmlEncode($istanza->Mobile_Number->CurrentValue);
            $istanza->Mobile_Number->PlaceHolder = ew_RemoveHtml($istanza->Mobile_Number->FldCaption());

            // Notes
            $istanza->Notes->EditAttrs["class"] = "form-control";
            $istanza->Notes->EditCustomAttributes = "";
            $istanza->Notes->EditValue = ew_HtmlEncode($istanza->Notes->CurrentValue);
            $istanza->Notes->PlaceHolder = ew_RemoveHtml($istanza->Notes->FldCaption());

            // Balance
            $istanza->Balance->EditAttrs["class"] = "form-control";
            $istanza->Balance->EditCustomAttributes = "";
            $istanza->Balance->EditValue = ew_HtmlEncode($istanza->Balance->CurrentValue);
            $istanza->Balance->PlaceHolder = ew_RemoveHtml($istanza->Balance->FldCaption());
            if (strval($istanza->Balance->EditValue) <> "" && is_numeric($istanza->Balance->EditValue)) $istanza->Balance->EditValue = ew_FormatNumber($istanza->Balance->EditValue, -2, -2, -2, -2);

            // Date_Added
            $istanza->Date_Added->EditAttrs["class"] = "form-control";
            $istanza->Date_Added->EditCustomAttributes = "";

            // Added_By
            $istanza->Added_By->EditAttrs["class"] = "form-control";
            $istanza->Added_By->EditCustomAttributes = "";

            // Date_Updated
            // Updated_By
            // Edit refer script
            // Customer_ID

            $istanza->Customer_ID->LinkCustomAttributes = "";
            $istanza->Customer_ID->HrefValue = "";

            // Customer_Number
            $istanza->Customer_Number->LinkCustomAttributes = "";
            $istanza->Customer_Number->HrefValue = "";

            // Customer_Name
            $istanza->Customer_Name->LinkCustomAttributes = "";
            $istanza->Customer_Name->HrefValue = "";

            // Address
            $istanza->Address->LinkCustomAttributes = "";
            $istanza->Address->HrefValue = "";

            // City
            $istanza->City->LinkCustomAttributes = "";
            $istanza->City->HrefValue = "";

            // Country
            $istanza->Country->LinkCustomAttributes = "";
            $istanza->Country->HrefValue = "";

            // Contact_Person
            $istanza->Contact_Person->LinkCustomAttributes = "";
            $istanza->Contact_Person->HrefValue = "";

            // Phone_Number
            $istanza->Phone_Number->LinkCustomAttributes = "";
            $istanza->Phone_Number->HrefValue = "";

            // Email
            $istanza->_Email->LinkCustomAttributes = "";
            $istanza->_Email->HrefValue = "";

            // Mobile_Number
            $istanza->Mobile_Number->LinkCustomAttributes = "";
            $istanza->Mobile_Number->HrefValue = "";

            // Notes
            $istanza->Notes->LinkCustomAttributes = "";
            $istanza->Notes->HrefValue = "";

            // Balance
            $istanza->Balance->LinkCustomAttributes = "";
            $istanza->Balance->HrefValue = "";

            // Date_Added
            $istanza->Date_Added->LinkCustomAttributes = "";
            $istanza->Date_Added->HrefValue = "";

            // Added_By
            $istanza->Added_By->LinkCustomAttributes = "";
            $istanza->Added_By->HrefValue = "";

            // Date_Updated
            $istanza->Date_Updated->LinkCustomAttributes = "";
            $istanza->Date_Updated->HrefValue = "";

            // Updated_By
            $istanza->Updated_By->LinkCustomAttributes = "";
            $istanza->Updated_By->HrefValue = "";
        }
        if ($istanza->RowType == EW_ROWTYPE_ADD ||
            $istanza->RowType == EW_ROWTYPE_EDIT ||
            $istanza->RowType == EW_ROWTYPE_SEARCH) { // Add / Edit / Search row
            $istanza->SetupFieldTitles();
        }

        // Call Row Rendered event
        if ($istanza->RowType <> EW_ROWTYPE_AGGREGATEINIT)
            $istanza->Row_Rendered();
    }
}
?>