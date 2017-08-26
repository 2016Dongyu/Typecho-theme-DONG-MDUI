<footer class="mdui-m-t-5">
    <div class="mdui-color-theme">
    	<div class="mdui-container">
    		<div class="mdui-text-center">
    			<div class="mdui-col mdui-text-center" style="padding: 20px 0;"> 
    				<p><?php says(); ?></p>
           &copy; 2013-<?php echo date('Y'); ?> <?php $this->options->title() ?><span id="sitetime"></span> </div>
    		</div>
    	</div>
    </div>
    
</footer>


<script language=javascript>
    function siteTime(){
        window.setTimeout("siteTime()", 1000);
        var seconds = 1000;
        var minutes = seconds * 60;
        var hours = minutes * 60;
        var days = hours * 24;
        var years = days * 365;
        var today = new Date();
        var todayYear = today.getFullYear();
        var todayMonth = today.getMonth()+1;
        var todayDate = today.getDate();
        var todayHour = today.getHours();
        var todayMinute = today.getMinutes();
        var todaySecond = today.getSeconds();
        var t1 = Date.UTC(<?php $this->options->siteTime(); ?>); //北京时间2016-12-1 00:00:00
        var t2 = Date.UTC(todayYear,todayMonth,todayDate,todayHour,todayMinute,todaySecond);
        var diff = t2-t1;
        var diffYears = Math.floor(diff/years);
        var diffDays = Math.floor((diff/days)-diffYears*365);
        var diffHours = Math.floor((diff-(diffYears*365+diffDays)*days)/hours);
        var diffMinutes = Math.floor((diff-(diffYears*365+diffDays)*days-diffHours*hours)/minutes);
        var diffSeconds = Math.floor((diff-(diffYears*365+diffDays)*days-diffHours*hours-diffMinutes*minutes)/seconds);
        document.getElementById("sitetime").innerHTML=" 已无力运行 "+diffYears+" 年 "+diffDays+" 天 "
		<?php if ($this->options->siteTime2 == 'able'): ?>
+diffHours+" 小时 "+diffMinutes+" 分钟 "+diffSeconds+" 秒"
<?php endif; ?>;
    }
    siteTime();
</script>



<script src="<?php $this->options->themeUrl('js/instantclick.min.js'); ?>"></script>
<script data-no-instant>InstantClick.init();</script>

<script src="<?php $this->options->themeUrl('js/mdui.min.js'); ?>" type="text/javascript"></script> 
<script src="<?php $this->options->themeUrl('js/jquery-3.2.1.min.js'); ?>" type="text/javascript"></script> 
<script type="text/javascript" src="<?php $this->options->themeUrl('js/dongyu.js'); ?>" ></script>
</div>
</body>




</html>
