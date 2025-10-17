<h1>Liste Clients</h1>

<?php
    $clients = Clients::getAllClients();
    foreach($clients as $client){
        echo "<p>Client ID: " . htmlspecialchars($client['Ref_Client']) . ",\tName: " . htmlspecialchars($client['Nom_Client']) . "</p>";
    }
?>