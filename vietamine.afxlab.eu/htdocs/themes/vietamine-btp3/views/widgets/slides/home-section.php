<?php
$cs = Yii::app()->clientScript;
$cs->registerScriptFile('/themes/vietamine-btp3/js/afx/slides/home-slider.js',CClientScript::POS_END);

?>
<div class="rev_slider_wrapper fullscreen-container">
  <div id="rev_slider" class="rev_slider fullscreenbanner" style="display:none;">
    <!-- SLIDER START -->
    <?php $this->renderFile(Yii::getPathOfAlias('webroot.themes.vietamine-btp3.views.widgets.slides') . DIRECTORY_SEPARATOR . 'datas.php') ?>
    <!-- SLIDER END -->
  </div>
</div>