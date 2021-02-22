<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Student;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $cari= $request->cari;

        if ($cari != '') {
        // //mengambil data dari table students sesuai pencarian data 
         $mahasiswa = Student::where('nama_mahasiswa','LIKE','%'.$cari.'%')
                                ->orWhere('nim','LIKE','%'.$cari.'%')->paginate(3);
        //mengambil data dari tabel Students     
        }else{
            $mahasiswa = Student::paginate(2);
        }
        
        //mengirim data mahasiswa ke view index
        return view('index', ['mahasiswa' => $mahasiswa]);
    }

    public function home()
    {

        return view('pendaftaran');
    }
    
    // public function search()
    // {
       
    //     // return $request->all();

    //     // $search_text=$_GET['cari'];
    //     // $mahasiswa = Student::where('nama_mahasiswa','LIKE','%'.$search_text.'%')->with('nim')->get();
       
    //     //menangkap data pencarian   
          
    //     //mengirim data mahasiswa ke view index
   
    //     return view('index', ['mahasiswa' => $mahasiswa]);
    // }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $mahasiswa = Student::all();
        // return view('index', ['mahasiswa' => $mahasiswa]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        //validasi
        $request->validate([
            'nama_mahasiswa' => 'required',
            'nim' => 'required | size:14',
            'fakultas_jurusan_semester' => 'required ',
            'tempat_tanggal_lahir' => 'required ',
            'no_hp_mahasantri' => 'required ',
            'jalur_masuk' => 'required ',
            'nama_org_tua' => 'required ',
            'no_hp_org_tua' => 'required ',
            'alamat_lengkap' => 'required ',
            'nama_mabna' => 'required '
        ]);

        Student::create($request->all());

        //alihkan halaman ke halaman admin
        return redirect('index')->with('status', ' Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        if (!$student) {
            dd('Student not found');
        }
        return view('detail', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    public function edit(Student $student)
    {
        return view('pendaftaran', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  Student $student)
    {
        $student->update($request->all());
        return redirect('index')->with('toast_success', 'Data Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,  Student $student)
    {
        //
        $student->delete();
        return redirect('index')->with('toast_success', 'Data Berhasil Dhapus!');

    }
}
