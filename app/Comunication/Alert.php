<?php 

namespace App\Comunication;
use TelegramBot\Api\BotApi;

class alert {
    const TELEGRAM_BOT_TOKEN =  '';

    const TELEGRAM_CHAT_ID = ;
//Método responsavel por enviar a mensagem de alerta
  public static function sedMEssage ($message){
     // instancia do bot com o token gerado
  $obBotApi = new BotApi(self::TELEGRAM_BOT_TOKEN);
 // envia mensagem pro telegram
  return $obBotApi->sendMessage(self::TELEGRAM_CHAT_ID,$message);

  }
}
