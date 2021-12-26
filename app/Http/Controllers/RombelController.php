<?php

namespace App\Http\Controllers;

use App\Models\Rombel;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class RombelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rombels = Rombel::latest()->paginate(5);
        return view('rombels.index', compact('rombels'))->with('i' , (request()->input('page' , 1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rombels.create');
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
           'rombel'=> 'required' 
        ]);

        Rombel::create($request->all());

        return redirect()->route('rombels.index')->with('Succes', 'Berhasil nyimpan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Rombel $rombel)
    {

        return view('rombels.edit', compact('rombel'));
        
    }

    /**
     * Update the specified resource in stosrage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rombel $rombel)
    {
        $request->validate([
            'rombel'=> 'required',
        ]);

        $rombel->update($request->all());
        return redirect()->route('rombels.index')->with('Succes', 'Berhasil update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rombel $rombel)
    {
        $rombel->delete();
        return redirect()->route('rombels.index')->with('Succes', 'Berhasil hapus !');
    }
}
