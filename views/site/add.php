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
                    <div class="col-lg-3">
                        <?= Html::submitButton('Add Auto', ['class'=>'btn btn-primary']);?>
                    </div>
                    <div class="col-lg-2">
                        <a href=<?php echo yii::$app->homeUrl;?> class=" btn btn-primary"> Go Back </a>
                    </div>
                </div>
            </div>
        </div>
        <?php ActiveForm::end() ?>

    </div>
</div>
