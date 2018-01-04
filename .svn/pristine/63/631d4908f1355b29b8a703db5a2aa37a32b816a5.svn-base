<?php
class cod_html4{
    function html_4($a_customers, $Language){
        $var="";

        $var=$var.'<div id="r_Customer_Number" class="form-group">';
		$var=$var.'<label id="elh_a_customers_Customer_Number" for="x_Customer_Number" class="col-sm-4 control-label ewLabel">'.$a_customers->Customer_Number->FldCaption().$Language->Phrase("FieldRequiredIndicator").'</label>';
        $var=$var.'<div class="col-sm-8"><div'.$a_customers->Customer_Number->CellAttributes().'>';
        $var=$var.'<span id="el_a_customers_Customer_Number">';
        $var=$var.'<input type="text" data-table="a_customers" data-field="x_Customer_Number" name="x_Customer_Number" id="x_Customer_Number" size="30" maxlength="20" placeholder="'.ew_HtmlEncode($a_customers->Customer_Number->getPlaceHolder()).'" value="'.$a_customers->Customer_Number->EditValue.'"'.$a_customers->Customer_Number->EditAttributes().'>';
        $var=$var.'</span>';
        $var=$var.$a_customers->Customer_Number->CustomMsg.'</div></div>';
        $var=$var.'</div>';
 return $var;  }

 function html_5($a_customers, $Language){
        $var="";
         $var=$var.'<div id="r_Customer_Name" class="form-group">';
		 $var=$var.'<label id="elh_a_customers_Customer_Name" for="x_Customer_Name" class="col-sm-4 control-label ewLabel">'.$a_customers->Customer_Name->FldCaption().$Language->Phrase("FieldRequiredIndicator").'</label>';
         $var=$var.'<div class="col-sm-8"><div'.$a_customers->Customer_Name->CellAttributes().'>';
         $var=$var.'<span id="el_a_customers_Customer_Name">';
         $var=$var.'<input type="text" data-table="a_customers" data-field="x_Customer_Name" name="x_Customer_Name" id="x_Customer_Name" size="30" maxlength="50" placeholder="'.ew_HtmlEncode($a_customers->Customer_Name->getPlaceHolder()).'" value="'.$a_customers->Customer_Name->EditValue .'"'.$a_customers->Customer_Name->EditAttributes().'>';
         $var=$var.'</span>';
         $var=$var.$a_customers->Customer_Name->CustomMsg.'</div></div>';
        $var=$var.'</div>';
 return $var;}


}

?>