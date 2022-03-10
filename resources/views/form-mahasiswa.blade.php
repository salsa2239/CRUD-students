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
    <h1>Tambah Data Mahasiswa</h1>
    <form action="{{route('mahasiswas.store')}}" method="POST">
    @csrf
        <div class="form-group">
          <label for="nim">NIM</label>
          <div>
             <input type="text" class="form-control
                    @error('nim') is-invalid @enderror"
                    id="nim" name="nim" value="{{old('nim')}}">
             @error('nim')
                <div class="text-danger">{{$message}}</div>
             @enderror
          </div>
        </div>
        <div class="form-group">
          <label for="nim">Nama Mahasiswa</label>
          <div>
             <input type="text" class="form-control
                    @error('nama') is-invalid @enderror"
                    id="nama" name="nama" value="{{old('nama')}}">
             @error('nama')
                <div class="text-danger">{{$message}}</div>
             @enderror
          </div>
        </div>
        <div class="form-group">
            <label for="tempat_lahir">Tempat Lahir</label>
            <div>
             <input type="text" class="form-control
                    @error('tempat_lahir') is-invalid @enderror"
                    id="tempat_lahir" name="tempat_lahir" value="{{old('tempat_lahir')}}">
             @error("tempat_lahir")
                <div class="text-danger">{{$message}}</div>
             @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <div>
             <input type="date" class="form-control
                    @error('tanggal_lahir') is-invalid @enderror"
                    id="tanggal_lahir" name="tanggal_lahir" value="{{old('tanggal_lahir')}}">
             @error("tanggal_lahir")
                <div class="text-danger">{{$message}}</div>
             @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="fakultas">Fakultas</label>
            <div>
             <input type="text" class="form-control
                    @error('fakultas') is-invalid @enderror"
                    id="fakultas" name="fakultas" value="{{old('fakultas')}}">
             @error("fakultas")
                <div class="text-danger">{{$message}}</div>
             @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <div>
             <input type="text" class="form-control
                    @error('jurusan') is-invalid @enderror"
                    id="jurusan" name="jurusan" value="{{old('jurusan')}}">
             @error("jurusan")
                <div class="text-danger">{{$message}}</div>
             @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="ipk">IPK</label>
            <div>
             <input type="number" class="form-control
                    @error('ipk') is-invalid @enderror"
                    id="ipk" name="ipk" value="{{old('ipk')}}">
             @error("ipk")
                <div class="text-danger">{{$message}}</div>
             @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
