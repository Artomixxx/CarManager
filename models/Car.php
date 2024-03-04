<?php
    namespace app\models;
    use yii\db\ActiveRecord;
    
    class Car extends ActiveRecord
    {
        // This method specifies the name of the database table associated with this model.
        public static function tableName()
            {
                return 'cars'; 
            }

        // Validation rules for attributes of the Car model.
        public function rules()
            {
                return [
                    [['brand_id', 'model', 'year', 'mileage', 'status'], 'required'],
                    [['brand_id', 'year', 'mileage'], 'integer'],
                    [['model'], 'string', 'max' => 255],
                    [['status'], 'in', 'range' => ['available', 'unavailable']],
                ];
            }
        // Relation between the Car model and the CarBrand model.
        public function getBrand()
            {
                return $this->hasOne(CarBrand::class, ['id' => 'brand_id']);
            }

    }
?>