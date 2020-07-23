<?php
    include("db_config.php");
    
    function connect($db_data){
        $db = new mysqli($db_data['server_name'], $db_data['username'], $db_data['password'], $db_data['name']);
        if(!$db)    die("Connection failed: ".mysqli_connect_error());
        return $db;
    }

    function login($user, $pass, $db_data){
        $db = connect($db_data);
        $user = $db->real_escape_string($user);
        $pass = $db->real_escape_string($pass);
        $pass = md5($pass);
        $result = $db->query("SELECT * FROM amministratori WHERE username='$user' AND password='$pass'");

        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            return $row['id'];
        }
        else 
            return false;   
    }

    function uploadProduct($nome, $categoria, $costo, $img_name, $db_data){
        $db = connect($db_data);
        $nome = $db->real_escape_string($nome);
        $categoria = $db->real_escape_string($categoria);
        $costo = $db->real_escape_string($costo);
        $img_name = $db->real_escape_string($img_name);  
        $query = "SELECT * FROM prodotti WHERE categoria='$categoria' AND nome='$nome' AND costo=$costo";
        $result = $db->query($query);
        echo $result->num_rows;
        if($result->num_rows == 0){
            $query = "INSERT INTO prodotti (id,categoria,nome,costo,img_path)
                    VALUES (NULL,'$categoria','$nome',$costo,'$img_name')";
            if($db->query($query) === true){
                echo "Prodotto caricato con successo";
                return true;
            } else {
                echo "Prodotto caricato non fatto";
                return false;
            }
        } else return false;
    }

    function getProducts($db_data){
        $db = connect($db_data);
        $query = "SELECT * FROM prodotti";
        return $db->query($query);
    }

    function removeProduct($id, $db_data){
        $db = connect($db_data);
        $query = "DELETE FROM prodotti WHERE id = $id";
        return $db->query($query);
    }

?>