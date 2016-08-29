<?php
get_header(); ?>

<div id="content">
	<section id="contato">
		<h1 class="title-full small"><div class="animated bounceIn">Contato</div></h1>
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-left">
					<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 6 ); } ?>
				</div>
				<div class="col-md-6 text-left ">
					<div class="videoWrapperb">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.0745529549595!2d-46.53579738443502!3d-23.637500970294973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce42b832ebfd53%3A0x6ba710aa9626a2ea!2sR.+Silveira+Martins%2C+160+-+Santa+Teresinha%2C+Santo+Andr%C3%A9+-+SP%2C+09210-520!5e0!3m2!1spt-BR!2sbr!4v1470075254982" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="quadro">
					<p>
						Rua Silveira Martins 160 - Conjunto 2 - São Paulo - SP
					</p>
					<p>
						11 1234-5678
					</p>
					<p>contato@terapeutastantricas.com.br</p>							
					</div>
				</div>
			</div>	
		</div>
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>

<?php get_footer(); ?>
