<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Mahasiswa</title>
  </head>
  <body>
      <div class="py-4 d-flex justify-content-end align-items-center">
        <h2 class="mr-auto">Data Mahasiswa</h2>
        <a href="{{route('mahasiswas.create')}}" class="btn btn-primary">
            Tambah Data Mahasiswa
        </a>
      </div>
        @if(session()->has('pesan'))

            <div class="alert alert-success">
                {{session()->get('pesan')}}
            </div>
        @endif
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">NIM</th>
            <th scope="col">Nama</th>
            <th scope="col">Tempat Lahir</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Fakultas</th>
            <th scope="col">Jurusan</th>
            <th scope="col">IPK</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($mahasiswas as $mahasiswa)
          <tr>
            <th>{{$loop->iteration}}</th>
            <td><a href="{{route('mahasiswas.detail',['mahasiswa'=>$mahasiswa->id])}}">
                {{$mahasiswa->nim}}</a></td>
            <td>{{$mahasiswa->nama}}</td>
            <td>{{$mahasiswa->tempat_lahir}}</td>
            <td>{{$mahasiswa->tanggal_lahir}}</td>
            <td>{{$mahasiswa->fakultas}}</td>
            <td>{{$mahasiswa->jurusan}}</td>
            <td>{{$mahasiswa->ipk}}</td>
          </tr>
          @empty
            <td colspan="8" class="text-center"> Data Mahasiswa Tidak Ada...</td>
          @endforelse
        </tbody>
      </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
