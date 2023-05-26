<?php

namespace App\Controllers;

use App\Models\DoctorModel;

class Doctor extends BaseController
{
    public function index()
    {
        $model = model(DoctorModel::class);

        $data = [
            'doctors' => $model->getDoctors(),
            'title'   => 'Doctor Archive',
        ];

        return view('templates/header', $data)
            . view('users/index', $data)
            . view('templates/footer');
    }

    public function view($slug = null)
    {
        $model = model(DoctorModel::class);

        $data['doctor'] = $model->getDoctors($slug);

        if (empty($data['doctor'])) {
            throw new PageNotFoundException('Cannot find the doctor: ' . $slug);
        }

        $data['title'] = $data['doctor']['Nombre'];

        return view('templates/header', $data)
            . view('users/view', $data)
            . view('templates/footer');
    }
}
