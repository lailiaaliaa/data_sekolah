<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;
class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Jurusan::paginate();
        return view('jurusan/datajurusan', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambahguru()
    {
        return view('jurusan/tambahguru');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function insertdatajurusan(Request $request)
    {
           $data = Jurusan::create([
               'jurusan' => $request-> jurusan,
               'bahasa' => $request-> bahasa,
               'ajaran'=> implode(',', $request ->ajaran),


            ]);
            return redirect()->route('Guru')->with('success','Datanya Masuk kok');
     }




    // public function store(Request $request)
    // {
    //     $data = Jurusan::create($request->all());
    //     return redirect()->route('jurusan')->with('success', 'Data Berhasil Di Tambahkan');
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jurusan $jurusan
     * @return \Illuminate\Http\Response
     */
    public function tampiljurusan($id)
    {
        $data = Jurusan::find($id);
        $data = Jurusan::findOrFail($id);
        //dd($data);

        return view('jurusan/tampiljurusan', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jurusan $Jurusan
     * @return \Illuminate\Http\Response
     */



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Jurusan  $jurusan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jurusan $jurusan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Jurusan::find($id);
        $data->delete($id);
        return redirect()->route('Guru')->with('success', 'Data Berhasil Di Hapus');
    }
}
