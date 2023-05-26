<?php

namespace App\Models;

use CodeIgniter\Model;

class Usuario_model extends Model
{
    protected $table = 'usuarios';
    protected $allowedFields = ['username', 'email', 'password','documento','sexo','EPS'];
    public function getNews($slug = false)
    {
        if ($slug === false) {//el triple = significa que el alor del dato tiene que ser igual alo que se esta comprando
            return $this->findAll();//traer todo lo que hay en la tabla 
        }

        return $this->where(['slug' => $slug])->first();//si no se cumple se retorna 
        //el fist trae la primera fila del registro
    }
}