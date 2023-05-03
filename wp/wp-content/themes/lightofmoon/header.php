<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LightOfMoon
 */

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Light Of Moon</title>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri (); ?>/css/style.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri (); ?>/css/div_sizes.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <header>
			<div class="navbar_main">
                <img class="logo" src="<?php echo get_template_directory_uri (); ?>/images/server-icon.png" style="float:left">
                <ul class="navbar" style="float:left">
					<li class="nav_item"><a href>О нас</a></li>
                    <li class="nav_item"><a href>Фракции</a></li>
                    <li class="nav_item"><a href>Расы</a></li>
                    <li class="nav_item"><a href>PVE</a></li>
                    <li class="nav_item"><a href>PVP</a></li>
                    <li class="nav_item"><a href>Особенности</a></li>
                    <li class="nav_item" style="color:white;">Онлайн:</li>
                 </ul>
				<a href="" class="nav_button">Играть бесплатно</a>
				<hr style="border-width:2px;width:100%;margin:0;padding:0;position:absolute;margin-top:120px;">
				</div>
			    <div class="intro">
            		<div class="intro_left">
                		<h1>Добро пожаловать на Light Of Moon</h1>
                		<h3>Мы создали уникальный мир, содержащий в себе как привычные механики из ваниллы, так и новый эксклюзивный контент, в котором каждый из вас найдет для себя что-то особенное, независимо от того, новичок вы, или же опытный игрок.</h3>
                		<button>Играть бесплатно</button>
            		</div>
            		<div class="intro_right">
                		<video>
                    		<source src="https://www.youtube.com/watch?v=9TP5NIcSE48">
                		</video>
            		</div>
        		</div>
        </header>