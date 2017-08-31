<!DOCTYPE html>
<html>
<head>
<title><?php $this->options->title(); ?><?php $this->archiveTitle(", ", ' - '); ?></title>
<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
<?php $this->header('generator=&template=&pingback=&xmlrpc=&wlw='); ?>
<link href="<?php $this->options->logoUrl(); ?>" mce_href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
<?php if ($this->options->jscsscdn == 'able'): ?>
<link href="https://cdn.bootcss.com/mdui/0.3.0/css/mdui.min.css" rel="stylesheet">
<script src="https://cdn.bootcss.com/mdui/0.3.0/js/mdui.min.js"></script>
<?php endif; ?>
<?php if ($this->options->jscsscdn == 'disable'): ?>		
<link href="<?php $this->options->themeUrl('css/mdui.min.css'); ?>" rel="stylesheet" type="text/css">
<script src="<?php $this->options->themeUrl('js/mdui.min.js'); ?>" type="text/javascript"></script> 
<?php endif; ?>
<link href="<?php $this->options->themeUrl('css/dongyu.css'); ?>"  rel="stylesheet" type="text/css">
</head>
<body class="mdui-appbar-with-toolbar  mdui-theme-primary-blue mdui-theme-accent-pink mdui-loaded ">
	<button id="toggle" class="dongyucd" style="display: initial;"><i class="mdui-icon material-icons">menu</i></button>
<lamu mdui-tooltip="{content: '去顶部'}" onclick="goToWhere(0)" class="top" id="lamu"><img src="<?php $this->options->themeUrl('images/1.png'); ?>" onmouseover="this.src='<?php $this->options->themeUrl('images/2.png'); ?>'" ondragstart="return false" onmouseout="this.src='<?php $this->options->themeUrl('images/1.png'); ?>'" id="audioBtn"></lamu>
	