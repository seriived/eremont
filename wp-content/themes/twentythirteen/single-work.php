<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<table width="100%" border="0" cellspacing="0" cellpadding="0" class="main_table">
<tbody>
<tr>
<td width="23%" valign="top">
	<table width="100%" border="0" cellspacing="0" cellpadding="0"
	       style="background:#e1d6b3 url(<?php echo get_template_directory_uri() . '/images/bg_left_stenka.gif'; ?>) repeat-y left">
		<tbody>
		<tr>
			<td valign="top">
				<div align="center" style="padding-top:11px; height:100px;">
					<!-- -->
				</div>
				<?php get_template_part('left', 'menu') ?>
				<div align="right">
					<div style="position:relative; width:1px;" align="right">
						<div style="position:absolute; top: -17px; left:2px;"><img
								src="<?php echo get_template_directory_uri() ?>/images/vn_ugol_plintus.gif"
								alt=""></div>
					</div>
				</div>
			</td>
			<td width="1" valign="top" bgcolor="#c6b784"><img
					src="<?php echo get_template_directory_uri() ?>/images/logotip_line_right.gif"
					alt="" width="1" height="74"></td>
		</tr>
		</tbody>
	</table>
	<table width="100%" border="0" cellspacing="0" cellpadding="0"
	       style="background:url(<?php echo get_template_directory_uri() . '/images/vn_acc_bg_01.gif' ?>) repeat-x top;">
		<tbody>
		<tr>
			<td style="background:url(<?php echo get_template_directory_uri() . '/images/vn_acc_bg_02.jpg'; ?>) no-repeat left top;">
				<div style="min-height:50px;">
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tbody>
						<tr>
							<td width="147"><img
									src="<?php echo get_template_directory_uri() ?>/images/vn_ac_01.gif"
									alt="" width="147" height="49" border="0"></td>
							<td style="background:url(<?php echo get_template_directory_uri() . '/images/vn_ac_02.gif' ?>)">
								<img
									src="<?php echo get_template_directory_uri() ?>/images/vn_ac_02.gif"
									width="1" height="49" border="0"></td>
							<td width="83"><img
									src="<?php echo get_template_directory_uri() ?>/images/vn_ac_03.gif"
									alt="" width="83" height="49" border="0"></td>
						</tr>
						</tbody>
					</table>
					<table width="100%" border="0" cellspacing="0" cellpadding="0"
					       style="background:#ffffff url(<?php echo get_template_directory_uri() . '/images/vn_ac_04.gif' ?>) repeat-y left;">
						<tbody>
						<tr>
							<td valign="top"
							    style="background:url(<?php echo get_template_directory_uri() . '/images/vn_ac_08.gif' ?>) repeat-x bottom;">
								<div
									style="min-height:74px; background:url(<?php echo get_template_directory_uri() . '/images/vn_ac_07.gif' ?>) no-repeat left bottom;"
									class="popravka_dlya_ie">

									<div style="position:relative; left: 44px;">
										Нам 17 лет! И мы Вам <font color="#f16522">дарим </font><b>дизайн-проект</b>!
										Полный возврат стоимости дизайн-проекта на конечной стадии ремонта.
										<div style="padding:5px 0 15px 0;"><a
												href="http://www.eremont.ru/news/28825/">подробнее</a> <a
												href="http://www.eremont.ru/news/28825/"><img
													src="<?php echo get_template_directory_uri() ?>/images/acciya_but_01.gif"
													alt="" width="15" height="14" border="0" align="absmiddle"></a>
										</div>
									</div>
								</div>
							</td>
							<td width="83" valign="bottom"
							    style="background:url(<?php echo get_template_directory_uri() . '/images/vn_ac_06.gif'; ?>);">
								<img
									src="<?php echo get_template_directory_uri() ?>/images/vn_ac_09.gif"
									alt="" width="83" height="74" border="0"></td>
						</tr>
						</tbody>
					</table>
					<div><img
							src="<?php echo get_template_directory_uri() ?>/images/vn_ac_10.gif"
							alt="" width="209" height="16" border="0"></div>
				</div>
				<div class="search_01"><img
						src="<?php echo get_template_directory_uri() ?>/images/nad_01.gif"
						alt="" width="99" height="13" border="0"></div>
				<form action="<?php echo site_url(); ?>" method="GET">
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tbody>
						<tr>
							<td width="17" valign="top"><img
									src="<?php echo get_template_directory_uri() ?>/images/pixel.gif"
									alt="" width="17" height="1"></td>
							<td width="8" valign="top">
								<div class="ie_input"><img
										src="<?php echo get_template_directory_uri() ?>/images/input_01.gif"
										alt="" width="8" height="19"></div>
							</td>
							<td width="137" valign="top"><input name="s" type="text" class="input_01"
							                                    maxlength="255"></td>
							<td width="8" valign="top">
								<div class="ie_input"><img
										src="<?php echo get_template_directory_uri() ?>/images/input_02.gif"
										alt="" width="8" height="19"></div>
							</td>
							<td width="8" valign="top"><img
									src="<?php echo get_template_directory_uri() ?>/images/pixel.gif"
									alt="" width="8" height="1"></td>
							<td width="23" align="right" valign="top"><input type="image"
							                                                 src="<?php echo get_template_directory_uri() ?>/images/but_ok.gif"
							                                                 style="padding:0; margin:0;"></td>
							<td valign="top"><img
									src="<?php echo get_template_directory_uri() ?>/images/pixel.gif"
									alt="" width="20" height="1"></td>
						</tr>
						</tbody>
					</table>
				</form>
				<div class="link_map"><a href="http://www.eremont.ru/search/map.html" class="a_map">карта сайта</a>
				</div>
				<br>
				<a href="http://www.eremont.ru/remont/insur.html"><img height="119" border="0" width="176"
				                                                       src="<?php echo get_template_directory_uri() ?>/images/3year.jpg"
				                                                       title="3 года гарантии на работы, ремонт застрахован"
				                                                       alt="гарантии 3 года, страхование ремонта"
				                                                       align="middle"
				                                                       style="margin-right: 35px; margin-left:25px;"></a>
				<br>

				<div style="width: 230px; margin-left: 15px;" class="line_news">
				</div>
				<div style="width: 255px; margin-left: 15px;">
					<div class="price-index" style="padding: 15px 25px;">
						<p>Цены на дизайн интерьера</p>
						<?php dynamic_sidebar('price_design_left'); ?>
						<a href="<?php echo site_url(); ?>/price">подробнее &#8594;</a> <br>
						<br>

						<noindex>
							<p>Стоимость ремонта квартир</p>
							<?php dynamic_sidebar('price_remont_left'); ?>
							<a href="<?php echo site_url(); ?>/cost">подробнее &#8594;</a> <br>
							<br>
						</noindex>

					</div>
					<?php
					$args = array(
						'posts_per_page' => 1,
						'offset' => 0,
						'category' => 'rubrics',
						'orderby' => 'post_date',
						'order' => 'DESC',
						'post_type' => 'work',
						'post_status' => 'publish',
						'suppress_filters' => true
					);
					$posts_array = get_posts($args, true);
					$large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id($posts_array[0]->ID), 'large');
					?>
					<div class="line_new_razdel">
						<img id="bxid_971829" height="20" width="156"
						     src="<?php echo get_template_directory_uri() ?>/images/elit.gif">
					</div>
					<div style="padding-left: 25px; height: 90px; margin-top: 10px;">
						<a id="bxid_177374" href="<?php echo $posts_array[0]->guid ?>">
							<img id="bxid_29" border="0" src="<?php echo $large_image_url[0]; ?>" height="82"
							     width="154"></a></div>
					<div style="padding: 18px 25px 0px;">
						<?php echo $posts_array[0]->post_excerpt; ?>
						<div style="padding: 5px 0pt 15px;">
							<a id="bxid_750411" href="<?php echo $posts_array[0]->guid ?>">подробнее</a>
							<a id="bxid_602296" href="http://www.eremont.ru/complex/">
								<img id="bxid_308421"
								     src="<?php echo get_template_directory_uri() ?>/images/acciya_but_01.gif"
								     align="absmiddle" border="0" height="14" width="15">
							</a>
						</div>
					</div>
					<br>
				</div>
			</td>
		</tr>
		</tbody>
	</table>
