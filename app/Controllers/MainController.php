<?php 
namespace App\Controllers;

use League\Plates\Engine;
use App\Models\Database;
use App\Models\ImageService;

class MainController
{

    protected $view;
    public $db;
    public $ImgService;


    public function __construct(Engine $view)
    {
        $this->db = new Database;
        $this->view = $view;
        $this->ImgService = new ImageService;
    }

    public function mainPage():void
    {
        $sallers = $this->db->SelectWhere("users", "is_saller", "1");
        $products = $this->db->SelectAll("products");

        echo $this->view->render('Home/MainPage', ["products" => $products, "saller" => $sallers]);
    }

    public function addProduct($formData):void
    {

        $data = [
            "prod_name" => $formData['prod_name'],
            "price" => $formData['prod_price'],
            "descrip" => $formData['prod_desc'],
            "category" => $formData['category'],
            "saller" => 4
        ];

        $productID = $this->db->Insert("products", $data);

        $images = $formData["images"];

        foreach ($images as $key => $value) {
            $this->ImgService->UploadProdImg($value, $productID);
        }

    }
}