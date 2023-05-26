<?php

namespace App\Controllers;
//comprueba si la pagina existe, validar que el archivo exista si no existe se genera El Page NofontExpetion
use CodeIgniter\Exceptions\PageNotFoundException; // Add this line

class Pages extends BaseController
{

    public function view($page = 'home')
    {
        //Si es diferente la existencia de un archivo se hace el retunamiento
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Encapsulamiento, optiene el error y muestro el erro
            throw new PageNotFoundException($page);
        }
        //El tittle nombre de la pagina y mantener un estandar 
        $data['title'] = ucfirst($page); // Capitalize the first letter
        //3 tipos de return que retorne 3 vistas diferentes
        return view('templates/header', $data)
        //el . concatena, parametro page, parametro la pagina , body
            . view('pages/' . $page)
        //pie de pagina
            . view('templates/footer');
    }

    public function create()
    {
        helper('form');

        // Checks whether the form is submitted.
        if (! $this->request->is('post')) {
            // The form is not submitted, so returns the form.
            return view('templates/header')
                . view('pages/registro_usuario')
                . view('templates/footer');
        }

        $post = $this->request->getPost(['nombre', 'email', 'password']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($post, [
            'nombre' => 'required|max_length[255]|min_length[3]',
            'email'  => 'required|max_length[5000]|min_length[10]',
            'password'  => 'required|max_length[5000]|min_length[10]',
        ])) {
            // The validation fails, so returns the form.
            return view('templates/header')
                . view('pages/registro_usuario')
                . view('templates/footer');
        }

        $model = model(Usuario_model::class);

        $model->save([
            'nombre' => $post['nombre'],
            'email'  => $post['email'],
            'password'  => $post['password'],
        ]);

        return view('templates/header')
            . view('pages/success')
            . view('templates/footer');
    }
}