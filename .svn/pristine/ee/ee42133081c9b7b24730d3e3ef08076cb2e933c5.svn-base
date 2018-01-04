<?php
class export_email{
    function ExportEmail1($EmailContent, $istanza) {
        global $gTmpImages, $Language;
        $sSender = @$_POST["sender"];
        $sRecipient = @$_POST["recipient"];
        $sCc = @$_POST["cc"];
        $sBcc = @$_POST["bcc"];
        $sContentType = @$_POST["contenttype"];

        // Subject
        $sSubject = ew_StripSlashes(@$_POST["subject"]);
        $sEmailSubject = $sSubject;

        // Message
        $sContent = ew_StripSlashes(@$_POST["message"]);
        $sEmailMessage = $sContent;

        // Check sender
        if ($sSender == "") {
            return "<p class=\"text-danger\">" . $Language->Phrase("EnterSenderEmail") . "</p>";
        }
        if (!ew_CheckEmail($sSender)) {
            return "<p class=\"text-danger\">" . $Language->Phrase("EnterProperSenderEmail") . "</p>";
        }

        // Check recipient
        if (!ew_CheckEmailList($sRecipient, EW_MAX_EMAIL_RECIPIENT)) {
            return "<p class=\"text-danger\">" . $Language->Phrase("EnterProperRecipientEmail") . "</p>";
        }

        // Check cc
        if (!ew_CheckEmailList($sCc, EW_MAX_EMAIL_RECIPIENT)) {
            return "<p class=\"text-danger\">" . $Language->Phrase("EnterProperCcEmail") . "</p>";
        }

        // Check bcc
        if (!ew_CheckEmailList($sBcc, EW_MAX_EMAIL_RECIPIENT)) {
            return "<p class=\"text-danger\">" . $Language->Phrase("EnterProperBccEmail") . "</p>";
        }

        // Check email sent count
        if (!isset($_SESSION[EW_EXPORT_EMAIL_COUNTER]))
            $_SESSION[EW_EXPORT_EMAIL_COUNTER] = 0;
        if (intval($_SESSION[EW_EXPORT_EMAIL_COUNTER]) > EW_MAX_EMAIL_SENT_COUNT) {
            return "<p class=\"text-danger\">" . $Language->Phrase("ExceedMaxEmailExport") . "</p>";
        }

        // Send email
        $Email = new cEmail();
        $Email->Sender = $sSender; // Sender
        $Email->Recipient = $sRecipient; // Recipient
        $Email->Cc = $sCc; // Cc
        $Email->Bcc = $sBcc; // Bcc
        $Email->Subject = $sEmailSubject; // Subject
        $Email->Format = ($sContentType == "url") ? "text" : "html";
        if ($sEmailMessage <> "") {
            $sEmailMessage = ew_RemoveXSS($sEmailMessage);
            $sEmailMessage .= ($sContentType == "url") ? "\r\n\r\n" : "<br><br>";
        }
        if ($sContentType == "url") {
            $sUrl = ew_ConvertFullUrl(ew_CurrentPage() . "?" . $istanza->ExportQueryString());
            $sEmailMessage .= $sUrl; // Send URL only
        } else {
            foreach ($gTmpImages as $tmpimage)
                $Email->AddEmbeddedImage($tmpimage);
            $sEmailMessage .= ew_CleanEmailContent($EmailContent); // Send HTML
        }
        $Email->Content = $sEmailMessage; // Content
        $EventArgs = array();

        // Begin of changes, since v11.0.6
        if ($istanza->Recordset) {
            $istanza->RecCnt = $istanza->StartRec - 1;
            $istanza->Recordset->MoveFirst();
            if ($istanza->StartRec > 1)
                $istanza->Recordset->Move($istanza->StartRec - 1);
            $EventArgs["rs"] = &$istanza->Recordset;
        }

        // End of changes, since v11.0.6
        $bEmailSent = FALSE;
        if ($istanza->Email_Sending($Email, $EventArgs))
            $bEmailSent = $Email->Send();

        // Check email sent status
        if ($bEmailSent) {

            // Update email sent count
            $_SESSION[EW_EXPORT_EMAIL_COUNTER]++;

            // Sent email success
            return "<div class=\"alert alert-success ewSuccess\">" . $Language->Phrase("SendEmailSuccess") . "</div>"; // Set up success message
        } else {

            // Sent email failure
            return "<div class=\"alert alert-danger ewError\">" . $Email->SendErrDescription . "</div>";
        }
    }
}
?>