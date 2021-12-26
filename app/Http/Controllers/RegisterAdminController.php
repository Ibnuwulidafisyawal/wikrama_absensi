<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\PasswordValidationRules;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\RedirectResponse;
use function GuzzleHttp\Promise\all;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Validator as ValidationValidator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

// Use Illuminate\Validation\Validator;

class RegisterAdminController extends Controller
{
    use PasswordValidationRules;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->paginate(5);
        return view('register-admin.index',compact('users'))->with('i', (request()->input('page', 1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register-admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , User $user )
    {

    $messages = [
        'name.required'=> 'name is required ! ',
        'min'=> 'must be filled in at least 5 characters ! ',
        'email.required'=> 'email is required ! ',
        'username.required'=> 'Username is required',
        'password.required'=> 'password is required ! '
    ];

       $validateData =  $request->validate([
        'name'=>'required|min:5|max:255|string',
        'email'=>'required|email|unique:users,email',
        'username'=> 'required|min:5|max:255|unique:users,username',
        'password'=>'required'
        
    ],$messages);

        User::create([
            'name' => $request['name'],
            'username' => $request['username'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);


        return redirect()->route('register-admin.index')->with('Succes','Berhasil menyimpan !');
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
    public function edit(User $user, $id)
    {
        $user = User::findOrFail($id);
        return view('register-admin.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user,$id)
    {

        $user = User::findOrFail($id);

        $messages = [
            'name.required'=> 'name is required ! ',
            'min'=> 'must be filled in at least 5 characters ! ',
            'email.required'=> 'email is required ! ',
            'username.required'=> 'Username is required',
            'password.required'=> 'password is required ! '
        ];
    
        $request->validate([
            'name'=>'required|min:5|max:255|string',
            'email'=>'required|email|unique:users,email,'.$user->id,
            'username'=> 'required|min:5|max:25|unique:users,username,'.$user->id,
            'password'=>'required'
            
        ],$messages);

            $user->update([
                'name' => $request['name'],
                'username' => $request['username'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
            ]);
    

        return redirect()->route('register-admin.index')->with('Succes','Berhasil update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user ,$id)
    {
        // abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        //this is delete in findOrFail
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('register-admin.index')->with('Succes', 'Berhasil hapus !');
    }
}
