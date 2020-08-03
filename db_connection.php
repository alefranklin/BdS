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

    function getProducts($db_data,$priceOrder = "ASC"){
        $db = connect($db_data);
        $query = "SELECT * FROM prodotti ORDER BY costo $priceOrder";
        return $db->query($query);
    }

    function getInsturmentsProducts($db_data,$priceOrder = "ASC"){
        $db = connect($db_data);
        $query = "SELECT * FROM prodotti WHERE categoria='strumento' ORDER BY costo $priceOrder";
        return $db->query($query);
    }

    function getAccessoriesProducts($db_data,$priceOrder = "ASC"){
        $db = connect($db_data);
        $query = "SELECT * FROM prodotti WHERE categoria='accessorio' ORDER BY costo $priceOrder";
        return $db->query($query);
    }

    function removeProduct($id, $db_data){
        $db = connect($db_data);
        $query = "DELETE FROM prodotti WHERE id = $id";
        return $db->query($query);
    }

    function uploadService($nome, $costo, $descrizione, $db_data){
        $db = connect($db_data);
        $nome = $db->real_escape_string($nome);
        $categoria = $db->real_escape_string($categoria);
        $descrizione = $db->real_escape_string($descrizione);
        $costo = $db->real_escape_string($costo);
        $query = "SELECT * FROM servizi WHERE nome='$nome'";
        $result = $db->query($query);
        if($result->num_rows == 0){
            $query = "INSERT INTO servizi (id,nome,descrizione,costo)
                    VALUES (NULL,'$nome','$descrizione',$costo)";
            if($db->query($query) === true){
                return true;
            } else {
                return false;
            }
        } else return false;
    }

    function getServices($db_data){
        $db = connect($db_data);
        $query = "SELECT * FROM servizi";
        return $db->query($query);
    }

    function removeService($id, $db_data){
        $db = connect($db_data);
        $query = "DELETE FROM servizi WHERE id = $id";
        return $db->query($query);
    }

    function getDayAppointments($day, $db_data){
        $db = connect($db_data);
        $query = "SELECT * FROM appuntamenti WHERE data = '$day' ORDER BY ora ASC";
        return $db->query($query);
    }

    function getHourAppointments(){

    }

    function book($cliente, $data, $ora, $servizi, $email, $db_data){
        $db = connect($db_data);
        $cliente = $db->real_escape_string($cliente);
        $data = $db->real_escape_string($data);
        $ora = $db->real_escape_string($ora);
        $servizi = $db->real_escape_string($servizi);
        $email = $db->real_escape_string($email);

        $query = "SELECT * FROM appuntamenti WHERE data='$data' AND ora='$ora'";
        $result = $db->query($query);
        if($result->num_rows == 0){
            $query = "INSERT INTO appuntamenti (id,cliente,data,ora,servizi,email)
                      VALUES (NULL,'$cliente','$data','$ora','$servizi','$email')";
            if($db->query($query) === true){
                return true;
            } else {
                return false;
            }
        } else return false;
    }
?>