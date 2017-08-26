console.log("\n %c Welcome to DONGYu.SIte %c http://www.dongyu.site \n\n","color: #fff; background: #333; padding:5px 0;","background: #2196f3; color: #fff; padding:5px 0;");

var goToWhere = function (where)  
        {  
            var me = this;  
            me.site = [];  
            me.sleep = me.sleep ? me.sleep : 16;  
            me.fx = me.fx ? me.fx : 6;  
            clearInterval (me.interval);  
            var dh = document.documentElement.scrollHeight || document.body.scrollHeight;  
            var height = !!where ? dh : 0;  
            me.interval = setInterval (function ()  
            {  
                var top = document.documentElement.scrollTop || document.body.scrollTop;  
                var speed = (height - top) / me.fx;  
                if (speed === me.site[0])  
                {  
                    window.scrollTo (0, height);  
                    clearInterval (me.interval);  
                }  
                window.scrollBy (0, speed);  
                me.site.unshift (speed);  
            }, me.sleep);  
        };


var inst = new mdui.Drawer('#drawer');

// cd按钮
document.getElementById('toggle').addEventListener('click', function () {
  inst.toggle();
});
document.getElementById('close').addEventListener('click', function () {
  inst.close();
});

// event
var drawer = document.getElementById('drawer');
drawer.addEventListener('open.mdui.drawer', function () {;});
drawer.addEventListener('opened.mdui.drawer', function () {;});
drawer.addEventListener('close.mdui.drawer', function () {;});
drawer.addEventListener('closed.mdui.drawer', function () {;});


