<?php
class build_basic_search{
    function BuildBasicSearchSql1(&$Where, &$Fld, $arKeywords, $type, $istanza) {
        $sDefCond = ($type == "OR") ? "OR" : "AND";
        $arSQL = array(); // Array for SQL parts
        $arCond = array(); // Array for search conditions
        $cnt = count($arKeywords);
        $j = 0; // Number of SQL parts
        for ($i = 0; $i < $cnt; $i++) {
            $Keyword = $arKeywords[$i];
            $Keyword = trim($Keyword);
            if (EW_BASIC_SEARCH_IGNORE_PATTERN <> "") {
                $Keyword = preg_replace(EW_BASIC_SEARCH_IGNORE_PATTERN, "\\", $Keyword);
                $ar = explode("\\", $Keyword);
            } else {
                $ar = array($Keyword);
            }
            foreach ($ar as $Keyword) {
                if ($Keyword <> "") {
                    $sWrk = "";
                    if ($Keyword == "OR" && $type == "") {
                        if ($j > 0)
                            $arCond[$j-1] = "OR";
                    } elseif ($Keyword == EW_NULL_VALUE) {
                        $sWrk = $Fld->FldExpression . " IS NULL";
                    } elseif ($Keyword == EW_NOT_NULL_VALUE) {
                        $sWrk = $Fld->FldExpression . " IS NOT NULL";
                    } elseif ($Fld->FldIsVirtual && $Fld->FldVirtualSearch) {
                        $sWrk = $Fld->FldVirtualExpression . ew_Like(ew_QuotedValue("%" . $Keyword . "%", EW_DATATYPE_STRING, $istanza->DBID), $istanza->DBID);
                    } elseif ($Fld->FldDataType != EW_DATATYPE_NUMBER || is_numeric($Keyword)) {
                        $sWrk = $Fld->FldBasicSearchExpression . ew_Like(ew_QuotedValue("%" . $Keyword . "%", EW_DATATYPE_STRING, $istanza->DBID), $istanza->DBID);
                    }

                    // Begin of modification Exact Match search criteria, by Masino Sinaga, November 12, 2014. See also: http://www.hkvforums.com/viewtopic.php?f=4&t=35853&p=104026#p104026
                    if ($type == "=") {
                        $sFldExpression = ($Fld->FldVirtualExpression <> $Fld->FldExpression) ? $Fld->FldVirtualExpression : $Fld->FldBasicSearchExpression;
                        $sWrk = $sFldExpression . " = " . ew_QuotedValue("" . $Keyword . "", EW_DATATYPE_STRING);
                    }

                    // End of modification Exact Match search criteria, by Masino Sinaga, November 12, 2014. See also: http://www.hkvforums.com/viewtopic.php?f=4&t=35853&p=104026#p104026
                    if ($sWrk <> "") {
                        $arSQL[$j] = $sWrk;
                        $arCond[$j] = $sDefCond;
                        $j += 1;
                    }
                }
            }
        }
        $cnt = count($arSQL);
        $bQuoted = FALSE;
        $sSql = "";
        if ($cnt > 0) {
            for ($i = 0; $i < $cnt-1; $i++) {
                if ($arCond[$i] == "OR") {
                    if (!$bQuoted) $sSql .= "(";
                    $bQuoted = TRUE;
                }
                $sSql .= $arSQL[$i];
                if ($bQuoted && $arCond[$i] <> "OR") {
                    $sSql .= ")";
                    $bQuoted = FALSE;
                }
                $sSql .= " " . $arCond[$i] . " ";
            }
            $sSql .= $arSQL[$cnt-1];
            if ($bQuoted)
                $sSql .= ")";
        }
        if ($sSql <> "") {
            if ($Where <> "") $Where .= " OR ";
            $Where .=  "(" . $sSql . ")";
        }
    }
}
?>