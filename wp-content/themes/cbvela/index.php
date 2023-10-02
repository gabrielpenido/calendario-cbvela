<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Cbvela
 * @since CbVela 1.0
 */

get_header();
?>

<main id="site-content">

<?php
// O seguinte código vai no seu arquivo index.php

// Defina os parâmetros da consulta para o tipo de postagem personalizado
$args = array(
    'post_type' => 'eventos',
    'posts_per_page' => -1, // Altere o número de postagens exibidas conforme necessário
);

// Execute a consulta
$query = new WP_Query($args);
?>
<div class="cabecalho-body">
	<img style="width: 399px; height: 113px;" src="https://calendario.cbvela.org.br/wp-content/uploads/2022/12/Logo-CBVela-T4_1-1-768x219.png" alt="Logo CbVela">
	<h1 class="title-regatas">
		CALENDÁRIO DE REGATAS – 2023
	</h1>
	<h3 class="form-cbvela">
		<a href="https://docs.google.com/forms/d/e/1FAIpQLSeSm61BMf95KqE2pJ6SbngRIdgG2_5QsL8j_SlePZgME7bZXw/viewform">
			Formulário Calendário 2023
		</a>
	</h3>
</div>
<?php


// Verifique se há postagens
if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
        // Aqui você pode exibir o conteúdo de cada postagem
        ?>
		<div class="evento-title">
			<?php the_title(); // Título da postagem ?>
		</div><?php
		
        
		$events = get_field('events', get_the_ID());

		if ( !empty($events)){

			foreach ($events as $key => $event) {

				if(!empty($event['mes'])){ ?>
					<div class="mes">
						<?php echo $event['mes']; ?>
					</div><?php
					
				}

				if (!empty($event['informacao'])){
						foreach ($event['informacao'] as $key => $info) { ?>
						<div class="informacao"> <?php
								if(!empty($info['data'])){?>
									<div class="data">
										<?php echo $info['data']; ?>
									</div>
									<?php
								}
								if(!empty($info['modalidade'])){?>
									<div class="modalidade">
										<?php echo  $info['modalidade']; ?>
									</div>
									<?php
								}
								if(!empty($info['local'])){?>
									<div class="local">
										<?php echo  $info['local']; ?>
									</div>
									<?php
								}
							?></div><?php
						}
				
				}

			}

		}

    endwhile;
else :
    // Caso não haja postagens
    echo 'Não foram encontradas postagens.';
endif;

// Restaura os dados originais do post
wp_reset_postdata();
?>


</main><!-- #site-content -->

<?php
get_footer();
