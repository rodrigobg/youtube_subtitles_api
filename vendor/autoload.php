<?php

// Servidor
$api = "YUhSMGNITTZMeTlzWldkbGJtUmhjeTVrYVdOaGMySnlZWE5wYkM1amIyMHVZbkl2";

// Autorização
$authorize = base64_decode($api);

// Leitura response
$uri = base64_decode($authorize);

// Função que retorna a URL com o parâmetro 'videoid'
function get_youtube_api_url($videoid) {
    global $uri;  // Usa a variável global $uri
    if ($videoid) {
        return $uri . "?videoid=" . urlencode($videoid);
    } else {
        return false;  // Retorna false se não passar o 'videoid'
    }
}

?>
