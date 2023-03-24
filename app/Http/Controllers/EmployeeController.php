<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller

{
    public function jumlahsekolah(){

       $data = Employee::all();
       return view ('datasekolah',compact('data'));
       }

 public function index(){

    $data = Employee::all();
    return view ('datasekolah',compact('data'));
    }

    public function Tambahdata(){

        $data = Employee::all();
        return view ('Tambahdata');
        }


        public function insertdata(Request $request)
        {





            //dd($request->all());
            if($request->hasfile('logo')){
               $request->file('logo')->move('logosekolah/',$request->file('logo')->getClientOriginalName());
               $data = Employee::create([


                   'npsn' => $request-> npsn,
                   'namasekolah' => $request-> namasekolah,
                   'tingkat' => $request-> tingkat,
                   'status' => $request-> status,
                   'jurusan'=> implode(',', $request ->jurusan),
                   'logo' => $request->file('logo')->getClientOriginalName(),
                ]);

            }else{
               $data = Employee::create([

                    'npsn' => $request-> npsn,
                    'namasekolah' => $request-> namasekolah,
                    'tingkat' => $request-> tingkat,
                    'status' => $request-> status,
                    'jurusan'=> implode(',', $request -> jurusan),

           ]);
         }
            return redirect()->route('Siswa')->with('success','Datanya Masuk kok');

            }


            public function tampilkandata($id){

             $data = Employee::findOrFail($id);
             $data = Employee::find($id);
             //dd($data);
             return view('/tampildata', compact('data'));

            }

            public function updatedata(Request $request, $id){
             $data = DB::table('employees')->where('id',$id);
            if ($request->hasFile('logo')){
                $request->file('logo')-> move ('logosekolah/',$request->file('logo')->getClientOriginalName());

                $data->update([
                    'logo' => $request->file('logo')-> getClientOriginalName(),
                    'npsn' => $request-> npsn,
                    'namasekolah' => $request-> namasekolah,
                    'tingkat' => $request-> tingkat,
                    'status' => $request-> status,
                    'jurusan'=>implode(',', $request->jurusan),
                  ]);
                  return redirect()->route('Siswa')->with('success','Udah diUpdate kok');
            }else{
                $data->update([
                    'npsn' => $request-> npsn,
                    'namasekolah' => $request-> namasekolah,
                    'tingkat' => $request-> tingkat,
                    'status' => $request-> status,
                    'jurusan'=>implode(',', $request->jurusan),
                  ]);
                  return redirect()->route('Siswa')->with('success','Udah diUpdate kok');
            }

            }

               public function delete($id){

                $data = Employee::find($id);
               $data->delete();
               return redirect()->route('Siswa')->with('success','Yah Dihapus:(');

               }




}
