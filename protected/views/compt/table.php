<?=ClassModel::model()->findbyPk($_GET['id'])->name; ?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
    
    'dataProvider'=> $dataProvider,
   
    'columns'=>array(
        array(
		'name'=>'id', 
		'header'=>'Фамилия',
		'value'=>'Particp::model()->findbyPk($data->id_particp)->lastname',
		),
        array(
		'name'=>'id', 
		'header'=>'Имя',
		'value'=>'Particp::model()->findbyPk($data->id_particp)->firstname',
		),
		
		array(
		'name'=>'id', 
		'header'=>'1 попытка',
		'value'=>'Compt::model()->find(array(
					
                            "condition" => "id_particp_model=:id_particp_model and 	attempt=1",
                            "params" => array(":id_particp_model" => $data->id),
					
					))->time_laps',
		),
		array(
		'name'=>'id', 
		'header'=>'2 попытка',
		'value'=>'Compt::model()->find(array(
					
                            "condition" => "id_particp_model=:id_particp_model and 	attempt=2",
                            "params" => array(":id_particp_model" => $data->id),
					
					))->time_laps',
		),
		array(
		'name'=>'id', 
		'header'=>'Техосмотр',
		'value'=>'Compt::model()->find(array(
					
                            "condition" => "id_particp_model=:id_particp_model and 	attempt=3",
                            "params" => array(":id_particp_model" => $data->id),
					
					))->tehosmotr',
		),
		
		array(
		'name'=>'id', 
		'header'=>'Лучшая скорость',
		'value'=>'Compt::model()->find(array(
					
                            "condition" => "id_particp_model=:id_particp_model and 	attempt=2",
                            "params" => array(":id_particp_model" => $data->id),
					
					))->best_lap',
		),
		array(
			
            'class'=>'CButtonColumn',
			'header'=>'Результат',
            'buttons'=>array(
                'preview'=>array(
                    'label'=>'<img src="/images/kedit.png">',
                    'url'=>'Yii::app()->createUrl("compt/create", array("id"=>$data->id,"table_id"=>$_GET["id"]))',
                    'click'=>$js_preview,
                ),
            ),
			 'template' => '{preview}',
	),
    ),
)); ?>
<?=  CHtml::link("Печать",array('documents/index','id'=>$_GET['id'],'doc'=>'popitki'));?>
