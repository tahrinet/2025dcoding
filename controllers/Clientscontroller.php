<?php

class ClientsController{
    public function listClients(){
        echo "This is ClientsController listClients method.";
        Clients::getAllClients();
    }


}