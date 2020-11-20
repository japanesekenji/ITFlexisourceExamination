<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
     {
          DB:: table ('companys')->insert([
          
            [
                
            'name' => 'Globe Telecom',
            'address'=> 'Bonifacio Global City, Taguig, Metro Manila , Philippines'
                
           ],[
                
            'name' => 'Converge ICT Solutions',
            'address'=> 'Reliance IT Building, 99 E. Rodriguez Jr. Ave, Ugong, Pasig, Metro Manila , Philippines'
         
           ],[
                
            'name' => 'PLDT',
            'address'=> 'Ramon Cojuangco Building, Makati Avenue corner Dela Rosa Street, Legazpi Village, Makati City, Philippines'
                 
           ],[
               
            'name' => 'Smart Communications',
            'address'=> '6799 Ayala Avenue, Makati City , Philippines'
              
           ],[
               
            'name' => 'Dito Telecommunity',
            'address'=> 'Udenna Tower, Bonifacio Global City, Taguig, Metro Manila , Philippines'
               
           ]
           ]);
    }
}

