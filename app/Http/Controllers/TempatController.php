<?php

namespace App\Http\Controllers;

use App\Models\Tempat;
use Illuminate\Http\Request;

class TempatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Tempat::paginate();
        return view('tempat/datatempat',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambahtempat()
    {
        return view('tempat/tambahtempat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function inserttempat(Request $request)
    {
        $data = Tempat::create($request->all());
        return redirect()->route('datatempat');
    }




    // public function store(Request $request)
    // {
    //     $data = tempat::create($request->all());
    //     return redirect()->route('tempat')->with('success', 'Data Berhasil Di Tambahkan');
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tempat $tempat
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tempat $tempat
     * @return \Illuminate\Http\Response
     */





    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tempat  $tempat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tempat $tempat)
    {
       //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tempat $tempat
     * @return \Illuminate\Http\Response
     */
    public function deletetempat($id)
    {
        $data = Tempat::find($id);
        $data->delete($id);
        return redirect()->route('id_tempat')->with('success', 'Data Berhasil Di Hapus');
    }
}
