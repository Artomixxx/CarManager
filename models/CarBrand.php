<?php
    namespace app\models;
    use yii\db\ActiveRecord;
    
    class CarBrand extends ActiveRecord
    {
        public static function tableName()
            {
                return 'carbrands'; 
            }
        public function rules()
            {
                return [
                    [['brand_name'], 'required'],
                    [['brand_name'], 'string', 'max' => 255],
                ];
            }
    }
?>