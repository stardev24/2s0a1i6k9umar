
<div class="uk-width-1">
<a href="<?php echo Yii::app()->request->baseUrl; ?>/merchant/voucher/Do/Add" class="uk-button"><i class="fa fa-plus"></i> <?php echo Yii::t("default","Add New")?></a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/merchant/voucher" class="uk-button"><i class="fa fa-list"></i> <?php echo Yii::t("default","List")?></a>
</div>

<form id="frm_table_list" method="POST" >
<input type="hidden" name="action" id="action" value="VoucherList">
<input type="hidden" name="tbl" id="tbl" value="voucher">
<input type="hidden" name="clear_tbl"  id="clear_tbl" value="clear_tbl">
<input type="hidden" name="whereid"  id="whereid" value="voucher_id">
<input type="hidden" name="slug" id="slug" value="voucher/Do/Add">
<table id="table_list" class="uk-table uk-table-hover uk-table-striped uk-table-condensed">
  <!--<caption>Merchant List</caption>-->
   <thead>
        <tr>
			<th width="5%"><input type="checkbox" id="chk_all" class="chk_all"></th>
			 <th width="5%"><?php echo Yii::t('default',"Voucher name")?></th>
			 <th  width="5%"><?php echo Yii::t('default',"Nos. Of Voucher")?></th>				 
			 <th width="5%"><?php echo Yii::t('default',"Type")?></th>
			 <th width="5%"><?php echo Yii::t('default',"Discount")?></th>			 
			 <th width="5%"><?php echo Yii::t('default',"Voucher Status")?></th>			 
			 <th width="5%"><?php echo Yii::t('default',"Date Created")?></th>
        </tr>
    </thead>
    <tbody>   
    </tbody>
</table>
<div class="clear"></div>
</form>