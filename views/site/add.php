<?php
    use yii\helpers\html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;
    use app\models\CarBrand;
/** @var yii\web\View $this */

$this->title = 'CarManager';
?>
<div class="site-index">
    <h1>Add New Auto</h1>
    <div class="body-content">
    <?php $form = ActiveForm::begin()?>
        <div class="row">
            <div class="form-control">
                <div class="col-lg-6">
                    <!-- Dropdown list for selecting the car brand, populated with data from the CarBrand model. -->
                    <?= $form->field($car, 'brand_id')->dropDownList(
                            ArrayHelper::map(CarBrand::find()->all(), 'id', 'brand_name'),
                            ['prompt' => 'Select Brand']
                        ) ?>
                    <!-- Text fields for entering the car parameters. -->                   
                    <?= $form->field($car, 'model');?>
                    <?= $form->field($car, 'year');?>
                    <?= $form->field($car, 'mileage');?>
                    <!-- Dropdown list for selecting the status of the car (available/unavailable). -->
                    <?= $form->field($car, 'status')->dropDownList(
                        ['available' => 'Available', 'unavailable' => 'Unavailable'],
                        ['prompt' => 'Select Status']
                    ) ?>
                    <div class="d-flex justify-content-between"> <!-- Flex container to align items -->
                        <!-- Submit button to add the new car record. -->
                        <?= Html::submitButton('Add Auto', ['class'=>'btn btn-primary flex-fill mr-2']);?> <!-- Flex item with margin-right -->
                        <!-- Homepage button. -->
                        <a href="<?= Yii::$app->homeUrl;?>" class="btn btn-primary flex-fill">Go Back</a> <!-- Flex item -->
                    </div>
                </div>
            </div>
        </div>
        <?php ActiveForm::end() ?>

    </div>
</div>
