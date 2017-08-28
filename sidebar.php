
<div class="mdui-drawer mdui-drawer-close" id="drawer" overlay="true">
	<div class="cddb" style="background-image: url(<?php $this->options->themeUrl('images/card.jpg'); ?>)">
  <div class="zz">
    <img class="mdui-img-circle avatar" src="https://q.qlogo.cn/g?b=qq&nk=774024602@qq.com&s=100">
    <div class="qm">
      <div class="zw">
        <div class="mdui-text-color-white-text">
          <b><?php $this->options->title() ?></b>
        </div>
        <div class="mdui-text-color-white-secondary">
         <?php $this->options->description() ?>
        </div>
      </div>
      
        <div class="ant">

         <button id="close" class="dongyucd" style="display: initial;"><i class="mdui-icon material-icons">clear_all</i></button>
        </div>
      
    </div>
  </div>
</div>
<ul class="mdui-list" mdui-collapse="{accordion: true}">


    
    <a href="<?php $this->options->siteUrl(); ?>">
  	<li class="mdui-list-item mdui-ripple">
      <div class="mdui-list-item-content">首页</div>
   </li></a>
   
   


    <li class="mdui-collapse-item">
    <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
      <i class="mdui-list-item-icon mdui-icon material-icons">move_to_inbox</i>
      <div class="mdui-list-item-content">归档</div>
      <i class="mdui-collapse-item-arrow mdui-icon material-icons">keyboard_arrow_down</i>
    </div>
    <ul class="mdui-collapse-item-body mdui-list mdui-list-dense">
    <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=Y年m月')
               ->parse('<li class="mdui-list-item mdui-ripple"><a href="{permalink}">{date}</a></li>'); ?>
    </ul>
  </li>
    <li class="mdui-list-item mdui-ripple">
      <i class="mdui-list-item-icon mdui-icon material-icons">insert_photo</i>
      <div class="mdui-list-item-content">映象</div>
    </li>
    
    


  <li class="mdui-collapse-item">
    <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
      <i class="mdui-list-item-icon mdui-icon material-icons">device_hub</i>
      <div class="mdui-list-item-content">页面分支</div>
      <i class="mdui-collapse-item-arrow mdui-icon material-icons">keyboard_arrow_down</i>
    </div>
    <ul class="mdui-collapse-item-body mdui-list mdui-list-dense">
    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
    <?php while($pages->next()): ?>
    <a<?php if($this->is('page', $pages->slug)): ?> class=""<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>">
    	<li class="mdui-list-item mdui-ripple"><?php $pages->title(); ?></li>

    	</a>
    <?php endwhile; ?>
    </ul>
  </li>

  <li class="mdui-collapse-item">
    <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
      <i class="mdui-list-item-icon mdui-icon material-icons">format_align_left</i>
      <div class="mdui-list-item-content">分类汇总</div>
      <i class="mdui-collapse-item-arrow mdui-icon material-icons">keyboard_arrow_down</i>
    </div>
    <ul class="mdui-collapse-item-body mdui-list mdui-list-dense">
    	
    	 <?php $this->widget('Widget_Metas_Category_List')->to($category); ?>
            <?php while($category->next()): ?>
                   <a href="<?php $category->permalink(); ?>" title="<?php $category->name(); ?>"><li class="mdui-list-item mdui-ripple"><?php $category->name(); ?></li></a>
            <?php endwhile; ?>

    </ul>
  </li>
  

  
  
  
    
  
  
  
  
   <li class="mdui-subheader">Why？</li>
   <a href="mailto:dongyui@qq.com">
    <li class="mdui-list-item mdui-ripple">
      <i class="mdui-list-item-icon mdui-icon material-icons">email</i>
      <div class="mdui-list-item-content">DONGYu</div>
    </li>
   </a>
    <div class="mdui-list-item mdui-ripple">
      <i class="mdui-list-item-icon mdui-icon material-icons">error</i>
      <div class="mdui-list-item-content" mdui-tooltip="{content: '关于没写。。'}">关于</div>
    </div>

</ul>




   


  <div class="mdui-cdfooter">
  <div class="mdui-typo mdui-typo-caption-opacity">
    Powered by <a  target="_blank" href="http://www.typecho.org">TypEcho</a>
     <br>
    Theme - <a  target="_blank" href="https://github.com/2016Dongyu/Typecho-theme-DONG-MDUI">DONG/MDUI</a>



      <!--<img class="mdui-img-fluid" src="images/cc_byncsa.flat.guokr.svg">-->
    
  </div>
</div>
</div>



