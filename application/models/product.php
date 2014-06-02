<?php

/**
 * @author Joshua Helt
 * @copyright 2014
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class product extends CI_Model
{
    public $productId;
    public $productName;
    public $procudtNotes;
    public $productPrice;
    public $productImage;

    public function __construct($name="", $id="", $price="", $notes="", $image="")
    {
        $this->productName = $name;
        $this->productId = $id;
        $this->productPrice = $price;
        $this->productNotes = $notes;
        $this->productImage = $image;
    }
    public function listProducts()
    {

        $products = array();
        $productList = array();
        $q = $this->db->get('products');
        foreach ($q->result() as $row) {
            $productArray = array(
                "name" => $row->name,
                "id" => $row->id,
                "price" => $row->price,
                "notes" => $row->notes,
                "image" => $row->image
                );
            array_push($productList, $productArray);
        }
        for ($i=0; $i<count($productList); $i++){
        $product = new product(
        $productList[$i]["name"], 
        $productList[$i]["id"], 
        $productList[$i]["price"], 
        $productList[$i]["notes"],
        $productList[$i]["image"]
        );
        
        array_push($products, $product);
        }
        return $products;
    }
}

?>