<?php
class restoreFilterList{
    function RestoreFilterList1($istanza)
    {
        // Return if not reset filter
        if (@$_POST["cmd"] <> "resetfilter")
            return FALSE;
        $filter = json_decode(ew_StripSlashes(@$_POST["filter"]), TRUE);
        $istanza->Command = "search";

        // Field Customer_ID
        $istanza->Customer_ID->AdvancedSearch->SearchValue = @$filter["x_Customer_ID"];
        $istanza->Customer_ID->AdvancedSearch->SearchOperator = @$filter["z_Customer_ID"];
        $istanza->Customer_ID->AdvancedSearch->SearchCondition = @$filter["v_Customer_ID"];
        $istanza->Customer_ID->AdvancedSearch->SearchValue2 = @$filter["y_Customer_ID"];
        $istanza->Customer_ID->AdvancedSearch->SearchOperator2 = @$filter["w_Customer_ID"];
        $istanza->Customer_ID->AdvancedSearch->Save();

        // Field Customer_Number
        $istanza->Customer_Number->AdvancedSearch->SearchValue = @$filter["x_Customer_Number"];
        $istanza->Customer_Number->AdvancedSearch->SearchOperator = @$filter["z_Customer_Number"];
        $istanza->Customer_Number->AdvancedSearch->SearchCondition = @$filter["v_Customer_Number"];
        $istanza->Customer_Number->AdvancedSearch->SearchValue2 = @$filter["y_Customer_Number"];
        $istanza->Customer_Number->AdvancedSearch->SearchOperator2 = @$filter["w_Customer_Number"];
        $istanza->Customer_Number->AdvancedSearch->Save();

        // Field Customer_Name
        $istanza->Customer_Name->AdvancedSearch->SearchValue = @$filter["x_Customer_Name"];
        $istanza->Customer_Name->AdvancedSearch->SearchOperator = @$filter["z_Customer_Name"];
        $istanza->Customer_Name->AdvancedSearch->SearchCondition = @$filter["v_Customer_Name"];
        $istanza->Customer_Name->AdvancedSearch->SearchValue2 = @$filter["y_Customer_Name"];
        $istanza->Customer_Name->AdvancedSearch->SearchOperator2 = @$filter["w_Customer_Name"];
        $istanza->Customer_Name->AdvancedSearch->Save();

        // Field Address
        $istanza->Address->AdvancedSearch->SearchValue = @$filter["x_Address"];
        $istanza->Address->AdvancedSearch->SearchOperator = @$filter["z_Address"];
        $istanza->Address->AdvancedSearch->SearchCondition = @$filter["v_Address"];
        $istanza->Address->AdvancedSearch->SearchValue2 = @$filter["y_Address"];
        $istanza->Address->AdvancedSearch->SearchOperator2 = @$filter["w_Address"];
        $istanza->Address->AdvancedSearch->Save();

        // Field City
        $istanza->City->AdvancedSearch->SearchValue = @$filter["x_City"];
        $istanza->City->AdvancedSearch->SearchOperator = @$filter["z_City"];
        $istanza->City->AdvancedSearch->SearchCondition = @$filter["v_City"];
        $istanza->City->AdvancedSearch->SearchValue2 = @$filter["y_City"];
        $istanza->City->AdvancedSearch->SearchOperator2 = @$filter["w_City"];
        $istanza->City->AdvancedSearch->Save();

        // Field Country
        $istanza->Country->AdvancedSearch->SearchValue = @$filter["x_Country"];
        $istanza->Country->AdvancedSearch->SearchOperator = @$filter["z_Country"];
        $istanza->Country->AdvancedSearch->SearchCondition = @$filter["v_Country"];
        $istanza->Country->AdvancedSearch->SearchValue2 = @$filter["y_Country"];
        $istanza->Country->AdvancedSearch->SearchOperator2 = @$filter["w_Country"];
        $istanza->Country->AdvancedSearch->Save();

        // Field Contact_Person
        $istanza->Contact_Person->AdvancedSearch->SearchValue = @$filter["x_Contact_Person"];
        $istanza->Contact_Person->AdvancedSearch->SearchOperator = @$filter["z_Contact_Person"];
        $istanza->Contact_Person->AdvancedSearch->SearchCondition = @$filter["v_Contact_Person"];
        $istanza->Contact_Person->AdvancedSearch->SearchValue2 = @$filter["y_Contact_Person"];
        $istanza->Contact_Person->AdvancedSearch->SearchOperator2 = @$filter["w_Contact_Person"];
        $istanza->Contact_Person->AdvancedSearch->Save();

        // Field Phone_Number
        $istanza->Phone_Number->AdvancedSearch->SearchValue = @$filter["x_Phone_Number"];
        $istanza->Phone_Number->AdvancedSearch->SearchOperator = @$filter["z_Phone_Number"];
        $istanza->Phone_Number->AdvancedSearch->SearchCondition = @$filter["v_Phone_Number"];
        $istanza->Phone_Number->AdvancedSearch->SearchValue2 = @$filter["y_Phone_Number"];
        $istanza->Phone_Number->AdvancedSearch->SearchOperator2 = @$filter["w_Phone_Number"];
        $istanza->Phone_Number->AdvancedSearch->Save();

        // Field Email
        $istanza->_Email->AdvancedSearch->SearchValue = @$filter["x__Email"];
        $istanza->_Email->AdvancedSearch->SearchOperator = @$filter["z__Email"];
        $istanza->_Email->AdvancedSearch->SearchCondition = @$filter["v__Email"];
        $istanza->_Email->AdvancedSearch->SearchValue2 = @$filter["y__Email"];
        $istanza->_Email->AdvancedSearch->SearchOperator2 = @$filter["w__Email"];
        $istanza->_Email->AdvancedSearch->Save();

        // Field Mobile_Number
        $istanza->Mobile_Number->AdvancedSearch->SearchValue = @$filter["x_Mobile_Number"];
        $istanza->Mobile_Number->AdvancedSearch->SearchOperator = @$filter["z_Mobile_Number"];
        $istanza->Mobile_Number->AdvancedSearch->SearchCondition = @$filter["v_Mobile_Number"];
        $istanza->Mobile_Number->AdvancedSearch->SearchValue2 = @$filter["y_Mobile_Number"];
        $istanza->Mobile_Number->AdvancedSearch->SearchOperator2 = @$filter["w_Mobile_Number"];
        $istanza->Mobile_Number->AdvancedSearch->Save();

        // Field Notes
        $istanza->Notes->AdvancedSearch->SearchValue = @$filter["x_Notes"];
        $istanza->Notes->AdvancedSearch->SearchOperator = @$filter["z_Notes"];
        $istanza->Notes->AdvancedSearch->SearchCondition = @$filter["v_Notes"];
        $istanza->Notes->AdvancedSearch->SearchValue2 = @$filter["y_Notes"];
        $istanza->Notes->AdvancedSearch->SearchOperator2 = @$filter["w_Notes"];
        $istanza->Notes->AdvancedSearch->Save();

        // Field Balance
        $istanza->Balance->AdvancedSearch->SearchValue = @$filter["x_Balance"];
        $istanza->Balance->AdvancedSearch->SearchOperator = @$filter["z_Balance"];
        $istanza->Balance->AdvancedSearch->SearchCondition = @$filter["v_Balance"];
        $istanza->Balance->AdvancedSearch->SearchValue2 = @$filter["y_Balance"];
        $istanza->Balance->AdvancedSearch->SearchOperator2 = @$filter["w_Balance"];
        $istanza->Balance->AdvancedSearch->Save();

        // Field Date_Added
        $istanza->Date_Added->AdvancedSearch->SearchValue = @$filter["x_Date_Added"];
        $istanza->Date_Added->AdvancedSearch->SearchOperator = @$filter["z_Date_Added"];
        $istanza->Date_Added->AdvancedSearch->SearchCondition = @$filter["v_Date_Added"];
        $istanza->Date_Added->AdvancedSearch->SearchValue2 = @$filter["y_Date_Added"];
        $istanza->Date_Added->AdvancedSearch->SearchOperator2 = @$filter["w_Date_Added"];
        $istanza->Date_Added->AdvancedSearch->Save();

        // Field Added_By
        $istanza->Added_By->AdvancedSearch->SearchValue = @$filter["x_Added_By"];
        $istanza->Added_By->AdvancedSearch->SearchOperator = @$filter["z_Added_By"];
        $istanza->Added_By->AdvancedSearch->SearchCondition = @$filter["v_Added_By"];
        $istanza->Added_By->AdvancedSearch->SearchValue2 = @$filter["y_Added_By"];
        $istanza->Added_By->AdvancedSearch->SearchOperator2 = @$filter["w_Added_By"];
        $istanza->Added_By->AdvancedSearch->Save();

        // Field Date_Updated
        $istanza->Date_Updated->AdvancedSearch->SearchValue = @$filter["x_Date_Updated"];
        $istanza->Date_Updated->AdvancedSearch->SearchOperator = @$filter["z_Date_Updated"];
        $istanza->Date_Updated->AdvancedSearch->SearchCondition = @$filter["v_Date_Updated"];
        $istanza->Date_Updated->AdvancedSearch->SearchValue2 = @$filter["y_Date_Updated"];
        $istanza->Date_Updated->AdvancedSearch->SearchOperator2 = @$filter["w_Date_Updated"];
        $istanza->Date_Updated->AdvancedSearch->Save();

        // Field Updated_By
        $istanza->Updated_By->AdvancedSearch->SearchValue = @$filter["x_Updated_By"];
        $istanza->Updated_By->AdvancedSearch->SearchOperator = @$filter["z_Updated_By"];
        $istanza->Updated_By->AdvancedSearch->SearchCondition = @$filter["v_Updated_By"];
        $istanza->Updated_By->AdvancedSearch->SearchValue2 = @$filter["y_Updated_By"];
        $istanza->Updated_By->AdvancedSearch->SearchOperator2 = @$filter["w_Updated_By"];
        $istanza->Updated_By->AdvancedSearch->Save();
        $istanza->BasicSearch->setKeyword(@$filter[EW_TABLE_BASIC_SEARCH]);
        $istanza->BasicSearch->setType(@$filter[EW_TABLE_BASIC_SEARCH_TYPE]);
    }
}
?>