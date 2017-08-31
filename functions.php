<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

/* 后台设置 */
function themeConfig($form) {
	echo '<style>.col-tb-8{font-family: "Helvetica Neue", Helvetica, Microsoft Yahei, sans-serif;background-color: #F7F7F7;}a:hover{text-decoration: none;}sm{margin: .5em 0 0;color: #999;font-size: .92857em;font-weight: initial;}</style>
	<h2>DONG主题 · 设置</h2>
	<p> 
	<a href="https://github.com/2016Dongyu/Typecho-theme-DONG-MDUI" >💪帮助&支持</a> &nbsp;
    <a href="https://github.com/2016Dongyu/Typecho-theme-DONG-MDUI/issues" target="_blank"> ❗ 建议&反馈</a> &nbsp;
    <a href="https://github.com/2016Dongyu/Typecho-theme-DONG-MDUI/" target="_blank">⭐前去GITHUB获取更新状态</a>
    </p>
    <HR color=#ccc SIZE=1>';
		
		
		
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, 'https://q.qlogo.cn/g?b=qq&nk=774024602@qq.com&s=100', _t('站点LOGO地址<sm> - 这里将适用站点ico和抽屉式导航的头像</br>如：<code>https://q.qlogo.cn/g?b=qq&nk=774024602@qq.com&s=100</code></sm>'), _t(''));
	$form->addInput($logoUrl->addRule('xssCheck', _t('请不要在图片链接中使用特殊字符')));
	
	$ctdhl = new Typecho_Widget_Helper_Form_Element_Radio('ctdhl',
        array('able' => _t('启用'),
            'disable' => _t('禁止'),
        ),
        'disable', _t('抽屉式导航名字签名自定义<sm> - 默认禁止，启用后可以自定义抽屉式导航栏的头像和签名。</sm>'), _t(''));
    $form->addInput($ctdhl);
   		$ndtx = new Typecho_Widget_Helper_Form_Element_Text('ndtx', NULL, 'https://q.qlogo.cn/g?b=qq&nk=774024602@qq.com&s=100', _t(' <sm>● 自定义抽屉式导航头像 - 先得启用上方的“抽屉式导航自定义”</sm>'), _t(''));
		$form->addInput($ndtx->addRule('xssCheck', _t('请不要使用特殊字符')));
    	$ndname = new Typecho_Widget_Helper_Form_Element_Text('ndname', NULL, 'DONGYu', _t(' <sm>● 自定义抽屉式导航名字 - 先得启用上方的“抽屉式导航自定义”</sm>'), _t(''));
		$form->addInput($ndname->addRule('xssCheck', _t('请不要使用特殊字符')));
		$ndqm = new Typecho_Widget_Helper_Form_Element_Text('ndqm', NULL, 'DOOOOOOOOOY', _t(' <sm>● 自定义抽屉式导航签名 - 先得启用上方的“抽屉式导航自定义”</sm>'), _t(''));
		$form->addInput($ndqm->addRule('xssCheck', _t('请不要使用特殊字符')));
		
	$sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('guidang' => _t('显示归档'),
    'yingxiang' => _t('显示映像'),
    'yemian' => _t('显示页面分支'),
    'fenlei' => _t('显示分类汇总'),
    'links' => _t('显示友情链接'),
    'zhaowo' => _t('显示联系我'),
    'about' => _t('显示关于'),
    'xuke' => _t('CC许可证')),
    array('guidang', 'yingxiang', 'yemian', 'fenlei', 'zhaowo', 'about', 'links','xuke'), _t('抽屉式导航菜单自定义<sm> - 根据自己喜爱设置</sm>'));
    
    $form->addInput($sidebarBlock->multiMode());
    
    
    

	$yxurl = new Typecho_Widget_Helper_Form_Element_Text('yxurl', NULL, 'Gallery.html', _t(' <sm>● 映像页面设置 - 在这里设置抽屉式导航的映像链接</sm>'), _t(''));
	$form->addInput($yxurl->addRule('xssCheck', _t('请不要在图片链接中使用特殊字符')));
	
	$uemail = new Typecho_Widget_Helper_Form_Element_Text('uemail', NULL, 'dongyui@qq.com', _t(' <sm>● 联系邮箱设置 - 在这里设置抽屉式导航的联系邮箱链接</sm>'), _t(''));
	$form->addInput($uemail->addRule('xssCheck', _t('请不要在图片链接中使用特殊字符')));
	
	$abouturl = new Typecho_Widget_Helper_Form_Element_Text('abouturl', NULL, 'About.html', _t(' <sm>● 关于页面设置 - 在这里设置抽屉式导航的关于页面链接</sm>'), _t(''));
	$form->addInput($abouturl->addRule('xssCheck', _t('请不要在图片链接中使用特殊字符')));



	$siteTime = new Typecho_Widget_Helper_Form_Element_Text('siteTime', NULL, '2017,05,20,00,00,00', _t('站点开通时间 <sm> - 将显示在网站底部（默认显示年和天）</br>格式为：<code>2017,05,20,00,00,00</code></sm>'), _t(''));
    $form->addInput($siteTime);
	
	$siteTime2 = new Typecho_Widget_Helper_Form_Element_Radio('siteTime2',
        array('able' => _t('启用'),
            'disable' => _t('禁止'),
        ),
        'disable', _t(' <sm>● 站点开通日期全显 - 默认禁止，启用后效果为：‘X年X天X时X分X秒’</sm>'), _t(''));
    $form->addInput($siteTime2);
    
    $pjax = new Typecho_Widget_Helper_Form_Element_Radio('pjax',
        array('able' => _t('启用'),
            'disable' => _t('禁止'),
        ),
        'disable', _t('Instantclick - Pjax<sm> - 默认禁止，启用后加快你的网页访问速度！</br>注:如果点击浏览器的后退后点击抽屉式导航的按钮，抽屉式导航将无效！'), _t(''));
    $form->addInput($pjax);
    
    $jscsscdn = new Typecho_Widget_Helper_Form_Element_Radio('jscsscdn',
        array('able' => _t('启用'),
            'disable' => _t('禁止'),
        ),
        'disable', _t('CSS JS - cdn<sm> - 默认禁止，启用后某些CSS和JS将使用Bootcdn.cn的CDN。</br>CND文件有:<code>mdui.min.js、instantclick.min.js、mdui.min.css</code>'), _t(''));
    $form->addInput($jscsscdn);
	
	
    
}



