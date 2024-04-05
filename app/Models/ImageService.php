<?php 
namespace App\Models;

use App\Models\DataBase;

class ImageService{

    protected $db;

    public function __construct()
    {
        $this->db = new DataBase;;
    }

    public function UploadProdImg($value, $prodID):void
    {
        
        $filePath = "/product_img";

            $image = $filePath . "/" . rand(0, 15000) . rand(0,15000) . $value;
            move_uploaded_file($image, $filePath);
            $data = [
                "image_path" => $image,
                "product_id" => $prodID
            ];
            $this->db->Insert("prod_images",$data);

    }
}