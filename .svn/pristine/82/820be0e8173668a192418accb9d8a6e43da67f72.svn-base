<?php
class render_row{
    function RenderRow1($istanza) {
        global $Security, $Language, $gsLanguage;

        // Initialize URLs
        // Convert decimal values if posted back

        if ($istanza->Balance->FormValue == $istanza->Balance->CurrentValue && is_numeric(ew_StrToFloat($istanza->Balance->CurrentValue)))
            $istanza->Balance->CurrentValue = ew_StrToFloat($istanza->Balance->CurrentValue);

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
        } elseif ($istanza->RowType == EW_ROWTYPE_SEARCH) { // Search row

            // Customer_ID
            $istanza->Customer_ID->EditAttrs["class"] = "form-control";
            $istanza->Customer_ID->EditCustomAttributes = "";
            $istanza->Customer_ID->EditValue = ew_HtmlEncode($istanza->Customer_ID->AdvancedSearch->SearchValue);
            $istanza->Customer_ID->PlaceHolder = ew_RemoveHtml($istanza->Customer_ID->FldCaption());
            $istanza->Customer_ID->EditAttrs["class"] = "form-control";
            $istanza->Customer_ID->EditCustomAttributes = "";
            $istanza->Customer_ID->EditValue2 = ew_HtmlEncode($istanza->Customer_ID->AdvancedSearch->SearchValue2);
            $istanza->Customer_ID->PlaceHolder = ew_RemoveHtml($istanza->Customer_ID->FldCaption());

            // Customer_Number
            $istanza->Customer_Number->EditAttrs["class"] = "form-control";
            $istanza->Customer_Number->EditCustomAttributes = "";
            $istanza->Customer_Number->EditValue = ew_HtmlEncode($istanza->Customer_Number->AdvancedSearch->SearchValue);
            $istanza->Customer_Number->PlaceHolder = ew_RemoveHtml($istanza->Customer_Number->FldCaption());
            $istanza->Customer_Number->EditAttrs["class"] = "form-control";
            $istanza->Customer_Number->EditCustomAttributes = "";
            $istanza->Customer_Number->EditValue2 = ew_HtmlEncode($istanza->Customer_Number->AdvancedSearch->SearchValue2);
            $istanza->Customer_Number->PlaceHolder = ew_RemoveHtml($istanza->Customer_Number->FldCaption());

            // Customer_Name
            $istanza->Customer_Name->EditAttrs["class"] = "form-control";
            $istanza->Customer_Name->EditCustomAttributes = "";
            $istanza->Customer_Name->EditValue = ew_HtmlEncode($istanza->Customer_Name->AdvancedSearch->SearchValue);
            $istanza->Customer_Name->PlaceHolder = ew_RemoveHtml($istanza->Customer_Name->FldCaption());
            $istanza->Customer_Name->EditAttrs["class"] = "form-control";
            $istanza->Customer_Name->EditCustomAttributes = "";
            $istanza->Customer_Name->EditValue2 = ew_HtmlEncode($istanza->Customer_Name->AdvancedSearch->SearchValue2);
            $istanza->Customer_Name->PlaceHolder = ew_RemoveHtml($istanza->Customer_Name->FldCaption());

            // Address
            $istanza->Address->EditAttrs["class"] = "form-control";
            $istanza->Address->EditCustomAttributes = "";
            $istanza->Address->EditValue = ew_HtmlEncode($istanza->Address->AdvancedSearch->SearchValue);
            $istanza->Address->PlaceHolder = ew_RemoveHtml($istanza->Address->FldCaption());
            $istanza->Address->EditAttrs["class"] = "form-control";
            $istanza->Address->EditCustomAttributes = "";
            $istanza->Address->EditValue2 = ew_HtmlEncode($istanza->Address->AdvancedSearch->SearchValue2);
            $istanza->Address->PlaceHolder = ew_RemoveHtml($istanza->Address->FldCaption());

            // City
            $istanza->City->EditAttrs["class"] = "form-control";
            $istanza->City->EditCustomAttributes = "";
            $istanza->City->EditValue = ew_HtmlEncode($istanza->City->AdvancedSearch->SearchValue);
            $istanza->City->PlaceHolder = ew_RemoveHtml($istanza->City->FldCaption());
            $istanza->City->EditAttrs["class"] = "form-control";
            $istanza->City->EditCustomAttributes = "";
            $istanza->City->EditValue2 = ew_HtmlEncode($istanza->City->AdvancedSearch->SearchValue2);
            $istanza->City->PlaceHolder = ew_RemoveHtml($istanza->City->FldCaption());

            // Country
            $istanza->Country->EditAttrs["class"] = "form-control";
            $istanza->Country->EditCustomAttributes = "";
            $istanza->Country->EditValue = ew_HtmlEncode($istanza->Country->AdvancedSearch->SearchValue);
            $istanza->Country->PlaceHolder = ew_RemoveHtml($istanza->Country->FldCaption());
            $istanza->Country->EditAttrs["class"] = "form-control";
            $istanza->Country->EditCustomAttributes = "";
            $istanza->Country->EditValue2 = ew_HtmlEncode($istanza->Country->AdvancedSearch->SearchValue2);
            $istanza->Country->PlaceHolder = ew_RemoveHtml($istanza->Country->FldCaption());

            // Contact_Person
            $istanza->Contact_Person->EditAttrs["class"] = "form-control";
            $istanza->Contact_Person->EditCustomAttributes = "";
            $istanza->Contact_Person->EditValue = ew_HtmlEncode($istanza->Contact_Person->AdvancedSearch->SearchValue);
            $istanza->Contact_Person->PlaceHolder = ew_RemoveHtml($istanza->Contact_Person->FldCaption());
            $istanza->Contact_Person->EditAttrs["class"] = "form-control";
            $istanza->Contact_Person->EditCustomAttributes = "";
            $istanza->Contact_Person->EditValue2 = ew_HtmlEncode($istanza->Contact_Person->AdvancedSearch->SearchValue2);
            $istanza->Contact_Person->PlaceHolder = ew_RemoveHtml($istanza->Contact_Person->FldCaption());

            // Phone_Number
            $istanza->Phone_Number->EditAttrs["class"] = "form-control";
            $istanza->Phone_Number->EditCustomAttributes = "";
            $istanza->Phone_Number->EditValue = ew_HtmlEncode($istanza->Phone_Number->AdvancedSearch->SearchValue);
            $istanza->Phone_Number->PlaceHolder = ew_RemoveHtml($istanza->Phone_Number->FldCaption());
            $istanza->Phone_Number->EditAttrs["class"] = "form-control";
            $istanza->Phone_Number->EditCustomAttributes = "";
            $istanza->Phone_Number->EditValue2 = ew_HtmlEncode($istanza->Phone_Number->AdvancedSearch->SearchValue2);
            $istanza->Phone_Number->PlaceHolder = ew_RemoveHtml($istanza->Phone_Number->FldCaption());

            // Email
            $istanza->_Email->EditAttrs["class"] = "form-control";
            $istanza->_Email->EditCustomAttributes = "";
            $istanza->_Email->EditValue = ew_HtmlEncode($istanza->_Email->AdvancedSearch->SearchValue);
            $istanza->_Email->PlaceHolder = ew_RemoveHtml($istanza->_Email->FldCaption());
            $istanza->_Email->EditAttrs["class"] = "form-control";
            $istanza->_Email->EditCustomAttributes = "";
            $istanza->_Email->EditValue2 = ew_HtmlEncode($istanza->_Email->AdvancedSearch->SearchValue2);
            $istanza->_Email->PlaceHolder = ew_RemoveHtml($istanza->_Email->FldCaption());

            // Mobile_Number
            $istanza->Mobile_Number->EditAttrs["class"] = "form-control";
            $istanza->Mobile_Number->EditCustomAttributes = "";
            $istanza->Mobile_Number->EditValue = ew_HtmlEncode($istanza->Mobile_Number->AdvancedSearch->SearchValue);
            $istanza->Mobile_Number->PlaceHolder = ew_RemoveHtml($istanza->Mobile_Number->FldCaption());
            $istanza->Mobile_Number->EditAttrs["class"] = "form-control";
            $istanza->Mobile_Number->EditCustomAttributes = "";
            $istanza->Mobile_Number->EditValue2 = ew_HtmlEncode($istanza->Mobile_Number->AdvancedSearch->SearchValue2);
            $istanza->Mobile_Number->PlaceHolder = ew_RemoveHtml($istanza->Mobile_Number->FldCaption());

            // Notes
            $istanza->Notes->EditAttrs["class"] = "form-control";
            $istanza->Notes->EditCustomAttributes = "";
            $istanza->Notes->EditValue = ew_HtmlEncode($istanza->Notes->AdvancedSearch->SearchValue);
            $istanza->Notes->PlaceHolder = ew_RemoveHtml($istanza->Notes->FldCaption());
            $istanza->Notes->EditAttrs["class"] = "form-control";
            $istanza->Notes->EditCustomAttributes = "";
            $istanza->Notes->EditValue2 = ew_HtmlEncode($istanza->Notes->AdvancedSearch->SearchValue2);
            $istanza->Notes->PlaceHolder = ew_RemoveHtml($istanza->Notes->FldCaption());

            // Balance
            $istanza->Balance->EditAttrs["class"] = "form-control";
            $istanza->Balance->EditCustomAttributes = "";
            $istanza->Balance->EditValue = ew_HtmlEncode($istanza->Balance->AdvancedSearch->SearchValue);
            $istanza->Balance->PlaceHolder = ew_RemoveHtml($istanza->Balance->FldCaption());
            $istanza->Balance->EditAttrs["class"] = "form-control";
            $istanza->Balance->EditCustomAttributes = "";
            $istanza->Balance->EditValue2 = ew_HtmlEncode($istanza->Balance->AdvancedSearch->SearchValue2);
            $istanza->Balance->PlaceHolder = ew_RemoveHtml($istanza->Balance->FldCaption());

            // Date_Added
            $istanza->Date_Added->EditAttrs["class"] = "form-control";
            $istanza->Date_Added->EditCustomAttributes = "";
            $istanza->Date_Added->EditValue = ew_HtmlEncode(ew_UnFormatDateTime($istanza->Date_Added->AdvancedSearch->SearchValue, 0));
            $istanza->Date_Added->PlaceHolder = ew_RemoveHtml($istanza->Date_Added->FldCaption());
            $istanza->Date_Added->EditAttrs["class"] = "form-control";
            $istanza->Date_Added->EditCustomAttributes = "";
            $istanza->Date_Added->EditValue2 = ew_HtmlEncode(ew_UnFormatDateTime($istanza->Date_Added->AdvancedSearch->SearchValue2, 0));
            $istanza->Date_Added->PlaceHolder = ew_RemoveHtml($istanza->Date_Added->FldCaption());

            // Added_By
            $istanza->Added_By->EditAttrs["class"] = "form-control";
            $istanza->Added_By->EditCustomAttributes = "";
            $istanza->Added_By->EditValue = ew_HtmlEncode($istanza->Added_By->AdvancedSearch->SearchValue);
            $istanza->Added_By->PlaceHolder = ew_RemoveHtml($istanza->Added_By->FldCaption());
            $istanza->Added_By->EditAttrs["class"] = "form-control";
            $istanza->Added_By->EditCustomAttributes = "";
            $istanza->Added_By->EditValue2 = ew_HtmlEncode($istanza->Added_By->AdvancedSearch->SearchValue2);
            $istanza->Added_By->PlaceHolder = ew_RemoveHtml($istanza->Added_By->FldCaption());

            // Date_Updated
            $istanza->Date_Updated->EditAttrs["class"] = "form-control";
            $istanza->Date_Updated->EditCustomAttributes = "";
            $istanza->Date_Updated->EditValue = ew_HtmlEncode(ew_UnFormatDateTime($istanza->Date_Updated->AdvancedSearch->SearchValue, 0));
            $istanza->Date_Updated->PlaceHolder = ew_RemoveHtml($istanza->Date_Updated->FldCaption());
            $istanza->Date_Updated->EditAttrs["class"] = "form-control";
            $istanza->Date_Updated->EditCustomAttributes = "";
            $istanza->Date_Updated->EditValue2 = ew_HtmlEncode(ew_UnFormatDateTime($istanza->Date_Updated->AdvancedSearch->SearchValue2, 0));
            $istanza->Date_Updated->PlaceHolder = ew_RemoveHtml($istanza->Date_Updated->FldCaption());

            // Updated_By
            $istanza->Updated_By->EditAttrs["class"] = "form-control";
            $istanza->Updated_By->EditCustomAttributes = "";
            $istanza->Updated_By->EditValue = ew_HtmlEncode($istanza->Updated_By->AdvancedSearch->SearchValue);
            $istanza->Updated_By->PlaceHolder = ew_RemoveHtml($istanza->Updated_By->FldCaption());
            $istanza->Updated_By->EditAttrs["class"] = "form-control";
            $istanza->Updated_By->EditCustomAttributes = "";
            $istanza->Updated_By->EditValue2 = ew_HtmlEncode($istanza->Updated_By->AdvancedSearch->SearchValue2);
            $istanza->Updated_By->PlaceHolder = ew_RemoveHtml($istanza->Updated_By->FldCaption());
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