<?php

namespace App\Dummy;

class DummyUser
{
    public static function users()
    {
        return [

            [
                'email' => 'pablo@gmail.com',
                'password' => '123456'
            ],

            [
                'email' => 'user@gmail.com',
                'password' => '123456'
            ]

        ];
    }
}