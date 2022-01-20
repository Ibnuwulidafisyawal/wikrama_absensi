    @extends('layouts.app')
    
<div class="row" style="margin-left: 26%; margin-top:8%;">
    <div class="col-lg-10 margin-tb">
        <div class="pull-left">
            <h2>Absensi Student Hadir</h2>
        </div>
        
    </div>
</div>
 
<table class="table table-bordered" style="width: 55%; margin-left:27%;">
    <tr>
        <th>No</th>
        <th>Nis</th>
        <th>Tanggal & Jam Kedatangan</th>
        <th>Jam Kepulangan</th>
        <th>Action</th>
    </tr>



    @if (count($absens) > 0)
        
  
    @foreach ($absens as $absen)
        
        
    <tr>
        <td>{{ ++$i  }}</td>
        <td>{{ $absen->nis }}</td>
        <td>{{ $absen->jam_kedatangan }}</td>
        <td>{{ $absen->jam_kepulangan }}</td>
        <td>
            <form action="{{ route('dashboard_absen.destroy',$absen->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?');">
                <a class="btn btn-primary" href=""><i class="fas fa-edit"></i></a>
 
                @csrf
                @method('DELETE')
    
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
            </form>
        </td>
    </tr>

    @endforeach
        
    @else
    <tr>
        <td colspan="4" class="text-center">
            Data Kosong
        </td>
    </tr>
        
    @endif


    {{!! $absens->links() !!}}

</table>
                