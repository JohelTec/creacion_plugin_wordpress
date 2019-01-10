<?php  
/**
 * Plugin Name: cc_metadatos
 * Plugin URI: http://www.google.com.pe
 * Description: Este plugins es para johel practica
 * Author: Johel Flores inga
 * Version: 1.0
 * Author URI: http://www.google.com.pe
 * License :GPL2
 * 
 */

    add_action("add_meta_boxes", "cc_agregar_campo_def"); // metodo  // funcion
    add_action("save_post", "cc_guardar_campo");

    if(!function_exists("cc_carga_data")){
        function cc_carga_data(){
            $values = get_post_custom($post->ID);
            $campo = esc_attr($values["cc_video"][0]);
            return $campo;
        }
    }

    if(!function_exists("cc_agregar_campo_def")){
        function cc_agregar_campo_def(){
            add_meta_box("cc_campo", "Nuevo campo", "cc_agregar_campo", "post");
        }

    }
    if(!function_exists("cc_agregar_campo")){
        function cc_agregar_campo(){
            ?>
            <label>Nuevo campo</label>
            <input type="text" name="cc_campo" id="cc_campo" value="<?php echo cc_carga_data();?>" placeholder="Nuevo Campo">
            <?php 
        }
    }
    if(!function_exists("cc_guardar_campo")){
        function cc_guardar_campo($post_id){
            if( defined( 'DOING_AUTOSAVE' )&& DOING_AUTOSAVE){
                return;
            }
           
        }
        
    }



 ?>