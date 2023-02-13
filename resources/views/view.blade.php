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
                <a class="nav-link" aria-current="page" href="/">Home</a>
              </li>

              <li class="nav-item">
                <a class="nav-link " href="/add">Add</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/view">View</a>
              </li>
            </ul>

            <div class="search">
                <form action="{{url('/cari')}}" method="GET" >
                    <input class="form-control me-2" type="text" placeholder="Search" name="cari" aria-label="Search" value="{{ old('cari') }}">
                </form>
            </div>

          </div>
        </div>
      </nav>

      <h1 class="judul">View Karyawan</h1>

    <table class="table table-success table-striped" id="tabel">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nama</th>
            <th scope="col">Umur</th>
            <th scope="col">Alamat</th>
            <th scope="col">Nomor</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($libraries as $library)
                <tr>
                <th scope="row">{{ $library->id }}</th>
                <td>{{ $library->Nama }}</td>
                <td>{{ $library->Umur }}</td>
                <td>{{ $library->Alamat }}</td>
                <td>{{ $library->Nomor }}</td>
                <td><img width="300px" src="{{ url('/data_file/'.$library->file) }}"></td>
                <td>
                    <a href="{{route('updateKaryawan', ['id'=>$library->id])}}"><button type="submit" class="btn btn-success">Update</button></a>

                    <form action="{{route('delete', ['id' => $library->id])}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>

                </tr>
            @endforeach
        </tbody>
      </table>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
