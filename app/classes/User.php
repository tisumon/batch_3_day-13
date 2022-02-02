<?php


namespace App\classes;


class User
{
    protected $user = [];

    public function getAllUser()
    {
        $this->user=[
            0=> [
               'name'  => 'shabuddin',
               'mobile'=> '1222334',
               'location'=>'lalbagh',
            ],
            1=> [
                'name'  => 'shabuddin',
                'mobile'=> '1222334',
                'location'=>'lalbagh',
            ],
        ];
        return $this->user;
    }
}