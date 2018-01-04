<?php
class cod_html
{
    function codhtml($a_customers_list, $Language)
    {
        $var="";

        ?>
        <?php if ((MS_PAGINATION_STYLE==2 && $a_customers_list->Pager->RecordCount > 0) && (($a_customers_list->Pager->PageCount!=1) || ($a_customers_list->Pager->CurrentPage != 1) || (MS_SHOW_PAGENUM_IF_REC_NOT_OVER_PAGESIZE==TRUE)) ) { ?>
				<?php $var= $var. '<div class="ewPager">' ?>
				<?php $var= $var.'<span><?php echo $Language->Phrase("Page") ?>&nbsp;</span>'?>
				<?php $var= $var.'div class="ewPrevNext"><div class="input-group">'?>
				<?php $var= $var.'<div class="input-group-btn">'?>
				<!--first page button-->
                <?php if ($a_customers_list->Pager->FirstButton->Enabled && $Language->Phrase("dir") == "rtl") { ?>
                    <?php $var= $var.'<a class="btn btn-default btn-sm" title="<?php echo $Language->Phrase("PagerFirst") ?>" href="<?php echo $a_customers_list->PageUrl() ?>start=<?php echo $a_customers_list->Pager->FirstButton->Start ?>"><span class="icon-last ewIcon"></span></a>'?>
                <?php } ?>
                <?php if ($a_customers_list->Pager->FirstButton->Enabled && $Language->Phrase("dir") != "rtl") { ?>
                    <?php $var= $var. '<a class="btn btn-default btn-sm" title="<?php echo $Language->Phrase("PagerFirst") ?>" href="<?php echo $a_customers_list->PageUrl() ?>start=<?php echo $a_customers_list->Pager->FirstButton->Start ?>"><span class="icon-first ewIcon"></span></a>'?>
                <?php } ?>
                <?php if ((!$a_customers_list->Pager->FirstButton->Enabled) && $Language->Phrase("dir") == "rtl") { ?>
                    <?php $var= $var.'<a class="btn btn-default btn-sm disabled" title="<?php echo $Language->Phrase("PagerFirst") ?>"><span class="icon-last ewIcon"></span></a>'?>
                <?php } ?>
                <?php if ((!$a_customers_list->Pager->FirstButton->Enabled) && $Language->Phrase("dir") != "rtl") { ?>
                    <?php $var= $var.'<a class="btn btn-default btn-sm disabled" title="<?php echo $Language->Phrase("PagerFirst") ?>"><span class="icon-first ewIcon"></span></a>'?>
                <?php } ?>

				<!--previous page button-->
					<?php if ($a_customers_list->Pager->PrevButton->Enabled && $Language->Phrase("dir") == "rtl") { ?>
					    <?php $var= $var.'<a class="btn btn-default btn-sm" title="<?php echo $Language->Phrase("PagerPrevious") ?>" href="<?php echo $a_customers_list->PageUrl() ?>start=<?php echo $a_customers_list->Pager->PrevButton->Start ?>"><span class="icon-next ewIcon"></span></a>'?>
					<?php } ?>
                    <?php if ($a_customers_list->Pager->PrevButton->Enabled && $Language->Phrase("dir") != "rtl") { ?>
                        <?php $var= $var.'<a class="btn btn-default btn-sm" title="<?php echo $Language->Phrase("PagerPrevious") ?>" href="<?php echo $a_customers_list->PageUrl() ?>start=<?php echo $a_customers_list->Pager->PrevButton->Start ?>"><span class="icon-prev ewIcon"></span></a>'?>
                    <?php } ?>

                    <?php if ((!$a_customers_list->Pager->PrevButton->Enabled) && $Language->Phrase("dir") == "rtl") { ?>
                        <?php $var= $var.'<a class="btn btn-default btn-sm disabled" title="<?php echo $Language->Phrase("PagerPrevious") ?>"><span class="icon-next ewIcon"></span></a>'?>
                    <?php } ?>
                    <?php if ((!$a_customers_list->Pager->PrevButton->Enabled) && $Language->Phrase("dir") != "rtl") { ?>
                        <?php $var= $var.'<a class="btn btn-default btn-sm disabled" title="<?php echo $Language->Phrase("PagerPrevious") ?>"><span class="icon-prev ewIcon"></span></a>'?>
                    <?php } ?>
				<?php $var= $var.'</div>'?>
				<!--current page number-->
					<?php $var= $var.'<input class="form-control input-sm" type="text" name="<?php echo EW_TABLE_PAGE_NO ?>" value="<?php echo $a_customers_list->Pager->CurrentPage ?>">'?>
				<?php $var= $var.'<div class="input-group-btn">'?>
				<!--next page button-->
                    <?php if ($a_customers_list->Pager->NextButton->Enabled && $Language->Phrase("dir") == "rtl") { ?>
                       <?php $var= $var.' <a class="btn btn-default btn-sm" title="<?php echo $Language->Phrase("PagerNext") ?>" href="<?php echo $a_customers_list->PageUrl() ?>start=<?php echo $a_customers_list->Pager->NextButton->Start ?>"><span class="icon-prev ewIcon"></span></a>'?>
                    <?php } ?>
                <?php if ($a_customers_list->Pager->NextButton->Enabled && $Language->Phrase("dir") != "rtl") { ?>
                    <?php $var= $var.'<a class="btn btn-default btn-sm" title="<?php echo $Language->Phrase("PagerNext") ?>" href="<?php echo $a_customers_list->PageUrl() ?>start=<?php echo $a_customers_list->Pager->NextButton->Start ?>"><span class="icon-next ewIcon"></span></a>'?>
                <?php } ?>
                <?php if ((!$a_customers_list->Pager->NextButton->Enabled) && $Language->Phrase("dir") == "rtl") { ?>
                    <?php $var= $var.'<a class="btn btn-default btn-sm disabled" title="<?php echo $Language->Phrase("PagerNext") ?>"><span class="icon-prev ewIcon"></span></a>'?>
                <?php } ?>
                <?php if ((!$a_customers_list->Pager->NextButton->Enabled) && $Language->Phrase("dir") != "rtl") { ?>
                    <?php $var= $var.'<a class="btn btn-default btn-sm disabled" title="<?php echo $Language->Phrase("PagerNext") ?>"><span class="icon-next ewIcon"></span></a>'?>
                <?php } ?>
				<!--last page button-->
                    <?php if ($a_customers_list->Pager->LastButton->Enabled && $Language->Phrase("dir") == "rtl") { ?>
                        <?php $var= $var.'<a class="btn btn-default btn-sm" title="<?php echo $Language->Phrase("PagerLast") ?>" href="<?php echo $a_customers_list->PageUrl() ?>start=<?php echo $a_customers_list->Pager->LastButton->Start ?>"><span class="icon-first ewIcon"></span></a>'?>
                    <?php } ?>
                    <?php if ($a_customers_list->Pager->LastButton->Enabled && $Language->Phrase("dir") != "rtl") { ?>
                        <?php $var= $var.'<a class="btn btn-default btn-sm" title="<?php echo $Language->Phrase("PagerLast") ?>" href="<?php echo $a_customers_list->PageUrl() ?>start=<?php echo $a_customers_list->Pager->LastButton->Start ?>"><span class="icon-last ewIcon"></span></a>'?>
                    <?php } ?>
                    <?php if ((!$a_customers_list->Pager->LastButton->Enabled) && $Language->Phrase("dir") == "rtl") { ?>
                        <?php $var= $var.'<a class="btn btn-default btn-sm disabled" title="<?php echo $Language->Phrase("PagerLast") ?>"><span class="icon-first ewIcon"></span></a>'?>
                    <?php } ?>
                    <?php if ((!$a_customers_list->Pager->LastButton->Enabled) && $Language->Phrase("dir") != "rtl") { ?>
                        <?php $var= $var.'<a class="btn btn-default btn-sm disabled" title="<?php echo $Language->Phrase("PagerLast") ?>"><span class="icon-last ewIcon"></span></a>'?>
                    <?php } ?>
				<?php $var= $var.'</div>'?>
				<?php $var= $var.'</div>'?>
				<?php $var= $var.'</div>'?>
				<?php $var= $var.'<span>&nbsp;<?php echo $Language->Phrase("of") ?>&nbsp;<?php echo $a_customers_list->Pager->PageCount ?></span>'?>
				<?php $var= $var.'</div>'?>
				<?php } // end MS_SHOW_PAGENUM_IF_REC_NOT_OVER_PAGESIZE==FALSE ?>
   <?php  return $var; }

   function codhtml2($a_customers_list, $Language){
        $var="";?>
        <?php $var=$var.'<div class="ewPager ewRec">'?>
		    <?php $var= $var. '<span><?php echo $Language->Phrase("Record") ?>&nbsp;<?php echo $a_customers_list->Pager->FromIndex ?>&nbsp;<?php echo $Language->Phrase("To") ?>&nbsp;<?php echo $a_customers_list->Pager->ToIndex ?>&nbsp;<?php echo $Language->Phrase("Of") ?>&nbsp;<?php echo $a_customers_list->Pager->RecordCount ?></span>'?>
			<?php $var= $var.'</div>'?>
   <?php return $var; }
}
?>