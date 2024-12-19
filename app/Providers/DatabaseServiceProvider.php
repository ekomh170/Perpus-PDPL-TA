<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use PDO;

class DatabaseServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton('DatabaseConnection', function ($app) {
            $host = env('DB_HOST', '127.0.0.1');
            $db = env('DB_DATABASE', 'db_siperpus');
            $user = env('DB_USERNAME', 'root');
            $pass = env('DB_PASSWORD', '');
            $charset = 'utf8mb4';

            $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];

            return new PDO($dsn, $user, $pass, $options);
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
