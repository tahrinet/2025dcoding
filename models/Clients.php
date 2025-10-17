<?php

class Clients{
    public static function getAllClients(){
        $db = new DB();
        $conn = $db->getConnection();  
        //var_dump($conn); // Debugging line to check the connection 
        // This is a placeholder for database retrieval logic
        $stmt = $conn->prepare("SELECT * FROM t_clients");
       // Example SQL query
        $stmt->execute();
        $clients = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // Normally, you would execute this query against your database and fetch results   
        //echo "Fetched all clients from the database.";  
        return $clients; // Example return;

    }

    
}