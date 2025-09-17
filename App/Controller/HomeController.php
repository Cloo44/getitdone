<?php

namespace App\Controller;

class HomeController {
    public function home()
    {
        $name = $_GET["name"] ?? "";
        include "App/View/view_home.php";
    }
}