<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Rayon;
use App\Models\Rombel;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\RedirectResponse;
use function GuzzleHttp\Promise\all;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator as ValidationValidator;
use Illuminate\Validation\Rule;
use App\Actions\Fortify\PasswordValidationRules;
use Illuminate\Validation\Rules\Unique;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;


class RegisterStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $students = Student::latest()->paginate(5);
        return view('register-student.index',compact('students'))->with('i',(request()->input('page', 1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rayons = Rayon::all();
        $rombels = Rombel::all();
        return view('register-student.create',compact('rayons','rombels',$rayons,$rombels));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



    $messages = [
        'nis.required' => 'nis is required',
        'nama.required'=> 'name is required ! ',
        'rombel.required'=> 'rombel is required ! ',
        'rayon.required'=> 'rayon is required ! ',
        'username.required'=> 'Username is required',
        'password.required'=> 'password is required ! '
    ];

         $request->validate([
        'nis' => 'required|min:8|max:15',
        'nama'=>'required|min:5|max:255|string',
        'rombel' => 'required',
        'rayon' => 'required',
        'username'=> 'required|min:5|max:25|unique:students,username',
        'password'=>'required'
        
    ],$messages);

        Student::create([
                'nis' => $request['nis'],   
                'nama' => $request['nama'],
                'rombel' => $request['rombel'],
                'rayon' => $request['rayon'],
                'username' => $request['username'],
                'password' => Hash::make($request['password'])
        ]);


        return redirect()->route('register-student.index')->with('Succes','Berhasil menyimpan !');
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
    public function edit(Student $student, $id)
    {
        $student = Student::findOrFail($id);
        $rayons = Rayon::all();
        $rombels = Rombel::all();
        return view('register-student.edit', compact('student','rayons','rombels'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, Student $student)
    {
        $student = Student::findOrFail($id);    

        $messages = [
            'nis.required' => 'nis is required',
            'nama.required'=> 'name is required ! ',
            'rombel.required'=> 'rombel is required ! ',
            'rayon.required'=> 'rayon is required ! ',
            'username.required'=> 'Username is required',
            'password.required'=> 'password is required ! '
        ];
    
        $request->validate([
            'nis' => 'required|min:8|max:15',
            'nama'=>'required|min:5|max:255|string',
            'rombel' => 'required',
            'rayon' => 'required',
            'username'=> 'required|min:5|max:25|unique:students,username,'.$student->id,
            // 'username' => ['required', 'username', 'max:25', Rule::unique('students')->where($id)->ignore($student->id)],
            'password'=>'required'
            
        ],$messages);

       
            $student->update([
                'nis' => $request['nis'],
                'nama' => $request['nama'],
                'rombel' => $request['rombel'],
                'rayon' => $request['rayon'],
                'username' => $request['username'],
                'password' => Hash::make($request['password']),
            ]);
    

        return redirect()->route('register-student.index')->with('Succes','Berhasil update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student,$id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('register-student.index')->with('Succes', 'Berhasil hapus !');
    }


}

