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
					<form action="http://www.eremont.ru/search/" method="GET">
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
								<td width="137" valign="top"><input name="q" type="text" class="input_01"
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
							<?php dynamic_sidebar('price_design_left');?>
							<a href="<?php echo site_url();?>/price">подробнее &#8594;</a> <br>
							<br>

							<noindex>
								<p>Стоимость ремонта квартир</p>
								<?php dynamic_sidebar('price_remont_left');?>
								<a href="<?php echo site_url();?>/cost">подробнее &#8594;</a> <br>
								<br>
							</noindex>

						</div>
						<?php
						$args = array(
							'posts_per_page'   => 1,
							'offset'           => 0,
							'category'         => 'rubrics',
							'orderby'          => 'post_date',
							'order'            => 'DESC',
							'post_type'        => 'work',
							'post_status'      => 'publish',
							'suppress_filters' => true
						);
						$posts_array = get_posts( $args ,true);
						$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($posts_array[0]->ID), 'large');
						?>
						<div class="line_new_razdel">
							<img id="bxid_971829" height="20" width="156" src="<?php echo get_template_directory_uri() ?>/images/elit.gif">
						</div>
						<div style="padding-left: 25px; height: 90px; margin-top: 10px;">
							<a id="bxid_177374" href="<?php echo $posts_array[0]->guid?>">
								<img id="bxid_29" border="0" src="<?php echo $large_image_url[0];?>" height="82" width="154"></a></div>
						<div style="padding: 18px 25px 0px;">
							<?php echo $posts_array[0]->post_excerpt;?>
							<div style="padding: 5px 0pt 15px;">
								<a id="bxid_750411" href="<?php echo $posts_array[0]->guid?>">подробнее</a>
								<a id="bxid_602296" href="http://www.eremont.ru/complex/">
									<img id="bxid_308421" src="<?php echo get_template_directory_uri() ?>/images/acciya_but_01.gif" align="absmiddle" border="0" height="14" width="15">
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

				<?php get_template_part('_part','advantage')?>
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
<?php get_template_part('_part','new_works');?>
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
								<div class="ie_input"><img
										src="<?php echo get_template_directory_uri() ?>/images/input_01.gif"
										alt="" width="8" height="19"></div>
							</td>
							<td width="90" valign="top"><input name="email" type="text" class="input_01"
							                                   style=" width:90px;" value="e-mail"></td>
							<td width="8" valign="top">
								<div class="ie_input"><img
										src="<?php echo get_template_directory_uri() ?>/images/input_02.gif"
										alt="" width="8" height="19"></div>
							</td>
							<td width="8" valign="top"><img
									src="<?php echo get_template_directory_uri() ?>/images/pixel.gif"
									alt="" width="8" height="1"></td>
							<td align="left" valign="top"><input type="image"
							                                     src="<?php echo get_template_directory_uri() ?>/images/but_ok.gif">
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
	<td width="65%" valign="top">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tbody>
			<tr>
				<td style="padding-right:53px;">

					<?php get_template_part('_part','reklama');?>
					<h1>Дизайн интерьера и ремонт</h1>


					<p align="justify"> Кому доверить и заказать ремонт квартиры и дизайн интерьера - рано или поздно
						такой вопрос встает перед каждым домовладельцем. Стоимость работ и материалов на квадратный метр
						не всегда соответствуют качеству выполненных работ. Успешные 17 лет профессиональной
						деятельности компании «Вира-Артстрой», дизайн интерьера квартир, домов и общественных помещений,
						удостоенные наград и высоких оценок клиентов, – все это делает очевидным ответ на поставленный
						вопрос. В нашей компании качество и цена выполняемых работ соответствуют друг другу. Наши
						преимущества - это наши выполненные работы и благодарные заказчики.
						<br>
					</p>

					<br>

					<table cellspacing="0" cellpadding="3" border="0" width="100%" class="sections-table">
						<tbody>
						<tr>
							<td><a href="http://www.eremont.ru/gallery/vtour/"><img
										src="<?php echo get_template_directory_uri() ?>/images/1_virtual_tour.jpg"
										title="Галерея виртуальных туров" border="0" alt="Виртуальные туры" width="134"
										height="114"></a></td>
							<td width="50%"></td>
							<td><a href="http://www.eremont.ru/about/lics/"><img
										src="<?php echo get_template_directory_uri() ?>/images/17.jpg"
										title="Надежность компании Вира-Артстрой, история лицензий." border="0"
										alt="Надежность компании Вира-Артстрой, история лицензий." width="150"
										height="113"></a></td>
							<td width="50%"></td>
							<td><a href="http://www.eremont.ru/remont/insur.html"><img
										src="<?php echo get_template_directory_uri() ?>/images/3_garanties.jpg"
										title="Тройная гарантия" border="0" alt="Гарантии, страхование ремонта"
										width="148" height="114"></a></td>
						</tr>

						<tr>
							<td nowrap="" valign="top"><a href="http://www.eremont.ru/gallery/vtour/">
									<span>3D туры</span> Новинка на сайте,
									<br>
									галерея виртуальных туров </a></td>
							<td width="50%"></td>
							<td nowrap="" valign="top"><a href="http://www.eremont.ru/about/lics/">
									<span>Надежность</span> 17 лет опыта, история лицензий </a></td>
							<td width="50%"></td>
							<td nowrap="" valign="top"><a href="http://www.eremont.ru/remont/insur.html">
									<span>Гарантии</span> 3 года гарантии на работы,
									<br>
									страхование ремонта, тройная
									<br>
									защита </a></td>
						</tr>

						<tr>
							<td><a href="http://www.eremont.ru/remont/calc.html"><img
										src="<?php echo get_template_directory_uri() ?>/images/4_calculator_remonta.jpg"
										title="Калькулятор ремонта" border="0" alt="Калькулятор ремонта" width="134"
										height="114"></a></td>
							<td width="50%"></td>
							<td><a href="http://www.eremont.ru/news/28830/"><img
										src="<?php echo get_template_directory_uri() ?>/images/auto.jpg"
										title="Выезд к заказчику в любую точку Москвы" border="0"
										alt="Выезд менеджеров и дизайнеров по интерьеру" width="150" height="113"></a>
							</td>
							<td width="50%"></td>
							<td><a href="http://www.eremont.ru/about/concours.html"><img
										src="<?php echo get_template_directory_uri() ?>/images/6_pobedy.jpg"
										title="Победы" border="0" alt="Победы" width="148" height="114"></a></td>
						</tr>

						<tr>
							<td nowrap="" valign="top"><a href="http://www.eremont.ru/remont/calc.html"> <span>Калькулятор</span>
									Рассчитайте стоимость
									<br>
									высококлассного ремонта! </a></td>
							<td width="50%"></td>
							<td nowrap="" valign="top"><a href="http://www.eremont.ru/news/28830/"> <span>Выезд к заказчику</span>
									Наши дизайнеры выезжают
									<br>
									к клиентам в любую точку Москвы </a></td>
							<td width="50%"></td>
							<td nowrap="" valign="top"><a href="http://www.eremont.ru/about/concours.html"> <span>Награды</span>
									Победители всевозможных
									<br>
									конкурсов </a></td>
						</tr>
						</tbody>
					</table>

					<br>

					<br>

					<p align="justify">Не секрет, что дизайн, например, квартир, является отражением личности хозяев.
						Поэтому, сотрудничая с клиентом, мы поощряем его участие с самого первого этапа. Не стоит
						опасаться, что вам будет некомфортно в новых стенах, поскольку ни одна идея не будет нами
						проигнорирована. Стоимость дизайн проекта в нашей компании - от 1650 руб/кв.м. Цена строительных
						работ зависит от сложности дизайн проекта. Заказать проектные и строительные работы Вы можете в
						<a href="http://www.eremont.ru/contacts.html">нашем офисе</a>.
						<br>
					</p>

					<p align="justify">Принцип, которому компания «Вира-Артстрой» следует на протяжении многих лет,
						состоит в том, что дизайн интерьера должен учитывать множество тонкостей: количество, возраст,
						привычки обитателей помещения, наличие детей и прочие нюансы. Только так, по нашему глубокому
						убеждению, можно достигнуть желаемого результата</p>


				</td>
			</tr>
			</tbody>
		</table>
	</td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	<tr>
		<td width="23%" valign="bottom">&nbsp;</td>
		<td width="77%" valign="bottom">
			<table width="100%" border="0" cellpadding="0" cellspacing="0" class="podval">
				<tbody>
				<tr>
					<td width="14" bgcolor="#FFFFFF">&nbsp;</td>
					<td valign="top">
						<table cellspacing="0" cellpadding="0" border="0" width="100%">
							<tbody>
							<tr>
								<td>
									<div align="left" class="podval_01"><a href="http://www.eremont.ru/design/"
									                                       title="дизайн квартир">Дизайн квартир</a> |
										<a href="http://www.eremont.ru/dizain-proekt/">Дизайн проект</a> |
										<a href="http://www.eremont.ru/design/custom.html">Заказать</a> |
										<a href="http://remont-kvartir.eremont.ru/">Ремонт квартир</a> |
										<a href="http://www.eremont.ru/umidom/">Умный дом</a> |
										<a href="http://www.eremont.ru/about/">Компания</a> |
										<a href="http://www.eremont.ru/gallery/">Фотогалерея</a> |
										<a href="http://www.eremont.ru/contacts.html">Кoнтакты</a> |
