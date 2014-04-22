<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
	'Error',
);
?>

<div class="heading-3" id="heading">
  <div class="container">
    <h2 class="page-heading">
      Oups... Y a un soucis... :)
    </h2>
  </div><!-- // .container -->
  <div class="bgshadow"></div>
</div>

<div class="main-content" id="full-width">
  
  <section style="margin-bottom: 350px;">
    <div class="container">
      <h3 class="heading-block heading-style1">
        <span>Error <?php echo $code; ?></span>
      </h3>
      <?php echo CHtml::encode($message); ?>
    </div>
  </section>

 </div>