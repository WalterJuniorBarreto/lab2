<?php

function conexion(){
    $host = "host=dpg-d723d5oule4c73bhctbg-a.oregon-postgres.render.com";
    $port = "port=5432";
    $dbname = "dbname=name_postgres";
    $user = "user=name_postgres_user";
    $password = "password=TZRt7NNBptIDRnUCzpXgn1BKHunxoSmP";

    $db = pg_connect("$host $port $dbname $user $password");

    return $db;
}

?>