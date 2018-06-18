<?php
include_once 'Controller.php';
include_once 'model/HomeModel.php';

class HomeController extends Controller{

    function getHomePage(){
        $model = new HomeModel;
        $background = $model->selectBackground();
        $data=[
            'background' =>$background


        ];
        return $this->loadView('home',$data);
    }
}

?>