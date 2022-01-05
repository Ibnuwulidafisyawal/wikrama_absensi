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



    public function keterangan()
    {
        $absen = Absen::findOrFail(1);
        return view('absensi.student_home.pulang.keterangan',compact('absen'));

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

    // $absen = Absen::findOrFail($id);
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
}
