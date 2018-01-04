<?php
class function_1
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
}
?>