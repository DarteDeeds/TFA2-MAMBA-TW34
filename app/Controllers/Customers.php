<?Php
namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $data['customers'] = [
            ['full_name' => 'XX', 'email' => 'XX@example.com', 'phone' => 'XX'],
            ['full_name' => 'XX XX', 'email' => 'XX@example.com', 'phone' => 'XX-XX'],
            ['full_name' => 'Charles lekirk', 'email' => 'charlie@example.com', 'phone' => 'XX-XX'],
            ['full_name' => 'Nath Prince', 'email' => 'Nath@example.com', 'phone' => 'XX-XX'],
            ['full_name' => 'Michael XX', 'email' => 'XX@example.com', 'phone' => 'XX-XX'],
        ];
        return view('customers/index', $data);
    }
}
?>