<?php

/**
 * @author Vladimir Krstevski <vlade.piki23@hotmail.com>
 * @link https://www.linkedin.com/in/vladimir-krstevski-6182aa24b/
 */

require_once "POPO/product.php";
class ProductDAO extends Product
{

    private $table_name = "product";
    private $database = null;

    /**
     * Default constructor
     */
    public function __construct($objDB)
    {
        $this->database = $objDB;
    }

    /**
     * 
     */
    public function insertProduct()
    {
        $id = parent::getId();
        $name = parent::getName();
        $price = parent::getPrice();
        $attributes = parent::getAttributes();
        $value = parent::getValue();

        $columns_name = "id,name,price,attributes,value";
        $columns_value = "'$id','$name',$price,'$attributes','$value'";

        $this->database->insertRow($this->table_name, $columns_name, $columns_value);
    }

    /**
     * 
     */
    public function deleteProduct()
    {
        $id = parent::getId();
        $pk_name = "id";
        $pk_value = "'$id'";
        $this->database->deleteRow($this->table_name, $pk_name, $pk_value);
    }

    /**
     * 
     */
    public function selectProduct()
    {
        return $this->database->selectRow($this->table_name);
    }

    public function selectProductCallStoredProcedure()
    {
        return $this->database->selectRowStoredProcedure("_select_product");
    }
}
