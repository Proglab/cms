<?php $this->beginContent('//layouts/'.$this->page->layout); ?>
<div class="heading-3" id="heading">
  <div class="container">
    <h2 class="page-heading">
      <?= $page->title; ?>
    </h2>
  </div><!-- // .container -->
  <div class="bgshadow"></div>
</div>

<div class="main-content sidebar-content" id="sidebar-content">
	<div class="container">
		<div class="row">

			<div class="col-lg-8 col-md-8 single" id="content">
       <!-- Contenu principal début -->
    <?php 
    if (isset($widgets['content']))
    {
        foreach($widgets['content'] as $widget)
        {
            $this->widget($widget->name, array('directory' => $widget->directory, 'content' => $widget->content, 'page' => $this->page, 'widget' => $widget));
        }
    }
    ?>
      <!-- Contenu principal fin -->
			</div><!-- // #content -->
			
      <div class="col-lg-3 col-md-3 top-30-sm top-30-xs col-lg-offset-1 col-md-offset-1 hidden-xs" id="sidebar">
        <!-- Contenu de la sideber début -->
    <?php 
    if (isset($widgets['sidebar']))
    {
        foreach($widgets['sidebar'] as $widget)
        {
            $this->widget($widget->name, array('directory' => $widget->directory, 'content' => $widget->content, 'page' => $this->page, 'widget' => $widget));
        }
    }
    ?>

        <!-- Contenu de la sideber fin -->
			</div><!-- // #sidebar -->

    </div><!-- // .row -->
	</div><!-- // .container -->
</div><!-- // .main-content -->
<div class="clearfix"></div>
<?php $this->endContent(); ?>