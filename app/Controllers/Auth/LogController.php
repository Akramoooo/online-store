<?php 
namespace App\Controllers\Auth;

use App\Models\DataBase;
use League\Plates\Engine;

class LogController{

    public $view;

    public function __construct(Engine $view) {

        $this->view = $view;

    }

    public function LogForm():void
    {
        echo $this->view->render("/Auth/LogForm");
    }


    
}