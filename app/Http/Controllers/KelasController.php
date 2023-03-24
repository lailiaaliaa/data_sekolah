<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kelas::paginate();
        return view('kelas/datakelas', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambahkelas()
    {
        return view('kelas/tambahkelas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function insertkelas(Request $request)
    {
           $data = Kelas::create([
               'jurusan' =>  implode(',', $request ->jurusan),
               'kelas' => $request ->kelas,
               'anak'=> $request -> anak,


            ]);
            return redirect()->route('kelas')->with('success','Datanya Masuk kok');
     }




    // public function store(Request $request)
    // {
    //     $data = kelas::create($request->all());
    //     return redirect()->route('kelas')->with('success', 'Data Berhasil Di Tambahkan');
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kelas $kelas
     * @return \Illuminate\Http\Response
     */
    public function tampilkelas($id)
    {
        $data = Kelas::find($id);
        $data = Kelas::findOrFail($id);
        //dd($data);

        return view('kelas/tampilkelas', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelas $kelas
     * @return \Illuminate\Http\Response
     */

    public function updatekelas(Request $request, $id)
    {
        $data= Kelas::find($id);
        $data->update([
               'jurusan' =>  implode(',', $request ->jurusan),
               'kelas' => $request ->kelas,
               'anak'=> $request -> anak,
          ]);

          return redirect()->route('kelas')->with('success','Udah diUpdate kok');
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kelas $kelas)
    {
       //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelas $kelas
     * @return \Illuminate\Http\Response
     */
    public function deletekelas($id)
    {
        $data = kelas::find($id);
        $data->delete($id);
        return redirect()->route('kelas')->with('success', 'Data Berhasil Di Hapus');
    }
}
