<?php
/**
 * Gallery 映像
 * @package custom
 */
?>
<?php $this->need('header.php'); ?>

<div class="mdui-container">
	
	

	
  <a class="mdui-color-theme mdui-ripple" mdui-dialog="{target: '#example-1'}"><img src="<?php $this->options->themeUrl(); ?>images/picHD_11.png" /></a>

  <div class="mdui-dialog" id="example-1" style="">
    	<img src="<?php $this->options->themeUrl(); ?>images/picHD_11.png" />
    </div>
   



<Div class="main mdui-container m2" oncontextmenu="return false;">
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
  <div class="mdui-card-actions mdui-typo" style="color: rgba(0,0,0,.8);padding: 20px;">
  	<?php $this->content(); ?>
  </div>

</div>

<div class="mdui-hoverable mdui-shadow-1" style="background-color: #ffffff;color: rgba(0,0,0,.8);padding: 20px;">
<?php if($this->allow('comment')){$this->need('comments.php');}?>
</div>
</div>



	
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>