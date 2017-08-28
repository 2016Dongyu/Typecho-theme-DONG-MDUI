
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>404 - <?php $this->options->title() ?></title>
    <link href="https://q.qlogo.cn/g?b=qq&nk=774024602@qq.com&s=100" mce_href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <style>
html, body{margin: 0;width: 100%;height: 100%;font-family: PingFang SC,Helvetica Neue,Hiragino Sans GB,Segoe UI,Microsoft YaHei,微软雅黑,sans-serif;-webkit-font-smoothing: antialiased;}
p{margin: 0 0 20px;padding: 0;}
a{text-decoration: none;color: #5097E8;}
.container{display: flex;align-items: center;justify-content: center;height: 100%;width: 100%;}
.section{position: relative;max-width: 1200px;width: 100%;height: 600px;margin: 20px;}
.logo{max-width: 175px;width: 100%;}
.image-rectangle{position: absolute;width: 50%;height: 100%;right: 0;top: 0;z-index: 1;background-color: #76808E;}
.image-square{display: none;}
.word{display: flex;flex-direction: column;justify-content: center;width: 48%;height: 80%;}
.slogan{color: #323A45;font-size: 20px;}
.author-container{display: flex;align-items: center;color: #76808E;font-size: 18px;margin-top: 40px;}
.dash{display: inline-block;width: 40px;height: 1px;background-color: #E3E5E8;margin-right: 6px;}
.footer{position: absolute;bottom: 0;font-size: 14px;color: #76808E;width: 48%;}
.jump{position: absolute;top: 20px;right: 20px;color: white;font-size: 14px;z-index: 2;}
.small{font-size: 12px;}
br{display: block;line-height: 1.5em;margin: 0.75em 0;content:" ";}
@media (max-width: 760px){.container{align-items: flex-start;min-width: 320px;}
.section{position: relative;width: 100%;height: 600px;max-width: 600px;margin: 20px;}
.image-square{display: block;position: relative;width: 100%;margin-top: 50px;}
.image-rectangle{display: none;}
.word{display: block;position: relative;height: auto;width: 100%;margin-top: 20px;border-top: 1px solid #E3E5E8;padding-top: 30px;}
.footer{position: relative;width: 100%;margin-top: 20px;border-top: 1px solid #E3E5E8;padding-top: 20px;padding-bottom: 40px;}
.jump{position: relative;right: 0;top: 10px;float: right;color: #76808E;}} @media (max-width: 400px){.logo{max-width: 140px;}
.jump{top: 5px;}}
    </style>
</head>

<body>
    <div class="container">
        <div class="section">
            <a href="<?php $this->options->siteUrl(); ?>">
                <img class="logo" src="<?php $this->options->themeUrl('images/logo.png'); ?>">
            </a>
            <a class="jump" href="<?php $this->options->siteUrl(); ?>">
                <div>马上回到首页 ></div>
                <div class="small">
                    <span class="remaining" id="his">5</span>S 后自动跳转
                </div>
            </a>
            <div class="word">
                <div class="slogan">
                	<h1>404！</h1>
                	<h4>这里没有你要找的东西，但有人给你留下了一句话：</h4>
                	<p>O while I live to be the ruler of life, not a slave.</p>
                	<p>当我活着时，我要做生命的主宰，而不做它的奴隶。</p></div>
                <div class="author-container">
                    <span class="dash"></span>
                    <span class="author">惠特曼</span>
                </div>
            </div>
            <div class="image-rectangle" style="background-image: url(&quot;https://dn-coding-net-production-pp.qbox.me/6e7c502e-36d8-42a0-9431-76a4b19186c3.png&quot;);"></div>
            <img class="image-square" src="https://dn-coding-net-production-pp.qbox.me/6e7c502e-36d8-42a0-9431-76a4b19186c3.png">
            <div class="footer">

            </div>
        </div>
    </div>
</body>
</html>




 
	<script LANGUAGE="JavaScript">var time=4;var timelong=0;function diplaytime(){document.all.his.innerHTML=time-timelong;timelong++}function redirect(){window.location.href="<?php $this->options->siteUrl(); ?>"}timer=setInterval('diplaytime()',1000);timer=setTimeout('redirect()',time*1000);</SCRIPT>

