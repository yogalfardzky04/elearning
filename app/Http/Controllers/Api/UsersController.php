<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(Request $request)
    { 
        /**Cara menampilkan isi database */

     //    // Cara 1.
        // $users = User::where('name','Reza')=>where('email','')->got();

        // Cara 2. lebih fleksibel dalam penggunaan where nya
        $users = User::query();
        if($request->has('address')) $users->where('address', $request->address);
        if($request->has('name')) $users->where('name', $request->name);

        // Query berdasarkan urutan
        if($request->has('order_by') && $request->has('order_type')) {
            $users->orderBy($request->order_by,$request->order_type);
        }

        return response()->json([
         'data'   => $users->get()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required|max:255',
            'email'     => 'required|email|unique:users,email',
            'password'  => 'required|min:6',
            'photo'     => 'nullable|file|max:2048'

        ]);

        /** Cara insert ke Database */

        // Cara 1.
        $user = new User();
        $user->fill($request->only([
            'name',
            'email',
            'phone',
            'photo'

        ]));
        $user->password = bcrypt($request->password);
        // Upload File NOTE: tambahkan di PUT juga
        $user->photo    = $request->file('photo')->store('public/photo');
        // End Upload File
        $user->save();

        return response()->json([
            'message' => "Berhasil menambah data",
            'data' => $user
        ]);

    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return response()->json([
            'data' => $user
        ]);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name'      => 'required|max:255',
            'email'     => 'email|unique:users,email,'.$id,
            'password'  => 'nullable|min:6',
            'photo'     => 'nullable|file|max:2048'

        ]);


        $user = User::findOrFail($id);
        $user->fill($request->only([
            'name',
            'email',
            'photo'

        ]));
        if($request->has('password')) {
        $user->password = bcrypt($request->password);
        }
        
        $user->photo    = $request->file('photo')->store('public/photo');
        $user->save();

        return response()->json([
            'message' => "Berhasil menngupdate data",
            'data' => $user
        ]);
    }

    public function destroy($id, Request $request)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json([
            'massage' => 'Berhasil menghapus data',
            'data' => $user
        ]);
    }
}
