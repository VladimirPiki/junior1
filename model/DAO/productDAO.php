<?php

/**
 * @author Vladimir Krstevski <vlade.piki23@hotmail.com>
 * @link https://www.linkedin.com/in/vladimir-krstevski-6182aa24b/
 * Please, visit my website - https://fkjenimaale.mk/
 */

/**
 * This is Data Access Object.
 * Тhrough this class, all data go to class_databse.php and database.
 * 
 *  */

require_once "POPO/product.php";
class ProductDAO extends Product
{

    private $table_name = "product";
    private $database = null;

    /**
     * Connect to database.
     * 
     * __construct
     *
     * @param  mixed $objDB
     * @return void
     */
    public function __construct($objDB)
    {
        $this->database = $objDB;
    }
    
    /**
     * Тhrough this function all data who come to us from the client side, wear them to insert function in class_database.php.
     * 
     * insertProduct
     *
     * @return void
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
     * Тhrough this function all data who come to us from the client side, wear them to delete function in class_database.php.
     * 
     * deleteProduct
     *
     * @return void
     */
    public function deleteProduct()
    {
        $id = parent::getId();
        $pk_name = "id";
        $pk_value = "'$id'";
        $this->database->deleteRow($this->table_name, $pk_name, $pk_value);
    }
    
    /**
     * Тhrough this function all data from class_database.php and database go to client side in js.
     * 
     * selectProduct
     *
     * @return void
     */
    public function selectProduct()
    {
        return $this->database->selectRow($this->table_name);
    }
    
    /**
     * Тhrough this function all data from class_database.php and database go to client side in js.
     * 
     * selectProductCallStoredProcedure
     *
     * @return void
     */
    public function selectProductCallStoredProcedure()
    {
        return $this->database->selectRowStoredProcedure("_select_product");
    }
}
