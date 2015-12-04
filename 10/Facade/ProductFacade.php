<?php
use function \noodles\getProductFileLines;
use function \noodles\getNameFromLine;
use function \noodles\getIdFromLine;


class ProductFacade
{
    private $products = array();
    private $file;

    public function __construct($file)
    {
        $this->file = $file;
        $this->compile();
    }


    private function compile()
    {
        $lines = getProductFileLines($this->file);
        foreach($lines as $line){
            $id = getIdFromLine($line);
            $name = getNameFromLine($line);
            $this->products[$id] = new Product($id, $name);
        }
    }

    /**
     * @return array
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @return Product
     */
    public function getProduct($id)
    {
        return $this->products[$id];
    }
}