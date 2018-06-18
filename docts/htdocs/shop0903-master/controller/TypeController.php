<?php
/**
 * Created by PhpStorm.
 * User: Phan Thông  IT
 * Date: 2018-05-11
 * Time: 7:38 PM
 */
include_once "Controller.php";
class TypeController extends Controller{
    function loadPageType(){
        return $this->loadView('type');
    }
}