/**
 * 解析内容以实现附件加速
 * @access public
 * @param string $content 文章正文
 * @param Widget_Abstract_Contents $obj
 */
function parseContent($obj) {
    $options = Typecho_Widget::widget('Widget_Options');
    if (!empty($options->src_add) && !empty($options->cdn_add)) {
        $obj->content = str_ireplace($options->src_add, $options->cdn_add, $obj->content);
    }
    echo trim($obj->content);
}


/*文章阅读次数统计*/
function get_post_view($archive) {
    $cid = $archive->cid;
    $db = Typecho_Db::get();
    $prefix = $db->getPrefix();
    if (!array_key_exists('views', $db->fetchRow($db->select()->from('table.contents')))) {
        $db->query('ALTER TABLE `' . $prefix . 'contents` ADD `views` INT(10) DEFAULT 0;');
        echo 0;
        return;
    }
    $row = $db->fetchRow($db->select('views')->from('table.contents')->where('cid = ?', $cid));
    if ($archive->is('single')) {
        $views = Typecho_Cookie::get('extend_contents_views');
        if (empty($views)) {
            $views = array();
        } else {
            $views = explode(',', $views);
        }
        if (!in_array($cid, $views)) {
            $db->query($db->update('table.contents')->rows(array('views' => (int)$row['views'] + 1))->where('cid = ?', $cid));
            array_push($views, $cid);
            $views = implode(',', $views);
            Typecho_Cookie::set('extend_contents_views', $views); //记录查看cookie
            
        }
    }
    echo $row['views'];
}


/*Typecho 24小时发布文章数量*/
function get_recent_posts_number($days = 1,$display = true)
{
$db = Typecho_Db::get();
$today = time() + 3600 * 8;
$daysago = $today - ($days * 24 * 60 * 60);
$total_posts = $db->fetchObject($db->select(array('COUNT(cid)' => 'num'))
->from('table.contents')
->orWhere('created < ? AND created > ?', $today,$daysago)
->where('type = ? AND status = ? AND password IS NULL', 'post', 'publish'))->num;
if($display) {
echo $total_posts;
} else {
return $total_posts;
}
}

