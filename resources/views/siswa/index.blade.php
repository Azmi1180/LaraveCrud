<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table data siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style>

    </style>
</head>
<body>
        
    {{-- Section Table --}}
    
    <div class="container mt-5">

        @if(session('success'))
            <div class="alert alert-success  mt-2" role="alert">
            {{ session('success') }}
            </div>    
        @endif
        
        <div class="row">
            <div class="col-6 mb-4"> 
                <h1>Data Siswa</h1>        
            </div>

            <div class="col-6 mt-2 mb-4">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tambah Data siswa
                </button>
            </div>
        
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Nama Depan</th>
                        <th>Nama Belakang</th>
                        <th>Jenis Kelamin</th>
                        <th>Agama</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                </thead>
                {{-- menampilkan data siswa menggunkan foreach --}}
                @foreach ($data_siswa as $siswa)
                <tr>
                    <td>{{ $siswa->nama_depan }}</td>
                    <td>{{ $siswa->nama_belakang }}</td>
                    <td>{{ $siswa->jenis_kelamin }}</td>
                    <td>{{ $siswa->agama }}</td>
                    <td>{{ $siswa->alamat }}</td>
                    <td><a class="btn btn-warning" href="/siswa/{{ $siswa->id }}/edit">Edit</a></td>
                </tr>    
                @endforeach    
            </table>        
        </div>
    </div>
    {{-- End Of Section Table --}}


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

            {{-- Content Modal --}}
            <form action="/siswa/create" method="POST">
                {{ csrf_field() }}
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama Depan</label>
                  <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan">
                </div>

                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama Belakang</label>
                  <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang">
                </div>

                <select name="jenis_kelamin" class="form-select mb-3" aria-label="Default select example">
                    <option selected>Pilih Jenis Kelamin</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Agama</label>
                    <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama">
                </div>

                <div class="form-floating mb-3">
                    <textarea name="alamat" class="form-control" placeholder="Tuliskan Alamat Lengkap mu disini" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Alamat</label>
                </div>

                
                {{-- End Of Content Modal --}}
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        </div>
        </div>
    </div>
    {{-- End Of Modal --}}



    {{-- Script Javascript --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>
