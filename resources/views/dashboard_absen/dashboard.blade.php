    @extends('layouts.app')
    
<div class="row" style="margin-left: 26%; margin-top:8%;">
    <div class="col-lg-10 margin-tb">
        <div class="pull-left">
            <h2>Absensi Student</h2>
        </div>
        
    </div>
</div>
 
<table class="table table-bordered" style="width: 55%; margin-left:27%;">
    <tr>
        <th>No</th>
        <th>Nis</th>
        <th>Jam Kehadiran</th>
        <th>Jam Kepulangan</th>
        <th>Keterangan</th>
        <th>Action</th>
    </tr>

        
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>


        <td>
            <form action="}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?');">
                <a class="btn btn-primary" href=""><i class="fas fa-edit"></i></a>
 
                @csrf
                @method('DELETE')
    
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
            </form>
        </td>
    </tr>

</table>
                