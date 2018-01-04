<?php
class fun_sql{

    function GetSQL1($where, $orderby, $istanza) {
        return ew_BuildSelectSql($istanza->getSqlSelect(), $istanza->getSqlWhere(),
            $istanza->getSqlGroupBy(), $istanza->getSqlHaving(), $istanza->getSqlOrderBy(),
            $where, $orderby);
    }

    // Table SQL
    function SQL1($istanza) {
        $sFilter = $istanza->CurrentFilter;
        $sFilter = $istanza->ApplyUserIDFilters($sFilter);
        $sSort = $istanza->getSessionOrderBy();
        return ew_BuildSelectSql($istanza->getSqlSelect(), $istanza->getSqlWhere(),
            $istanza->getSqlGroupBy(), $istanza->getSqlHaving(), $istanza->getSqlOrderBy(),
            $sFilter, $sSort);
    }

    // Table SQL with List page filter
    function SelectSQL1($istanza) {
        $sFilter = $istanza->getSessionWhere();
        ew_AddFilter($sFilter, $istanza->CurrentFilter);
        $sFilter = $istanza->ApplyUserIDFilters($sFilter);
        $istanza->Recordset_Selecting($sFilter);
        $sSort = $istanza->getSessionOrderBy();
        return ew_BuildSelectSql($istanza->getSqlSelect(), $istanza->getSqlWhere(), $istanza->getSqlGroupBy(),
            $istanza->getSqlHaving(), $istanza->getSqlOrderBy(), $sFilter, $sSort);
    }

    // Get ORDER BY clause
    function GetOrderBy1($istanza) {
        $sSort = $istanza->getSessionOrderBy();
        return ew_BuildSelectSql("", "", "", "", $istanza->getSqlOrderBy(), "", $sSort);
    }

}
?>