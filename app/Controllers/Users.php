<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'username' => 'admin01',
                'full_name' => 'Alex Admin',
                'role' => 'Administrator',
            ],
            [
                'username' => 'cashier01',
                'full_name' => 'Bea Cruz',
                'role' => 'Cashier',
            ],
            [
                'username' => 'cashier02',
                'full_name' => 'Mark Tan',
                'role' => 'Cashier',
            ],
            [
                'username' => 'manager01',
                'full_name' => 'Liza Ramos',
                'role' => 'Manager',
            ],
            [
                'username' => 'staff01',
                'full_name' => 'Kevin Lim',
                'role' => 'Staff',
            ],
        ];

        return view('users', ['users' => $users]);
    }
}

