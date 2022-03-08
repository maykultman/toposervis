<?php
	$img = img_featured_url($o->ID);
	$img = $img ? $img : site_url('/wp-content/uploads/2022/03/renta-de-equipos-topograficos-de-las-mejores-marcas.png');
?>
<article id="post-<?=$post->ID?>" class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
	<img src="<?=$img?>" alt="<?=$o->post_title?>">
	<h5 class="my-3"><?=$o->post_title?></h5>
	<p><?=get_the_excerpt($o->ID)?></p>
</article><!-- #post -->