</td>
<td width="77%" valign="top">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tbody>
	<tr>
		<td width="40%" valign="top"
		    style="background:url(<?php echo get_template_directory_uri() . '/images/shapka_02.gif' ?>) repeat-x top;">
			<img
				src="<?php echo get_template_directory_uri() ?>/images/shapka_01.gif"
				alt="" width="83" height="82"></td>
		<td width="405" valign="top">
			<!--<img src="/bitrix/templates/eremont_main_2007/images_tpl/ny/vn_shpaka_01_2012.jpg" alt="" width="405" height="227">-->
			<img
				src="<?php echo get_template_directory_uri() ?>/images/vn_shpaka_01_2012.jpg"
				alt="" width="405" height="227">
		</td>
		<td width="20%" valign="top" align="center"
		    style="background:url(<?php echo get_template_directory_uri() . '/images/vn_shpaka_04_2012.gif' ?>) repeat-x top; background-color: transparent;">
			<div align="center" style="width:1px;">
				<div style="position:relative;" align="center">
					<div id="kolonka2012"><img
							src="<?php echo get_template_directory_uri() ?>/images/vn_kolonka.gif"
							alt=""></div>
				</div>
			</div>
			<div align="left">
				<div style="width:1px; position:relative;">
					<div id="cat2012">
						<!--<a href="/about/"><img src="/bitrix/templates/eremont_main_2007/images_tpl/ny/cat.gif" alt="о компании" border="0"></a>--><a
							href="http://www.eremont.ru/about/"><img
								src="<?php echo get_template_directory_uri() ?>/images/cat.gif"
								alt="о компании" border="0"></a></div>
				</div>
			</div>

<!--			--><?php //get_template_part('_part', 'advantage') ?>
		</td>
		<td width="107" align="center" valign="top">
			<div>
				<img
					src="<?php echo get_template_directory_uri() ?>/images/vn_shpaka_02_2_2012.jpg"
					alt="" width="107" height="227">
			</div>
		</td>
		<td width="20%" valign="top"
		    style="background:url(<?php echo get_template_directory_uri() . '/images/vn_shpaka_05_2012.gif' ?>) repeat-x top;">
			<img src="<?php echo get_template_directory_uri() ?>/images/pixel.gif"
			     width="1" height="1" alt=""></td>
		<td width="172" valign="top">
			<div align="right">
				<img
					src="<?php echo get_template_directory_uri() ?>/images/vn_shpaka_03_2012.jpg"
					width="172" height="227">
			</div>
		</td>
	</tr>
	</tbody>
