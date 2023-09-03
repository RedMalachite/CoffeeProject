<?php

class DB
{
    protected static PDO $instance;

    public static function connect(): PDO
    {
//        dd(DNS);
        if (!isset(self::$instance)) {
        self::$instance = new PDO(
            DNS,
            DB_USER,
            DB_PASSWORD,
            [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]
        );
        }
        return self::$instance;
    }
}