<?php
/**
 * Header file for the CbVela WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage CbVela
 * @since CbVela 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

        <style>
			.evento-title {
				background-color: rgb(216, 145, 43);
				color: #2C3D73;
				font-family: "Roboto", Sans-serif;
				font-size: 22px;
				font-weight: 600;
				text-align: center;
				
			}
			.mes {
				background-color: rgb(25, 96, 54);
				color: #FFFFFF;
				font-family: "Roboto", Sans-serif;
				font-size: 18px;
				font-weight: 600;
				margin-bottom: 10px;
				margin-top: 10px;
			}
        </style>

	</head>

	<body <?php body_class(); ?>>
        <?php wp_body_open(); ?>
