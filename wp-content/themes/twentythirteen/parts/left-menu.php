<?php
/**
 * Created by JetBrains PhpStorm.
 * User: seriived
 * Date: 30.11.13
 * Time: 14:39
 * To change this template use File | Settings | File Templates.
 */
$args = array(
	'order' => 'ASC',
	'orderby' => 'menu_order',
	'post_type' => 'nav_menu_item',
	'post_status' => 'publish',
	'output' => ARRAY_A,
	'output_key' => 'menu_order',
	'nopaging' => true,
	'update_post_term_cache' => false);

$items = wp_get_nav_menu_items('Left menu', $args);
foreach ($items as $parent) {
	if ($parent->menu_item_parent == 0) {
		$parents[] = $parent;
	} else {
		$childs[$parent->menu_item_parent][] = $parent;
	}
}
//echo"<pre>";
//var_dump($childs);die;
echo "<div class='menu_left_container'>";
foreach ($parents as $item) {?>
	<div class="menu_left_level_1">
		<a href="<?=get_permalink($item->ID); ?>">
			<?php echo $item->post_title ?>
		</a>
	</div>
	<?php if (isset($childs[$item->ID])) {
		echo '<div class="menu_left_level_2_container" style="display: none">';
		foreach ($childs[$item->ID] as $child) {?>
			<div class="menu_left_level_2" >
				<a href="<?=get_permalink($child->ID) ?>">
					<strong><?php echo $child->post_title; ?></strong>
				</a>
			</div>
		<?php }
		echo '</div>';
	} else { ?>
		<div class="menu_left_line"><!-- --></div>
	<?php } ?>
<?php }
echo '</div>';
?>