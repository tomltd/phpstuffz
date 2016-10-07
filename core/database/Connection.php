<?php

class Connection
{
    public static function make($config)

    {
        try {
            //return new PDO('mysql:host=192.168.10.10;dbname=mytodos2', 'mytodos2', 'mytodos2');
            return new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );

        } catch (PDOexception $e) {
            die($e->getMessage());
        }

    }
}

//$pdo = Connection::make();


// Make new instance then call the method if NOT static function
// $connection = new Connection();
// $connection->make();

// :: syntax to designate calling a static method.
// Connection::make();
