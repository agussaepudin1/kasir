<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diskon;

class DiskonController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Setting Diskon',
            'data_diskon' => Diskon::all(),
        );

        return view('admin.master.diskon.list',$data);
        // return view('index',$data);
    }

    public function update(Request $request, $id)
    {
        Diskon::where('id',$id)->
            update([
                'total_belanja' => $request->total_belanja,
                'diskon' => $request->diskon,
        ]);

        return redirect('/setdiskon')->with('success','Data berhasil diubah.');
    }
}
