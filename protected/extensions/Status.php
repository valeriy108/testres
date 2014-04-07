	<style>
		.style
			{
				width: 5px;
			}
	</style>
		
	<?php
	
			Yii::import('zii.widgets.grid.CGridColumn');
			Yii::import('zii.widgets.jui.CJuiDatePicker');
		class Status extends CGridColumn
			{
				public $htmlOptions=array('style'=>'width: 5px');
				
				
protected function renderDataCellContent($row, $data)
			{
			 
 		
			if($data->status==1) {echo "К";} else {echo "Л";}
		
 
			    
    }
	
  
}
