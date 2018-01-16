<?php
namespace app\index\model;

class Message extends Base
{
    public function getMessage($id){
        return Message::where('id',$id)->find();
    }

    public function getAllMessage(){
        return Message::limit(10)->select();
    }
}