<?php
class record_set
{
    function LoadRecordset1($offset = -1, $rowcnt = -1, $istanza)
    {

        // Begin of modification (20140916): http://www.hkvforums.com/viewtopic.php?f=4&t=35486&p=102440#p102440
        // Load List page SQL

        $sSql = $istanza->SelectSQL();
        $conn = &$istanza->Connection();

        // Load recordset
        $dbtype = ew_GetConnectionType($istanza->DBID);
        if ($istanza->UseSelectLimit) {
            $conn->raiseErrorFn = $GLOBALS["EW_ERROR_FN"];
            if ($dbtype == "MSSQL") {
                $rs = $conn->SelectLimit($sSql, $rowcnt, $offset, array("_hasOrderBy" => trim($istanza->getOrderBy()) || trim($istanza->getSessionOrderBy())));
            } else {
                $rs = $conn->SelectLimit($sSql, $rowcnt, $offset);
            }
            $conn->raiseErrorFn = '';
        } else {
            $rs = ew_LoadRecordset($sSql, $conn);
        }

        // Call Recordset Selected event
        $istanza->Recordset_Selected($rs);
        return $rs;
    }
}
?>