<?php
function obterCotacaoDolar() {
    $cotacao = Array();
    $url = "http://www4.bcb.gov.br/pec/taxas/batch/taxas.asp?id=txdolar";
    $expRegular = "/[0-9],[0-9]{4}|[0-9],[0-9]{3}/";
    $curlHandler = curl_init($url);
    curl_setopt($curlHandler, CURLOPT_HEADER, 0);
    curl_setopt($curlHandler, CURLOPT_RETURNTRANSFER, 1);    
    $resultado = curl_exec($curlHandler);
    preg_match_all($expRegular, $resultado, $cotacao);
    curl_close($curlHandler);
    return $cotacao[0];
}
?>