<?php
class cod_html2{

    function HTML_2($a_customers_view, $Language){

        $var="";

        ?>
		<?php if (!isset($a_customers_view->Pager)) $a_customers_view->Pager = new cNumericPager($a_customers_view->StartRec, $a_customers_view->DisplayRecs, $a_customers_view->TotalRecs, $a_customers_view->RecRange) ?>
		<?php if ($a_customers_view->Pager->RecordCount > 0) { ?>
				<?php if (($a_customers_view->Pager->PageCount==1) && ($a_customers_view->Pager->CurrentPage == 1) && (MS_SHOW_PAGENUM_IF_REC_NOT_OVER_PAGESIZE==FALSE)  ) { ?>
                 <?php $var=$var.'<div class="ewPager ewRec">'?>
                    <?php $var=$var.'<span><?php echo $Language->Phrase("Record") ?>&nbsp;<?php echo $a_customers_view->Pager->FromIndex ?>&nbsp;<?php echo $Language->Phrase("To") ?>&nbsp;<?php echo $a_customers_view->Pager->ToIndex ?>&nbsp;<?php echo $Language->Phrase("Of") ?>&nbsp;<?php echo $a_customers_view->Pager->RecordCount ?></span>'?>
                <?php $var=$var.'</div>'?>
				<?php } else { // MS_SHOW_PAGENUM_IF_REC_NOT_OVER_PAGESIZE ?>
                <?php $var=$var.'<div class="ewPager">'?>
                <?php $var=$var.'<div class="ewNumericPage"><ul class="pagination">'?>
					<?php if ($a_customers_view->Pager->FirstButton->Enabled) { ?>
					<?php if ($Language->Phrase("dir") == "rtl") { // begin of rtl ?>
                    <?php $var=$var.'<li><a href="<?php echo $a_customers_view->PageUrl() ?>start=<?php echo $a_customers_view->Pager->FirstButton->Start ?>"><?php echo $Language->Phrase("PagerLast") ?></a></li>'?>
					<?php } else { // else of rtl ?>
                    <?php $var=$var.'<li><a href="<?php echo $a_customers_view->PageUrl() ?>start=<?php echo $a_customers_view->Pager->FirstButton->Start ?>"><?php echo $Language->Phrase("PagerFirst") ?></a></li>'?>
					<?php } // end of rtl ?>
					<?php } ?>
					<?php if ($a_customers_view->Pager->PrevButton->Enabled) { ?>
					<?php if ($Language->Phrase("dir") == "rtl") { // begin of rtl ?>
                    <?php $var=$var.'<li><a href="<?php echo $a_customers_view->PageUrl() ?>start=<?php echo $a_customers_view->Pager->PrevButton->Start ?>"><?php echo $Language->Phrase("PagerNext") ?></a></li>'?>
					<?php } else { // else of rtl { ?>
                    <?php $var=$var.'<li><a href="<?php echo $a_customers_view->PageUrl() ?>start=<?php echo $a_customers_view->Pager->PrevButton->Start ?>"><?php echo $Language->Phrase("PagerPrevious") ?></a></li>'?>
					<?php } // end of rtl { ?>
					<?php } ?>
					<?php foreach ($a_customers_view->Pager->Items as $PagerItem) { ?>
                        <?php $var=$var.'<li<?php if (!$PagerItem->Enabled) { echo " class=\" active\""; } ?>><a href="<?php if ($PagerItem->Enabled) { echo $a_customers_view->PageUrl() . "start=" . $PagerItem->Start; } else { echo "#"; } ?>"><?php echo $PagerItem->Text ?></a></li>'?>
					<?php } ?>
					<?php if ($a_customers_view->Pager->NextButton->Enabled) { ?>
					<?php if ($Language->Phrase("dir") == "rtl") { // begin of rtl ?>
                    <?php $var=$var.'<li><a href="<?php echo $a_customers_view->PageUrl() ?>start=<?php echo $a_customers_view->Pager->NextButton->Start ?>"><?php echo $Language->Phrase("PagerPrevious") ?></a></li>'?>
					<?php } else { // else of rtl ?>
                    <?php $var=$var.'<li><a href="<?php echo $a_customers_view->PageUrl() ?>start=<?php echo $a_customers_view->Pager->NextButton->Start ?>"><?php echo $Language->Phrase("PagerNext") ?></a></li>'?>
					<?php } // end of rtl ?>
					<?php } ?>
					<?php if ($a_customers_view->Pager->LastButton->Enabled) { ?>
					<?php if ($Language->Phrase("dir") == "rtl") { // begin of rtl ?>
                    <?php $var=$var.'<li><a href="<?php echo $a_customers_view->PageUrl() ?>start=<?php echo $a_customers_view->Pager->LastButton->Start ?>"><?php echo $Language->Phrase("PagerFirst") ?></a></li>'?>
					<?php } else { // else of rtl ?>
                    <?php $var=$var.'<li><a href="<?php echo $a_customers_view->PageUrl() ?>start=<?php echo $a_customers_view->Pager->LastButton->Start ?>"><?php echo $Language->Phrase("PagerLast") ?></a></li>'?>
					<?php } // end of rtl ?>
					<?php } ?>
                    <?php $var=$var.'</ul></div>'?>
                 <?php $var=$var.'</div>'?>
				<?php } // end MS_SHOW_PAGENUM_IF_REC_NOT_OVER_PAGESIZE ?>
		<?php } ?>
<?php   return $var; }

function HTML_3($a_customers_view, $Language){
        $var="";
        ?>

		<?php if (!isset($a_customers_view->Pager)) $a_customers_view->Pager = new cPrevNextPager($a_customers_view->StartRec, $a_customers_view->DisplayRecs, $a_customers_view->TotalRecs) ?>
		<?php if ($a_customers_view->Pager->RecordCount > 0) { ?>
				<?php if (($a_customers_view->Pager->PageCount==1) && ($a_customers_view->Pager->CurrentPage == 1) && (MS_SHOW_PAGENUM_IF_REC_NOT_OVER_PAGESIZE==FALSE)  ) { ?>
                    <?php $var=$var.'<div class="ewPager ewRec">'?>
                            <?php $var=$var.'<span><?php echo $Language->Phrase("Record") ?>&nbsp;<?php echo $a_customers_view->Pager->FromIndex ?>&nbsp;<?php echo $Language->Phrase("To") ?>&nbsp;<?php echo $a_customers_view->Pager->ToIndex ?>&nbsp;<?php echo $Language->Phrase("Of") ?>&nbsp;<?php echo $a_customers_view->Pager->RecordCount ?></span>'?>
                    <?php $var=$var.'</div>'?>
				<?php } else { // end MS_SHOW_PAGENUM_IF_REC_NOT_OVER_PAGESIZE==FALSE ?>
        <?php $var=$var.'<div class="ewPager">'?>
        <?php $var=$var.'<span><?php echo $Language->Phrase("Page") ?>&nbsp;</span>'?>
        <?php $var=$var.'<div class="ewPrevNext"><div class="input-group">'?>
        <?php $var=$var.'<div class="input-group-btn">'?>
        <!--first page button-->
        <?php if ($a_customers_view->Pager->FirstButton->Enabled) { ?>
        <?php if ($Language->Phrase("dir") == "rtl") { // begin of rtl ?>
            <?php $var=$var.'<a class="btn btn-default btn-sm" title="<?php echo $Language->Phrase("PagerFirst") ?>" href="<?php echo $a_customers_view->PageUrl() ?>start=<?php echo $a_customers_view->Pager->FirstButton->Start ?>"><span class="icon-last ewIcon"></span></a>'?>
        <?php } else { // else of rtl ?>
            <?php $var=$var.'<a class="btn btn-default btn-sm" title="<?php echo $Language->Phrase("PagerFirst") ?>" href="<?php echo $a_customers_view->PageUrl() ?>start=<?php echo $a_customers_view->Pager->FirstButton->Start ?>"><span class="icon-first ewIcon"></span></a>'?>
        <?php } // end of rtl ?>
    <?php } else { ?>
        <?php if ($Language->Phrase("dir") == "rtl") { // begin of rtl ?>
            <?php $var=$var.'<a class="btn btn-default btn-sm disabled" title="<?php echo $Language->Phrase("PagerFirst") ?>"><span class="icon-last ewIcon"></span></a>'?>
        <?php } else { // else of rtl ?>
            <?php $var=$var.'<a class="btn btn-default btn-sm disabled" title="<?php echo $Language->Phrase("PagerFirst") ?>"><span class="icon-first ewIcon"></span></a>'?>
        <?php } // end of rtl ?>
    <?php } ?>
    <!--previous page button-->
    <?php if ($a_customers_view->Pager->PrevButton->Enabled) { ?>
        <?php if ($Language->Phrase("dir") == "rtl") { // begin of rtl ?>
            <?php $var=$var.'<a class="btn btn-default btn-sm" title="<?php echo $Language->Phrase("PagerPrevious") ?>" href="<?php echo $a_customers_view->PageUrl() ?>start=<?php echo $a_customers_view->Pager->PrevButton->Start ?>"><span class="icon-next ewIcon"></span></a>'?>
        <?php } else { // else of rtl ?>
            <?php $var=$var.'<a class="btn btn-default btn-sm" title="<?php echo $Language->Phrase("PagerPrevious") ?>" href="<?php echo $a_customers_view->PageUrl() ?>start=<?php echo $a_customers_view->Pager->PrevButton->Start ?>"><span class="icon-prev ewIcon"></span></a>'?>
        <?php } // end of rtl ?>
    <?php } else { ?>
        <?php if ($Language->Phrase("dir") == "rtl") { // begin of rtl ?>
            <?php $var=$var.'<a class="btn btn-default btn-sm disabled" title="<?php echo $Language->Phrase("PagerPrevious") ?>"><span class="icon-next ewIcon"></span></a>'?>
        <?php } else { // else of rtl ?>
            <?php $var=$var.'<a class="btn btn-default btn-sm disabled" title="<?php echo $Language->Phrase("PagerPrevious") ?>"><span class="icon-prev ewIcon"></span></a>'?>
        <?php } // end of rtl ?>
    <?php } ?>
    <?php $var=$var.'</div>'?>

    <?php $var=$var.'<input class="form-control input-sm" type="text" name="<?php echo EW_TABLE_PAGE_NO ?>" value="<?php echo $a_customers_view->Pager->CurrentPage ?>">'?>
    <?php $var=$var.'<div class="input-group-btn">'?>
    <!--next page button-->
    <?php if ($a_customers_view->Pager->NextButton->Enabled) { ?>
        <?php if ($Language->Phrase("dir") == "rtl") { // begin of rtl ?>
            <?php $var=$var.'<a class="btn btn-default btn-sm" title="<?php echo $Language->Phrase("PagerNext") ?>" href="<?php echo $a_customers_view->PageUrl() ?>start=<?php echo $a_customers_view->Pager->NextButton->Start ?>"><span class="icon-prev ewIcon"></span></a>'?>
        <?php } else { // else of rtl ?>
            <?php $var=$var.'<a class="btn btn-default btn-sm" title="<?php echo $Language->Phrase("PagerNext") ?>" href="<?php echo $a_customers_view->PageUrl() ?>start=<?php echo $a_customers_view->Pager->NextButton->Start ?>"><span class="icon-next ewIcon"></span></a>'?>
        <?php } // end of rtl ?>
    <?php } else { ?>
        <?php if ($Language->Phrase("dir") == "rtl") { // begin of rtl ?>
            <?php $var=$var.'<a class="btn btn-default btn-sm disabled" title="<?php echo $Language->Phrase("PagerNext") ?>"><span class="icon-prev ewIcon"></span></a>'?>
        <?php } else { // else of rtl ?>
            <?php $var=$var.'<a class="btn btn-default btn-sm disabled" title="<?php echo $Language->Phrase("PagerNext") ?>"><span class="icon-next ewIcon"></span></a>'?>
        <?php } // end of rtl ?>
    <?php } ?>
    <!--last page button-->
    <?php if ($a_customers_view->Pager->LastButton->Enabled) { ?>
        <?php if ($Language->Phrase("dir") == "rtl") { // begin of rtl ?>
            <?php $var=$var.'<a class="btn btn-default btn-sm" title="<?php echo $Language->Phrase("PagerLast") ?>" href="<?php echo $a_customers_view->PageUrl() ?>start=<?php echo $a_customers_view->Pager->LastButton->Start ?>"><span class="icon-first ewIcon"></span></a>'?>
        <?php } else { // else of rtl ?>
            <?php $var=$var.'<a class="btn btn-default btn-sm" title="<?php echo $Language->Phrase("PagerLast") ?>" href="<?php echo $a_customers_view->PageUrl() ?>start=<?php echo $a_customers_view->Pager->LastButton->Start ?>"><span class="icon-last ewIcon"></span></a>'?>
        <?php } // end of rtl ?>
    <?php } else { ?>
        <?php if ($Language->Phrase("dir") == "rtl") { // begin of rtl ?>
            <?php $var=$var.'<a class="btn btn-default btn-sm disabled" title="<?php echo $Language->Phrase("PagerLast") ?>"><span class="icon-first ewIcon"></span></a>'?>
        <?php } else { // else of rtl ?>
            <?php $var=$var.'<a class="btn btn-default btn-sm disabled" title="<?php echo $Language->Phrase("PagerLast") ?>"><span class="icon-last ewIcon"></span></a>'?>
        <?php } // end of rtl ?>
    <?php } ?>
    <?php $var=$var.'</div>'?>
    <?php $var=$var.'</div>'?>
    <?php $var=$var.'</div>'?>
    <?php $var=$var.'<span>&nbsp;<?php echo $Language->Phrase("of") ?>&nbsp;<?php echo $a_customers_view->Pager->PageCount ?></span>'?>
    <?php $var=$var.'</div>'?>
<?php } // end MS_SHOW_PAGENUM_IF_REC_NOT_OVER_PAGESIZE==FALSE ?>
<?php } ?>
<?php }
}
?>