<?php
class f_3{
    function TryGetRecordCount1($sSql, $istanza) {
        $cnt = -1;
        if (($istanza->TableType == 'TABLE' || $istanza->TableType == 'VIEW' || $istanza->TableType == 'LINKTABLE') && preg_match("/^SELECT \* FROM/i", $sSql)) {
            $sSql = "SELECT COUNT(*) FROM" . preg_replace('/^SELECT\s([\s\S]+)?\*\sFROM/i', "", $sSql);
            $sOrderBy = $istanza->GetOrderBy();
            if (substr($sSql, strlen($sOrderBy) * -1) == $sOrderBy)
                $sSql = substr($sSql, 0, strlen($sSql) - strlen($sOrderBy)); // Remove ORDER BY clause
        } else {
            $sSql = "SELECT COUNT(*) FROM (" . $sSql . ") EW_COUNT_TABLE";
        }
        $conn = &$istanza->Connection();
        if ($rs = $conn->Execute($sSql)) {
            if (!$rs->EOF && $rs->FieldCount() > 0) {
                $cnt = $rs->fields[0];
                $rs->Close();
            }
        }
        return intval($cnt);
    }

    // Get record count based on filter (for detail record count in master table pages)
    function LoadRecordCount1($sFilter, $istanza) {
        $origFilter = $istanza->CurrentFilter;
        $istanza->CurrentFilter = $sFilter;
        $istanza->Recordset_Selecting($istanza->CurrentFilter);

        //$sSql = $this->SQL();
        $sSql = $istanza->GetSQL($istanza->CurrentFilter, "");
        $cnt = $istanza->TryGetRecordCount($sSql);
        if ($cnt == -1) {
            if ($rs = $istanza->LoadRs($istanza->CurrentFilter)) {
                $cnt = $rs->RecordCount();
                $rs->Close();
            }
        }
        $istanza->CurrentFilter = $origFilter;
        return intval($cnt);
    }

    // Get record count (for current List page)
    function SelectRecordCount1($istanza) {
        $sSql = $istanza->SelectSQL();
        $cnt = $istanza->TryGetRecordCount($sSql);
        if ($cnt == -1) {
            $conn = &$istanza->Connection();
            if ($rs = $conn->Execute($sSql)) {
                $cnt = $rs->RecordCount();
                $rs->Close();
            }
        }
        return intval($cnt);
    }

    // INSERT statement
    function InsertSQL1(&$rs, $istanza) {
        $names = "";
        $values = "";
        foreach ($rs as $name => $value) {
            if (!isset($istanza->fields[$name]) || $istanza->fields[$name]->FldIsCustom)
                continue;
            $names .= $istanza->fields[$name]->FldExpression . ",";
            $values .= ew_QuotedValue($value, $istanza->fields[$name]->FldDataType, $istanza->DBID) . ",";
        }
        while (substr($names, -1) == ",")
            $names = substr($names, 0, -1);
        while (substr($values, -1) == ",")
            $values = substr($values, 0, -1);
        return "INSERT INTO " . $istanza->UpdateTable . " ($names) VALUES ($values)";
    }
}
?>