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

    public function create() : void 
    {
        echo $this->view->render("createAccount",[]);
    }

    public function error (array $data)
    {
        var_dump($data);
    }

}