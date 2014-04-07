<div id="text_input_print">
    <?
    $site_name='http://'.$_SERVER['HTTP_HOST'];?>
<?php echo $this->renderPartial('_'.$document, array('model' => $model,'particm'=>$particm));?>
</div>
<form method="POST" action="index.php?r=documents/index/id/<?= $_GET['id'];?>">
    <input name="text_export_print" id='text_export_print' type="hidden" value="">
    <input type="submit" value="Печать">
</form>
<script>
    $('#text_export_print').val($("#text_input_print").html());
</script>