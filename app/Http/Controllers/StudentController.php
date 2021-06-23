<?php

namespace App\Http\Controllers;

class StudentController {
    function create (){
        return view('admin.student.create');
    }
    function form (){
        return view('admin.student.form');
    }
    function update (){
        return view('admin.student.updateList');
    }
    function delete (){
        return view('admin.student.Delete');
    }
    function getList (){
        return view('admin.student.getList');
    }
    function getById(){
        return view('admin.student.getById');
    }
}
