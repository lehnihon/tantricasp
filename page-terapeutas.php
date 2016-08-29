<?php
get_header(); ?>

<div id="content">
	<div class="container">
		<h1 class="small">Terapeutas</h1>
		<?php 
		$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

		$args = array(
			'posts_per_page' => 6,
		    'orderby' => 'post_date',
		    'order' => 'DESC',
		    'paged' => $paged);
		$query = new WP_Query( $args ); 

		if ( $query->have_posts() ): ?>
			<div class="row">	
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<div class="col-md-4">
					<?php if ( has_post_thumbnail()) : ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
							<?php the_post_thumbnail('home-thumb', array(
								'class' => "e-claro img-responsive",
							)); ?>
						</a>
					<?php endif; ?>
					<h4><?php the_title(); ?></h4>
					<p><?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?></p>
					<a href="<?php the_permalink(); ?>" class="btn-saiba-mais">CONFIRA</a>
				</div>
				<?php if($query->current_post == 2): ?>
					</div><br><div class="row">
				<?php endif; ?>		
			<?php endwhile; ?>										
			</div><br>
			<div class="row">
				<div class="col-md-12">
					<div class="paginacao">
					<?php
					$big = 999999999; // need an unlikely integer
					echo paginate_links( array(
						'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
						'format' => '?paged=%#%',
						'current' => max( 1, get_query_var('paged') ),
						'total' => $query->max_num_pages
					) );
					?>
				</div>
				</div>
			</div>
		<?php endif; ?>
	</div>
	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>

<?php get_footer(); ?>