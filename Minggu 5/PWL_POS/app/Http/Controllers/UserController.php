<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        // J4 : Praktikum 1
        // $data = [
        //     'level_id' => 2,
        //     'username' => 'manager_tiga',
        //     'nama' => 'Manager 3',
        //     'password' => Hash::make('12345')
        // ];
        // UserModel::create($data);

        // $user = UserModel::all();
        // return view('user',['data' => $user]);

        // J4 : Praktikum 2.1 no 3
        // $user = UserModel::find(1);
        // return view('user',['data' => $user]);

        // J4 : Praktikum 2.1 no 5
        // $user = UserModel::where('level_id', 1)->first();
        // return view('user',['data' => $user]);

        // J4 : Praktikum 2.1 no 7
        // $user = UserModel::firstWhere('level_id', 1);
        // return view('user',['data' => $user]);

        // J4 : Praktikum 2.1 no 9
        // $user = UserModel::findOr(1, ['username','nama'], function(){
        //     abort(404);
        // });
        // return view('user',['data' => $user]);
        
        // J4 : Praktikum 2.1 no 11
        // $user = UserModel::findOr(20, ['username','nama'], function(){
        //     abort(404);
        // });
        // return view('user',['data' => $user]);

        // J4 : Praktikum 2.2 no 2
        // $user = UserModel::findOrFail(1);
        // return view('user',['data' => $user]);
        
        // J4 : Praktikum 2.2 no 4
        // $user = UserModel::where('username','manager9')->firstOrFail();
        // return view('user',['data' => $user]);

        // J4 : Praktikum 2.3 no 2
        // $user = UserModel::where('level_id', 2)->count();
        // //dd($user);
        // return view('user',['data' => $user]);

        // // J4 : Praktikum 2.4 no 3
        // $user = UserModel::firstOrCreate(
        //     [
        //         'username' => 'manager',
        //         'nama' => 'Manager',
        //     ],
        // );

        // return view('user',['data' => $user]);

        // J4 : Praktikum 2.4 no 5
        // $user = UserModel::firstOrCreate(
        //     [
        //         'username' => 'manager22',
        //         'nama' => 'Manager Dua Dua',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2
        //     ],
        // );

        // return view('user',['data' => $user]);

        // J4 : Praktikum 2.4 no 7
        // $user = UserModel::firstOrNew(
        //     [
        //         'username' => 'manager',
        //         'nama' => 'Manager',
        //     ],
        // );

        // return view('user',['data' => $user]);
        
        // J4 : Praktikum 2.4 no 9
        // $user = UserModel::firstOrNew(
        //     [
        //         'username' => 'manager33',
        //         'nama' => 'Manager Tiga Tiga',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2
        //     ],
        // );

        // return view('user',['data' => $user]);

         // J4 : Praktikum 2.4 no 11
        //  $user = UserModel::firstOrNew(
        //     [
        //         'username' => 'manager33',
        //         'nama' => 'Manager Tiga Tiga',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2
        //     ],
        // );
        // $user->save();

        // return view('user',['data' => $user]);

        // J4 : Praktikum 2.5 no 2
        // $user = UserModel::create([
        //     'username' => 'manager55',
        //     'nama' => 'Manager55',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 2,
        // ]);

        // $user->username = 'manager56';

        // $user->isDirty(); //true
        // $user->isDirty('username'); //true
        // $user->isDirty('nama'); //false
        // $user->isDirty(['nama','username']); //true

        // $user->isClean(); //false
        // $user->isClean(['username']); //false
        // $user->isClean(['nama']); // true
        // $user->isClean(['nama','username']); //false

        // $user->save();

        // $user->isDirty(); // false
        // $user->isClean(); // true
        // dd($user->isDirty());

        // J4 : Praktikum 2.5 no 4
        // $user = UserModel::create([
        //     'username' => 'manager11',
        //     'nama' => 'Manager11',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 2,
        // ]);

        // $user->username = 'manager12';

        // $user->save();

        // $user->wasChanged(); //true
        // $user->wasChanged('username'); //true
        // $user->wasChanged(['username','level_id']); //true
        // $user->wasChanged('nama'); //false
        // dd($user->wasChanged(['nama','username'])); //true

        // $user = UserModel::all();
        // return view('user',['data' => $user]);

        // $user = UserModel::with('level')->get();
        // dd($user);

        $user = UserModel::with('level')->get();
        return view('user',['data' => $user]);
        
    }

    public function tambah(){
        return view('user_tambah');
    }
    
    public function tambah_simpan(Request $request){
        UserModel::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => Hash::make('$request->password'),
            'level_id' => $request->level_id
        ]);

        return redirect('/user');
    }

    public function ubah($id){
       $user = UserModel::find($id);
       return view('user_ubah',['data' => $user]);
    }

    public function ubah_simpan($id, Request $request){
        $user = UserModel::find($id);

        $user->username = $request->username;
        $user->nama = $request->nama;
        $user->password =Hash::make('$request->password');
        $user->level_id = $request->level_id;
        
        $user->save();

        return redirect('/user');
    }

    public function hapus($id){
        $user = UserModel::find($id);
        $user->delete();

        return redirect('/user');
    }

}
