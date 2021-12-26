<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Rombel;
use App\Models\Rayon;
class Select2Controller extends Controller
{
    public function selectSearch(Request $request)

    {
    	$students = [];

        if ($request->has('q')) {
            $search = $request->q;
            $students = Student::select("id", "rombel")->where("rombel","LIKE","%$search%")->get();

        }
        return response()->json($students);
    }

}