<!--										<a href="http://www.eremont.ru/exp/forum/">Форум</a> | -->
										<a href="http://www.eremont.ru/search/map.html">Карта сайта</a>
									</div>
								</td>
								<td width="27%" nowrap="" class="podval_02">
									<noindex><a href="http://www.eremont.ru/exp/send_error.php" rel="nofollow">Нашли
											ошибку?</a></noindex>
								</td>
							</tr>
							</tbody>
						</table>
						<div itemscope="" itemtype="http://schema.org/Organization">
							<table width="100%" cellspacing="0" cellpadding="0" border="0">
								<tbody>
								<tr>
									<td valign="top" class="podval_02">Copyright «<span itemprop="name">Вира</span>» -
										<span itemprop="description">дизайн интерьера</span>, 1999- 2013
									</td>
									<td valign="top" class="podval_02"><span itemprop="address" itemscope=""
									                                         itemtype="http://schema.org/PostalAddress"> <span
												itemprop="addressLocality">Москва</span>, м. Октябрьское Поле, <span
												itemprop="streetAddress">ул. Берзарина, д. 23</span> </span>
										<br>
										Телефоны: <span itemprop="telephone">(495) 730-01-98</span>, 730-01-99
										<br>
										E-mail: <a itemprop="email" href="mailto:design@vira.ru">design@vira.ru</a>
										<br>
                                        <span itemscope="" itemtype="http://schema.org/Place"> <span itemprop="geo"
                                                                                                     itemscope=""
                                                                                                     itemtype="http://schema.org/GeoCoordinates"> 					<meta
			                                        itemprop="latitude" content="55.788098"> 					<meta
			                                        itemprop="longitude" content="37.472528"> 					</span> </span>
									</td>
									<td width="27%" valign="top" class="podval_02">
										<noindex>

											<!--Rating@Mail.ru counter-->
											<a target="_top" href="http://top.mail.ru/jump?from=1122890"> <img
													src="<?php echo get_template_directory_uri() ?>/images/counter"
													border="0" height="31" width="88" alt="Рейтинг@Mail.ru"></a>
											<!--// Rating@Mail.ru counter-->

											<!--LiveInternet counter-->
											<script type="text/javascript"><!--
												document.write("<a href='http://www.liveinternet.ru/click' " +
													"target=_blank><img src='//counter.yadro.ru/hit?t44.1;r" +
													escape(document.referrer) + ((typeof(screen) == "undefined") ? "" :
													";s" + screen.width + "*" + screen.height + "*" + (screen.colorDepth ?
														screen.colorDepth : screen.pixelDepth)) + ";u" + escape(document.URL) +
													";" + Math.random() +
													"' alt='' title='LiveInternet' " +
													"border='0' width='31' height='31'><\/a>")
												//--></script>
											<a href="http://www.liveinternet.ru/click" target="_blank"><img
													src="<?php echo get_template_directory_uri() ?>/images/hit"
													alt="" title="LiveInternet" border="0" width="31" height="31"></a><!--/LiveInternet-->


											<script id="top100Counter" type="text/javascript"
											        src="http://counter.rambler.ru/top100.jcn?360758"></script>
											<a href="http://top100.rambler.ru/home?id=360758" target="_blank"><img
													src="<?php echo get_template_directory_uri() ?>/images/top100.scn"
													title="Rambler&#39;s Top100" alt="Rambler&#39;s Top100" border="0"></a>
											<noscript> &lt;a href="http://top100.rambler.ru/navi/360758/"&gt; &lt;img
												src="http://counter.rambler.ru/top100.cnt?360758" alt="Rambler's Top100"
												border="0" /&gt; &lt;/a&gt; </noscript>
										</noindex>
									</td>
								</tr>
								</tbody>
							</table>
						</div>
					</td>
				</tr>
				</tbody>
			</table>
		</td>
	</tr>
	</tbody>
	</table>

	<script language="javascript" type="text/javascript">

		document.getElementById('opa42012').style.height = document.getElementById('opa32012').clientHeight + 'px';
		document.getElementById('opa42012').style.width = document.getElementById('opa32012').clientWidth + 'px';
		document.getElementById('div_height').style.height = document.getElementById('opa32012').clientHeight - 270 + 'px';
		function div_height() {
			document.getElementById('opa42012').style.width = document.getElementById('opa32012').clientWidth + 'px';
			document.getElementById('opa42012').style.height = document.getElementById('opa32012').clientHeight + 'px';
			document.getElementById('div_height').style.height = document.getElementById('opa32012').clientHeight - 270 + 'px';
		}
	</script>


	<noindex>
		<!-- Yandex.Metrika counter -->
		<div style="display:none;">
			<script type="text/javascript">(function (w, c) {
					(w[c] = w[c] || []).push(function () {
						try {
							w.yaCounter2481037 = new Ya.Metrika({id: 2481037, clickmap: true, trackLinks: true, webvisor: true});
						} catch (e) {
						}
					});
				})(window, "yandex_metrika_callbacks");</script>
		</div>
		<script src="<?php echo get_template_directory_uri() ?>/js/watch.js"
		        type="text/javascript" defer="defer"></script>
		<noscript>&lt;div&gt;&lt;img src="//mc.yandex.ru/watch/2481037" style="position:absolute; left:-9999px;" alt=""
			/&gt;&lt;/div&gt;</noscript>
		<!-- /Yandex.Metrika counter -->

		<div id="fb-root" class=" fb_reset">
			<script async=""
			        src="<?php echo get_template_directory_uri() ?>/js/all.js"></script>
			<div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
				<div>
					<iframe name="fb_xdm_frame_http" frameborder="0" allowtransparency="true" scrolling="no"
					        id="fb_xdm_frame_http" aria-hidden="true" title="Facebook Cross Domain Communication Frame"
					        tab-index="-1"
					        src="<?php echo get_template_directory_uri() ?>/images/xd_arbiter.htm"
					        style="border: none;"></iframe>
					<iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" scrolling="no"
					        id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame"
					        tab-index="-1"
					        src="<?php echo get_template_directory_uri() ?>/images/xd_arbiter(1).htm"
					        style="border: none;"></iframe>
				</div>
			</div>
			<div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
				<div></div>
			</div>
		</div>
		<script>
			(function () {
				var e = document.createElement('script');
				e.async = true;
				e.src = document.location.protocol +
					'//connect.facebook.net/ru_RU/all.js';
				document.getElementById('fb-root').appendChild(e);
			}());
			window.fbAsyncInit = function () {
				FB.init({appId: '214239318639084', status: true, cookie: true, xfbml: true});
			};
		</script>

		<script>
			(function () {
				var twitterWidgets = document.createElement('script');
				twitterWidgets.type = 'text/javascript';
				twitterWidgets.async = true;
				twitterWidgets.src = 'http://platform.twitter.com/widgets.js';
// Setup a callback to track once the script loads.
				document.getElementsByTagName('head')[0].appendChild(twitterWidgets);
			})();
		</script>

		<script type="text/javascript">
			/* <![CDATA[ */
			var google_conversion_id = 1052413970;
			var google_conversion_label = "rIhcCNqokwcQkqDq9QM";
			var google_custom_params = window.google_tag_params;
			var google_remarketing_only = true;
			/* ]]> */
		</script>
		<script type="text/javascript"
		        src="<?php echo get_template_directory_uri() ?>/js/conversion.js">
		</script>
		<iframe name="google_conversion_frame" title="Google conversion frame" width="300" height="13"
		        src="<?php echo get_template_directory_uri() ?>/images/saved_resource.htm"
		        frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true"
		        scrolling="no">&lt;img height="1" width="1" border="0" alt=""
			src="http://googleads.g.doubleclick.net/pagead/viewthroughconversion/1052413970/?frame=0&amp;random=1385796812890&amp;cv=7&amp;fst=1385796812890&amp;num=1&amp;fmt=1&amp;label=rIhcCNqokwcQkqDq9QM&amp;guid=ON&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=32&amp;u_his=2&amp;u_tz=120&amp;u_java=true&amp;u_nplug=6&amp;u_nmime=53&amp;url=http%3A//www.eremont.ru/&amp;frm=0"
			/&gt;</iframe>
		<noscript>
			&lt;div style="display:inline;"&gt;
			&lt;img height="1" width="1" style="border-style:none;" alt=""
			src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1052413970/?value=0&amp;amp;label=rIhcCNqokwcQkqDq9QM&amp;amp;guid=ON&amp;amp;script=0"/&gt;
			&lt;/div&gt;
		</noscript>

	</noindex>


<?php get_footer(); ?>