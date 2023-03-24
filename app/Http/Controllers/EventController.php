<?php

namespace App\Http\Controllers;

use App\Models\Tempat;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       if($request->has('search')){
        $data = Event::where('nama','LIKE','%'.$request->search.'%')->paginate();
       }else{
        $data = Event::with('tempat')->paginate();

        $datatempat = Tempat::paginate();

       }
       return view('event/dataacara', compact('data', 'datatempat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambahacara()
    {
        $datatempat = Tempat::all();
        return view('event/tambahacara',compact('datatempat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function insertacara(Request $request)
    {
           $data = Event::create($request->all());

            return redirect()->route('Acara')->with('success','Datanya Masuk kok');
     }




    // public function store(Request $request)
    // {
    //     $data = kelas::create($request->all());
    //     return redirect()->route('kelas')->with('success', 'Data Berhasil Di Tambahkan');
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\acara $acara
     * @return \Illuminate\Http\Response
     */
    public function tampilacara($id)
    {
        $data = Event::find($id);
        $data = Event::findOrFail($id);
        //dd($data);

        return view('event/tampilacara', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Acara $acara
     * @return \Illuminate\Http\Response
     */

    public function updateacara(Request $request, $id)
    {
        $data= Event::find($id);
        $data->update([
            'nama' => $request-> nama,
            'tanggal' => $request-> tanggal,
            // 'tempat' => $request-> tempat,
            'pembawa' => $request-> pembawa,


          ]);

          return redirect()->route('Acara')->with('success','Udah diUpdate kok');
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
       //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelas $kelas
     * @return \Illuminate\Http\Response
     */
    public function deleteacara($id)
    {
        $data = Event::find($id);
        $data->delete($id);
        return redirect()->route('Acara')->with('success', 'Data Berhasil Di Hapus');
    }
}
