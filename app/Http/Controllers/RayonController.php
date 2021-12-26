<?php

namespace App\Http\Controllers;

use App\Models\Rayon;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class RayonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $rayons = Rayon::latest()->paginate(5);
        return view('rayons.index', compact('rayons'))->with('i', (request()->input('page',1)-1)*5);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rayons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'rayon' => 'required',
            'pembimbing' => 'required',
        ]);

        Rayon::create($request->all());

        return redirect()->route('rayons.index')->with('Success', 'Berhasil menyimpan !');
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
    public function edit(Rayon $rayon)
    {
        return view('rayons.edit', compact('rayon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rayon $rayon)
    {
        $request->validate([
            'rayon'=>'required',
            'pembimbing'=>'required'
        ]);  

        $rayon->update($request->all());

        return redirect()->route('rayons.index')->with('Succes', 'Berhasil update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rayon $rayon)
    {
        $rayon->delete();

        return redirect()->route('rayons.index')->with('Succes','Berhasil hapus !');


    }
}
