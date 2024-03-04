<?php
    namespace app\models;
    use yii\db\ActiveRecord;
    
    class Car extends ActiveRecord
    {
        // private $brand_id;
        // private $model;
        // private $year;
        // private $mileage;
        // private $status;
        public static function tableName()
            {
                return 'cars'; 
            }


        public function rules()
            {
                return [
                    [['brand_id', 'model', 'year', 'mileage', 'status'], 'required'],
                    [['brand_id', 'year', 'mileage'], 'integer'],
                    [['model'], 'string', 'max' => 255],
                    [['status'], 'in', 'range' => ['available', 'unavailable']],
                ];
            }
        
        public function getBrand()
            {
                return $this->hasOne(CarBrand::class, ['id' => 'brand_id']);
            }

    }
?>