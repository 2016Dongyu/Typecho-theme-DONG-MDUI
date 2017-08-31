<?php
/**
 * DONG
 * 
 * @package DONG
 * @author DONGYu
 * @version 1.0
 * @link http://www.dongyu.site
 */
 $this->need('header.php');?>
 
<div class="main" oncontextmenu="return false;">
    <?php if ( false == $this->have()): ?>
    	<div ALIGN="CENTER" style="font-size:15;color:threeddarkshadow;" >
    	没有相关文章哦！<span id="his">5</span>秒后跳转到首页，请稍等...
    	如果您的浏览器不支持跳转,<a style="text-decoration: none" href="<?php $this->options->siteUrl(); ?>"><font color="#FF0000">请点这里</font></a>.
		</div>
	<script LANGUAGE="JavaScript">var time=5;var timelong=0;function diplaytime(){document.all.his.innerHTML=time-timelong;timelong++}function redirect(){window.location.href="<?php $this->options->siteUrl(); ?>"}timer=setInterval('diplaytime()',1000);timer=setTimeout('redirect()',time*1000);</SCRIPT>
</div>
<?php else:?>



	<div class="mdui-db">
		<img width="299" height="54" oncontextmenu="return false;" ondragstart="return false;" src="<?php $this->options->themeUrl(''); ?>images/<?php echo(rand(0,3)) ?>.SVG">
	</div>

	<div class="mdui-container mdui-card mdui-typo mduijg mdui-hoverable mdui-ripple">
		<div class="mdui-textfield" style="padding: 5px 9px 0;">
			<form method="post" action="" style="margin:0;">
				<input class="mdui-textfield-input" type="text" name="s" placeholder="找点什么..."/>
			</form>
  		</div>
	</div>
<div class="mdui-container">
	<?php while($this->next()): ?>
	<div class="mdui-card mdui-typo mduijg mdui-hoverable mdui-ripple" title="<?php $this->title() ?>">
  		<a href="<?php $this->permalink() ?>">
  		<div class="mdui-card-media">
   			 <img oncontextmenu="return false;" ondragstart="return false;" src="<?php echo showThumb($this,null,true); ?>"/>
    		<div class="mdui-card-media-covered mdui-card-media-covered-gradient">
      			<div class="mdui-card-primary">
        			<div class="mdui-card-primary-title">
        				<span class="tit" href=""><?php $this->title() ?></span>
        				<time> © <?php $this->author(); ?>  <?php $this->date('Y-m-d'); ?></time>
        			</div>
      			</div>
    		</div>
  		</div>
  		
  		<div class="mdui-card-actions wz">
   			<?php $this->content('Continue Reading...'); ?>
  		</div>
  		</a>
	</div>


<?php endwhile; ?>
	
	<div class="mdui-row-xs-3 mdui-typo-display-1-opacity" style="margin-top: 10px;"> 
		<div class="mdui-col"> 
				<?php $this->pageLink(
                        '<button class="mdui-color-theme mdui-btn mdui-btn-icon ">
                            <i class="mdui-icon material-icons">arrow_back</i>
                        </button>'); ?>
		</div> 
				<div class="mdui-col mdui-text-center"> </div> 
		<div class="mdui-col"> 
			<?php $this->pageLink(
                        '<button class="mdui-color-theme mdui-btn mdui-btn-icon mdui-float-right">
                            <i class="mdui-icon material-icons">arrow_forward</i>
                        </button>', 'next'); ?>

		</div> 
	</div>
 <?php endif ;?>
 
</div>

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>