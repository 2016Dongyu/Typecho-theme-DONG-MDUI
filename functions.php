<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

/* 后台设置 */
function themeConfig($form) {
	//header部分
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
	$form->addInput($logoUrl->addRule('xssCheck', _t('请不要在图片链接中使用特殊字符')));
	$logoTxt = new Typecho_Widget_Helper_Form_Element_Text('logoTxt', NULL, NULL, _t('居中标题'), _t('Banner正中展示的简单标题'));
	$form->addInput($logoTxt);

	$bannerimg = new Typecho_Widget_Helper_Form_Element_Text('bannerimg', NULL, NULL, _t('顶部Banner图片'), _t('顶部Banner图片链接'));
    $form->addInput($bannerimg);

	$site_bw = new Typecho_Widget_Helper_Form_Element_Radio('site_bw',
        array('able'=>_t('开启'),'disable'=>_t('关闭')),
        'disable',
        _t("站点黑白模式"),
        _t("开启后站点呈现为黑白模式")
        );
    $form->addInput($site_bw);
	
	

	$siteTime = new Typecho_Widget_Helper_Form_Element_Text('siteTime', NULL, '2017,05,20,00,00,00', _t('3.站点开通时间 <span class="description">- 将显示在网站底部（默认显示年和天）</br>格式为：<code>2017,05,20,00,00,00</code></span>'), _t(''));
    $form->addInput($siteTime);
	
	$siteTime2 = new Typecho_Widget_Helper_Form_Element_Radio('siteTime2',
        array('able' => _t('启用'),
            'disable' => _t('禁止'),
        ),
        'disable', _t('--站点开通日期全显'), _t('默认禁止，启用后效果为：‘X年X天X时X分X秒’<HR color=#ccc SIZE=1>'));
    $form->addInput($siteTime2);
	

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
