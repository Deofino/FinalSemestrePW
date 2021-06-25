<?php

namespace App\Model;

use App\Model\Connection;
use App\Controller\Twig;

class Product
{
    private $id;
    private $name;
    private $description;
    private $gender;
    private $colors;
    private $id_category;
    private $price;
    private $id_brand;
    private $image;

    public function __construct(
        $name = '',
        $description = '',
        $colors = '',
        $gender = '',
        $price = '',
        $id_category = '',
        $id_brand = '',
        $image = '',
        )
    {
        $this->name = $name;
        $this->id_brand = $id_brand;
        $this->id_category = $id_category;
        $this->colors = $colors;
        $this->gender = $gender;
        $this->image = $image;
        $this->price = $price;
        $this->description = $description;
    }
    public function create()
    {
        try {
            $stmt = Connection::getConnection()
            ->prepare('INSERT INTO tbshoe(nameShoe, descriptionShoe, genderShoe, priceShoe,
            colorsShoe, dirImageShoe, idCategory, idBrand) values(?,?,?,?,?,?,?,?)');
            if ($stmt->execute([$this->name,$this->description,$this->gender,$this->price,
                                        $this->colors,$this->image,$this->id_category,$this->id_brand])) 
                {
                return Twig::loadJson("ok", 200, "Shoe inserted with success");
            }
            return Twig::loadJson("bad", 400, "Shoe error to insert");
        } catch (\Throwable $th) {
            return Twig::loadJson("bad", 400, "Shoe error to insert: $th");
        }
    }
    public function read()
    {
        try {
            $stmt = Connection::getConnection()->prepare('SELECT * FROM tbshoe');
            if($stmt->execute()){
                return $stmt->fetchAll();
            }
            return Twig::loadJson("bad", 400, "Shoe error to read");
        } catch (\Throwable $th) {
            return Twig::loadJson("bad", 400, "Shoe error to read: $th");
        }
    }
    public function delete($id)
    {
        try {
            $stmt = Connection::getConnection()->prepare('DELETE FROM tbshoe WHERE _id = ?');
            if($stmt->execute([$id])){
                return Twig::loadJson("ok", 200, "Shoe deleted with success");
            }
            return Twig::loadJson("bad", 400, "Shoe error to delete");
        } catch (\Throwable $th) {
            return Twig::loadJson("bad", 400, "Shoe error to delete: $th");
        }
    }
}
