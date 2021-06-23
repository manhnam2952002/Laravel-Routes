<?php

namespace App\Http\Controllers;

class TeacherController{
    function create (){
        return view('admin.teacher.create');
    }
    function form (){
        return view('admin.teacher.form');
    }
    function update (){
        return view('admin.teacher.updateList');
    }
    function delete (){
        return view('admin.teacher.Delete');
    }
    function getList (){
        return view('admin.teacher.getList');
    }
    function getById(){
        return view('admin.teacher.getById');
    }
}
