@extends('layouts.app');



<div class="row" style="margin-left: 26%; margin-top:8%;">
    <div class="col-lg-10 margin-tb">
        <div class="pull-left">
            <h2>Register Student</h2>
        </div>
        <div class="pull-right" style="margin: 1%;" >
            <a class="btn btn-success" href="{{ route('register-student.create') }}"><i class="fas fa-plus"></i> Create</a>
        </div>
    </div>
</div>
{{-- 
<div>   
    <div class="mx-auto pull-right">
        <div class="">
            <form action="" method="GET" role="search">

                <div class="input-group" >
                    <span class="input-group-btn" >
                        <button class="btn btn-info" type="submit" title="Search Rayon" style="border-radius: 0px">
                            <span class="fas fa-search"></span>
                        </button>
                    </span>
                    <input type="text" class="" name="search" placeholder="Search Rayon" id="search" style="height: 38px; width: 20%;">
                    <a href="" class="">
                        <span class="input-group-btn">
                            <button class="btn btn-danger" type="button" title="Refresh page" style="border-radius: 0px">
                                <span class="fas fa-sync-alt"></span>
                            </button>
                        </span>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div> --}}

 
<table class="table table-bordered" style="width: 55%; margin-left:27%;">
    <tr>
        <th>No</th>
        <th>Nis</th>
        <th>Nama</th>
        <th>Rombel</th>
        <th>Rayon</th>
        <th>Username</th>
        <th>Action</th>
    </tr>

    @foreach ($students as $student)
        
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $student->nis }}</td> 
        <td>{{ $student->nama }}</td>
        <td>{{ $student->rombel}}</td>
        <td>{{ $student->rayon}}</td>
        <td>{{ $student->username}}</td>
        <td>
            <form action="{{ route('register-student.destroy', $student->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?');">
                <a class="btn btn-primary" href="{{ route('register-student.edit',$student->id) }}"><i class="fas fa-edit"></i></a>
 
                @csrf
                @method('DELETE')
    
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
            </form>
        </td>
    </tr>
@endforeach

{{!! $students->links() !!}}
</table>
  
