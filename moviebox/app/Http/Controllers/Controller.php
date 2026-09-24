<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
    protected function routeArea(){
        $user=auth()->user();
        if($user->hasRole('admin'))
            return 'admin';
        if($user->hasRole('editor'))
            return 'editor';
        return 'user';
    }
}
