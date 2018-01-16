<?php
namespace app\index\model;

class User extends Base
{
    public function getAllUser(){
       return User::limit(10)->select();
    }

    public function getUser($id){
        return User::where('id',$id)->find();
    }

    public function editUser(){

    }

    public function delUser(){

    }

    public function addUser(){

    }

}