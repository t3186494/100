<?php
class page_main{
    function PageMain1($istanza){
        global $objForm, $Language, $gsFormError, $gsSearchError, $Security;

        // Search filters
        $sSrchAdvanced = ""; // Advanced search filter
        $sSrchBasic = ""; // Basic search filter
        $sFilter = "";

        // Get command
        $istanza->Command = strtolower(@$_GET["cmd"]);
        if ($istanza->IsPageRequest()) { // Validate request

            // Process list action first
            if ($istanza->ProcessListAction()) // Ajax request
                $istanza->Page_Terminate();

            // Set up records per page
            $istanza->SetUpDisplayRecs();

            // Handle reset command
            $istanza->ResetCmd();

            // Set up Breadcrumb
            if ($istanza->Export == "")
                $istanza->SetupBreadcrumb();

            // Hide list options
            if ($istanza->Export <> "") {
                $istanza->ListOptions->HideAllOptions(array("sequence"));
                $istanza->ListOptions->UseDropDownButton = FALSE; // Disable drop down button
                $istanza->ListOptions->UseButtonGroup = FALSE; // Disable button group
            } elseif ($istanza->CurrentAction == "gridadd" || $istanza->CurrentAction == "gridedit") {
                $istanza->ListOptions->HideAllOptions();
                $istanza->ListOptions->UseDropDownButton = FALSE; // Disable drop down button
                $istanza->ListOptions->UseButtonGroup = FALSE; // Disable button group
            }

            // Hide options
            if ($istanza->Export <> "" || $istanza->CurrentAction <> "") {
                $istanza->ExportOptions->HideAllOptions();
                $istanza->FilterOptions->HideAllOptions();
            }

            // Hide other options
            if ($istanza->Export <> "") {
                foreach ($istanza->OtherOptions as &$option)
                    $option->HideAllOptions();
            }

            // Get default search criteria
            ew_AddFilter($istanza->DefaultSearchWhere, $istanza->BasicSearchWhere(TRUE));
            ew_AddFilter($istanza->DefaultSearchWhere, $istanza->AdvancedSearchWhere(TRUE));

            // Get basic search values
            $istanza->LoadBasicSearchValues();

            // Get and validate search values for advanced search
            $istanza->LoadSearchValues(); // Get search values

            // Restore filter list
            $istanza->RestoreFilterList();
            if (!$istanza->ValidateSearch())
                $istanza->setFailureMessage($gsSearchError);

            // Restore search parms from Session if not searching / reset / export
            if (($istanza->Export <> "" || $istanza->Command <> "search" && $istanza->Command <> "reset" && $istanza->Command <> "resetall") && $istanza->CheckSearchParms())
                $istanza->RestoreSearchParms();

            // Call Recordset SearchValidated event
            $istanza->Recordset_SearchValidated();

            // Set up sorting order
            $istanza->SetUpSortOrder();

            // Get basic search criteria
            if ($gsSearchError == "")
                $sSrchBasic = $istanza->BasicSearchWhere();

            // Get search criteria for advanced search
            if ($gsSearchError == "")
                $sSrchAdvanced = $istanza->AdvancedSearchWhere();
        }

        // Restore display records
        if ($istanza->getRecordsPerPage() <> "") {
            $istanza->DisplayRecs = $istanza->getRecordsPerPage(); // Restore from Session
        } else {

            // Begin of modification Customize Navigation/Pager Panel, by Masino Sinaga, May 2, 2012
            $istanza->DisplayRecs = MS_TABLE_RECPERPAGE_VALUE; // Load default

            // End of modification Customize Navigation/Pager Panel, by Masino Sinaga, May 2, 2012
        }

        // Load Sorting Order
        $istanza->LoadSortOrder();

        // Load search default if no existing search criteria
        if (!$istanza->CheckSearchParms()) {

            // Load basic search from default
            $istanza->BasicSearch->LoadDefault();
            if ($istanza->BasicSearch->Keyword != "")
                $sSrchBasic = $istanza->BasicSearchWhere();

            // Load advanced search from default
            if ($istanza->LoadAdvancedSearchDefault()) {
                $sSrchAdvanced = $istanza->AdvancedSearchWhere();
            }
        }

        // Build search criteria
        ew_AddFilter($istanza->SearchWhere, $sSrchAdvanced);
        ew_AddFilter($istanza->SearchWhere, $sSrchBasic);

        // Call Recordset_Searching event
        $istanza->Recordset_Searching($istanza->SearchWhere);

        // Save search criteria
        if ($istanza->Command == "search" && !$istanza->RestoreSearch) {
            $istanza->setSearchWhere($istanza->SearchWhere); // Save to Session
            $istanza->StartRec = 1; // Reset start record counter
            $istanza->setStartRecordNumber($istanza->StartRec);
        } else {
            $istanza->SearchWhere = $istanza->getSearchWhere();
        }

        // Build filter
        $sFilter = "";
        if (!$Security->CanList())
            $sFilter = "(0=1)"; // Filter all records
        ew_AddFilter($sFilter, $istanza->DbDetailFilter);
        ew_AddFilter($sFilter, $istanza->SearchWhere);

        // Set up filter in session
        $istanza->setSessionWhere($sFilter);
        $istanza->CurrentFilter = "";

        // Begin of mofidication Flexibility of Export Records Options, by Masino Sinaga, May 14, 2012
        if ((MS_EXPORT_RECORD_OPTIONS=="selectedrecords") && (CurrentPageID() == "list")) {

            // Export selected records
            if ($istanza->Export <> "")
                $istanza->CurrentFilter = $istanza->BuildExportSelectedFilter();
        }

        // End of mofidication Flexibility of Export Records Options, by Masino Sinaga, May 14, 2012
        // Export data only
        // Begin of modification Printer Friendly always does not use stylesheet, by Masino Sinaga, October 8, 2013 (added "print" in array)

        if ($istanza->CustomExport == "" && in_array($istanza->Export, array("html","print","word","excel","xml","csv","email","pdf"))) {

            // End of modification Printer Friendly always does not use stylesheet, by Masino Sinaga, October 8, 2013
            $istanza->ExportData();
            $istanza->Page_Terminate(); // Terminate response
            exit();
        }

        // Load record count first
        if (!$istanza->IsAddOrEdit()) { // begin of v11.0.4
            $bSelectLimit = $istanza->UseSelectLimit;
            if ($bSelectLimit) {
                $istanza->TotalRecs = $istanza->SelectRecordCount();
            } else {
                if ($istanza->Recordset = $istanza->LoadRecordset())
                    $istanza->TotalRecs = $istanza->Recordset->RecordCount();
            }
        } // end of v11.0.4

        // Search options
        $istanza->SetupSearchOptions();
    }
}
?>