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
			body {
				display: flex;
				justify-content: center;
			}
			main#site-content {
				max-width: 1300px;
				display: flex;
				flex-direction: column;
			}
			.cabecalho-body {
				display: flex;
				justify-content: center;
				margin-bottom: 30px;
				flex-direction: column;
				align-content: center;
				align-items: center;
			}
			.form-cbvela a{
				color: #1F3485;
				font-family: "Roboto", Sans-serif;
				font-size: 20px;
				font-weight: 600;
				text-decoration: none;
				text-align: center;
			}
			h3.form-cbvela {
				margin-bottom: 0;
			}
			.title-regatas{
				color: #1F3485;
				font-family: "Roboto", Sans-serif;
				font-size: 26px;
				font-weight: 600;
				text-align: center;
			}
			h1.title-regatas {
				margin-bottom: 0;
			}
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
				text-transform: uppercase;
				padding-left: 15px;
			}
			.informacao {
				display: flex;
				flex-direction: row;
				justify-content: space-around;
				margin-bottom: 10px;
			}
			.data{
				font-size: 14px;
    			color: #2C3D73;
				width: 100px;
				height: 45px;
				text-align: center;
				background-color: #E6EDF4;
				display: flex;
				justify-content: center;
				align-items: center;
				font-family: "Roboto", Sans-serif;
			}
			.modalidade{
				font-size: 14px;
    			color: #2C3D73;
				width: 1130px;
				height: 45px;
				text-align: center;
				background-color: #E6EDF4;
				display: flex;
				justify-content: center;
				align-items: center;
				margin-left: 5px;
    			margin-right: 5px;
				font-family: "Roboto", Sans-serif;
			}
			.local{
				font-size: 14px;
    			color: #2C3D73;
				width: 100px;
				height: 45px;
				text-align: center;
				background-color: #E6EDF4;
				display: flex;
				justify-content: center;
				align-items: center;
				font-family: "Roboto", Sans-serif;
			}
			.local-p {
				word-wrap: break-word;
				width: 100px;
			}

			@media (max-width: 800px){
				body{
					margin: 15px;
				}
				main#site-content{
					max-width: 100%;
				}
				.modalidade {
					width: 160px;
					height: 122px;
				}
				.data {
					width: 100px;
					height: 122px;
				}
				.local{
					width: 100px;
					height: 122px;
				}
			}
        </style>

	</head>

	<body <?php body_class(); ?>>
        <?php wp_body_open(); ?>
