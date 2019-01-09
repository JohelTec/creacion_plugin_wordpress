<?php 
/**
 * Plugin Name: Peru Villa filtros
 * Plugin URI: http://www.google.com.pe
 * Description: Este plugins es para johel practica
 * Author: Johel Flores inga
 * Version: 1.0
 * Author URI: http://www.google.com.pe
 * License :GPL2
 * 
 */
    add_filter('the_title', "cc_filtrosEditTitulo"); // modifica el titulo de los post
    add_filter('the_content',"cc_filtrosEditCuerpo");// mofifica el contenido de los post
    
    // Esta funcion agrega un texto hola delante de cada titulo
        if(!function_exists("cc_filtrosEditTitulo")){
            function cc_filtrosEditTitulo($text){
                return "Hola ". $text;
            }
        }
    // esta function es para tranformar a mayusculas las letras del cuerpo
        if(!function_exists("cc_filtrosEditCuerpo")){
            function cc_filtrosEditCuerpo($text){
                return strtoupper($text); // carga el contenido en mayusculas
            }
        }
 
?>