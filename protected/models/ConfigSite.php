<?php

/**
 * This is the model class for table "galuz".
 *
 * The followings are the available columns in table 'galuz':
 * @property integer $id
 * @property integer $code
 * @property string $caption
 * @property integer $facultet_id
 * @property integer $year
 */
class ConfigSite extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Galuz the static model class
     */
    

    public function getYear() {
        $year = array(
            '2012' => '2012',
            '2011' => '2011',
            '2010' => '2010',
            '2009' => '2009',
            '2008' => '2008',
        );
        return $year;
    }

  

    

    
    public function getPrintDocMag() {
        $doc = array(
            '2-zayava' => 'Заява №2',
            'dogovir' => 'Договір',
            'okartka' => 'Особова картка',
            'rozpiska' => 'Розписка',
        );
        return $doc;
    }

    public function getCalendar($id) {
        $caln = array(
            'yearRange' => '1985:2015',
            'maxDate' => '0'
        );
        return $caln[$id];
    }

    

}