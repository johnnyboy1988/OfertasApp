<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Oferta;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        if(User::where('email','=','admin@mail.com')->count()){
            $user = User::where('email','=','admin@mail.com')->first();
        }else{
            $user = new User;
        }

        $user->name = "Admin";
        $user->email = "admin@mail.com";
        $user->password = bcrypt("123456");
        $user->save();

        $oferta = [
            'titulo'=>'arroz',
            'descricao'=>'arroz branco',
            'validade'=>'2018-09-22',
            'valor'=>5.90,
            'valor_f'=>'R$ 5,90',
            'imagem'=>'https://assets.servedby-buysellads.com/p/manage/asset/id/32054'
        ];

        Oferta::create($oferta);
    }
}
