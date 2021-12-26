@extends('layouts.app')

<div class="row" style="margin-left: 26%; margin-top:8%;">
    <div class="col-lg-10 margin-tb">
        <div class="pull-left">
            <h2> Rayon</h2>
        </div>
        <div class="pull-right" style="margin: 1%;" >
            <a class="btn btn-success" href="{{ route('rayons.create')}}"><i class="fas fa-plus"></i> Create</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
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

 
<table class="table table-bordered" style="width:45%; margin-left:27%;">
    <tr>
        <th>No</th>
        <th>Rayon</th>
        <th>Pembimbing</th>
        <th>Action</th>
    </tr>


    @foreach ($rayons as $rayon)
        

    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $rayon->rayon }}</td>
        <td>{{ $rayon->pembimbing }}</td>
        <td>
            <form action="{{ route('rayons.destroy',$rayon->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?');">
       
                <a class="btn btn-primary" href="{{ route('rayons.edit',$rayon->id) }}"><i class="fas fa-edit"></i></a>
 
                @csrf
                @method('DELETE')
    
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
            </form>
        </td>
    </tr>

    @endforeach

    {{!! $rayons->links() !!}}
</table>
  
