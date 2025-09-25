<?php

namespace App\Controllers;



use App\Models\Users;
class UsersController
{
    public function index()
    {
        $users = Users::all();
        view('users/index', compact('users'));
    }

    public function create()
    {
        view('users/create');
    }

    public function store()
    {
        $user = new Users();  
        $user->name = $_POST['name'];
        $user->email = $_POST['email'];
        $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $user->save();

        header('Location: /users');
        exit;
    }

    public function view()
    {
        $user = Users::find($_GET['id']); 
        view('users/view', compact('user'));
    }

    public function edit()
    {
        $user = Users::find($_GET['id']);  
        view('users/edit', compact('user'));
    }

    public function update()
    {
        $user = Users::find($_GET['id']);
        $user->name = $_POST['name'];
        $user->email = $_POST['email'];

        if (!empty($_POST['password'])) {
            $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        }

        $user->save();

        header('Location: /users');
        exit;
    }

    public function destroy()
    {
        $user = Users::find($_GET['id']);
        $user->delete();

        header('Location: /users');
        exit;
    }
}

