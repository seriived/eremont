<td width="65%" valign="top">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tbody>
		<tr>
			<td style="padding-right:53px;">
				<?php get_template_part('_part', 'reklama');
				global $term;
				$term = get_term_by("slug",'dizajn-interera',"rubrics");
				$term_first_content = explode('!!more!!',$term->description);
				?>
				<h1><?php echo $term->name;?></h1>
				<p align="justify"><?php echo $term_first_content[0]?><br>
				</p>
				<br>
				<?php echo get_template_part("_part","table_subcat");?>
				<br>
				<br>
				<p align="justify"><?php echo $term_first_content[1];?></p>
			</td>
		</tr>
		</tbody>
	</table>
</td>