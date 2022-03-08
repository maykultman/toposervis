<?php /* Template Name: Blog */ ?>
<?php get_header() ?>
<?php 
	$entradas = new wp_query([
		'post_type' => 'post',
		'posts_per_page' => 6
	]);
	
?>
<div>
	<img src="<?=img_featured_url($post->ID)?>" alt="<?=$post->post_title?>" class="img-fluid">
</div>
<div class="container">
	<div class="row">
		<?php 
			foreach($entradas->posts as $o): 
				require get_template_directory() . '/template-parts/content.php'; 
			endforeach; 
		?>
	</div>
</div>
<script>
	$('#primary').removeClass('container my-4 py-5');
	$('#primary').addClass('container-fluid mb-4 pb-3 px-0');
</script>
<?php get_footer() ?>