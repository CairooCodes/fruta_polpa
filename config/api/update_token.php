<?php
require_once('../../db_config.php');
require_once('../../vendor/autoload.php');


use GuzzleHttp\Client;

$client = new Client([
  'verify' => false
]);

$response = $client->request('POST', 'https://api.rd.services/auth/token', [
  'body' => '{"client_id":"22d00092-7c04-4dfb-95ab-8f5291c1390d","client_secret":"df9045f13dab4ab4848789ef55f93f45","refresh_token":"-kkWrYlvZJlxc3B8F-KUW54CHJdgPEtICNlCfXns8zY"}',
  'headers' => [
    'accept' => 'application/json',
    'content-type' => 'application/json',
  ],
]);

if ($response->getStatusCode() == 200) {
  $body = $response->getBody();
  $content = json_decode($body, true);
  $valorExtraido = $content['access_token'];

  echo $valorExtraido;
  $stmt = $pdo->prepare("UPDATE rd_station SET acess_token = :valor");
  $stmt->bindValue(':valor', $valorExtraido);
  $stmt->execute();
}
