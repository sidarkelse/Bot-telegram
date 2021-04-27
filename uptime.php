<?php 
 
  require __DIR__.'/vendor/autoload.php';

  use \App\Comunication\Alert;
///verificando se o site esta no ar
  try{
 $url = 'https://github.com/sidarkelse';
//₢onfiguração do curl
 $curl = curl_init($url);
 curl_setopt_array($curl,[
CURLOPT_HEADER => true,
CURLOPT_NOBODY =>true,
CURLOPT_RETURNTRANSFER=> true   ,
CURLOPT_TIMEOUT => 10
 ]);

 //executando a requisição curl

 curl_exec($curl);
 //codigo de estatus
 $httpCode = curl_getinfo($curl,CURLINFO_HTTP_CODE);
 //fecha a conexão curl
 curl_close($curl);

  if($httpCode != 200){
      throw new \Exception('ATENÇÃO! A URL"'.$url.'"retornou o status"'.$httpCode.'.',1);
  }

echo "Sucesso\n";

  }catch(\Exception $e){
      echo $e->getMessage()."\n";

      Alert::sedMEssage($e->getCode().':'.$e->getMessage());
  }