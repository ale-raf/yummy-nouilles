<?php

function connectToDB()
{
    $servername = "localhost";
    $dbname = "yummy_nouilles";
    $username = "root";
    $password = "root";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully <br/>";
    } catch (PDOException $e) {
        // echo "Connection failed: " . $e->getMessage();
    } finally {
        return $conn;
    }
}

function selectFrom($conn, $table)
{
    $sql = "SELECT * FROM $table";
    $req = $conn->prepare($sql);
    $req->execute();
    $result = $req->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
