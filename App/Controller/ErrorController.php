<?php


namespace App\Controller;


use src\Controller;

class ErrorController extends Controller
{
    public function index()
    {
    }
    public function generateError($id){
        switch ($id){
            case 404:
                $this->generateView(array(),'error404');
                break;
            case 502:

        }

    }


}