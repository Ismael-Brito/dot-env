<?php

namespace IsmaelBrito\DotEnv;

class Environment
{

  /**
   * Método responsável por carregar as variáveis de ambiente do projeto
   * @param  string $dir Caminho absoluto da pasta onde encontra-se o arquivo .env
   */

  public static function load($dir)
  {
    // Verifica se o arquivo .env existe
    $envPath = $dir . '/.env';
    if (!file_exists($envPath)) {
      return false;
    }

    // Lê cada linha do .env
    $lines = file($envPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lines as $line) {
      // Ignora comentários
      if (strpos(trim($line), '#') === 0) {
        continue;
      }

      // Verifica se contém um '='
      if (strpos($line, '=') === false) {
        continue;
      }

      // Separa a variável e valor
      list($name, $value) = explode('=', $line, 2);

      // Remove aspas e espaços extras
      $name = trim($name);
      $value = trim($value, " \t\n\r\0\x0B\"'");

      // Define nas variáveis de ambiente
      putenv("{$name}={$value}");
      $_ENV[$name] = $value;
      $_SERVER[$name] = $value;
    }

    return true;
  }
}
