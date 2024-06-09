<?php
// database/seeders/TeacherSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Teacher;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Teacher::create([
            'name' => 'Faizan',
            'email' => 'teacher@example.com',
            'password' => Hash::make('password123'),
        ]);
    }
}
