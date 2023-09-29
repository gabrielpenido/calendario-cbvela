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

// Verifique se há postagens
if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
        // Aqui você pode exibir o conteúdo de cada postagem
        the_title(); // Título da postagem
        
		$events = get_field('events', get_the_ID());

		if ( !empty($events)){

			foreach ($events as $key => $event) {

				if(!empty($event['mes'])){
					echo 'mes:' . $event['mes'];
				}

				if (!empty($event['informacao'])){
					foreach ($event['informacao'] as $key => $info) {
						if(!empty($info['data'])){
							echo 'data:' . $info['data'];
						}
						if(!empty($info['modalidade'])){
							echo 'modalidade:' . $info['modalidade'];
						}
						if(!empty($info['modalidade'])){
							echo 'local:' . $info['local'];
						}
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
