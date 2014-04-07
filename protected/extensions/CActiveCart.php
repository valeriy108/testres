<?php

Yii::import('zii.widgets.grid.CGridColumn');

class CActiveCart extends CGridColumn
{
public $htmlOptions=array('style'=>'width: 140px');
    protected function renderDataCellContent($row, $data)
    {
    echo CHtml::link('Картка абітуріента', array('card/view','id'=>$data->id),array('class'=>'btn'));
   
    }

}
