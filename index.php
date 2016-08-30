<?php
get_header(); ?>

<div id="content">
	<section id="banner">
		<div class="container">
			<div class="row">		
				<?php putRevSlider( "banner-index" ) ?>		
			</div>
		</div>
	</section>

	<section id="sobre-home">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="small">Massagem Tântrica em São Paulo</h1>
					<h2>Venha fazer uma Massagem Tântrica com as melhores terapeutas de São Paulo</h2>
				</div>
			</div> <br>
			<div class="row">
				<div class="col-md-6 text-left">
					<p>
						A Massagem Tântrica traz vários benefícios para o organismo, combate o stresse,  
auxilia no tratamento de dores musculares e traz um relaxamento profundo, além 
de aumentar a disposição e o vigor físico.
					</p>
					<p>
						Nossas terapeutas tântricas aplicam tanto técnicas milenares da Massagem 
Tântrica como cada uma desenvolveu uma técnica de massagem personalizada e 
especial para cada cliente.
					</p>
				</div>
				<div class="col-md-6 text-left">
					<p>
						Todas as nossas terapeutas tântricas são habilitadas e treinadas nas mais 
diversas técnicas orientais e ocidentais da Massagem Tântrica, tudo isso para 
tornar sua sessão de massagem mais agradável e prazerosa.
					</p>
					<p>
						A Massgem Tântrica é uma técnica ao mesmo tempo sensual e muito prazerosa. 
Buscamos despertar para o prazer através do toque em harmonia com os cinco 
sentidos, tato, olfato, paladar, audição, visão e ainda despertar outros sentidos.
					</p>
				</div>
			</div>
		</div>
	</section>

	<section id="servicos">
		<div class="container">
			<?php
			$args = array( 'posts_per_page' => 6, 'offset'=> 0, 'orderby' => 'rand'  );

			$myposts = get_posts( $args );
			$i = 0;
			foreach ( $myposts as $post ) : setup_postdata( $post );
			?>
				<?php
				if($i % 3 == 0):
				?>
					<div class="row">
				<?php endif ?>
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
	            <?php 
	            $i++;
	            if($i % 3 == 0): 
	            ?>
					</div><br><br>
				<?php endif ?>
			<?php 
			endforeach; 
			wp_reset_postdata();
			?>
		</div>		
	</section>

	<section id="fotos-sobre">
		<div class="container">
			<div class="row">
				<div class="col-md-7 text-left">
					<h2 class="amarelo">Massagem Tântrica em São Paulo</h2>
					<p class="">Não somos uma clínica ou casa de massagem!<br>
						Nós somos profissionais autônomas especializadas em Massagem Tântrica 
sem nenhuma conotação sexual.<br>
						Atendemos homens, mulheres e casais!
					</p>
					<ul>
						<li>Massagem Tântrica</li>
						<li>Massagem Relaxante</li>
						<li>As melhores terapeutas tântricas de São Paulo</li>
						<li>Massagem personalizada e especial para cada cliente</li>
					</ul>
					<a href="<?php echo esc_url( home_url( '/' ) )."fotos"; ?>" class="btn-amarelo">CONTATO</a>
				</div>
				<div class="col-md-5 text-left">
					
					<div class="row">
						<div class="col-md-6">
							<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/banner-3.jpg"; ?>"/>
						</div>
						<div class="col-md-6">
							<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/banner-3.jpg"; ?>"/>
						</div>
					</div>
					<div class="fotos-sobre row">	
						<div class="col-md-6">
							<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/banner-3.jpg"; ?>"/>
						</div>
						<div class="col-md-6">
							<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/banner-3.jpg"; ?>"/>
						</div>
					</div>
			
				</div>
			</div>	
		</div>	
	</section>

	<section id="maps">
		<div class="container">
			<div class="row text-left detalhes-maps">
				<div class="col-md-12">
					<h2>Localização</h2>
					<p>
						Rua Silveira Martins 160 - Conjunto 2 - São Paulo - SP
					</p>
					<p>
						<strong>Telefone.: </strong>11 1234-5678 <strong>Email.: </strong>contato@terapeutastantricas.com.br
					</p>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 videoWrapper">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.0745529549595!2d-46.53579738443502!3d-23.637500970294973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce42b832ebfd53%3A0x6ba710aa9626a2ea!2sR.+Silveira+Martins%2C+160+-+Santa+Teresinha%2C+Santo+Andr%C3%A9+-+SP%2C+09210-520!5e0!3m2!1spt-BR!2sbr!4v1470075254982" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>			
				</div>
			</div>			
		</div>
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>

<?php get_footer(); ?>