</table>
<div align="right" style="height:45px;"><img
		src="<?php echo get_template_directory_uri() ?>/images/vn_shpaka_06.jpg" alt=""
		width="47" height="45"></div>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tbody>
	<tr>
		<td width="35%" valign="top">
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tbody>
				<tr>
					<td width="7%"><img
							src="<?php echo get_template_directory_uri() ?>/images/pixel.gif"
							alt="" width="18" height="1"></td>
					<td>





						<div style="height:20px;"><!-- --></div>
					</td>
					<td width="15%">&nbsp;</td>
				</tr>
				</tbody>
			</table>
		</td>
		<table width="100%" border="0" cellspacing="0" cellpadding="0" id="vn_text_main_container">
		<tbody><tr>
		<td width="11%"><img src="/bitrix/templates/eremont_main_2007/images_tpl/pixel.gif" width="40" height="1" border="0" alt=""></td>
		<td style="padding: 5px 0 10px 0;">

		<p class="chain"><a href="/">Главная страница</a>&nbsp;&gt;&nbsp;<a href="/gallery/">Галерея работ</a>&nbsp;&gt;&nbsp;<a href="/gallery/">Квартиры</a>&nbsp;&gt;&nbsp;<a href="/gallery/36/36782/">Дизайн и ремонт квартиры на ул.Талалихина</a></p>
		<h1>Квартира на ул. Талалихина</h1>

		<p></p><p class="gallery-date" align="right">Опубликовано: 13 апреля 2013</p>
		<p><strong>Фотографии помещений:</strong></p>
		<ul class="gallery-1">
			<li id="folder2128"><a onclick="gallery_sh('folder2128','gallery2128','galleryall2128','iLoad|Гостиная');" href="javascript:void(0);">Гостиная</a></li><li id="folder2126"><a onclick="gallery_sh('folder2126','gallery2126','galleryall2126','iLoad|Спальня');" href="javascript:void(0);">Спальня</a></li><li id="folder2127"><a onclick="gallery_sh('folder2127','gallery2127','galleryall2127','iLoad|Детская для мальчика');" href="javascript:void(0);">Детская для мальчика</a></li><li id="folder2123"><a onclick="gallery_sh('folder2123','gallery2123','galleryall2123','iLoad|Детская для девочек');" href="javascript:void(0);">Детская для девочек</a></li><li id="folder2129"><a onclick="gallery_sh('folder2129','gallery2129','galleryall2129','iLoad|Кухня');" href="javascript:void(0);">Кухня</a></li><li id="folder2125"><a onclick="gallery_sh('folder2125','gallery2125','galleryall2125','iLoad|Коридор');" href="javascript:void(0);">Коридор</a></li><li id="folder2122"><a onclick="gallery_sh('folder2122','gallery2122','galleryall2122','iLoad|Гостевой с/у');" href="javascript:void(0);">Гостевой с/у</a></li><li id="folder2124"><a onclick="gallery_sh('folder2124','gallery2124','galleryall2124','iLoad|Основной с/у');" href="javascript:void(0);">Основной с/у</a></li></ul><div class="clear">&nbsp;</div>
		<a name="gallery"></a><table width="100%" border="0" cellpadding="0" cellspacing="0" class="gallery-1-table"><tbody><tr><td>
					<div id="gallery" class="gallery"><a id="gallery2128" rel="iLoad|Дизайн и ремонт квартиры на ул.Талалихина" title="Ремонт и дизайн квартиры, Вира-АртСтрой" href="/upload/iblock/811/257_0827.jpg"><img src="/upload/iblock/f23/257_0827.jpg" class="img_center" alt="" width="150" height="150"><span></span></a><a class="dn" id="galleryall2128" rel="iLoad|Дизайн и ремонт квартиры на ул.Талалихина" title="Дизайн проект и ремонт квартиры от Вира-АртСтрой" href="/upload/iblock/4e2/257_0833.jpg"><img src="/upload/iblock/b96/257_0833.jpg" class="img_center" alt="" width="150" height="150"><span></span></a><a class="dn" id="galleryall2128" rel="iLoad|Дизайн и ремонт квартиры на ул.Талалихина" title="Дизайн интерьера и ремонт квартир, Вира-АртСтрой" href="/upload/iblock/bae/257_0836.jpg"><img src="/upload/iblock/d15/257_0836.jpg" class="img_center" alt="" width="150" height="150"><span></span></a><a class="dn" id="galleryall2128" rel="iLoad|Дизайн и ремонт квартиры на ул.Талалихина" title="Дизайн проект и ремонт квартиры от Вира-АртСтрой" href="/upload/iblock/1a8/257_0842.jpg"><img src="/upload/iblock/e96/257_0842.jpg" class="img_center" alt="" width="150" height="150"><span></span></a><a class="dn" id="galleryall2128" rel="iLoad|Дизайн и ремонт квартиры на ул.Талалихина" title="Дизайн интерьера от Вира-АртСтрой" href="/upload/iblock/82d/257_0848.jpg"><img src="/upload/iblock/190/257_0848.jpg" class="img_center" alt="" width="150" height="150"><span></span></a><a class="dn" id="galleryall2128" rel="iLoad|Дизайн и ремонт квартиры на ул.Талалихина" title="Дизайн-проект и ремонт, Вира-Артстрой" href="/upload/iblock/fcd/257_0860.jpg"><img src="/upload/iblock/e89/257_0860.jpg" class="img_center" alt="" width="150" height="150"><span></span></a><a class="dn" id="galleryall2128" rel="iLoad|Дизайн и ремонт квартиры на ул.Талалихина" title="Дизайн-проект интерьера квартиры, Вира-АртСтрой" href="/upload/iblock/77e/257_0863.jpg"><img src="/upload/iblock/1a3/257_0863.jpg" class="img_center" alt="" width="150" height="150"><span></span></a><a id="gallery2126" rel="iLoad|Дизайн и ремонт квартиры на ул.Талалихина" title="Ремонт и дизайн квартиры, Вира-АртСтрой" href="/upload/iblock/afa/257_0266.jpg"><img src="/upload/iblock/b82/257_0266.jpg" class="img_center" alt="" width="150" height="150"><span></span></a><a class="dn" id="galleryall2126" rel="iLoad|Дизайн и ремонт квартиры на ул.Талалихина" title="Дизайн проект и ремонт квартиры от Вира-АртСтрой" href="/upload/iblock/02b/257_0257.jpg"><img src="/upload/iblock/879/257_0257.jpg" class="img_center" alt="" width="150" height="150"><span></span></a><a class="dn" id="galleryall2126" rel="iLoad|Дизайн и ремонт квартиры на ул.Талалихина" title="Дизайн-проект квартиры, Вира-АртСтрой" href="/upload/iblock/e6a/257_0284.jpg"><img src="/upload/iblock/432/257_0284.jpg" class="img_center" alt="" width="150" height="150"><span></span></a><a class="dn" id="galleryall2126" rel="iLoad|Дизайн и ремонт квартиры на ул.Талалихина" title="Дизайн-проект квартиры, Вира-АртСтрой" href="/upload/iblock/098/257_0290.jpg"><img src="/upload/iblock/abb/257_0290.jpg" class="img_center" alt="" width="150" height="150"><span></span></a><a id="gallery2127" rel="iLoad|Дизайн и ремонт квартиры на ул.Талалихина" title="Дизайн интерьера квартиры от Вира-АртСтрой" href="/upload/iblock/7ed/257_0434.jpg"><img src="/upload/iblock/c81/257_0434.jpg" class="img_center" alt="" width="150" height="150"><span></span></a><a class="dn" id="galleryall2127" rel="iLoad|Дизайн и ремонт квартиры на ул.Талалихина" title="Дизайн-проект интерьера квартиры, Вира-АртСтрой" href="/upload/iblock/bdf/257_0449.jpg"><img src="/upload/iblock/c90/257_0449.jpg" class="img_center" alt="" width="150" height="150"><span></span></a><a class="dn" id="galleryall2127" rel="iLoad|Дизайн и ремонт квартиры на ул.Талалихина" title="Ремонт и дизайн квартиры, Вира-АртСтрой" href="/upload/iblock/10e/257_0440.jpg"><img src="/upload/iblock/86f/257_0440.jpg" class="img_center" alt="" width="150" height="150"><span></span></a><a class="dn" id="galleryall2127" rel="iLoad|Дизайн и ремонт квартиры на ул.Талалихина" title="Дизайн-проект интерьера квартиры, Вира-АртСтрой" href="/upload/iblock/46a/257_0452.jpg"><img src="/upload/iblock/962/257_0452.jpg" class="img_center" alt="" width="150" height="150"><span></span></a><a class="dn" id="galleryall2127" rel="iLoad|Дизайн и ремонт квартиры на ул.Талалихина" title="Дизайн проект и ремонт квартиры от Вира-АртСтрой" href="/upload/iblock/7d9/257_0461.jpg"><img src="/upload/iblock/255/257_0461.jpg" class="img_center" alt="" width="150" height="150"><span></span></a><a id="gallery2123" rel="iLoad|Дизайн и ремонт квартиры на ул.Талалихина" title="Дизайн-проект интерьера, Вира-АртСтрой" href="/upload/iblock/57b/257_0188.jpg"><img src="/upload/iblock/da0/257_0188.jpg" class="img_center" alt="" width="150" height="150"><span></span></a><a class="dn" id="galleryall2123" rel="iLoad|Дизайн и ремонт квартиры на ул.Талалихина" title="Дизайн интерьера и ремонт квартир, Вира-АртСтрой" href="/upload/iblock/47d/257_0233.jpg"><img src="/upload/iblock/b07/257_0233.jpg" class="img_center" alt="" width="150" height="150"><span></span></a><a class="dn" id="galleryall2123" rel="iLoad|Дизайн и ремонт квартиры на ул.Талалихина" title="Дизайн-проект и ремонт, Вира-Артстрой" href="/upload/iblock/5a2/257_0236.jpg"><img src="/upload/iblock/012/257_0236.jpg" class="img_center" alt="" width="150" height="150"><span></span></a><a class="dn" id="galleryall2123" rel="iLoad|Дизайн и ремонт квартиры на ул.Талалихина" title="Дизайн интерьера и ремонт квартир, Вира-АртСтрой" href="/upload/iblock/145/257_0191.jpg"><img src="/upload/iblock/4a8/257_0191.jpg" class="img_center" alt="" width="150" height="150"><span></span></a><a class="dn" id="galleryall2123" rel="iLoad|Дизайн и ремонт квартиры на ул.Талалихина" title="Дизайн проект и ремонт квартиры от Вира-АртСтрой" href="/upload/iblock/ddf/257_0248.jpg"><img src="/upload/iblock/cb7/257_0248.jpg" class="img_center" alt="" width="150" height="150"><span></span></a><a class="dn" id="galleryall2123" rel="iLoad|Дизайн и ремонт квартиры на ул.Талалихина" title="Дизайн проект и ремонт квартиры от Вира-АртСтрой" href="/upload/iblock/93b/257_0185.jpg"><img src="/upload/iblock/79a/257_0185.jpg" class="img_center" alt="" width="150" height="150"><span></span></a><a class="dn" id="galleryall2123" rel="iLoad|Дизайн и ремонт квартиры на ул.Талалихина" title="Дизайн интерьера квартиры от Вира-АртСтрой" href="/upload/iblock/ad0/257_0227.jpg"><img src="/upload/iblock/f8e/257_0227.jpg" class="img_center" alt="" width="150" height="150"><span></span></a><a class="dn" id="galleryall2123" rel="iLoad|Дизайн и ремонт квартиры на ул.Талалихина" title="Дизайн-проект и ремонт, Вира-Артстрой" href="/upload/iblock/562/257_0200.jpg"><img src="/upload/iblock/ada/257_0200.jpg" class="img_center" alt="" width="150" height="150"><span></span></a><a class="dn" id="galleryall2123" rel="iLoad|Дизайн и ремонт квартиры на ул.Талалихина" title="Дизайн-проект интерьера квартиры, Вира-АртСтрой" href="/upload/iblock/fb4/257_0221.jpg"><img src="/upload/iblock/4a4/257_0221.jpg" class="img_center" alt="" width="150" height="150"><span></span></a><a id="gallery2129" rel="iLoad|Дизайн и ремонт квартиры на ул.Талалихина" title="Дизайн проект и ремонт квартиры от Вира-АртСтрой" href="/upload/iblock/031/257_0824.jpg"><img src="/upload/iblock/c2c/257_0824.jpg" class="img_center" alt="" width="150" height="150"><span></span></a><a class="dn" id="galleryall2129" rel="iLoad|Дизайн и ремонт квартиры на ул.Талалихина" title="Дизайн-проект квартиры, Вира-АртСтрой" href="/upload/iblock/702/257_0800.jpg"><img src="/upload/iblock/a1d/257_0800.jpg" class="img_center" alt="" width="150" height="150"><span></span></a><a class="dn" id="galleryall2129" rel="iLoad|Дизайн и ремонт квартиры на ул.Талалихина" title="Дизайн проект и ремонт квартиры от Вира-АртСтрой" href="/upload/iblock/31a/257_0815.jpg"><img src="/upload/iblock/e2d/257_0815.jpg" class="img_center" alt="" width="150" height="150"><span></span></a><a class="dn" id="galleryall2129" rel="iLoad|Дизайн и ремонт квартиры на ул.Талалихина" title="Дизайн-проект интерьера, Вира-АртСтрой" href="/upload/iblock/6dc/257_0803.jpg"><img src="/upload/iblock/7e4/257_0803.jpg" class="img_center" alt="" width="150" height="150"><span></span></a><a class="dn" id="galleryall2129" rel="iLoad|Дизайн и ремонт квартиры на ул.Талалихина" title="Дизайн-проект и ремонт, Вира-Артстрой" href="/upload/iblock/f0c/257_0791.jpg"><img src="/upload/iblock/ec7/257_0791.jpg" class="img_center" alt="" width="150" height="150"><span></span></a><a class="dn" id="galleryall2129" rel="iLoad|Дизайн и ремонт квартиры на ул.Талалихина" title="Дизайн-проект интерьера квартиры, Вира-АртСтрой" href="/upload/iblock/ccc/257_0821.jpg"><img src="/upload/iblock/2de/257_0821.jpg" class="img_center" alt="" width="150" height="150"><span></span></a><a id="gallery2125" rel="iLoad|Дизайн и ремонт квартиры на ул.Талалихина" title="Дизайн интерьера квартиры от Вира-АртСтрой" href="/upload/iblock/12e/257_0506.jpg"><img src="/upload/iblock/6d1/257_0506.jpg" class="img_center" alt="" width="150" height="150"><span></span></a><a class="dn" id="galleryall2125" rel="iLoad|Дизайн и ремонт квартиры на ул.Талалихина" title="Дизайн интерьера квартиры от Вира-АртСтрой" href="/upload/iblock/80b/257_0467.jpg"><img src="/upload/iblock/d66/257_0467.jpg" class="img_center" alt="" width="150" height="150"><span></span></a><a class="dn" id="galleryall2125" rel="iLoad|Дизайн и ремонт квартиры на ул.Талалихина" title="Дизайн-проект квартиры, Вира-АртСтрой" href="/upload/iblock/ff9/257_0530.jpg"><img src="/upload/iblock/d04/257_0530.jpg" class="img_center" alt="" width="150" height="150"><span></span></a><a class="dn" id="galleryall2125" rel="iLoad|Дизайн и ремонт квартиры на ул.Талалихина" title="Дизайн-проект интерьера квартиры, Вира-АртСтрой" href="/upload/iblock/a60/257_0473.jpg"><img src="/upload/iblock/83f/257_0473.jpg" class="img_center" alt="" width="150" height="150"><span></span></a><a class="dn" id="galleryall2125" rel="iLoad|Дизайн и ремонт квартиры на ул.Талалихина" title="Ремонт квартиры от Вира-АртСтрой" href="/upload/iblock/95b/257_0485.jpg"><img src="/upload/iblock/12f/257_0485.jpg" class="img_center" alt="" width="150" height="150"><span></span></a><a class="dn" id="galleryall2125" rel="iLoad|Дизайн и ремонт квартиры на ул.Талалихина" title="Дизайн-проект и ремонт, Вира-Артстрой" href="/upload/iblock/23d/257_0488.jpg"><img src="/upload/iblock/59d/257_0488.jpg" class="img_center" alt="" width="150" height="150"><span></span></a><a id="gallery2122" rel="iLoad|Дизайн и ремонт квартиры на ул.Талалихина" title="Дизайн интерьера от Вира-АртСтрой" href="/upload/iblock/3b1/257_0878.jpg"><img src="/upload/iblock/c40/257_0878.jpg" class="img_center" alt="" width="150" height="150"><span></span></a><a id="gallery2124" rel="iLoad|Дизайн и ремонт квартиры на ул.Талалихина" title="Ремонт квартиры от Вира-АртСтрой" href="/upload/iblock/251/257_0902.jpg"><img src="/upload/iblock/449/257_0902.jpg" class="img_center" alt="" width="150" height="150"><span></span></a><a class="dn" id="galleryall2124" rel="iLoad|Дизайн и ремонт квартиры на ул.Талалихина" title="Дизайн проект и ремонт квартиры от Вира-АртСтрой" href="/upload/iblock/5a2/257_0905.jpg"><img src="/upload/iblock/a74/257_0905.jpg" class="img_center" alt="" width="150" height="150"><span></span></a><a class="dn" id="galleryall2124" rel="iLoad|Дизайн и ремонт квартиры на ул.Талалихина" title="Дизайн проект и ремонт квартиры от Вира-АртСтрой" href="/upload/iblock/614/257_0896.jpg"><img src="/upload/iblock/7a4/257_0896.jpg" class="img_center" alt="" width="150" height="150"><span></span></a><div class="clear"></div><p id="gallery_sa"><strong onclick="gallery_sa('galleryall');">ещё фотографии &gt;&gt;</strong></p><p id="gallery_ha" class="dn"><strong onclick="gallery_ha('galleryall');">свернуть фотографии &gt;&gt;</strong></p></div>
					<div class="clear"></div>
				</td></tr></tbody></table>

		<table cellpadding="0" cellspacing="0" border="0" width="100%">
			<tbody><tr>
				<td class="gallery-par">
					<h4><b><font color="#EE1D24">Красной нитью </font></b></h4>

					<p align="justify">Квартира в современном доме для семьи из 5 человек.
						<br>
						По плану застройщика приватная зона включала в себя 2 комнаты и санузел. В процессе перепланировки в пределах этой зоны появились: спальня, санузел, гардеробная и 2 детских комнаты для мальчика, и двух девочек.
						<br>
					</p>

					<p align="justify">Заказчики хотели видеть современный интерьер светлый, лёгкий, с яркими акцентами. Следуя этим пожеланиям, появилось белое пространство кухни-гостинной и уводящего вглубь квартиры коридора. Красный плинтус стягивает и подбирает все помещения общего назначения как шнур, не давая распадаться на отдельные зоны. Из белого помещения ведут двери обманки, отблескивающие глянцем на фоне матовой стены. Они открывают взгляду яркие насыщенные цвета санузлов и гардеробной.
						<br>
					</p>

					<p align="justify">Линия полосок, начинаясь в детской для мальчика, переходит в коридор, затем перетекает на торец шкафа и створки, нивелируя выступающую конструкцию.
						<br>
						Многочисленное освещение позволяет создавать различную атмосферу, в зависимости от настроения. Напольные, потолочные, настенные светильники сочетаются с нарисованными люстрами и бра. Общее впечатление театральности и гротеска прослеживается и в других помещениях.
						<br>
					</p>

					<p align="justify">Детские комнаты решены в различных интонациях. Комната для мальчика-подростка носит чуть-чуть английский оттенок, комната девочек это классические приёмы. Но всё объединено постмодернистским подходом к выбору мебели и предметов интерьера.
						<br>
					</p>

					<p align="justify">Спальня наиболее спокойное помещение, но и в ней не обошлось без шутки. Подушки, которыми кидались взрослые так и остались висеть на стене, словно застигнутые врасплох затвором фотоаппарата.
						<br>
					</p>

					<p align="justify">Многие предметы мебели делались на заказ. Из-за нестандартной конфигурации помещений все рабочие места и телевизионные зоны потребовали индивидуального подхода. Особенно тщательно выбиралась сантехника и аксессуары в санузлы. Благодаря возможностям заказчика была привезена из Англии дизайнерская раковина в виде капли.
						<br>
					</p>

					<p align="justify">Проникаясь игрой пространства, заказчики активно участвовали в оформлении интерьера, поддерживали идеи, и сами предлагали много интересного. Воздушный, светлый и радостный интерьер результат взаимопонимания заказчика и дизайнера.</p>

					<h4>Виртуальный 3D тур</h4>
					<a href="../../gallery/vtour/020/" target="_blank"><img alt="Виртуальный тур." title="Виртуальный тур. Позволяет рассматривать помещения в любом ракурсе, двигаться влево вправо вверх вниз, приближать и отдалять предметы! Нажмите для запуска." src="../../gallery/vtour/020/020.jpg" border="0" height="331" width="427"> </a>
					<br>

					<br>
					Вы можете двигаться в разные стороны (нажав кнопку мыши и двигая ее), приближать и отдалять конкретные предметы. Для запуска нажмите мышкой на фотографию выше.
					<br>
					Приглашаем обсудить достоинства и недостатки дизайна и ремонта на форуме. Отзыв о ремонте можно оставить внизу этой этой страницы ("обсуждение публикации").
					<!--
					 <a id="bxid_134334" href="/exp/forum/messages/forum12/topic23842/messages/" >форуме</a>. -->

					<br>
				</td>
			</tr>
			</tbody></table>
		<br><br>
		<table cellspacing="0" cellpadding="0" border="0">
			<tbody><tr>
				<td valign="top"><div style="padding-right:10px"><img src="/upload/iblock/5af/project.jpg" border="0" alt="" width="140" height="96"></div></td>
				<td valign="top">
					<h4>Дизайн-проект:</h4>
					<ul class="gallery-2010-draft-folder"><li><span onclick="gallery_draft_sh(2133);">Планировка</span><ul id="2133"><li><a rel="iLoad|Дизайн-проекты" href="/upload/iblock/bc1/1.jpg">Обмерный план</a></li><li><a rel="iLoad|Дизайн-проекты" href="/upload/iblock/b2e/3.jpg">Монтажный план</a></li><li><a rel="iLoad|Дизайн-проекты" href="/upload/iblock/5ab/4.jpg">План после перепланировки</a></li><li><a rel="iLoad|Дизайн-проекты" href="/upload/iblock/b43/2.jpg">План демонтажа перегородок</a></li></ul></li><li><span onclick="gallery_draft_sh(2136);">Полы</span><ul id="2136"><li><a rel="iLoad|Дизайн-проекты" href="/upload/iblock/5e9/10.jpg">План теплого пола</a></li><li><a rel="iLoad|Дизайн-проекты" href="/upload/iblock/07f/5.jpg">План пола</a></li><li><a rel="iLoad|Дизайн-проекты" href="/upload/iblock/75e/6.jpg">Экспликация полов</a></li></ul></li><li><span onclick="gallery_draft_sh(2131);">Потолки</span><ul id="2131"><li><a rel="iLoad|Дизайн-проекты" href="/upload/iblock/14b/11.jpg">План потолка</a></li></ul></li><li><span onclick="gallery_draft_sh(2132);">Электрика</span><ul id="2132"><li><a rel="iLoad|Дизайн-проекты" href="/upload/iblock/823/12.jpg">План расстановки светильников</a></li><li><a rel="iLoad|Дизайн-проекты" href="/upload/iblock/f57/14.jpg">План расположения электроточек</a></li><li><a rel="iLoad|Дизайн-проекты" href="/upload/iblock/349/13.jpg">План расстановки выключателей</a></li></ul></li><li><span onclick="gallery_draft_sh(2134);">Сантехника</span><ul id="2134"><li><a rel="iLoad|Дизайн-проекты" href="/upload/iblock/cf0/9.jpg">Монтажные схемы. Основной с/у</a></li><li><a rel="iLoad|Дизайн-проекты" href="/upload/iblock/96d/17.jpg">План водоснабжения</a></li><li><a rel="iLoad|Дизайн-проекты" href="/upload/iblock/f0a/7.jpg">План расстановки сантехники</a></li><li><a rel="iLoad|Дизайн-проекты" href="/upload/iblock/66e/18.jpg">План канализации</a></li><li><a rel="iLoad|Дизайн-проекты" href="/upload/iblock/7a1/8.jpg">Монтажные схемы. Гостевой с/у</a></li><li><a rel="iLoad|Дизайн-проекты" href="/upload/iblock/622/15.jpg">Проект водопровода и канализации</a></li><li><a rel="iLoad|Дизайн-проекты" href="/upload/iblock/49a/16.jpg">План расстановки сантехники</a></li></ul></li><li><span onclick="gallery_draft_sh(2135);">Мебель</span><ul id="2135"><li><a rel="iLoad|Дизайн-проекты" href="/upload/iblock/65e/19.jpg">План расстановки мебели</a></li></ul></li><li><span onclick="gallery_draft_sh(2137);">Эскизы</span><ul id="2137"><li><a rel="iLoad|Дизайн-проекты" href="/upload/iblock/3eb/20.jpg">Эскиз гостевого с/у</a></li><li><a rel="iLoad|Дизайн-проекты" href="/upload/iblock/f01/21.jpg">Эскиз детской для мальчика.</a></li><li><a rel="iLoad|Дизайн-проекты" href="/upload/iblock/c17/22.jpg">Эскиз зеркал-платьев в комнате для девочек.</a></li><li><a rel="iLoad|Дизайн-проекты" href="/upload/iblock/2a2/23.jpg">Эскиз коридора.</a></li></ul></li></ul>							</td>
			</tr>
			</tbody></table>
		<br><br><div align="right"><a href="/gallery/"><strong><small>возврат к списку работ &gt;&gt;</small></strong></a></div><div id="comments2iblock_element">		<script language="javascript">
				function str_replace(search, replace, subject)
				{
					return subject.split(search).join(replace);
				}
				anchor_href = str_replace('#comments','',location.href)+'#comments';
			</script>
			<a name="comments"></a>

			<h4>Обсуждение публикации</h4>



			<div class="social-auth-form">


				<div class="bx-auth-lbl"><strong>Для комментирования статьи, войдите как пользователь:</strong></div>
				<div class="bx-auth-serv-icons">
					<a title="Facebook" href="javascript:void(0)" onclick="BxShowAuthFloat('Facebook', 'form')"><i class="bx-ss-icon facebook"></i></a>
					<a title="Twitter" href="javascript:void(0)" onclick="BxShowAuthFloat('Twitter', 'form')"><i class="bx-ss-icon twitter"></i></a>
					<a title="ВКонтакте" href="javascript:void(0)" onclick="BxShowAuthFloat('VKontakte', 'form')"><i class="bx-ss-icon vkontakte"></i></a>
					<a title="Google" href="javascript:void(0)" onclick="BxShowAuthFloat('GoogleOAuth', 'form')"><i class="bx-ss-icon google"></i></a>
					<a title="Мой Мир" href="javascript:void(0)" onclick="BxShowAuthFloat('MyMailRu', 'form')"><i class="bx-ss-icon mymailru"></i></a>
					<a title="Livejournal" href="javascript:void(0)" onclick="BxShowAuthFloat('Livejournal', 'form')"><i class="bx-ss-icon livejournal"></i></a>
					<a title="Яндекс" href="javascript:void(0)" onclick="BxShowAuthFloat('YandexOpenID', 'form')"><i class="bx-ss-icon yandex"></i></a>
					<a title="Mail.Ru" href="javascript:void(0)" onclick="BxShowAuthFloat('MailRuOpenID', 'form')"><i class="bx-ss-icon openid-mail-ru"></i></a>
					<a title="Liveinternet" href="javascript:void(0)" onclick="BxShowAuthFloat('Liveinternet', 'form')"><i class="bx-ss-icon liveinternet"></i></a>
					<a title="Blogger" href="javascript:void(0)" onclick="BxShowAuthFloat('Blogger', 'form')"><i class="bx-ss-icon blogger"></i></a>
					<a title="OpenID" href="javascript:void(0)" onclick="BxShowAuthFloat('OpenID', 'form')"><i class="bx-ss-icon openid"></i></a>
				</div>

				<div style="display:none">
					<div id="bx_auth_float" class="bx-auth-float">

						<div class="bx-auth">
							<form method="post" name="bx_auth_servicesform" target="_top" action="/gallery/36/36782/index.php?login=yes&amp;amp;IBLOCK_ID=36&amp;amp;ID=36782">
								<div class="bx-auth-title">Войти как пользователь</div>
								<div class="bx-auth-note">Вы можете войти на сайт, если вы зарегистрированы на одном из этих сервисов:</div>
								<div class="bx-auth-services">
									<div><a href="javascript:void(0)" onclick="BxShowAuthService('Facebook', 'form')" id="bx_auth_href_formFacebook"><i class="bx-ss-icon facebook"></i><b>Facebook</b></a></div>
									<div><a href="javascript:void(0)" onclick="BxShowAuthService('Twitter', 'form')" id="bx_auth_href_formTwitter"><i class="bx-ss-icon twitter"></i><b>Twitter</b></a></div>
									<div><a href="javascript:void(0)" onclick="BxShowAuthService('VKontakte', 'form')" id="bx_auth_href_formVKontakte"><i class="bx-ss-icon vkontakte"></i><b>ВКонтакте</b></a></div>
									<div><a href="javascript:void(0)" onclick="BxShowAuthService('GoogleOAuth', 'form')" id="bx_auth_href_formGoogleOAuth"><i class="bx-ss-icon google"></i><b>Google</b></a></div>
									<div><a href="javascript:void(0)" onclick="BxShowAuthService('MyMailRu', 'form')" id="bx_auth_href_formMyMailRu"><i class="bx-ss-icon mymailru"></i><b>Мой Мир</b></a></div>
									<div><a href="javascript:void(0)" onclick="BxShowAuthService('Livejournal', 'form')" id="bx_auth_href_formLivejournal"><i class="bx-ss-icon livejournal"></i><b>Livejournal</b></a></div>
									<div><a href="javascript:void(0)" onclick="BxShowAuthService('YandexOpenID', 'form')" id="bx_auth_href_formYandexOpenID"><i class="bx-ss-icon yandex"></i><b>Яндекс</b></a></div>
									<div><a href="javascript:void(0)" onclick="BxShowAuthService('MailRuOpenID', 'form')" id="bx_auth_href_formMailRuOpenID"><i class="bx-ss-icon openid-mail-ru"></i><b>Mail.Ru</b></a></div>
									<div><a href="javascript:void(0)" onclick="BxShowAuthService('Liveinternet', 'form')" id="bx_auth_href_formLiveinternet"><i class="bx-ss-icon liveinternet"></i><b>Liveinternet</b></a></div>
									<div><a href="javascript:void(0)" onclick="BxShowAuthService('Blogger', 'form')" id="bx_auth_href_formBlogger"><i class="bx-ss-icon blogger"></i><b>Blogger</b></a></div>
									<div><a href="javascript:void(0)" onclick="BxShowAuthService('OpenID', 'form')" id="bx_auth_href_formOpenID"><i class="bx-ss-icon openid"></i><b>OpenID</b></a></div>
								</div>
								<div class="bx-auth-line"></div>
								<div class="bx-auth-service-form" id="bx_auth_servform" style="display:none">
									<div id="bx_auth_serv_formFacebook" style="display:none"><a href="javascript:void(0)" onclick="BX.util.popup('https://www.facebook.com/dialog/oauth?client_id=214239318639084&amp;redirect_uri=http%3A%2F%2Fwww.eremont.ru%2Fgallery%2F36%2F36782%2Findex.php%3Fauth_service_id%3DFacebook%26check_key%3D0d97f1e240a479b44f85b35c49a10104%26IBLOCK_ID%3D36%26ID%3D36782&amp;scope=email,user_birthday,publish_stream&amp;display=popup', 580, 400)" class="bx-ss-button facebook-button"></a><span class="bx-spacer"></span><span>Используйте вашу учетную запись на Facebook.com для входа на сайт.</span></div>
									<div id="bx_auth_serv_formTwitter" style="display:none"><a href="javascript:void(0)" onclick="BX.util.popup('/gallery/36/36782/index.php?auth_service_id=Twitter&amp;check_key=0d97f1e240a479b44f85b35c49a10104&amp;IBLOCK_ID=36&amp;ID=36782', 800, 450)" class="bx-ss-button twitter-button"></a><span class="bx-spacer"></span><span>Используйте вашу учетную запись на Twitter.com для входа на сайт.</span></div>
									<div id="bx_auth_serv_formVKontakte" style="display:none"><a href="javascript:void(0)" onclick="BX.util.popup('https://oauth.vk.com/authorize?client_id=2624022&amp;redirect_uri=http://www.eremont.ru/gallery/36/36782/index.php?auth_service_id=VKontakte&amp;scope=friends,video,offline&amp;response_type=code&amp;state=site_id%253Der%2526backurl%253D%25252Fgallery%25252F36%25252F36782%25252Findex.php%25253Fcheck_key%25253D0d97f1e240a479b44f85b35c49a10104%252526IBLOCK_ID%25253D36%252526ID%25253D36782', 580, 400)" class="bx-ss-button vkontakte-button"></a><span class="bx-spacer"></span><span>Используйте вашу учетную запись VKontakte для входа на сайт.</span></div>
									<div id="bx_auth_serv_formGoogleOAuth" style="display:none"><a href="javascript:void(0)" onclick="BX.util.popup('https://accounts.google.com/o/oauth2/auth?client_id=1028365096500%40developer.gserviceaccount.com&amp;redirect_uri=http%3A%2F%2Fwww.eremont.ru%2Fbitrix%2Ftools%2Foauth%2Fgoogle.php&amp;scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile&amp;response_type=code&amp;access_type=offline&amp;state=site_id%3Der%26backurl%3D%252Fgallery%252F36%252F36782%252Findex.php%253Fcheck_key%253D0d97f1e240a479b44f85b35c49a10104%2526IBLOCK_ID%253D36%2526ID%253D36782%26mode%3Dopener', 580, 400)" class="bx-ss-button google-button"></a><span class="bx-spacer"></span><span>Используйте вашу учетную запись Google для входа на сайт.</span></div>
									<div id="bx_auth_serv_formMyMailRu" style="display:none"><a href="javascript:void(0)" onclick="BX.util.popup('https://connect.mail.ru/oauth/authorize?client_id=644191&amp;redirect_uri=http://www.eremont.ru/gallery/36/36782/index.php?auth_service_id=MyMailRu&amp;IBLOCK_ID=36&amp;ID=36782&amp;response_type=code&amp;state=site_id%3Der%26backurl%3D%2Fgallery%2F36%2F36782%2Findex.php%3Fcheck_key%3D0d97f1e240a479b44f85b35c49a10104%26IBLOCK_ID%3D36%26ID%3D36782', 580, 400)" class="bx-ss-button mymailru-button"></a><span class="bx-spacer"></span><span>Используйте вашу учетную запись Мой Мир@Mail.ru для входа на сайт.</span></div>
									<div id="bx_auth_serv_formLivejournal" style="display:none">
										<span class="bx-ss-icon openid"></span>
										<input type="text" name="OPENID_IDENTITY_LIVEJOURNAL" value="" size="20">
										<span>.livejournal.com</span>
										<input type="hidden" name="auth_service_error" value="">
										<input type="submit" class="button" name="" value="Войти">
									</div>
									<div id="bx_auth_serv_formYandexOpenID" style="display:none">
										<span class="bx-ss-icon openid"></span>
										<input type="text" name="OPENID_IDENTITY_YANDEX" value="" size="20">
										<span>@yandex.ru</span>
										<input type="hidden" name="auth_service_error" value="">
										<input type="submit" class="button" name="" value="Войти">
									</div>
									<div id="bx_auth_serv_formMailRuOpenID" style="display:none">
										<span class="bx-ss-icon openid"></span>
										<input type="text" name="OPENID_IDENTITY_MAILRU" value="" size="20">
										<span>@mail.ru</span>
										<input type="hidden" name="auth_service_error" value="">
										<input type="submit" class="button" name="" value="Войти">
									</div>
									<div id="bx_auth_serv_formLiveinternet" style="display:none">
										<span class="bx-ss-icon openid"></span>
										<span>liveinternet.ru/users/</span>
										<input type="text" name="OPENID_IDENTITY_LIVEINTERNET" value="" size="15">
										<input type="hidden" name="auth_service_error" value="">
										<input type="submit" class="button" name="" value="Войти">
									</div>
									<div id="bx_auth_serv_formBlogger" style="display:none">
										<span class="bx-ss-icon openid"></span>
										<input type="text" name="OPENID_IDENTITY_BLOGGER" value="" size="20">
										<span>.blogspot.com</span>
										<input type="hidden" name="auth_service_error" value="">
										<input type="submit" class="button" name="" value="Войти">
									</div>
									<div id="bx_auth_serv_formOpenID" style="display:none">
										<span class="bx-ss-icon openid"></span>
										<span>OpenID:</span>
										<input type="text" name="OPENID_IDENTITY_OPENID" value="" size="30">
										<input type="hidden" name="auth_service_error" value="">
										<input type="submit" class="button" name="" value="Войти">
									</div>
								</div>
								<input type="hidden" name="auth_service_id" value="">
							</form>
						</div>

					</div>
				</div>


			</div>


			<div class="gallery-comments"><span><strong> Дамир</strong> написал 16.04.2013 в 11:21:05:</span><div>Интерьер затягивает.  Работу в журнал выкладывать надо.</div><span><strong> Елена</strong> написал 27.04.2013 в 12:00:01:</span><div>Очень креативный интерьер. Наш российский заказчик ещё не дозрел  до подобного.</div><span><strong> Алексей</strong> написал 03.06.2013 в 16:17:43:</span><div>Креативный на 5 мин, а жить как в таком? Клуб что ли?</div><span><strong> Стрекоза</strong> написал 09.06.2013 в 23:59:16:</span><div>по- началу интерьер показался слишком уж ярким, а потом завлекает, хочется остановиться и рассмотреть все внимательней. Очень интересный проэкт, оригинальный, с юмором, оставил только позитивные эмоции!!!!!</div><span><strong> Екатерина</strong> написал 10.07.2013 в 20:55:40:</span><div>Оригинальные идеи, хорошо подобрана цветовая гамма и мебель. Очень хороший проект!</div><span><strong> Александр</strong> написал 01.08.2013 в 15:27:50:</span><div>Все очень здорово!</div><span><strong> Лена.</strong> написал 27.08.2013 в 22:57:24:</span><div>Да, интерьер замечательный, мне нравится. Но дизайнер поностью"забил" на функциональность. Приятно смотреть, вопрос как в этом жить?!</div><span><strong> Дарья Евдокимова</strong> написал 16.10.2013 в 14:24:09:</span><div>С "Большим" удовольствием просмотрела проект.</div><span><strong> Анна</strong> написал 22.11.2013 в 09:19:38:</span><div>Интерьер просто моя мечта, в холодной и спокойной гамме люди просто существуют, а тут такие цвета ,настроение хочется жить ,играть с детьми и даже, если за окном холодно и сыро дома тепло и уют. Я бы вот только в гостиной заменила полки с пластиковых на дерево но в тех же цветах(просто пластик не нравится). "Отлично"- это мягко говоря, я влюбленна и если бы могла тоже самое изобразить не сомневаясь сделала точь в точь.</div><span><strong> Владимир</strong> написал 13.12.2013 в 22:06:22:</span><div>Все выглядит впечатляюще!(4+),для такой квартиры.
					<br>Цена только за такое удовольствие слишком высока(Цена как минимум "двушки" в каком-нибудь Подмосковном городке).
					<br></div></div>
			<form id="comments2iblock_element_form">
				<input type="hidden" name="act" value="comments2iblock_element">
				<input type="hidden" name="ID" value="36782">
				<input type="hidden" name="AJAX" value="Y">
				<input type="hidden" name="UrlPath" value="%2Fgallery%2F36%2F36782%2F">
				<table cellspacing="0" cellpadding="0" border="0" class="table-form">
					<tbody><tr>
						<td align="right"><strong>Ваше имя <font class="errortext">*</font>:</strong></td>
						<td>
							<input class="AUTHOR" type="text" name="COMMENTS_AUTHOR" value="">
						</td>
					</tr>
					<tr>
						<td align="right"><strong>Комментарий <font class="errortext">*</font>:</strong></td>
						<td>
							<textarea name="c2fc9ec5be9e10c2e414b61636dc67f4" id="c2fc9ec5be9e10c2e414b61636dc67f4" rows="7" cols="70"></textarea>
						</td>
					</tr>
					<tr>
						<td></td>
						<td><input onclick="$.post('/ajax.php',$('#comments2iblock_element_form').serialize(),function(data){$('#comments2iblock_element').html(data);}); location.href=anchor_href;" class="SUBMIT" type="button" value="Отправить комментарий"></td>
					</tr>
					</tbody></table>
			</form>
			<p><font class="errortext">*</font> – поля обязательные для заполнения.</p>

			<p align="right"><small><a href="/exp/forum/messages/forum12/topic24038/messages/">Обсуждение на форуме &gt;&gt;</a></small></p>

		</div>
		<div class="table-bottom">
			<table cellspacing="0" cellpadding="0" border="0" width="100%">

				<tbody><tr>
					<td class="COMMENTS" align="left"><noindex></noindex></td><td class="COMMENTS" align="left"><noindex><span align="right"><a href="/gallery/36/36782/index.php?VOTE=Y&amp;IBLOCK_ID=36&amp;ID=36782" rel="nofollow"><strong>Проголосовать</strong></a><a href="/gallery/36/36782/index.php?VOTE=Y&amp;IBLOCK_ID=36&amp;ID=36782" rel="nofollow"><img src="http://www.vira.ru/images_tpl/topnews.gif" width="32" height="32" alt="" border="0" align="absmiddle"></a></span></noindex></td>
				</tr>

				<tr>
					<td colspan="2"><noindex><a href="javascript:openWIN('/exp/send_friends.php?ID=36782','send_friends',500,500);" rel="nofollow">Переслать ссылку другу</a> <strong>::</strong> <a href="/exp/send_materials.php" rel="nofollow">Добавить свою статью</a></noindex></td>
				</tr>
				</tbody></table>
		</div>
		<p></p>

		<div align="right">
			<br>
			<noindex>
				<table cellpadding="0" cellspacing="0" border="0">
					<tbody><tr>
						<td style="padding-right:10px;">
							<!-- Разместите этот тег в том месте, где должна отображаться кнопка +1 -->
							<div id="___plusone_0" style="text-indent: 0px; margin: 0px; padding: 0px; background-color: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 90px; height: 20px; background-position: initial initial; background-repeat: initial initial;"><iframe frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 90px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 20px;" tabindex="0" vspace="0" width="100%" id="I0_1387018055913" name="I0_1387018055913" src="https://apis.google.com/u/0/_/+1/fastbutton?usegapi=1&amp;bsv=o&amp;size=medium&amp;hl=ru&amp;origin=http%3A%2F%2Fwww.eremont.ru&amp;url=http%3A%2F%2Fwww.eremont.ru%2Fgallery%2F36%2F36782%2F&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.ru.6oHM0hqmtoQ.O%2Fm%3D__features__%2Fam%3DYQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAItRSTNzRz0r9QJ6II4pSGgPFr-FW8yJ3Q#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh&amp;id=I0_1387018055913&amp;parent=http%3A%2F%2Fwww.eremont.ru&amp;pfname=&amp;rpctoken=24836754" data-gapiattached="true" title="+1"></iframe></div>
						</td>

						<td>
							<div id="vk_like" style="height: 22px; width: 180px; background-image: none; position: relative; clear: both; background-position: initial initial; background-repeat: initial initial;"><iframe name="fXD35eb3" frameborder="0" src="http://vk.com/widget_like.php?app=2624022&amp;width=100%&amp;_ver=1&amp;page=0&amp;url=http%3A%2F%2Fwww.eremont.ru%2Fgallery%2F36%2F36782%2F&amp;type=button&amp;verb=0&amp;color=&amp;title=%D0%9A%D0%B2%D0%B0%D1%80%D1%82%D0%B8%D1%80%D0%B0%20%D0%BD%D0%B0%20%D1%83%D0%BB.%20%D0%A2%D0%B0%D0%BB%D0%B0%D0%BB%D0%B8%D1%85%D0%B8%D0%BD%D0%B0&amp;description=&amp;image=&amp;text=&amp;h=22&amp;142f0b7efd0" width="100%" height="22" scrolling="no" id="vkwidget1" style="overflow: hidden; height: 22px; width: 180px; z-index: 150;"></iframe></div> <script type="text/javascript"> VK.Widgets.Like("vk_like", {type: "button"}); </script>
						</td>
						<td style="padding-right:30px;">
							<div class="fb-like fb_edge_widget_with_comment fb_iframe_widget" data-send="false" data-layout="button_count" data-width="150" data-show-faces="false" fb-xfbml-state="rendered"><span style="height: 20px; width: 105px;"><iframe id="f1a0c51694" name="f57d96894" scrolling="no" title="Like this content on Facebook." class="fb_ltr" src="http://www.facebook.com/plugins/like.php?api_key=214239318639084&amp;channel_url=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D28%23cb%3Df22cc8c4c%26domain%3Dwww.eremont.ru%26origin%3Dhttp%253A%252F%252Fwww.eremont.ru%252Ff33d46f81%26relation%3Dparent.parent&amp;colorscheme=light&amp;extended_social_context=false&amp;href=http%3A%2F%2Fwww.eremont.ru%2Fgallery%2F36%2F36782%2F&amp;layout=button_count&amp;locale=ru_RU&amp;node_type=link&amp;sdk=joey&amp;send=false&amp;show_faces=false&amp;width=150" style="border: none; overflow: hidden; height: 20px; width: 105px;"></iframe></span></div>
						</td>
						<td style="padding-right:5px;">
							<iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" src="http://platform.twitter.com/widgets/tweet_button.1386967771.html#_=1387018056007&amp;count=horizontal&amp;id=twitter-widget-0&amp;lang=ru&amp;original_referer=http%3A%2F%2Fwww.eremont.ru%2Fgallery%2F36%2F36782%2F&amp;size=m&amp;text=%D0%9A%D0%B2%D0%B0%D1%80%D1%82%D0%B8%D1%80%D0%B0%20%D0%BD%D0%B0%20%D1%83%D0%BB.%20%D0%A2%D0%B0%D0%BB%D0%B0%D0%BB%D0%B8%D1%85%D0%B8%D0%BD%D0%B0&amp;url=http%3A%2F%2Fwww.eremont.ru%2Fgallery%2F36%2F36782%2F&amp;via=vira_ru" class="twitter-share-button twitter-tweet-button twitter-count-horizontal" title="Twitter Tweet Button" data-twttr-rendered="true" style="width: 207px; height: 20px;"></iframe>
						</td>
					</tr>
					</tbody></table>
			</noindex>										</div>


		<!--
		  <div class="content-footer">
			<table width="400">
			  <tbody>
				<tr> <td align="left" colspan="2"><img id="bxid_804262" src="/images_tpl/square.gif" width="16" hspace="0" height="13" border="0"  /> <font size="3"> Остались вопросы? Хотите сделать заказ?</font>
					<br />

					<br />
				   &nbsp; &nbsp; &nbsp; тел: +7 (495) <b><font size="3">730-01-99</font></b> </td></tr>

				<tr> <td align="left"><b><font size="3">Николай</font></b></td><td align="left"><font size="3"><b>Александр</b></font></td></tr>

				<tr><td align="left"> <a id="bxid_802337" href="skype:fil_nik?call" ><img id="bxid_528859" src="/upload/medialibrary/1db/skype.png" style="border: medium none; vertical-align: middle;" alt="skype.png" width="24" height="24" title="skype.png"  /></a><a id="bxid_463984" href="skype:fil_nik?call" > fil_nik</a></td> <td align="left"><b></b> <a id="bxid_276672" href="skype:aleksandr.gubanoff%20?call" ><img id="bxid_428201" src="/upload/medialibrary/1db/skype.png" style="border: medium none; vertical-align: middle;" width="24" height="24" title="skype.png"  /></a><a id="bxid_347744" href="skype:aleksandr.gubanoff%20?call" >aleksandr.gubanoff</a></td></tr>

				<tr><td align="left"> <img id="bxid_470635" src="/upload/medialibrary/373/icq.gif" border="0" style="border: medium none; vertical-align: middle;" width="16" height="16"  /><b> </b>246754514 </td><td align="left"> <img id="bxid_967851" src="/upload/medialibrary/373/icq.gif" border="0" style="border: medium none; vertical-align: middle;" width="16" height="16"  /><b> </b>234398290</td></tr>

				<tr><td align="left"><img id="bxid_447743" src="/upload/medialibrary/b77/mobile2.jpg" title="mobile2.jpg" border="0" align="middle" alt="mobile2.jpg" width="26" height="50"  /> +7 (903) 590-86-91 </td><td align="left"> <img id="bxid_818508" src="/upload/medialibrary/b77/mobile2.jpg" title="mobile2.jpg" border="0" align="middle" alt="mobile2.jpg" width="26" height="50"  /> +7 (903) 590-87-74 </td></tr>
			   </tbody>
			 </table>
		   </div>
		-->

		<div class="content-footer-1">
			<p>Остались вопросы? Хотите сделать заказ?</p>

			<div class="content-footer-1-big">Телефон офиса: <span>+7 (495) 730-01-99</span></div>

			<div class="content-footer-1-big"><span>
      <br>
    </span></div>

			<table>
				<tbody>
				<tr> 		<td>
						<div class="content-footer-1-big">Николай</div>
						<small>Менеджер-консультант</small>
						<ul>
							<li id="skype"><a href="skype:fil_nik?call">fil_nik</a></li>

							<li id="icq">246754514</li>

							<li id="phone">+7 (903) 590-86-91</li>
						</ul>
					</td> 		<td>
						<div class="content-footer-1-big">Александр</div>
						<small>Менеджер-консультант</small>
						<ul>
							<li id="skype"><a href="skype:aleksandr.gubanoff%20?call">aleksandr.gubanoff</a></li>

							<li id="icq">234398290</li>

							<li id="phone">+7 (903) 590-87-74</li>
						</ul>
					</td> 	</tr>
				</tbody>
			</table>
		</div>

		</td>
		<td width="7%">&nbsp;</td>
		</tr>
		</tbody></table>
	</tr>
	</tbody>
</table>
</td>
</tr>


<?php get_footer(); ?>