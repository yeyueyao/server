<?php /* Smarty version Smarty-3.1.16, created on 2017-10-19 14:38:56
         compiled from "E:\WWW\project\shopcz\shopcz\application\views\home\templates\list.html" */ ?>
<?php /*%%SmartyHeaderCode:2237159e848806ba384-56505937%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a7b29de3299ddefce7863364bd876c7de480190' => 
    array (
      0 => 'E:\\WWW\\project\\shopcz\\shopcz\\application\\views\\home\\templates\\list.html',
      1 => 1507876306,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2237159e848806ba384-56505937',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'upcats' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59e84880708591_08117043',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59e84880708591_08117043')) {function content_59e84880708591_08117043($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>商品列表页</title>
	<link rel="stylesheet" href="public/css/base.css" type="text/css" />
	<link rel="stylesheet" href="public/css/shop_common.css" type="text/css" />
	<link rel="stylesheet" href="public/css/shop_header.css" type="text/css" />
    <link rel="stylesheet" href="public/css/shop_list.css" type="text/css" />
    <script type="text/javascript" src="public/js/jquery.js" ></script>
    <script type="text/javascript" src="public/js/topNav.js" ></script>
    <script type="text/javascript" src="public/js/shop_list.js" ></script>
</head>
<body>
	<!-- Header  -wll-2013/03/24 -->
	<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

	<div class="clear"></div>
	<!-- 面包屑 注意首页没有 -->
	<div class="shop_hd_breadcrumb">
		<strong>当前位置：</strong>
		<span>
			<a href="index.php?p=home&c=index&a=index">首页</a>&nbsp;›&nbsp;
			<a href="index.php?p=home&c=list&a=index">商品分类</a>
			<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['upcats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
				&nbsp;›&nbsp;
				<a href="index.php?p=home&c=list&a=index&cat_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['cat_name'];?>
</a>
			<?php } ?>
		</span>
	</div>
	<div class="clear"></div>
	<!-- 面包屑 End -->

	<!-- Header End -->

	<!-- List Body 2013/03/27 -->
	<div class="shop_bd clearfix">
		<div class="shop_bd_list_left clearfix">
			<!-- 左边商品分类 -->
			<div class="shop_bd_list_bk clearfix">
				<div class="title">商品分类</div>
				<div class="contents clearfix">
					<dl class="shop_bd_list_type_links clearfix">
						<dt><strong>女装</strong></dt>
						<dd>
							<span><a href="">风衣</a></span>
							<span><a href="">长袖连衣裙</a></span>
							<span><a href="">毛呢连衣裙</a></span>
							<span><a href="">半身裙</a></span>
							<span><a href="">小脚裤</a></span>
							<span><a href="">加绒打底裤</a></span>
							<span><a href="">牛仔裤</a></span>
							<span><a href="">打底衫</a></span>
							<span><a href="">情侣装</a></span>
							<span><a href="">棉衣</a></span>
							<span><a href="">毛呢大衣</a></span>
							<span><a href="">毛呢短裤</a></span>
						</dd>
					</dl>
				</div>
			</div>
			<!-- 左边商品分类 End -->

			<!-- 热卖推荐商品 -->
			<div class="shop_bd_list_bk clearfix">
				<div class="title">热卖推荐商品</div>
				<div class="contents clearfix">
					<ul class="clearfix">
						
						<li class="clearfix">
							<div class="goods_name"><a href="">Gap经典弹力纯色长袖T恤|000891347|原价149元</a></div>
							<div class="goods_pic"><span class="goods_price">¥ 279.00 </span><a href=""><img src="public/images/89a6d6466b00ae32d3c826b9ec639084.jpg_small.jpg" /></a></div>
							<div class="goods_xiaoliang">
								<span class="goods_xiaoliang_link"><a href="">去看看</a></span>
								<span class="goods_xiaoliang_nums">已销售<strong>99</strong>笔</span>
							</div>
						</li>

						<li class="clearfix">
							<div class="goods_name"><a href="">Gap经典弹力纯色长袖T恤|000891347|原价149元</a></div>
							<div class="goods_pic"><span class="goods_price">¥ 279.00 </span><a href=""><img src="public/images/89a6d6466b00ae32d3c826b9ec639084.jpg_small.jpg" /></a></div>
							<div class="goods_xiaoliang">
								<span class="goods_xiaoliang_link"><a href="">去看看</a></span>
								<span class="goods_xiaoliang_nums">已销售<strong>99</strong>笔</span>
							</div>
						</li>

						<li class="clearfix">
							<div class="goods_name"><a href="">Gap经典弹力纯色长袖T恤|000891347|原价149元</a></div>
							<div class="goods_pic"><span class="goods_price">¥ 279.00 </span><a href=""><img src="public/images/89a6d6466b00ae32d3c826b9ec639084.jpg_small.jpg" /></a></div>
							<div class="goods_xiaoliang">
								<span class="goods_xiaoliang_link"><a href="">去看看</a></span>
								<span class="goods_xiaoliang_nums">已销售<strong>99</strong>笔</span>
							</div>
						</li>

					</ul>
				</div>
			</div>
			<!-- 热卖推荐商品 -->
			<div class="clear"></div>

			<!-- 浏览过的商品 -->
			<div class="shop_bd_list_bk clearfix">
				<div class="title">浏览过的商品</div>
				<div class="contents clearfix">
					<ul class="clearfix">
						
						<li class="clearfix">
							<div class="goods_name"><a href="">Gap经典弹力纯色长袖T恤|000891347|原价149元</a></div>
							<div class="goods_pic"><span class="goods_price">¥ 279.00 </span><a href=""><img src="public/images/89a6d6466b00ae32d3c826b9ec639084.jpg_small.jpg" /></a></div>
							<div class="goods_xiaoliang">
								<span class="goods_xiaoliang_link"><a href="">去看看</a></span>
								<span class="goods_xiaoliang_nums">已销售<strong>99</strong>笔</span>
							</div>
						</li>

						<li class="clearfix">
							<div class="goods_name"><a href="">Gap经典弹力纯色长袖T恤|000891347|原价149元</a></div>
							<div class="goods_pic"><span class="goods_price">¥ 279.00 </span><a href=""><img src="public/images/89a6d6466b00ae32d3c826b9ec639084.jpg_small.jpg" /></a></div>
							<div class="goods_xiaoliang">
								<span class="goods_xiaoliang_link"><a href="">去看看</a></span>
								<span class="goods_xiaoliang_nums">已销售<strong>99</strong>笔</span>
							</div>
						</li>

						<li class="clearfix">
							<div class="goods_name"><a href="">Gap经典弹力纯色长袖T恤|000891347|原价149元</a></div>
							<div class="goods_pic"><span class="goods_price">¥ 279.00 </span><a href=""><img src="public/images/89a6d6466b00ae32d3c826b9ec639084.jpg_small.jpg" /></a></div>
							<div class="goods_xiaoliang">
								<span class="goods_xiaoliang_link"><a href="">去看看</a></span>
								<span class="goods_xiaoliang_nums">已销售<strong>99</strong>笔</span>
							</div>
						</li>

					</ul>
				</div>
			</div>
			<!-- 浏览过的商品 -->

		</div>

		<div class="shop_bd_list_right clearfix">
			<!-- 条件筛选框 -->
			<div class="module_filter">
				<div class="module_filter_line">
					<dl>
						<dt>尺码：</dt>
						<dd>
							<span><a href="">XXS</a></span>
							<span><a href="">XS</a></span>
							<span><a href="">S</a></span>
							<span><a href="">M</a></span>
							<span><a href="">L</a></span>
							<span><a href="">XL</a></span>
							<span><a href="">XXL</a></span>
							<span><a href="">XXXL</a></span>
							<span><a href="">加大XXXL</a></span>
							<span><a href="">均码</a></span>
						</dd>
					</dl>

					<dl>
						<dt>品牌：</dt>
						<dd>
							<span><a href="">彪马</a></span>
							<span><a href="">安踏</a></span>
							<span><a href="">阿迪达斯</a></span>
							<span><a href="">李宁</a></span>
							<span><a href="">匡威</a></span>
							<span><a href="">耐克</a></span>
							<span><a href="">卡帕</a></span>
							<span><a href="">鸿星尔克</a></span>
							<span><a href="">沃特</a></span>
							<span><a href="">垃圾</a></span>
						</dd>
					</dl>

					<dl>
						<dt>款式：</dt>
						<dd>
							<span><a href="">长袖</a></span>
							<span><a href="">短袖</a></span>
							<span><a href="">无袖</a></span>
							<span><a href="">两件套</a></span>
							<span><a href="">宽松</a></span>
							
						</dd>
					</dl>

					<dl>
						<dt>材质：</dt>
						<dd>
							<span><a href="">纯棉</a></span>
							<span><a href="">真丝</a></span>
							<span><a href="">聚酯</a></span>
							<span><a href="">棉+氨纶</a></span>
							<span><a href="">卡莱</a></span>
							<span><a href="">人造棉</a></span>
							<span><a href="">其它</a></span>
						</dd>
					</dl>


				</div>
				<div class="bottom"></div>
			</div>
			<!-- 条件筛选框 -->

			<!-- 显示菜单 -->
			<div class="sort-bar">
				<div class="bar-l"> 
		            <!-- 查看方式S -->
		            <div class="switch"><span class="selected"><a title="以方格显示" ecvalue="squares" nc_type="display_mode" class="pm" href="javascript:void(0)">大图</a></span><span style="border-left:none;"><a title="以列表显示" ecvalue="list" nc_type="display_mode" class="lm" href="javascript:void(0)">列表</a></span></div>
		            <!-- 查看方式E --> 
		            <!-- 排序方式S -->
		            <ul class="array">
		              <li class="selected"><a title="默认排序" onclick="javascript:dropParam(['key','order'],'','array');" class="nobg" href="javascript:void(0)">默认</a></li>
		              <li><a title="点击按销量从高到低排序" onclick="javascript:replaceParam(['key','order'],['sales','desc'],'array');" href="javascript:void(0)">销量</a></li>
		              <li><a title="点击按人气从高到低排序" onclick="javascript:replaceParam(['key','order'],['click','desc'],'array');" href="javascript:void(0)">人气</a></li>
		              <li><a title="点击按信用从高到低排序" onclick="javascript:replaceParam(['key','order'],['credit','desc'],'array');" href="javascript:void(0)">信用</a></li>
		              <li><a title="点击按价格从高到低排序" onclick="javascript:replaceParam(['key','order'],['price','desc'],'array');" href="javascript:void(0)">价格</a></li>
		            </ul>
		            <!-- 排序方式E --> 
		            <!-- 价格段S -->
		            <div class="prices"> <em>¥</em>
		              <input type="text" value="" class="w30">
		              <em>-</em>
		              <input type="text" value="" class="w30">
		              <input type="submit" value="确认" id="search_by_price">
		            </div>
		            <!-- 价格段E --> 
		          </div>
			</div>
			<div class="clear"></div>
			<!-- 显示菜单 End -->

			<!-- 商品列表 -->
			<div class="shop_bd_list_content clearfix">
				<ul>
					<li>
						<dl>
							<dt><a href=""><img src="public/images/21151da3bdefc6d9a7120c991fe59800.jpg_small.jpg" /></a></dt>
							<dd class="title"><a href="">OCIAIZO春装水洗做旧短外套复古磨白短款牛仔外套春01C1417</a></dd>
							<dd class="content">
								<span class="goods_jiage">￥<strong>249.00</strong></span>
								<span class="goods_chengjiao">最近成交5笔</span>
							</dd>
						</dl>
					</li>
				</ul>
			</div>
			<div class="clear"></div>
			<div class="pagination"> 
				<ul><li><span>首页</span></li>
					<li><span>上一页</span></li>
					<li><span class="currentpage">1</span></li>
					<li><span>下一页</span></li>
					<li><span>末页</span></li>
				</ul> 
			</div>
			<!-- 商品列表 End -->


		</div>
	</div>
	<!-- List Body End -->

	<!-- Footer - wll - 2013/3/24 -->
	<div class="clear"></div>
	<div class="shop_footer">
            <div class="shop_footer_link">
                <p>
                    <a href="">首页</a>|
                    <a href="">招聘英才</a>|
                    <a href="">广告合作</a>|
                    <a href="">关于ShopCZ</a>|
                    <a href="">关于我们</a>
                </p>
            </div>
            <div class="shop_footer_copy">
                <p>Copyright 2004-2013 itcast Inc.,All rights reserved.</p>
            </div>
        </div>
	<!-- Footer End -->
	
</body>
</html><?php }} ?>
