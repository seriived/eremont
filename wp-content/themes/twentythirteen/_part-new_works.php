<?php
/**
 * Created by JetBrains PhpStorm.
 * User: seriived
 * Date: 01.12.13
 * Time: 12:59
 * To change this template use File | Settings | File Templates.
 */

$args = array(
	'posts_per_page'   => 7,
	'offset'           => 0,
	'orderby'          => 'post_date',
	'order'            => 'DESC',
	'post_type'        => 'work',
	'post_status'      => 'publish',
	'suppress_filters' => true
);
$posts_array = get_posts( $args ,true);
foreach($posts_array as $work){
	$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($work->ID), 'large');
	?>
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tbody>
	<tr>
		<td width="74" valign="top">
			<a href="<?php echo $work->guid;?>">
				<img src="<?php echo $large_image_url[0];?>" border="0" class="img_ramka" alt="" width="70" height="70">
			</a>
		</td>
		<td valign="top" class="main_news">
			<a href="<?php echo $work->guid?>"><?php echo $work->post_title?></a></br>
			<?php echo $work->post_excerpt;?>
		</td>
	</tr>
	</tbody>
</table>
	<img src="<?php echo get_template_directory_uri() ?>/images/pixel.gif"
	     alt="" width="40" height="1" border="0">

	<div class="line_news"><!-- --></div>
<?php }
?>