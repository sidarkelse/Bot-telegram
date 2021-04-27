<?php 
 
  require __DIR__.'/vendor/autoload.php';

  use \App\Comunication\Alert;

  try{
$code = $argv[1] ?? 0;
if($code !=1){
    throw new \Exception("Código inválido - o valor esperado ta errado SEU OTÁRIO",666);

}
echo "Sucesso\n";

  }catch(\Exception $e){
      echo $e->getMessage()."\n";

      Alert::sedMEssage($e->getCode().':'.$e->getMessage());
  }