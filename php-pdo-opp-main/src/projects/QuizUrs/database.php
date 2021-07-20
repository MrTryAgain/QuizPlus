<?php
        require_once 'config.php';


   
    
        //<img src="/images/babyYoda.gif" alt="cute baby yoda animation" class="center">
        //<?php

        define('DB_NAME', getenv('DB_NAME'));
        define('DB_USER', getenv('DB_USER'));
        define('DB_PASSWORD', getenv('DB_PASSWORD'));
        define('DB_HOST', getenv('DB_HOST'));


        $connection = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASSWORD);
        
        if (strpos($_SERVER['HTTP_HOST'], 'localhost:') !== false) {
                define('DB_NAME', getenv('DB_NAME'));
                define('DB_USER', getenv('DB_USER'));
                define('DB_PASSWORD', getenv('DB_PASSWORD'));
                define('DB_HOST', getenv('DB_HOST'));
        }
        else{
                define('DB_NAME', 'ipiluwig_cu');
                define('DB_USER', 'ipiluwig_16');
                define('DB_PASSWORD', '12345');
                define('DB_HOST', 'ipiluwig.smysql.db.internal');
        }


        //$connection = new PDO('mysql:host=mysql;dbname=demo;charset=utf8', 'root', 'root');

        /*            
        try {
            $connection = new PDO(
                    'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8',
                    DB_USER,
                    GlobalDB_PASSWORD
            );
            $connection->setAttribute(PDO::ERRMODE_EXCEPTION);

        }

        catch(PDOException $e) {
                echo '<p>DB connection failed: ' .$e->getMessage() . '</p>;

                echo 'HTTP_POST = ' . $SERVER['HTTP_HOST'] . '<br>';
                echo 'DB_NAME = ' . DB_NAME . '<br>';
                echo 'DB_USER = ' . DB_USER . '<br>';
                echo 'DB_PASSWORD = ' . DB_PASSWORD . '<br>';
                echo 'DB_HOST = ' . DB_HOST . '<br>';
                exit;
        }
        return $connection;
}


*/