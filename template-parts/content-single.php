<article class="row">
	<header class="col-md-6">
		<?php if ( has_post_thumbnail() && !is_search() ) { ?>
			<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( esc_html__( 'Permalink to %s', 'quark' ), the_title_attribute( 'echo=0' ) ) ); ?>">
				<?php the_post_thumbnail('home-thumb', array(
					'class' => "e-cinza img-responsive",
				)); ?>
			</a>
		<?php } ?>									
	</header>
	<div class="col-md-6 text-left">
		<h2 class="entry-title laranja"><?php the_title(); ?></h2>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div>
	</div>
</article>
