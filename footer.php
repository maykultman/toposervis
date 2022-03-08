	</main>
	<footer id="colophon" class="site-footer py-5">
		<div class="container py-5">
			<div class="row">
				<div class="col-3">
					<?php dynamic_sidebar( 'sidebar-1' ); ?>
				</div>
				<div class="col-3">
					<?php dynamic_sidebar( 'Dirección' ); ?>
				</div>
				<div class="col-3">
					<?php dynamic_sidebar( 'Teléfonos' ); ?>
				</div>
				<div class="col-3">
					<div class="nav">
						<div class="nav-item">
							<div class="nav-link pt-0 text-white">
								<?php dynamic_sidebar( 'Síguenos' ); ?>
							</div>
						</div>
					</div>
					<ul class="nav mx-0">
						<li class="nav-item">
							<a href="#" class="nav-link"><img src="<?=assets('img/facebook.svg')?>" alt="Toposervis"></a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link"><img src="<?=assets('img/instagram.svg')?>" alt="Toposervis"></a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link"><img src="<?=assets('img/whatsapp.svg')?>" alt="Toposervis"></a>	
						</li>
					</ul>
					
				</div>
			</div>
			<div class="row">
				<div class="col-3">
					<?php dynamic_sidebar( 'Horarios' ); ?>
				</div>
				<div class="col-3">
					TOPOSERVIS - <?=date('Y')?>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
