<?php 
namespace App\Controllers\Auth;

use App\Models\DataBase;
use League\Plates\Engine;
use App\Models\MailerService;

class RegController{

    public $view;
    public $db;
    public $mailer;

    public function __construct(Engine $view) {

        $this->view = $view;
        $this->db = new Database();
        $this->mailer = new MailerService();

    }

    public function RegForm():void
    {
        echo $this->view->render("/Auth/regform");
    }

    public function Register():void
    {
        $data = [
            "user_name" => $_POST["name"],
            "lastname" => $_POST["lastname"],
            "user_email" => $_POST["email"],
            "password" => $_POST["password"],
            "verified" => 0,
            "user_role" => 2,
            "is_saller" => 0
        ];

        
        $this->db->Insert("users", $data);

        $this->mailer->Send();
    }


    public function VerifiedFunc()
    {
        
    }
}