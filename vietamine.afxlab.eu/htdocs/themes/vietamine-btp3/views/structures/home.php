<?php $this->beginContent('//layouts/'.$this->page->layout); ?>

<div id="content">
    <?php 
        foreach($widgets['content'] as $widget)
        {
            $this->widget($widget->name, array('directory' => $widget->directory, 'content' => $widget->content, 'page' => $this->page));
        }
    ?>
</div><!-- content -->
<?php $this->endContent(); ?>