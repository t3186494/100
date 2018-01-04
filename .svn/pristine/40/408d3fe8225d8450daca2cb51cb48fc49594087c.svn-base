<?php
class cod_html3{
    function HTML4($a_customers_edit, $Language){
        $var="";
        ?>

        <?php if (!isset($a_customers_edit->Pager)) $a_customers_edit->Pager = new cNumericPager($a_customers_edit->StartRec, $a_customers_edit->DisplayRecs, $a_customers_edit->TotalRecs, $a_customers_edit->RecRange) ?>
		<?php if ($a_customers_edit->Pager->RecordCount > 0) { ?>
				<?php if (($a_customers_edit->Pager->PageCount==1) && ($a_customers_edit->Pager->CurrentPage == 1) && (MS_SHOW_PAGENUM_IF_REC_NOT_OVER_PAGESIZE==FALSE)  ) { ?>
				<?php } else { // MS_SHOW_PAGENUM_IF_REC_NOT_OVER_PAGESIZE ?>
				<?php $var=$var.'<div class="ewPager">'?>
                <?php $var=$var.'<div class="ewNumericPage"><ul class="pagination">'?>
					<?php if ($a_customers_edit->Pager->FirstButton->Enabled) { ?>
					<?php if ($Language->Phrase("dir") == "rtl") { // begin of rtl ?>
                    <?php $var=$var.'<li><a href="<?php echo $a_customers_edit->PageUrl() ?>start=<?php echo $a_customers_edit->Pager->FirstButton->Start ?>"><?php echo $Language->Phrase("PagerLast") ?></a></li>'?>
					<?php } else { // else of rtl ?>
                    <?php $var=$var.'<li><a href="<?php echo $a_customers_edit->PageUrl() ?>start=<?php echo $a_customers_edit->Pager->FirstButton->Start ?>"><?php echo $Language->Phrase("PagerFirst") ?></a></li>'?>
					<?php } // end of rtl ?>
					<?php } ?>
					<?php if ($a_customers_edit->Pager->PrevButton->Enabled) { ?>
					<?php if ($Language->Phrase("dir") == "rtl") { // begin of rtl ?>
                    <?php $var=$var.'<li><a href="<?php echo $a_customers_edit->PageUrl() ?>start=<?php echo $a_customers_edit->Pager->PrevButton->Start ?>"><?php echo $Language->Phrase("PagerNext") ?></a></li>'?>
					<?php } else { // else of rtl { ?>
                    <?php $var=$var.'<li><a href="<?php echo $a_customers_edit->PageUrl() ?>start=<?php echo $a_customers_edit->Pager->PrevButton->Start ?>"><?php echo $Language->Phrase("PagerPrevious") ?></a></li>'?>
					<?php } // end of rtl { ?>
					<?php } ?>
					<?php foreach ($a_customers_edit->Pager->Items as $PagerItem) { ?>
                         <?php $var=$var.'<li<?php if (!$PagerItem->Enabled) { echo " class=\" active\""; } ?>><a href="<?php if ($PagerItem->Enabled) { echo $a_customers_edit->PageUrl() . "start=" . $PagerItem->Start; } else { echo "#"; } ?>"><?php echo $PagerItem->Text ?></a></li>'?>
					<?php } ?>
					<?php if ($a_customers_edit->Pager->NextButton->Enabled) { ?>
					<?php if ($Language->Phrase("dir") == "rtl") { // begin of rtl ?>
                    <?php $var=$var.'<li><a href="<?php echo $a_customers_edit->PageUrl() ?>start=<?php echo $a_customers_edit->Pager->NextButton->Start ?>"><?php echo $Language->Phrase("PagerPrevious") ?></a></li>'?>
					<?php } else { // else of rtl ?>
                    <?php $var=$var.'<li><a href="<?php echo $a_customers_edit->PageUrl() ?>start=<?php echo $a_customers_edit->Pager->NextButton->Start ?>"><?php echo $Language->Phrase("PagerNext") ?></a></li>'?>
					<?php } // end of rtl ?>
					<?php } ?>
					<?php if ($a_customers_edit->Pager->LastButton->Enabled) { ?>
					<?php if ($Language->Phrase("dir") == "rtl") { // begin of rtl ?>
                    <?php $var=$var.'<li><a href="<?php echo $a_customers_edit->PageUrl() ?>start=<?php echo $a_customers_edit->Pager->LastButton->Start ?>"><?php echo $Language->Phrase("PagerFirst") ?></a></li>'?>
					<?php } else { // else of rtl ?>
                    <?php $var=$var.'<li><a href="<?php echo $a_customers_edit->PageUrl() ?>start=<?php echo $a_customers_edit->Pager->LastButton->Start ?>"><?php echo $Language->Phrase("PagerLast") ?></a></li>'?>
					<?php } // end of rtl ?>
					<?php } ?>
                <?php $var=$var.'</ul></div>'?>
                <?php $var=$var.'</div>'?>
				<?php } // end MS_SHOW_PAGENUM_IF_REC_NOT_OVER_PAGESIZE ?>
		<?php } ?>
 <?php return $var;
    }
}
?>