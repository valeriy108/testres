<?php

Yii::import('zii.widgets.grid.CGridColumn');

class Validdata extends CGridColumn
{
public $htmlOptions=array('style'=>'width: 140px');
    protected function renderDataCellContent($row, $data)
    {
        
echo '<div class="accordion" id="accordion'.$data->id.'">
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion'.$data->id.'" href="#collapseOne'.$data->id.'">
                  Данні
                </a>
              </div>
              <div id="collapseOne'.$data->id.'" class="accordion-body collapse">
                <div class="accordion-inner">';
    echo '<table style="width:170px;">';    
    echo '<tr>';    
    echo '<td>';    
     echo 'Паспорт'.StudentDocoptions::getDocIcon($data->id,'pass').'<br>';   
     echo 'Информ'.StudentDocoptions::getDocIcon($data->id,'info').'<br>';   
     echo 'Серт'.StudentDocoptions::getDocIcon($data->id,'cert',true).'<br>';   
     echo 'Атест'.StudentDocoptions::getDocIcon($data->id,'atestat').'<br>';   
     echo 'Відзнака'.StudentDocoptions::getDocIcon($data->id,'vidz').'<br>';   
    echo '</td>';    
    echo '<td>';    
     echo 'Льготы'.StudentDocoptions::getDocIcon($data->id,'faci',true).'<br>';   
     echo 'Ос карт'.StudentDocoptions::getDocIcon($data->id,'privcard').'<br>';   
     echo 'Ос карт'.StudentDocoptions::getDocIcon($data->id,'privcard').'<br>';   
     echo 'Диплом'.StudentDocoptions::getDocIcon($data->id,'diplom').'<br>';   
     echo 'Заявки'.StudentDocoptions::getDocIcon($data->id,'reguest',true).'<br>';   
    echo '</td>';    
    echo '</tr>';        
    echo '</table>';    
            echo '</div>
              </div>
            </div>
          </div>';
        
   
    }

}
