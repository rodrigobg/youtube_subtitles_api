<?php

// Include the vendor file to get the function
include_once ("vendor/autoload.php");

// Defina os valores do vídeo e chave API
$videoid = "Vt-yaSLqopE";  // O 'videoid' pode ser dinâmico, dependendo da requisição
$api_key = "YOUR_API_KEY_HERE";
//

//get your free api key here:
# https://api.dicasbrasil.com.br/gestao/signup


// Call the vendor function to get the URL with the 'videoid'
$youtube_api = get_youtube_api_url($videoid);

if ($youtube_api) {
    // Faz a requisição CURL para obter os dados do Youtube 
    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => $youtube_api,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => http_build_query(["api_key" => $api_key]),
        CURLOPT_HTTPHEADER => ["Content-Type: application/x-www-form-urlencoded"],
    ]);

    $response = curl_exec($curl);
    curl_close($curl);

    var_dump($response);  // Exibe a resposta recebida
} else {
    echo "Parameter 'videoid' not provided or invalid.";
}

?>
