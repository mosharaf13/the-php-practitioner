<?php

namespace App\Controllers;
use App\Core\App;

class UsersController
{
    /**
     * @return mixed
     * @throws Exception
     */
    public function index()
    {
        $users = App::get('database')->selectAll('users');
        return view('users', [
            'users' => $users
        ]);
    }

    /**
     * @throws Exception
     */
    public function store()
    {
        //store user

        App::get('database')->insert('users', [
            'name' => $_POST['name']
        ]);


        return redirect('users');

    }
}