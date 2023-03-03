<?php

/**
 * @author Vladimir Krstevski <vlade.piki23@hotmail.com>
 * @link https://www.linkedin.com/in/vladimir-krstevski-6182aa24b/
 * Please, visit my website - https://fkjenimaale.mk/
 */

 /**
  * Plain Old Php Object.
  * In this class will keep stored data and transfer in private variable. 
  */
class Product
{
    private  $id;
    private  $name;
    private  $price;
    private  $attributes;
    private  $value;

    /**
     * getId
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * setId
     *
     * @param  mixed $id
     * @return void
     */
    public function setId($id): void
    {
        $this->id = $id;
    }
    
    /**
     * getName
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * setName
     *
     * @param  mixed $name
     * @return void
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * getPrice
     *
     * @return string
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * setPrice
     *
     * @param  mixed $price
     * @return void
     */
    public function setPrice($price):void
    {
        $this->price = $price;
    }

    /**
     * getAttributes
     *
     * @return string
     */
    public function getAttributes(): string
    {
        return $this->attributes;
    }

    /**
     * setAttributes
     *
     * @param  mixed $attributes
     * @return void
     */
    public function setAttributes($attributes): void
    {
        $this->attributes = $attributes;
    }
    
    /**
     * getValue
     *
     * @return int
     */
    public function getValue():string
    {
        return $this->value;
    }

    /**
     * setValue
     *
     * @param  mixed $value
     * @return void
     */
    public function setValue( $value):void
    {
        $this->value=$value;
    }

}
