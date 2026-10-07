<?php
namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data['users'] = [
            ['username' => 'XX', 'full_name' => 'XX XX', 'role' => 'XX'],
            ['username' => 'XX', 'full_name' => 'XX XX', 'role' => 'XX'],
            ['username' => 'Kirkinator', 'full_name' => 'Charles Lekirk', 'role' => 'Accountant'],
            ['username' => 'Nath', 'full_name' => 'Nath Prince', 'role' => 'Manager'],
            ['username' => 'Michael XX', 'full_name' => 'Michael XX', 'role' => 'XX'],
        ];
        return view('users/index', $data);
    }
}
?>