<?php

namespace App\Controllers;

/**
 * Handles the User (staff) Accounts page.
 *
 * NOTE: There is no database yet. Records are served from a static
 * PHP array so the page has real data to loop through and display.
 * This array can later be swapped for a UserModel without touching
 * the view.
 */
class Users extends BaseController
{
    public function index(): string
    {
        $users = [
            [
                'username'  => 'jdeguia',
                'full_name' => 'Jonash De Guia',
                'role'      => 'Administrator',
            ],
            [
                'username'  => 'rcruz',
                'full_name' => 'Rowena Cruz',
                'role'      => 'Cashier',
            ],
            [
                'username'  => 'ltorres',
                'full_name' => 'Leo Torres',
                'role'      => 'Cashier',
            ],
            [
                'username'  => 'rmlis',
                'full_name' => 'Romar Lising',
                'role'      => 'Inventory Clerk',
            ],
            [
                'username'  => 'nabad',
                'full_name' => 'Noel Abad',
                'role'      => 'Manager',
            ],
            [
                'username'  => 'jzcords',
                'full_name' => 'Jz Cordero',
                'role'      => 'Cashier',
            ],
        ];

        $data = [
            'title' => 'User Accounts',
            'users' => $users,
        ];

        return view('users/index', $data);
    }
}
