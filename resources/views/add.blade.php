<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Karyawan</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="/">Home</a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" href="/add">Add</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/view">View</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>

    <h1 class="judul">Add Karyawan</h1>
      <form class="form" action="{{ route('addKaryawan')}}"  method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="author" class="form-label">Nama</label>
            <input name= "author" type="text" class="form-control" id="author" value="{{ old('author') }}" placeholder="Input Nama">
        </div>

            @error('Nama')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror


        <div class="mb-3">
            <label for="page" class="form-label">Umur</label>
            <input name= "page" type="numeric" class="form-control" id="page" value="{{ old('page') }}" placeholder="Input Umur">
        </div>

            @error('Umur')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror


        <div class="mb-3">
            <label for="year" class="form-label">Alamat</label>
            <input name= "year" type="numeric" class="form-control" id="year" value="{{ old('year') }}" placeholder="Taman Meruya Tomang">
        </div>

            @error('Alamat')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror

        <div class="mb-3">
            <label for="file" class="form-label">Nomor</label>
            <input name= "file" type="file" class="form-control" id="file" placeholder="08121802131">
        </div>

            @error('Nomor')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror


        <button type="submit" class="btn btn-success">Add</button>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
