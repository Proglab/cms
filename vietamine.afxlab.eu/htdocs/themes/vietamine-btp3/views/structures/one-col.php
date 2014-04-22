<?php $this->beginContent('//layouts/'.$this->page->layout); ?>
<div class="heading-3" id="heading">
  <div class="container">
    <h2 class="page-heading">
      <?= $page->title; ?>
    </h2>
  </div><!-- // .container -->
  <div class="bgshadow"></div>
</div>

<div class="main-content" id="main-content">
	<?php 
	if (isset($widgets['content']))
	{
		foreach($widgets['content'] as $widget)
		{
                    $this->widget($widget->name, array('directory' => $widget->directory, 'content' => $widget->content, 'page' => $this->page, 'widget' => $widget));
		}
	}
	?>
</div>
<?php $this->endContent(); ?>