<?php

/*
Plugin Name: Primeiro Plugin.
Plugin URI:
Description: Primeiro Plugin para aprendizado.
Version: 1.0
Author: Vinícius Vitorino Dos Santos.
Author URI: https://viniciusvitorinosantos.github.io/SiteCurriculo/
License: GPL2
*/

// Ação simples exibir uma mensagem no final de cada postagem.
function mpp_exibir_mensagem_no_fim($content){
    if( is_single() || is_page()){ // Corrigido para is_page()
        $content .= '<p>Obrigado por ler nosso conteúdo!</p>'; // Corrigido a forma de concatenar a string
    }
    return $content;
}

// Hooks do WordPress - Adicionando a função ao "the_content".
add_filter('the_content', 'mpp_exibir_mensagem_no_fim'); // Corrigido o fechamento da função add_filter

?>
