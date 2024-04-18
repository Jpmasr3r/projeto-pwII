<?php

namespace Source\App;

use League\Plates\Engine;

class Web
{
    private $view;

public function __construct()
    {
        $this->view = new Engine(__DIR__ . "/../../themes/web","php");
    }

    public function home () : void
    {
        //echo "<h1>Eu sou a Home...</h1>";
        echo $this->view->render("home",[]);
    }

    public function login() : void 
    {
        echo $this->view->render("login",[]);
    }

    public function register() : void 
    {
        echo $this->view->render("register",[]);
    }

    public function faq() : void 
    {
        echo $this->view->render("faq",[]);
    }

    public function contact() : void 
    {
        echo $this->view->render("contact",[]);
    }

    public function about() : void 
    {
        echo $this->view->render("about",[]);
    }

    public function map() : void 
    {
        echo $this->view->render("map",[]);
    }

    public function error (array $data)
    {
        var_dump($data);
    }

}