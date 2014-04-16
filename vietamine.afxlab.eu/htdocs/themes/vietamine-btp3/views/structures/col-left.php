<?php $this->beginContent('//layouts/'.$this->page->layout); ?>
<div class="heading-3" id="heading">
  <div class="container">
    <h2 class="page-heading">
      <?= $this->pageTitle; ?>
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
            $this->widget($widget->name, array('directory' => $widget->directory, 'content' => $widget->content, 'page' => $this->page));
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
            $this->widget($widget->name, array('directory' => $widget->directory, 'content' => $widget->content, 'page' => $this->page));
        }
    }
    ?>
        
        <div class="widget">
          <h4 class="widget-title">
            <span>Compte</span>
          </h4>
          <div class="widget-content">
            <div class="list-group">
              <a href="#" class="list-group-item active">Profile</a>
              <a href="#" class="list-group-item">Mot de passe</a>
              <a href="#" class="list-group-item">Panier</a>
              <a href="#" class="list-group-item">Commandes</a>
            </div>

            <div class="list-group">
              <a href="#" class="list-group-item">Catalogue</a>
              <a href="#" class="list-group-item">Utilisateurs</a>
              <a href="#" class="list-group-item">Commandes</a>
              <a href="#" class="list-group-item">Slideshow</a>
            </div>

          </div><!-- // .tags-inner -->
        </div><!-- // .widget.tags -->

        <!-- Contenu de la sideber fin -->
			</div><!-- // #sidebar -->

    </div><!-- // .row -->
	</div><!-- // .container -->
</div><!-- // .main-content -->
<div class="clearfix"></div>
<?php $this->endContent(); ?>