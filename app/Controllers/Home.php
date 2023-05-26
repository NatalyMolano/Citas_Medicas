<?php
//espacio de trabajo
namespace App\Controllers;
//declaracion de una clase que extiende de otra clase
//heredar atraves de la funcion
class Home extends BaseController
{
    public function index()
    {
        //manda como parametro retorno a la vista 
        return view('welcome_message');
        //nombre de la vista
    }
}
