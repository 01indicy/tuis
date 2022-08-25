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
                $PORT = (empty($_ENV['DB_PORT']) && (int)$_ENV['DB_PORT'] !== 3306) ? $_ENV['DB_PORT']: 3306;
                self::$connection = mysqli_connect($_ENV['DB_HOST'],$_ENV['DB_USERNAME'],$_ENV['DB_PASSWORD'],$_ENV['DB_NAME'],$PORT);
            }
            return (!self::$connection) ? ["not connected"] : self::$connection;
        }
    }