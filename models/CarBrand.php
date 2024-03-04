<?php
    namespace app\models;
    use yii\db\ActiveRecord;
    
    class CarBrand extends ActiveRecord
    {
        // This method specifies the name of the database table associated with this model.
        public static function tableName()
            {
                return 'carbrands'; 
            }
        
        // Validation rules for attributes of the Car model.
        public function rules()
            {
                return [
                    [['brand_name'], 'required'],
                    [['brand_name'], 'string', 'max' => 255],
                ];
            }
    }
?>