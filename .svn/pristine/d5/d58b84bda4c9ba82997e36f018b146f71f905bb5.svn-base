<?php
class other_option{
    function SetupOtherOptions1($istanza) {
        global $Language, $Security;
        $options = &$istanza->OtherOptions;
        $option = &$options["action"];

        // Add
        $item = &$option->Add("add");
        $item->Body = "<a class=\"ewAction ewAdd\" title=\"" . ew_HtmlTitle($Language->Phrase("ViewPageAddLink")) . "\" data-caption=\"" . ew_HtmlTitle($Language->Phrase("ViewPageAddLink")) . "\" href=\"" . ew_HtmlEncode($istanza->AddUrl) . "\">" . $Language->Phrase("ViewPageAddLink") . "</a>";
        $item->Visible = ($istanza->AddUrl <> "" && $Security->CanAdd());

        // Edit
        $item = &$option->Add("edit");
        $item->Body = "<a class=\"ewAction ewEdit\" title=\"" . ew_HtmlTitle($Language->Phrase("ViewPageEditLink")) . "\" data-caption=\"" . ew_HtmlTitle($Language->Phrase("ViewPageEditLink")) . "\" href=\"" . ew_HtmlEncode($istanza->EditUrl) . "\">" . $Language->Phrase("ViewPageEditLink") . "</a>";
        $item->Visible = ($istanza->EditUrl <> "" && $Security->CanEdit());

        // Copy
        $item = &$option->Add("copy");
        $item->Body = "<a class=\"ewAction ewCopy\" title=\"" . ew_HtmlTitle($Language->Phrase("ViewPageCopyLink")) . "\" data-caption=\"" . ew_HtmlTitle($Language->Phrase("ViewPageCopyLink")) . "\" href=\"" . ew_HtmlEncode($istanza->CopyUrl) . "\">" . $Language->Phrase("ViewPageCopyLink") . "</a>";
        $item->Visible = ($istanza->CopyUrl <> "" && $Security->CanAdd());

        // Delete
        $item = &$option->Add("delete");
        $item->Body = "<a onclick=\"return ew_ConfirmDelete(this);\" class=\"ewAction ewDelete\" title=\"" . ew_HtmlTitle($Language->Phrase("ViewPageDeleteLink")) . "\" data-caption=\"" . ew_HtmlTitle($Language->Phrase("ViewPageDeleteLink")) . "\" href=\"" . ew_HtmlEncode($istanza->DeleteUrl) . "\">" . $Language->Phrase("ViewPageDeleteLink") . "</a>";
        $item->Visible = ($istanza->DeleteUrl <> "" && $Security->CanDelete());
        $option = &$options["detail"];
        $DetailTableLink = "";
        $DetailViewTblVar = "";
        $DetailCopyTblVar = "";
        $DetailEditTblVar = "";

        // "detail_a_sales"
        $item = &$option->Add("detail_a_sales");
        $body = $Language->Phrase("ViewPageDetailLink") . $Language->TablePhrase("a_sales", "TblCaption");

        //$body .= str_replace("%c", $this->a_sales_Count, $Language->Phrase("DetailCount"));
        if ( $istanza->a_sales_Count > 0 && MS_SHOW_DETAILCOUNT_GREATER_THAN_ZERO_ONLY == TRUE ) {
            if (MS_USE_BADGE_FOR_DETAILCOUNT) {
                $body .= str_replace("(%c)", "", $Language->Phrase("DetailCount")); // added by Masino Sinaga, March 15, 2015
                $body .= "&nbsp; <span class='badge'>".$istanza->a_sales_Count."</span>";
            } else {
                $body .= "&nbsp;" . str_replace("%c", $istanza->a_sales_Count, $Language->Phrase("DetailCount"));
            }
        } elseif ( $istanza->a_sales_Count >= 0 && MS_SHOW_DETAILCOUNT_GREATER_THAN_ZERO_ONLY == FALSE ) {
            if (MS_USE_BADGE_FOR_DETAILCOUNT) {
                $body .= str_replace("(%c)", "", $Language->Phrase("DetailCount")); // added by Masino Sinaga, March 15, 2015
                $body .= "&nbsp; <span class='badge'>".$istanza->a_sales_Count."</span>";
            } else {
                $body .= "&nbsp;" . str_replace("%c", $istanza->a_sales_Count, $Language->Phrase("DetailCount"));
            }
        }
        $body = "<a class=\"btn btn-default btn-sm ewRowLink ewDetail\" data-action=\"list\" href=\"" . ew_HtmlEncode("a_saleslist.php?" . EW_TABLE_SHOW_MASTER . "=a_customers&fk_Customer_Number=" . urlencode(strval($istanza->Customer_Number->CurrentValue)) . "") . "\">" . $body . "</a>";
        $links = "";
        if ($GLOBALS["a_sales_grid"] && $GLOBALS["a_sales_grid"]->DetailView && $Security->CanView() && $Security->AllowView(CurrentProjectID() . 'a_sales')) {
            $links .= "<li><a class=\"ewRowLink ewDetailView\" data-action=\"view\" data-caption=\"" . ew_HtmlTitle($Language->Phrase("MasterDetailViewLink")) . "\" href=\"" . ew_HtmlEncode($istanza->GetViewUrl(EW_TABLE_SHOW_DETAIL . "=a_sales")) . "\">" . ew_HtmlImageAndText($Language->Phrase("MasterDetailViewLink")) . "</a></li>";
            if ($DetailViewTblVar <> "") $DetailViewTblVar .= ",";
            $DetailViewTblVar .= "a_sales";
        }
        if ($GLOBALS["a_sales_grid"] && $GLOBALS["a_sales_grid"]->DetailEdit && $Security->CanEdit() && $Security->AllowEdit(CurrentProjectID() . 'a_sales')) {
            $links .= "<li><a class=\"ewRowLink ewDetailEdit\" data-action=\"edit\" data-caption=\"" . ew_HtmlTitle($Language->Phrase("MasterDetailEditLink")) . "\" href=\"" . ew_HtmlEncode($istanza->GetEditUrl(EW_TABLE_SHOW_DETAIL . "=a_sales")) . "\">" . ew_HtmlImageAndText($Language->Phrase("MasterDetailEditLink")) . "</a></li>";
            if ($DetailEditTblVar <> "") $DetailEditTblVar .= ",";
            $DetailEditTblVar .= "a_sales";
        }
        if ($GLOBALS["a_sales_grid"] && $GLOBALS["a_sales_grid"]->DetailAdd && $Security->CanAdd() && $Security->AllowAdd(CurrentProjectID() . 'a_sales')) {
            $links .= "<li><a class=\"ewRowLink ewDetailCopy\" data-action=\"add\" data-caption=\"" . ew_HtmlTitle($Language->Phrase("MasterDetailCopyLink")) . "\" href=\"" . ew_HtmlEncode($istanza->GetCopyUrl(EW_TABLE_SHOW_DETAIL . "=a_sales")) . "\">" . ew_HtmlImageAndText($Language->Phrase("MasterDetailCopyLink")) . "</a></li>";
            if ($DetailCopyTblVar <> "") $DetailCopyTblVar .= ",";
            $DetailCopyTblVar .= "a_sales";
        }
        if ($links <> "") {
            $body .= "<button class=\"dropdown-toggle btn btn-default btn-sm ewDetail\" data-toggle=\"dropdown\"><b class=\"caret\"></b></button>";
            $body .= "<ul class=\"dropdown-menu\">". $links . "</ul>";
        }
        $body = "<div class=\"btn-group\">" . $body . "</div>";
        $item->Body = $body;
        $item->Visible = $Security->AllowList(CurrentProjectID() . 'a_sales');
        if ($item->Visible) {
            if ($DetailTableLink <> "") $DetailTableLink .= ",";
            $DetailTableLink .= "a_sales";
        }
        if ($istanza->ShowMultipleDetails) $item->Visible = FALSE;

        // Multiple details
        if ($istanza->ShowMultipleDetails) {
            $body = $Language->Phrase("MultipleMasterDetails");
            $body = "<div class=\"btn-group\">";
            $links = "";
            if ($DetailViewTblVar <> "") {
                $links .= "<li><a class=\"ewRowLink ewDetailView\" data-action=\"view\" data-caption=\"" . ew_HtmlTitle($Language->Phrase("MasterDetailViewLink")) . "\" href=\"" . ew_HtmlEncode($istanza->GetViewUrl(EW_TABLE_SHOW_DETAIL . "=" . $DetailViewTblVar)) . "\">" . ew_HtmlImageAndText($Language->Phrase("MasterDetailViewLink")) . "</a></li>";
            }
            if ($DetailEditTblVar <> "") {
                $links .= "<li><a class=\"ewRowLink ewDetailEdit\" data-action=\"edit\" data-caption=\"" . ew_HtmlTitle($Language->Phrase("MasterDetailEditLink")) . "\" href=\"" . ew_HtmlEncode($istanza->GetEditUrl(EW_TABLE_SHOW_DETAIL . "=" . $DetailEditTblVar)) . "\">" . ew_HtmlImageAndText($Language->Phrase("MasterDetailEditLink")) . "</a></li>";
            }
            if ($DetailCopyTblVar <> "") {
                $links .= "<li><a class=\"ewRowLink ewDetailCopy\" data-action=\"add\" data-caption=\"" . ew_HtmlTitle($Language->Phrase("MasterDetailCopyLink")) . "\" href=\"" . ew_HtmlEncode($istanza->GetCopyUrl(EW_TABLE_SHOW_DETAIL . "=" . $DetailCopyTblVar)) . "\">" . ew_HtmlImageAndText($Language->Phrase("MasterDetailCopyLink")) . "</a></li>";
            }
            if ($links <> "") {
                $body .= "<button class=\"dropdown-toggle btn btn-default btn-sm ewMasterDetail\" title=\"" . ew_HtmlTitle($Language->Phrase("MultipleMasterDetails")) . "\" data-toggle=\"dropdown\">" . $Language->Phrase("MultipleMasterDetails") . "<b class=\"caret\"></b></button>";
                $body .= "<ul class=\"dropdown-menu ewMenu\">". $links . "</ul>";
            }
            $body .= "</div>";

            // Multiple details
            $oListOpt = &$option->Add("details");
            $oListOpt->Body = $body;
        }

        // Set up detail default
        $option = &$options["detail"];
        $options["detail"]->DropDownButtonPhrase = $Language->Phrase("ButtonDetails");
        $option->UseImageAndText = TRUE;
        $ar = explode(",", $DetailTableLink);
        $cnt = count($ar);
        $option->UseDropDownButton = ($cnt > 1);
        $option->UseButtonGroup = TRUE;
        $item = &$option->Add($option->GroupOptionName);
        $item->Body = "";
        $item->Visible = FALSE;

        // Set up action default
        $option = &$options["action"];
        $option->DropDownButtonPhrase = $Language->Phrase("ButtonActions");
        $option->UseImageAndText = TRUE;
        $option->UseDropDownButton = TRUE;
        $option->UseButtonGroup = TRUE;
        $item = &$option->Add($option->GroupOptionName);
        $item->Body = "";
        $item->Visible = FALSE;
    }
}
?>