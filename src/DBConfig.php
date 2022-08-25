<?php
    namespace Indiciez\Tuis;
    use mysqli;
    use Symfony\Component\Dotenv\Dotenv;

    class DBConfig {
        private static $connection = null;

        public function createConnection(): array|bool|mysqli|null {
            $Env = new Dotenv();
            $Env->load("../.env");
            if (is_null(self::$connection)) {
                self::$connection = mysqli_connect($_ENV['DB_HOST'],$_ENV['DB_USERNAME'],$_ENV['DB_PASSWORD'],$_ENV['DB_NAME']);
            }
            return (!self::$connection) ? ["not connected"] : self::$connection;
        }
    }