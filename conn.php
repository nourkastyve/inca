<?php 
    $dns = 'mysql:host=localhost;dbname=debrouillard';
    $user='root';
    
    try{
        $bdd = new PDO($dns,$user,'');
    }catch(PDOexception $e){
        echo 'erreur de connexion'.$e->getMessage();
    }
?>