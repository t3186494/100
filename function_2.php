<?php
class function_2{
    // Show Page Header
    function ShowPageHeader() {
        $sHeader = $this->PageHeader;
        $this->Page_DataRendering($sHeader);
        if ($sHeader <> "") { // Header exists, display
            $stg="<p>" . $sHeader . "</p>";
            echo $stg;
        }
    }

    // Show Page Footer
    function ShowPageFooter() {
        $sFooter = $this->PageFooter;
        $this->Page_DataRendered($sFooter);
        if ($sFooter <> "") { // Footer exists, display
            $stg= "<p>" . $sFooter . "</p>";
            echo $stg;

        }
    }

    // Validate page request
    function IsPageRequest() {
        global $objForm;
        if ($this->UseTokenInUrl) {
            if ($objForm)
                return ($this->TableVar == $objForm->GetValue("t"));
            if ($_GET["t"] <> "")
                return ($this->TableVar == $_GET["t"]);
        } else {
            return TRUE;
        }
    }

    // Valid Post
    function ValidPost() {
        if (!$this->CheckToken || !ew_IsHttpPost())
            return TRUE;
        if (!isset($_POST[EW_TOKEN_NAME]))
            return FALSE;
        $fn = $this->CheckTokenFn;
        if (is_callable($fn))
            return $fn($_POST[EW_TOKEN_NAME], $this->TokenTimeout);
        return FALSE;
    }

    // Create Token
    function CreateToken() {
        global $gsToken;
        if ($this->CheckToken) {
            $fn = $this->CreateTokenFn;
            if ($this->Token == "" && is_callable($fn)) // Create token
                $this->Token = $fn();
            $gsToken = $this->Token; // Save to global variable
        }
    }
}
?>