<?php

namespace App\Controllers;

/**
 * Handles the Customer Accounts page.
 *
 * NOTE: There is no database yet. Records are served from a static
 * PHP array so the page has real data to loop through and display.
 * This array can later be swapped for a CustomerModel without
 * touching the view.
 */
class Customers extends BaseController
{
    public function index(): string
    {
        $customers = [
            [
                'full_name' => 'Maria Santos',
                'email'     => 'maria.santos@gmail.com',
                'phone'     => '0917-123-4567',
            ],
            [
                'full_name' => 'Juan Dela Cruz',
                'email'     => 'juan.delacruz@gmail.com',
                'phone'     => '0918-234-5678',
            ],
            [
                'full_name' => 'Angela Reyes',
                'email'     => 'angela.reyes@gmail.com',
                'phone'     => '0919-345-6789',
            ],
            [
                'full_name' => 'Mark Villanueva',
                'email'     => 'mark.villanueva@gmail.com',
                'phone'     => '0920-456-7890',
            ],
            [
                'full_name' => 'Katrina Bautista',
                'email'     => 'katrina.bautista@gmail.com',
                'phone'     => '0921-567-8901',
            ],
            [
                'full_name' => 'Paolo Mendoza',
                'email'     => 'paolo.mendoza@gmail.com',
                'phone'     => '0922-678-9012',
            ],
        ];

        $data = [
            'title'     => 'Customer Accounts',
            'customers' => $customers,
        ];

        return view('customers/index', $data);
    }
}
