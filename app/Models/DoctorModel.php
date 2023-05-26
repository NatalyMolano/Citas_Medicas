<?php

namespace App\Models;

use CodeIgniter\Model;

class DoctorModel extends Model
{
    protected $table = 'doctor';
    protected $allowedFields = ['doc_documento', 'Nombre', 'Especialidad', 'Fecha', 'cantidad_citas', 'slug'];

    public function getDoctors($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}