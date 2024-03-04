<?php
    use yii\helpers\html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;
    use app\models\CarBrand;
/** @var yii\web\View $this */

$this->title = 'CarManager';
?>
<div class="site-index">
    <h1>Update Auto-info</h1>
    <div class="body-content">
    <?php $form = ActiveForm::begin()?>
        <div class="row">
            <!-- Display the form to change car parameters -->
            <div class="form-control">
                <div class="col-lg-6">
                    <?= $form->field($car, 'brand_id')->dropDownList(
                            ArrayHelper::map(CarBrand::find()->all(), 'id', 'brand_name'),
                            ['prompt' => 'Select Brand']
                        ) ?>                   
                    <?= $form->field($car, 'model');?>
                    <?= $form->field($car, 'year');?>
                    <?= $form->field($car, 'mileage');?>
                    <?= $form->field($car, 'status')->dropDownList(
                        ['available' => 'Available', 'unavailable' => 'Unavailable'],
                        ['prompt' => 'Select Status']
                    ) ?>
                     <!-- Buttons to submit changes and go back -->
                    <div class="d-flex justify-content-between"> <!-- Flex container -->
                        <?= Html::submitButton('Update Auto', ['class'=>'btn btn-primary flex-fill mr-2']);?> <!-- Flex item with margin-right -->
                        <a href="<?= Yii::$app->homeUrl;?>" class="btn btn-primary flex-fill">Go Back</a> <!-- Flex item -->
                    </div>
                </div>
            </div>
        </div>
        <?php ActiveForm::end() ?>

    </div>
</div>
