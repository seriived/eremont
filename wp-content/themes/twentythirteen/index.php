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

				<?php get_template_part('_part', 'advantage') ?>
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
					<div style="position:relative;">
						<div id="opa42012" style="height: 465px; width: 202px;">
							<img
								src="<?php echo get_template_directory_uri() ?>/images/pixel.gif"
								width="200" height="400" alt="" border="0">
						</div>
						<div id="opa32012">
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tbody>
								<tr>
									<td>&nbsp;</td>
									<td width="2"><img
											src="<?php echo get_template_directory_uri() ?>/images/opa_01.gif"
											alt="" width="2" height="77"></td>
									<td width="114">&nbsp;</td>
									<td width="2"><img
											src="<?php echo get_template_directory_uri() ?>/images/opa_01.gif"
											alt="" width="2" height="77"></td>
									<td>&nbsp;</td>
								</tr>
								</tbody>
							</table>
							<div align="center"><a href="http://www.eremont.ru/gallery/"><img
										src="<?php echo get_template_directory_uri() ?>/images/tv.jpg"
										alt="" width="167" height="124" border="0"></a></div>
							<div style="padding-bottom:12px;"><img
									src="<?php echo get_template_directory_uri() ?>/images/pixel.gif"
									width="200" height="1" alt=""></div>

							<div
								style="background: url(<?php echo get_template_directory_uri() . '/images/pens_bg.gif' ?>) repeat-x right bottom; width: 100%;">
								<div
									style="background: url(<?php echo get_template_directory_uri() . '/images/pens_01a.gif' ?>) no-repeat right bottom; width: 100%;">
									<div style="padding-bottom:55px;">
										<table width="100%" border="0" cellspacing="0" cellpadding="0">
											<tbody>
											<tr>
												<td width="20"><!-- --></td>
												<td>

													<p style="font-size: 9pt;"><font color="#f16522">Дизайн
															интерьера</font> и
														<br>
														<font color="#f16522">ремонт </font>премиум класса
														<!-- от дизайн-проекта до реализации, по цене от:
														  <br />
														 Дизайн + Ремонт <span style="font-weight: bold; font-size: 10pt;">9500</span>&nbsp;руб/м<sup>2</sup> -->

														<br>

														<br>
														Дизайн-проект <a href="http://www.eremont.ru/news/28825/"><span
															10pt;="">бесплатно</span></a>&nbsp;! </p>
													<a href="http://www.eremont.ru/gallery/"><img
															src="<?php echo get_template_directory_uri() ?>/images/opa_02.gif"
															alt="" width="153" height="47" border="0"></a>

													<p>
														<img
															src="<?php echo get_template_directory_uri() ?>/images/acciya_but_01.gif"
															height="14" width="15" align="absMiddle"> <a
															href="http://www.eremont.ru/gallery/">Все работы</a></p>
												</td>
												<td width="20"><!-- --></td>
											</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>

							<!--<div style="background: url(/bitrix/templates/eremont_main_2007/images_tpl/pens_bg.gif) repeat-x right 64px;" align="right"><img src="/bitrix/templates/eremont_main_2007/images_tpl/pens_01a.gif" alt="" width="199" height="100"></div>-->
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tbody>
								<tr>
									<td width="99"><img
											src="<?php echo get_template_directory_uri() ?>/images/pens_01b.gif"
											alt="" width="99" height="32" border="0"></td>
									<td bgcolor="#FFFFFF">&nbsp;</td>
									<td width="100"><img
											src="<?php echo get_template_directory_uri() ?>/images/pens_01c.gif"
											alt="" width="100" height="32" border="0"></td>
								</tr>
								</tbody>
							</table>

							<div align="center">
								<div style="width:1px; position:relative;">
									<div style="position:absolute;top:-59px;left:-97px;"><img
											src="<?php echo get_template_directory_uri() ?>/images/nad_new_work.gif"
											alt="" width="145" height="18" border="0"></div>
								</div>
							</div>
						</div>
					</div>
					<div style="height: 195px;" id="div_height">
						<!--	-->
					</div>
					<?php get_template_part('_part', 'new_works'); ?>
					<img src="<?php echo get_template_directory_uri() ?>/images/pixel.gif"
					     alt="" width="40" height="1" border="0">

					<div class="line_4px_mail"><!-- --></div>
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tbody>
						<tr>
							<td width="67" valign="top"><img
									src="<?php echo get_template_directory_uri() ?>/images/mail_01.gif"
									alt="" width="67" height="72"></td>
							<td align="left" valign="top" class="main_email">
								<div align="left"><img
										src="<?php echo get_template_directory_uri() ?>/images/mail_02.gif"
										alt="" width="136" height="33"></div>
								<form action="http://subscribe.ru/member/quick" method="post" target="_blank">
									<input type="hidden" value="quick" name="action">
									<input type="hidden" value="help.remont" name="grp">
									<table width="100%" border="0" cellspacing="0" cellpadding="0">
										<tbody>
										<tr>
											<td width="11" align="right" valign="top">
												<div class="ie_input">
													<img src="<?php echo get_template_directory_uri() ?>/images/input_01.gif" alt="" width="8" height="19">
												</div>
											</td>
											<td width="90" valign="top">
												<input name="email" type="text" class="input_01" style=" width:90px;" value="e-mail">
											</td>
											<td width="8" valign="top">
												<div class="ie_input">
													<img src="<?php echo get_template_directory_uri() ?>/images/input_02.gif" alt="" width="8" height="19">
												</div>
											</td>
											<td width="8" valign="top">
												<img src="<?php echo get_template_directory_uri() ?>/images/pixel.gif" alt="" width="8" height="1">
											</td>
											<td align="left" valign="top">
												<input type="image" src="<?php echo get_template_directory_uri() ?>/images/but_ok.gif">
											</td>
										</tr>
										</tbody>
									</table>
								</form>
								<!--<div style="padding-left:4px;"><a href="#">отказаться от подписки</a></div>-->
							</td>
						</tr>
						</tbody>
					</table>
					<div style="height:20px;"><!-- --></div>
				</td>
				<td width="15%">&nbsp;</td>
			</tr>
			</tbody>
		</table>
	</td>
	<?php echo get_template_part('_part','main');?>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>


<?php get_footer(); ?>