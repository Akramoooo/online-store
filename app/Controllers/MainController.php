<?php 
namespace App\Controllers;

use League\Plates\Engine;

class MainController
{

    protected $view;

    public function __construct(Engine $view)
    {
        $this->view = $view;
    }

    public function mainPage()
    {
        echo $this->view->render('Home/MainPage');
    }
}