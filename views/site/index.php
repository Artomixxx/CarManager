<?php
    use yii\helpers\html;
/** @var yii\web\View $this */

$this->title = 'CarManager';
?>
<div class="site-index">
    <?php if(yii::$app->session->hasFlash('message')):?>
        <div class="alert alert-dismissible alert-success">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <?php echo yii::$app->session->getFlash('message');?>
        </div>
    <?php endif;?>

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">CarManager</h1>
    </div>
    <div class="row">
        <span style="margin-bottom: 20px;"><?= Html::a('Add', ['/site/add'], ['class' => 'btn btn-primary'])?></span>
    </div>
    <div class="body-content">

        <div class="row">
        <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">Brand</th>
            <th scope="col">Model</th>
            <th scope="col">Year of manufacture</th>
            <th scope="col">Mileage</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if(count($cars)>0): ?>
                <?php foreach($cars as $car): ?>
            <tr class="table-active">
            <th scope="row"><?php echo $car->brand->brand_name;?></th>
            <td><?php echo $car->model;?></td>
            <td><?php echo $car->year;?></td>
            <td><?php echo $car->mileage;?></td>
            <td><?php echo $car->status;?></td>
            <td>
                <span><?= Html::a('Update', ['update', 'id' => $car->id], ['class' => 'btn btn-secondary']) ?></span>
            </td>
            </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td> No Records Found </td>
                </tr>
            <?php endif; ?>
        </tbody>
        </table>
        </div>

    </div>
</div>