//热门文章（评论最多）
function rmcp($days = 30,$num = 5){
$defaults = array(
'before' => '',
'after' => '',
'xformat' => '<a class="list-group-item visible-lg" title="{title}" href="{permalink}" rel="bookmark"><i class="fa  fa-book"></i> {title}</a> 
	<a class="list-group-item visible-md" title="{title}" href="{permalink}" rel="bookmark"><i class="fa  fa-book"></i> {title}</a>'
);
$time = time() - (24 * 60 * 60 * $days);
$db = Typecho_Db::get();
$sql = $db->select()->from('table.contents')
->where('created >= ?', $time)
->where('type = ?', 'post')
->limit($num)
->order('commentsNum',Typecho_Db::SORT_DESC);
$result = $db->fetchAll($sql);
echo $defaults['before'];
foreach($result as $val){
$val = Typecho_Widget::widget('Widget_Abstract_Contents')->filter($val);
echo str_replace(array('{permalink}', '{title}', '{commentsNum}'), array($val['permalink'], $val['title'], $val['commentsNum']), $defaults['xformat']);
}
echo $defaults['after'];
}

//随机文章
function theme_random_posts(){
$defaults = array(
'number' => 6,
'before' => '',
'after' => '',
'xformat' => '<a class="list-group-item visible-lg" title="{title}" href="{permalink}" rel="bookmark"><i class="fa  fa-book"></i> {title}</a> 
	<a class="list-group-item visible-md" title="{title}" href="{permalink}" rel="bookmark"><i class="fa  fa-book"></i> {title}</a>'
);
$db = Typecho_Db::get();
 
$sql = $db->select()->from('table.contents')
->where('status = ?','publish')
->where('type = ?', 'post')
->where('created <= unix_timestamp(now())', 'post') //添加这一句避免未达到时间的文章提前曝光
->limit($defaults['number'])
->order('RAND()');
 
$result = $db->fetchAll($sql);
echo $defaults['before'];
foreach($result as $val){
$val = Typecho_Widget::widget('Widget_Abstract_Contents')->filter($val);
echo str_replace(array('{permalink}', '{title}'),array($val['permalink'], $val['title']), $defaults['xformat']);
}
echo $defaults['after'];
}



/*随机2<?php says(); ?>*/
function random_str() {
    $poems = "我觉得，我这辈子最灿烂的笑容，大概都奉献给电脑屏幕了。
比希望更炙热，比绝望更深邃，这就是爱啊。
我愿意给你自己所有的快乐，你愿意分担我一半的难过吗？
将愿望倾入不愿忘却的回忆中⋯⋯
北溟有鱼，其名为鲲。鲲之大，一锅炖不下。
化而为鸟，其名为鹏。鹏之大，两个烧烤架。
一个秘制，一个微辣。来瓶雪花，勇闯天涯。
就算只有六十亿分之一的机会，我们还是会邂逅。
面对就好，去经历就好。
All for one, one for all.
想要试着去相互接近，但最后还是无法敞开心扉，结果就是擦肩而过⋯⋯
看似美好的东西，往往藏着陷阱。
可是就算我们通一千次短信，我们各自的心，大概也只会相互靠近一厘米吧。";
    $poems = explode("\n", $poems);
    return $poems[rand(0, count($poems) - 1)];
}
function says() {
    $says = random_str();
    echo $says;
}

//表情




//缩略图调用
function showThumb($obj,$size=null,$link=false){
    preg_match_all( "/<[img|IMG].*?src=[\'|\"](.*?)[\'|\"].*?[\/]?>/", $obj->content, $matches );
    $thumb = '';
    $options = Typecho_Widget::widget('Widget_Options');
    $attach = $obj->attachments(1)->attachment;
    if (isset($attach->isImage) && $attach->isImage == 1){
        $thumb = $attach->url;
        if(!empty($options->src_add) && !empty($options->cdn_add)){
            $thumb = str_ireplace($options->src_add,$options->cdn_add,$thumb);
        }
    }elseif(isset($matches[1][0])){
        $thumb = $matches[1][0];
        if(!empty($options->src_add) && !empty($options->cdn_add)){
            $thumb = str_ireplace($options->src_add,$options->cdn_add,$thumb);
        }
    }
    if(empty($thumb) && empty($options->default_thumb)){
		$thumb= $options->themeUrl .'/images/thumb/' . rand(1, 20) . '.jpg';
		//去掉下面4行双斜杠 启用BING美图随机缩略图
		$str = file_get_contents('http://cn.bing.com/HPImageArchive.aspx?format=js&idx='.rand(1, 30).'&n=1');
        $array = json_decode($str);
		$imgurl = $array->{"images"}[0]->{"urlbase"};
        $thumb = '//i'.rand(0, 2).'.wp.com/cn.bing.com'.$imgurl.'_1920x1080.jpg?resize=960,540';
		
        return $thumb;
    }else{
        $thumb = empty($thumb) ? $options->default_thumb : $thumb;
    }
    if($link){
        return $thumb;
    }
}


?>
