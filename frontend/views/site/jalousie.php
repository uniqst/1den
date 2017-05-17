<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\helpers\Url;
use frontend\models\Category;


$this->title = 'Жалюзи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
  <h1><?= Html::encode($this->title) ?></h1>
<?php if(Yii::$app->request->get('s')):?>
<?php $cat = Category::find()->where(['name' => Yii::$app->request->get('s')])->all();?>
<?php print_r($cat);?>
<div class="row">
<?php foreach($cat as $ca):?>
<div class="col-md-3 col-sm-4 col-xs-12">
<a href="<?=Url::to(['site/jalousie', 'id' => $ca->id])?>" ><img src="<?=$ca->photo?>" width="100%" /> </a>
  <h2 class="text-center"><?=$cat->name?></h2>
</div>
<?php endforeach;?>
</div>
<?php else:?>
<?php if($desc):?>
 <h2><?=$desc->name?></h2>
 <h2><?=$desc->desc?></h2>
<img src="<?=$desc->photo?>" />
<?php else:?>
<div class="row">
<?php foreach($category as $cat):?>
<div class="col-md-3 col-sm-4 col-xs-12">
<a href="<?=Url::to(['site/jalousie', 'id' => $cat->id])?>" ><img src="<?=$cat->photo?>" width="100%" /> </a>
  <h2 class="text-center"><?=$cat->name?></h2>
</div>
<?php endforeach;?>
</div>
<?php endif;?>
<?php endif;?>

</div>
