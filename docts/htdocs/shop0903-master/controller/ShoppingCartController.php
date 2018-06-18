<?php
/**
 * Created by PhpStorm.
 * User: Phan Thông  IT
 * Date: 2018-05-11
 * Time: 7:51 PM
 */
include_once 'Controller.php';
class ShoppingCartController extends  Controller{
    function loadPageShopping(){
        return $this->loadView('shopping');
    }
}