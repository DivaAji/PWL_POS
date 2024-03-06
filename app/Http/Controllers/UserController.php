<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){

        $user = UserModel::where('level_id', 2)->count();
        return view('user',['data' => $user]);
        
        
        //Jobsheet 4
            //Praktikum 2.1  – Retrieving Single Models
                // $data = [
                //         'level_id' => 2,
                //         'username' => 'manager_tiga',
                //         'nama' => 'Manager 3',
                //         'password' => Hash::make('12345')
                //     ];
                //     UserModel::create($data); //tambahkan data ke tabel m_user
                
                // $user = UserModel::all(); // ambil semua data dari tabel m_user
                // return view ('user', ['data' => $user]);

                // $user = UserModel::find(1); // ambil semua data dari tabel m_user
                // return view ('user', ['data' => $user]);

                // $user = UserModel::where('level_id', 1)->first();
                // return view('user',['data' => $user]);
                
                // $user = UserModel::firstWhere('level_id', 1); // ambil semua data dari tabel m_user
                // return view ('user', ['data' => $user]);

                // $user = UserModel::findOr(1, ['username', 'nama'], function () {
                //     abort(404);    
                // });
                // return view ('user', ['data' => $user]);
                // $user = UserModel::findOr(20, ['username', 'nama'], function () {
                //     abort(404);    
                // });
                // return view ('user', ['data' => $user]);

            //Praktikum 2.2
                // $user = UserModel::findOrFail(1);
                // return view('user',['data' => $user]);

                // $user = UserModel::where('username','manager9')->firstOrFail();
                // return view('user',['data' => $user]);
        
        
        //Jobsheet 3
            //tambah data user dengan Eloquent Model
            // $data = [
            //     // 'username' => 'customer-1',
            //     // 'nama' => 'Pelanggan',
            //     // 'password' => Hash::make('12345'),
            //     // 'level_id' => 4
            //     'nama' => 'Pelanggan Pertama',
            // ];
            // // UserModel::insert($data); //tambahkan data ke tabel m_user
            // Usermodel::where('username', 'customer-1')->update($data); //update data user

            // // coba akses model UserModel
            // $user = UserModel::all(); // ambil semua data dari tabel m_user
            // return view ('user', ['data' => $user]);

    }
}
