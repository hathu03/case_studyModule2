<?php

namespace App\Models;

class Product
{
    private $id;
    private $name;
    private $pcode;
    private $height;
    private $weight;
    private $infor;
    private $price;
    private $img;

    /**
     * @param $id
     * @param $name
     * @param $pcode
     * @param $height
     * @param $weight
     * @param $infor
     * @param $price
     * @param $img
     */
    public function __construct($id, $name, $pcode, $height, $weight, $infor, $price, $img)
    {
        $this->id = $id;
        $this->name = $name;
        $this->pcode = $pcode;
        $this->height = $height;
        $this->weight = $weight;
        $this->infor = $infor;
        $this->price = $price;
        $this->img = $img;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPcode()
    {
        return $this->pcode;
    }

    /**
     * @param mixed $pcode
     */
    public function setPcode($pcode): void
    {
        $this->pcode = $pcode;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height): void
    {
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return mixed
     */
    public function getInfor()
    {
        return $this->infor;
    }

    /**
     * @param mixed $infor
     */
    public function setInfor($infor): void
    {
        $this->infor = $infor;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @param mixed $img
     */
    public function setImg($img): void
    {
        $this->img = $img;
    }

}