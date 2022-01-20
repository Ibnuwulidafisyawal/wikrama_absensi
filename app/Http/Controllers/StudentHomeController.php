<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\RegisterStudentController;
use App\Models\Absen;
use App\Models\Student;
use DateTime;
use DateTimeZone;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class StudentHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('absensi.student_home.index');
    }


    //method tampilkan jam kedatangan 
    public function datang()
    {
       
        $niss = Student::all('nis');
        $user = Auth::user();

        $timezone = 'Asia/jakarta'; 
        $date = new DateTime('now', new DateTimeZone($timezone)); 
        $tanggal = $date->format('Y-m-d');
        $localtime = $date->format('H:i:s');

        $presensi = Absen::where([
            ['nis','=',auth()->user()->nis],
            ['jam_kedatangan','>=',$tanggal." 00:00:00"],
            ['jam_kedatangan','<=',$tanggal." ".$localtime],
        ])->first();

        if ($presensi) {
            $presensi->jam_kedatangan = Carbon::createFromFormat('Y-m-d H:i:s', $presensi->jam_kedatangan)->format('d/m/Y H:i:s');
        }
        return view('absensi.student_home.pulang.index', compact('niss','presensi'));
        
    }


    //method halaman tampilkan data keterangan
    public function keteranganHadir()
    {
        $timezone = 'Asia/jakarta'; 
        $date = new DateTime('now', new DateTimeZone($timezone)); 
        $tanggal = $date->format('Y-m-d');
        $localtime = $date->format('H:i:s');

        $absen = Absen::where([
            ['nis','=',auth()->user()->nis],
            ['jam_kedatangan','>=',$tanggal." 00:00:00"],
            ['jam_kedatangan','<=',$tanggal." ".$localtime],
        ])->first();

        return view('absensi.student_home.pulang.keterangan',compact('absen'));

    }


    public function keteranganTidakHadir()
    {
        $date = new DateTime(); 
        $tanggal = $date->format('Y-m-d');
        $localtime = $date->format('H:i:s');

        $absens = Absen::where([
            ['nis','=',auth()->user()->nis],
            ['created_at','>=', $tanggal." 00:00:00"],
            ['created_at','<=', $tanggal." ".$localtime],
            ['keterangan','LIKE', '%izin%'],
        ])
        ->orWhere([
            ['nis','=',auth()->user()->nis],
            ['created_at','>=', $tanggal." 00:00:00"],
            ['created_at','<=', $tanggal." ".$localtime],
            ['keterangan','LIKE', '%sakit%'],
        ])
        ->orderBy('created_at','desc')
        ->first();

        return view('absensi.student_home.tidak_masuk.keterangan',compact('absens'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    $timezone = 'Asia/jakarta'; 
    $date = new DateTime('now', new DateTimeZone($timezone)); 
    $tanggal = $date->format('Y-m-d');
    $localtime = $date->format('H:i:s');

    $presensi = Absen::where([
        ['nis','=',auth()->user()->nis],
        ['jam_kedatangan','>=',$tanggal." 00:00:00"],
        ['jam_kedatangan','<=',$tanggal." ".$localtime],
    ])->first();

    if ($presensi){
        return redirect()->route('absensi.student_home.pulang.index')->with('Success','Berhasil Input');

    }else{
        
        Absen::create([
            'nis' => auth()->user()->nis,
            'jam_kedatangan' => $tanggal." ".$localtime,
        ]);
    }
     
    return redirect()->route('absensi.student_home.pulang.index')->with('Success','Berhasil Input');
    }



    public function storeTidakMasuk(Request $request)
    {

    $timezone = 'Asia/jakarta'; 
    $date = new DateTime('now', new DateTimeZone($timezone)); 
    $tanggal = $date->format('Y-m-d');



    $presensi = Absen::where([

        ['keterangan','>=',$tanggal],
        ['keterangan','<=',$tanggal],
        ['keterangan','=>',$tanggal],

    ])->first();

        $request->validate([
            'nis',
            'keterangan' => 'required',
        ]);

        if ($presensi) {
            return redirect()->route('absensi.student_home.tidak_masuk.keterangan')->with('Success','Berhasil Input');

        }else {
            
        Absen::create([
            'nis' => auth()->user()->nis,
            'keterangan' => $request->keterangan. " / ".$tanggal,
        ]);

        }


    return redirect()->route('absensi.student_home.tidak_masuk.keterangan')->with('Success','Berhasil Input');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Absen $absen,$id)
    {
        $absen = Absen::findOrFail($id);
        return view('absensi.student_home.pulang', compact('absen'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


     // ini method input jam kepulangan 
    public function update(Request $request, $id)
    {
        $absen = Absen::findOrFail($id);
        $request->validate([
            'jam_kepulangan'=>'required',
        ]);

        $absen->update($request->all());

        return redirect()->route('absensi.student_home.pulang.keterangan')->with('Success','Berhasil absen hari ini');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function tidakMasuk()
    {

        return view('absensi.student_home.tidak_masuk.index');
        
    }
    

    public function logout()
    {
        session::flush();

        Auth::logout();

        return redirect('absensi.login');
    }


}
