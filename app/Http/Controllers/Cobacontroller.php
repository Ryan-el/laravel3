<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Friends;

class Cobacontroller extends Controller
{
    public function friends ()
    {
        $friends = Friends :: simplePaginate(3);
         return view('friend', compact('friends'));
    }
    public function create ()
    {
        
         return view('create');
    }
    public function store(Request $request)
    {
        // Validate the request...

        $friends = new friends;

        $friends->id = $request->id;
        $friends->nama = $request->nama;
        $friends->no_tlp = $request->no_tlp;
        $friends->alamat = $request->alamat;
        

        $friends->save();
    }
    
}
