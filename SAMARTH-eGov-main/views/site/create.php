<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm; 

$this->title = "Coral Crud Application";
?>

<style>
    .site-index {
        max-width: 800px;
        margin: 0 auto;
    }

    h1 {
        color: #3c8dbc;
        text-align: center;
    }

    .body-content {
        margin-top: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    /* Style for form input fields */
    .form-control {
        border-radius: 4px;
        box-shadow: none;
    }

    /* Style for "Create Post" button */
    .btn-create-post {
        background-color: #3c8dbc;
        color: #fff;
        border: 1px solid #3c8dbc;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .btn-create-post:hover {
        background-color: #2a6496;
        border: 1px solid #2a6496;
        color: #fff;
    }

    /* Style for "Go back" button */
    .btn-go-back {
        background-color: #5cb85c;
        color: #fff;
        border: 1px solid #4cae4c;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .btn-go-back:hover {
        background-color: #4cae4c;
        border: 1px solid #4cae4c;
        color: #fff;
    }
</style>

<div class="site-index"> 
    <h1>Create Your New Post</h1>
    <div class="body-content">
        <?php $form = ActiveForm::begin() ?>
        <div class="row">
            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form->field($post, 'Title')->textInput(['class' => 'form-control']) ?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-6">
                    <?php $items = ['e-commerce' => 'e-commerce', 'CMS' => 'CMS', 'MVC' => 'MVC']; ?>
                    <?= $form->field($post, 'categories')->dropDownList($items, ['prompt' => 'Select', 'class' => 'form-control']) ?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form->field($post, 'details')->textarea(['rows' => '6', 'class' => 'form-control']) ?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form->field($post, 'price')->textInput(['class' => 'form-control']) ?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form->field($post, 'supplier')->textInput(['class' => 'form-control']) ?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-offset-3 col-lg-6">
                    <?= Html::submitButton('Create Post', ['class' => 'btn btn-create-post']) ?> 
                    <a href="<?= Yii::$app->homeUrl ?>" class="btn btn-go-back"> Go back</a>
                </div>
            </div>
        </div>
        <?php ActiveForm::end() ?>
    </div>
</div>
