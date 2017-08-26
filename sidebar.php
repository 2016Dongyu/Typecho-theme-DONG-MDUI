
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

  <ul class="mdui-list">
  	<a href="<?php $this->options->siteUrl(); ?>">
  	<li class="mdui-list-item mdui-ripple">
      <div class="mdui-list-item-content">首页</div>
   </li></a>
    <li class="mdui-list-item mdui-ripple">
      <i class="mdui-list-item-icon mdui-icon material-icons">move_to_inbox</i>
      <div class="mdui-list-item-content">归档</div>
    </li>
    <li class="mdui-list-item mdui-ripple">
      <i class="mdui-list-item-icon mdui-icon material-icons">insert_photo</i>
      <div class="mdui-list-item-content">映象</div>
    </li>
    <li class="mdui-list-item mdui-ripple">
      <i class="mdui-list-item-icon mdui-icon material-icons">send</i>
      <div class="mdui-list-item-content">Sent mail</div>
    </li>
    <li class="mdui-list-item mdui-ripple">
      <i class="mdui-list-item-icon mdui-icon material-icons">drafts</i>
      <div class="mdui-list-item-content">Drafts</div>
    </li>
    <li class="mdui-subheader">Subheader</li>
    <li class="mdui-list-item mdui-ripple">
      <i class="mdui-list-item-icon mdui-icon material-icons">email</i>
      <div class="mdui-list-item-content">DONGYu</div>
    </li>
    <li class="mdui-list-item mdui-ripple" title="联系我">
      <i class="mdui-list-item-icon mdui-icon material-icons">error</i>
      <div class="mdui-list-item-content">关于</div>
    </li>
  </ul>

  <div class="mdui-cdfooter">
  <div class="mdui-typo mdui-typo-caption-opacity">
    Powered by <a href="">TypEcho</a>
     <br>
    Theme - <a href="">DONGYu/MDUI</a>
    <br>
    <span>
      Copyright ©
      <span year="">2013 - 2017</span>
      DONGYu
    </span>

      <!--<img class="mdui-img-fluid" src="images/cc_byncsa.flat.guokr.svg">-->
    
  </div>
</div>
</div>



