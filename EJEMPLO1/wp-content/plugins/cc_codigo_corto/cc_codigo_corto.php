<?php 
/**
 * Plugin Name: peru villa codigo corto
 * Plugin URI: http://www.google.com.pe
 * Description: Este plugins es para johel practica
 * Author: Johel Flores inga
 * Version: 1.0
 * Author URI: http://www.google.com.pe
 * License :GPL2
 * 
 */
defined( 'ABSPATH' ) or die( 'Vamos a llevarnos bien...' ); // Primera linea de codigo


    add_action('init', 'cc_codigo_corto');  // inicializa
    
    if(!function_exists("cc_codigo_corto")){
        function cc_codigo_corto(){
            //[cesar][/cesar]
            add_shortcode('cesar','codigo_corto'); // te da el shordcode para poner
        }

    }
    if(!function_exists("codigo_corto")){ // carga una funcion con el shordcode
        function codigo_corto($args,$content){ // args: trae parametros desde el bakend [cesar num1= "1"] // $content: trae parametros desde adentro
            // return "<hr/> <strong>".$content."</strong>";
            $num1 = $args["num1"];
            $num2 = $args["num2"];
            return "<hr/>num1=".$num1."<br /> num2=".$num2;
        }
    }




?>