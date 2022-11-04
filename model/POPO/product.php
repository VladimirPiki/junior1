<?php

/**
 * @author Vladimir Krstevski <vlade.piki23@hotmail.com>
 * @link https://www.linkedin.com/in/vladimir-krstevski-6182aa24b/
 */

class Product
{

    private  $id;

    private  $name;

    private  $price;

    private  $attributes;

    private  $value;


    /**
     * @return string
     */
    public function getId():string
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * 
     * @return void
     */
    public function setId($id):void
    {
        $this->id=$id;
    }

    /**
     * @return string
     */
    public function getName():string
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * 
     * @return void
     */
    public function setName( $name):void
    {
        $this->name=$name;
    }

    /**
     * @return string
     */
    public function getPrice():string
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     * 
     * @return [type]
     */
    public function setPrice($price)
    {
        $this->price=$price;
    }

    /**
     * @return string
     */
    public function getAttributes():string
    {
        return $this->attributes;
    }

    /**
     * @param mixed $attributes
     * 
     * @return void
     */
    public function setAttributes( $attributes):void
    {
        $this->attributes=$attributes;
    }

    /**
     * @return string
     */
    public function getValue():string
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     * 
     * @return void
     */
    public function setValue( $value):void
    {
        $this->value=$value;
    }

}
