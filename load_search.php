<?php
class load_search{
    function LoadSearchValues1($istanza) {
        global $objForm;

        // Load search values
        // Customer_ID

        $istanza->Customer_ID->AdvancedSearch->SearchValue = ew_StripSlashes($objForm->GetValue("x_Customer_ID"));
        $istanza->Customer_ID->AdvancedSearch->SearchOperator = $objForm->GetValue("z_Customer_ID");
        $istanza->Customer_ID->AdvancedSearch->SearchCondition = $objForm->GetValue("v_Customer_ID");
        $istanza->Customer_ID->AdvancedSearch->SearchValue2 = ew_StripSlashes($objForm->GetValue("y_Customer_ID"));
        $istanza->Customer_ID->AdvancedSearch->SearchOperator2 = $objForm->GetValue("w_Customer_ID");

        // Customer_Number
        $istanza->Customer_Number->AdvancedSearch->SearchValue = ew_StripSlashes($objForm->GetValue("x_Customer_Number"));
        $istanza->Customer_Number->AdvancedSearch->SearchOperator = $objForm->GetValue("z_Customer_Number");
        $istanza->Customer_Number->AdvancedSearch->SearchCondition = $objForm->GetValue("v_Customer_Number");
        $istanza->Customer_Number->AdvancedSearch->SearchValue2 = ew_StripSlashes($objForm->GetValue("y_Customer_Number"));
        $istanza->Customer_Number->AdvancedSearch->SearchOperator2 = $objForm->GetValue("w_Customer_Number");

        // Customer_Name
        $istanza->Customer_Name->AdvancedSearch->SearchValue = ew_StripSlashes($objForm->GetValue("x_Customer_Name"));
        $istanza->Customer_Name->AdvancedSearch->SearchOperator = $objForm->GetValue("z_Customer_Name");
        $istanza->Customer_Name->AdvancedSearch->SearchCondition = $objForm->GetValue("v_Customer_Name");
        $istanza->Customer_Name->AdvancedSearch->SearchValue2 = ew_StripSlashes($objForm->GetValue("y_Customer_Name"));
        $istanza->Customer_Name->AdvancedSearch->SearchOperator2 = $objForm->GetValue("w_Customer_Name");

        // Address
        $istanza->Address->AdvancedSearch->SearchValue = ew_StripSlashes($objForm->GetValue("x_Address"));
        $istanza->Address->AdvancedSearch->SearchOperator = $objForm->GetValue("z_Address");
        $istanza->Address->AdvancedSearch->SearchCondition = $objForm->GetValue("v_Address");
        $istanza->Address->AdvancedSearch->SearchValue2 = ew_StripSlashes($objForm->GetValue("y_Address"));
        $istanza->Address->AdvancedSearch->SearchOperator2 = $objForm->GetValue("w_Address");

        // City
        $istanza->City->AdvancedSearch->SearchValue = ew_StripSlashes($objForm->GetValue("x_City"));
        $istanza->City->AdvancedSearch->SearchOperator = $objForm->GetValue("z_City");
        $istanza->City->AdvancedSearch->SearchCondition = $objForm->GetValue("v_City");
        $istanza->City->AdvancedSearch->SearchValue2 = ew_StripSlashes($objForm->GetValue("y_City"));
        $istanza->City->AdvancedSearch->SearchOperator2 = $objForm->GetValue("w_City");

        // Country
        $istanza->Country->AdvancedSearch->SearchValue = ew_StripSlashes($objForm->GetValue("x_Country"));
        $istanza->Country->AdvancedSearch->SearchOperator = $objForm->GetValue("z_Country");
        $istanza->Country->AdvancedSearch->SearchCondition = $objForm->GetValue("v_Country");
        $istanza->Country->AdvancedSearch->SearchValue2 = ew_StripSlashes($objForm->GetValue("y_Country"));
        $istanza->Country->AdvancedSearch->SearchOperator2 = $objForm->GetValue("w_Country");

        // Contact_Person
        $istanza->Contact_Person->AdvancedSearch->SearchValue = ew_StripSlashes($objForm->GetValue("x_Contact_Person"));
        $istanza->Contact_Person->AdvancedSearch->SearchOperator = $objForm->GetValue("z_Contact_Person");
        $istanza->Contact_Person->AdvancedSearch->SearchCondition = $objForm->GetValue("v_Contact_Person");
        $istanza->Contact_Person->AdvancedSearch->SearchValue2 = ew_StripSlashes($objForm->GetValue("y_Contact_Person"));
        $istanza->Contact_Person->AdvancedSearch->SearchOperator2 = $objForm->GetValue("w_Contact_Person");

        // Phone_Number
        $istanza->Phone_Number->AdvancedSearch->SearchValue = ew_StripSlashes($objForm->GetValue("x_Phone_Number"));
        $istanza->Phone_Number->AdvancedSearch->SearchOperator = $objForm->GetValue("z_Phone_Number");
        $istanza->Phone_Number->AdvancedSearch->SearchCondition = $objForm->GetValue("v_Phone_Number");
        $istanza->Phone_Number->AdvancedSearch->SearchValue2 = ew_StripSlashes($objForm->GetValue("y_Phone_Number"));
        $istanza->Phone_Number->AdvancedSearch->SearchOperator2 = $objForm->GetValue("w_Phone_Number");

        // Email
        $istanza->_Email->AdvancedSearch->SearchValue = ew_StripSlashes($objForm->GetValue("x__Email"));
        $istanza->_Email->AdvancedSearch->SearchOperator = $objForm->GetValue("z__Email");
        $istanza->_Email->AdvancedSearch->SearchCondition = $objForm->GetValue("v__Email");
        $istanza->_Email->AdvancedSearch->SearchValue2 = ew_StripSlashes($objForm->GetValue("y__Email"));
        $istanza->_Email->AdvancedSearch->SearchOperator2 = $objForm->GetValue("w__Email");

        // Mobile_Number
        $istanza->Mobile_Number->AdvancedSearch->SearchValue = ew_StripSlashes($objForm->GetValue("x_Mobile_Number"));
        $istanza->Mobile_Number->AdvancedSearch->SearchOperator = $objForm->GetValue("z_Mobile_Number");
        $istanza->Mobile_Number->AdvancedSearch->SearchCondition = $objForm->GetValue("v_Mobile_Number");
        $istanza->Mobile_Number->AdvancedSearch->SearchValue2 = ew_StripSlashes($objForm->GetValue("y_Mobile_Number"));
        $istanza->Mobile_Number->AdvancedSearch->SearchOperator2 = $objForm->GetValue("w_Mobile_Number");

        // Notes
        $istanza->Notes->AdvancedSearch->SearchValue = ew_StripSlashes($objForm->GetValue("x_Notes"));
        $istanza->Notes->AdvancedSearch->SearchOperator = $objForm->GetValue("z_Notes");
        $istanza->Notes->AdvancedSearch->SearchCondition = $objForm->GetValue("v_Notes");
        $istanza->Notes->AdvancedSearch->SearchValue2 = ew_StripSlashes($objForm->GetValue("y_Notes"));
        $istanza->Notes->AdvancedSearch->SearchOperator2 = $objForm->GetValue("w_Notes");

        // Balance
        $istanza->Balance->AdvancedSearch->SearchValue = ew_StripSlashes($objForm->GetValue("x_Balance"));
        $istanza->Balance->AdvancedSearch->SearchOperator = $objForm->GetValue("z_Balance");
        $istanza->Balance->AdvancedSearch->SearchCondition = $objForm->GetValue("v_Balance");
        $istanza->Balance->AdvancedSearch->SearchValue2 = ew_StripSlashes($objForm->GetValue("y_Balance"));
        $istanza->Balance->AdvancedSearch->SearchOperator2 = $objForm->GetValue("w_Balance");

        // Date_Added
        $istanza->Date_Added->AdvancedSearch->SearchValue = ew_StripSlashes($objForm->GetValue("x_Date_Added"));
        $istanza->Date_Added->AdvancedSearch->SearchOperator = $objForm->GetValue("z_Date_Added");
        $istanza->Date_Added->AdvancedSearch->SearchCondition = $objForm->GetValue("v_Date_Added");
        $istanza->Date_Added->AdvancedSearch->SearchValue2 = ew_StripSlashes($objForm->GetValue("y_Date_Added"));
        $istanza->Date_Added->AdvancedSearch->SearchOperator2 = $objForm->GetValue("w_Date_Added");

        // Added_By
        $istanza->Added_By->AdvancedSearch->SearchValue = ew_StripSlashes($objForm->GetValue("x_Added_By"));
        $istanza->Added_By->AdvancedSearch->SearchOperator = $objForm->GetValue("z_Added_By");
        $istanza->Added_By->AdvancedSearch->SearchCondition = $objForm->GetValue("v_Added_By");
        $istanza->Added_By->AdvancedSearch->SearchValue2 = ew_StripSlashes($objForm->GetValue("y_Added_By"));
        $istanza->Added_By->AdvancedSearch->SearchOperator2 = $objForm->GetValue("w_Added_By");

        // Date_Updated
        $istanza->Date_Updated->AdvancedSearch->SearchValue = ew_StripSlashes($objForm->GetValue("x_Date_Updated"));
        $istanza->Date_Updated->AdvancedSearch->SearchOperator = $objForm->GetValue("z_Date_Updated");
        $istanza->Date_Updated->AdvancedSearch->SearchCondition = $objForm->GetValue("v_Date_Updated");
        $istanza->Date_Updated->AdvancedSearch->SearchValue2 = ew_StripSlashes($objForm->GetValue("y_Date_Updated"));
        $istanza->Date_Updated->AdvancedSearch->SearchOperator2 = $objForm->GetValue("w_Date_Updated");

        // Updated_By
        $istanza->Updated_By->AdvancedSearch->SearchValue = ew_StripSlashes($objForm->GetValue("x_Updated_By"));
        $istanza->Updated_By->AdvancedSearch->SearchOperator = $objForm->GetValue("z_Updated_By");
        $istanza->Updated_By->AdvancedSearch->SearchCondition = $objForm->GetValue("v_Updated_By");
        $istanza->Updated_By->AdvancedSearch->SearchValue2 = ew_StripSlashes($objForm->GetValue("y_Updated_By"));
        $istanza->Updated_By->AdvancedSearch->SearchOperator2 = $objForm->GetValue("w_Updated_By");
    }
}
?>