<?php

namespace App\Controllers;

use App\Models\Usuario_model;

class Users extends BaseController
{
    public function view($page = 'create')
    {
        //Si es diferente la existencia de un archivo se hace el retunamiento
        if (! is_file(APPPATH . 'Views/users/' . $page . '.php')) {
            // Encapsulamiento, optiene el error y muestro el erro
            throw new PageNotFoundException($page);
        }
        //El tittle nombre de la pagina y mantener un estandar 
        $data['title'] = ucfirst($page); // Capitalize the first letter
        //3 tipos de return que retorne 3 vistas diferentes
        return view('templates/header', $data)
        //el . concatena, parametro page, parametro la pagina , body
            . view('users/' . $page)
        //pie de pagina
            . view('templates/footer');
    }
    public function create()
    {
        helper('form');

        if (! $this->request->is('post')) {
            return view('templates/header', ['title' => 'Create a user'])
                . view('users/create')
                . view('templates/footer');
        }

        $post = $this->request->getPost(['username', 'email', 'password','documento', 'sexo', 'EPS']);

        if (! $this->validateData($post, [
            'username' => 'required|min_length[3]|max_length[255]',
            'email'    => 'required|valid_email',
            'password' => 'required|min_length[6]',
            'documento'    => 'required|min_length[7]|max_length[255]',
            'sexo' => 'required|min_length[2]',
            'EPS' => 'required|min_length[2]',
        ])) {
            return view('templates/header', ['title' => 'Create a user'])
                . view('users/create')
                . view('templates/footer');
        }

        $model = model(Usuario_model::class);

        $model->save([
            'username' => $post['username'],
            'email'    => $post['email'],
            'documento'    => $post['documento'],
            'sexo'    => $post['sexo'],
            'EPS' => $post['EPS'],
            'password' => password_hash($post['password'], PASSWORD_DEFAULT),
        ]);

        return view('templates/header', ['title' => 'Create a user'])
            . view('users/agendar')
            . view('templates/footer');
    }
    
}

