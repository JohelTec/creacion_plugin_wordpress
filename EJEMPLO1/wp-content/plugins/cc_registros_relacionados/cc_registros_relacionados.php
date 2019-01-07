<?php 
/**
 * Plugin Name: registros peru villa
 * Plugin URI: http://www.google.com.pe
 * Description: Este plugins es para johel practica
 * Author: Johel Flores inga
 * Version: 1.0
 * Author URI: http://www.google.com.pe
 * License :GPL2
 * 
 */
    add_filter("the_content", "cc_post_contenido_relacionados");
    
    if(!function_exists("cc_post_contenido_relacionados")){
        function cc_post_contenido_relacionados($content){
            if(!is_singular('post')){
                return $content;
            }else{
                $categorias = get_the_terms(get_the_ID(), "category");// te da un array asociando el uid con la categoria
                $array = array(); // este array se pasa a un array simple el cual se saca los datos por un foreach
                foreach($categorias as $categoria){
                    $array[]=$categoria->term_id;
                }

                $loop = new WP_Query( // wp_query se usa para interactuar con las tablas
                    array(
                        'category_in' => $array, // muestre todos los registros que esten asosiados a la categoria
                        'posts_per_page' =>  2,// catidad de registro por pagina q muestra
                        'post_not_in' => array(get_the_ID()),// busca todos los registros asosiados pero no te muestra la publicacion en el cual se esta 
                        'orderby' => 'rand' // cargan de forma aleatoria
                    )
                );
                if($loop->have_posts()){
                    $content .= "Post relacionados";
                    $content .= "<hr/>";
                    $content .= "<ul>";
                        while($loop->have_posts()){ // busca los post
                            $loop->the_post(); // imprime los valores en pantalla
                            $content .= "<li>";
                            $content .= '<a href="'.get_permalink().'">'.get_the_title().'</a>';
                            $content .= "</li>";
                        }
                    $content .= "<ul/>";
                }
                wp_reset_query(); // se recomienda usar esto cuando se usa WP_Query
                return $content;

            }
        }
    }

 
?>