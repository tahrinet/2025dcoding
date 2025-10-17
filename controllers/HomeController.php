<?php

class HomeController{
    public function index($page){
        echo "This is HomeController index method.";
        echo "<br> <hr>  $page <hr>";
        include 'views/'.$page.'.php';
    }
}