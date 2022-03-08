<?php

function events_endpoint($request) {
	register_rest_route( 'api', '/send_message', array(
        'methods'  => 'POST',
        'callback' => 'send_mail',
        'permission_callback' => '__return_true'
    ));

}
add_action( 'rest_api_init', 'events_endpoint' );

function send_mail($request){
    $data = $request->get_params();
    
    $Contenido=new Plantilla("tpl-email");
    $Contenido->asigna_variables($data);
    $body = $Contenido->muestra();
    $headers = array('Content-Type: text/html; charset=UTF-8');
    $response = [];
    if( wp_mail('beto@develover.mx', 'Formulario de contacto', $body, $headers ) ){
        $response = [
            'status' => 'success',
            'message' => 'Sus datos se han enviado con éxito',
            'data' => []
        ];       
    }else{
        $response = [
            'status' => 'error',
            'message' => 'Intente más tarde',
            'data' => []
        ];  
    }
    return $response;
}