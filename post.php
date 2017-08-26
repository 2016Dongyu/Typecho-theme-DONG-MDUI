<?php $this->need('header.php'); ?>


<Div class="main mdui-container" oncontextmenu="return false;">
<div class="mdui-card mdui-typo mduijg mdui-hoverable">
  <div class="mdui-card-media">
    <img oncontextmenu="return false;" ondragstart="return false;" src="<?php echo showThumb($this,null,true); ?>"/>
    <div class="mdui-card-media-covered mdui-card-media-covered-gradient">
      <div class="mdui-card-primary">
        <div class="mdui-card-primary-title">
        	<span class="tit"><?php $this->title() ?></span>
        	<time> © <?php $this->author(); ?>  <?php $this->date('Y-m-d'); ?></time></div>
      </div>
    </div>
  </div>
  <div class="mdui-card-actions mdui-typo">
  	<?php $this->content(); ?>
  </div>

</div>
<?php if($this->allow('comment')){$this->need('comments.php');}?>
  
</div>



	
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>