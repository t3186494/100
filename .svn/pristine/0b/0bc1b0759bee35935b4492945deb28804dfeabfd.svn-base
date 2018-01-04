<?php
class setup_option
{
    function SetupOtherOption1($istanza)
    {
        global $Language, $Security;
        $options = &$istanza->OtherOptions;
        $option = $options["addedit"];

        // Add
        $item = &$option->Add("add");
        $item->Body = "<a class=\"ewAddEdit ewAdd\" title=\"" . ew_HtmlTitle($Language->Phrase("AddLink")) . "\" data-caption=\"" . ew_HtmlTitle($Language->Phrase("AddLink")) . "\" href=\"" . ew_HtmlEncode($istanza->AddUrl) . "\">" . $Language->Phrase("AddLink") . "</a>";
        $item->Visible = ($istanza->AddUrl <> "" && $Security->CanAdd());
        $option = $options["detail"];
        $DetailTableLink = "";
        $item = &$option->Add("detailadd_a_sales");
        $caption = $Language->Phrase("Add") . "&nbsp;" . $istanza->TableCaption() . "/" . $GLOBALS["a_sales"]->TableCaption();
        $item->Body = "<a class=\"ewDetailAddGroup ewDetailAdd\" title=\"" . ew_HtmlTitle($caption) . "\" data-caption=\"" . ew_HtmlTitle($caption) . "\" href=\"" . ew_HtmlEncode($istanza->GetAddUrl() . "?" . EW_TABLE_SHOW_DETAIL . "=a_sales") . "\">" . $caption . "</a>";
        $item->Visible = ($GLOBALS["a_sales"]->DetailAdd && $Security->AllowAdd(CurrentProjectID() . 'a_sales') && $Security->CanAdd());
        if ($item->Visible) {
            if ($DetailTableLink <> "") $DetailTableLink .= ",";
            $DetailTableLink .= "a_sales";
        }

// Add multiple details
        if ($istanza->ShowMultipleDetails) {
            $item = &$option->Add("detailsadd");
            $item->Body = "<a class=\"ewDetailAddGroup ewDetailAdd\" title=\"" . ew_HtmlTitle($Language->Phrase("AddMasterDetailLink")) . "\" data-caption=\"" . ew_HtmlTitle($Language->Phrase("AddMasterDetailLink")) . "\" href=\"" . ew_HtmlEncode($istanza->GetAddUrl() . "?" . EW_TABLE_SHOW_DETAIL . "=" . $DetailTableLink) . "\">" . $Language->Phrase("AddMasterDetailLink") . "</a>";
            $item->Visible = ($DetailTableLink <> "" && $Security->CanAdd());

            // Hide single master/detail items
            $ar = explode(",", $DetailTableLink);
            $cnt = count($ar);
            for ($i = 0; $i < $cnt; $i++) {
                if ($item = &$option->GetItem("detailadd_" . $ar[$i]))
                    $item->Visible = FALSE;
            }
        }
        $option = $options["action"];

// Add multi delete
        $item = &$option->Add("multidelete");
        $item->Body = "<a class=\"ewAction ewMultiDelete\" title=\"" . ew_HtmlTitle($Language->Phrase("DeleteSelectedLink")) . "\" data-caption=\"" . ew_HtmlTitle($Language->Phrase("DeleteSelectedLink")) . "\" href=\"\" onclick=\"ew_SubmitAction(event,{f:document.fa_customerslist,url:'" . $istanza->MultiDeleteUrl . "',msg:ewLanguage.Phrase('DeleteConfirmMsg')});return false;\">" . $Language->Phrase("DeleteSelectedLink") . "</a>";
        $item->Visible = ($Security->CanDelete());

// Add multi update
        $item = &$option->Add("multiupdate");
        $item->Body = "<a class=\"ewAction ewMultiUpdate\" title=\"" . ew_HtmlTitle($Language->Phrase("UpdateSelectedLink")) . "\" data-caption=\"" . ew_HtmlTitle($Language->Phrase("UpdateSelectedLink")) . "\" href=\"\" onclick=\"ew_SubmitAction(event,{f:document.fa_customerslist,url:'" . $istanza->MultiUpdateUrl . "'});return false;\">" . $Language->Phrase("UpdateSelectedLink") . "</a>";
        $item->Visible = ($Security->CanEdit());

// Set up options default
        foreach ($options as &$option) {
            $option->UseImageAndText = TRUE;
            $option->UseDropDownButton = TRUE;
            $option->UseButtonGroup = TRUE;
            $option->ButtonClass = "btn-sm"; // Class for button group
            $item = &$option->Add($option->GroupOptionName);
            $item->Body = "";
            $item->Visible = FALSE;
        }
        $options["addedit"]->DropDownButtonPhrase = $Language->Phrase("ButtonAddEdit");
        $options["detail"]->DropDownButtonPhrase = $Language->Phrase("ButtonDetails");
        $options["action"]->DropDownButtonPhrase = $Language->Phrase("ButtonActions");

// Filter button
        $item = &$istanza->FilterOptions->Add("savecurrentfilter");
        $item->Body = "<a class=\"ewSaveFilter\" data-form=\"fa_customerslistsrch\" href=\"#\">" . $Language->Phrase("SaveCurrentFilter") . "</a>";
        $item->Visible = TRUE;
        $item = &$istanza->FilterOptions->Add("deletefilter");
        $item->Body = "<a class=\"ewDeleteFilter\" data-form=\"fa_customerslistsrch\" href=\"#\">" . $Language->Phrase("DeleteFilter") . "</a>";
        $item->Visible = TRUE;
        $istanza->FilterOptions->UseDropDownButton = TRUE;
        $istanza->FilterOptions->UseButtonGroup = !$istanza->FilterOptions->UseDropDownButton;
        $istanza->FilterOptions->DropDownButtonPhrase = $Language->Phrase("Filters");

// Add group option item
        $item = &$istanza->FilterOptions->Add($istanza->FilterOptions->GroupOptionName);
        $item->Body = "";
        $item->Visible = FALSE;
    }
}

?>