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

    <h1 class="form">Update Karyawan</h1>
      <form class="form" action="{{route('update', ['id' => $library->id])}}"  method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="title" class="form-label">Nama</label>
            <input name="title" type="text" class="form-control" id="title" value="{{$library->title}}" placeholder="Input Nama">
        </div>

            @error('Nama')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror


        <div class="mb-3">
            <label for="author" class="form-label">Umur</label>
            <input name= "author" type="text" class="form-control" id="author" value="{{$library->author}}" placeholder="Input Umur">
        </div>

            @error('Umur')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror


        <div class="mb-3">
            <label for="page" class="form-label">Alamat</label>
            <input name= "page" type="numeric" class="form-control" id="page" value="{{$library->page}}" placeholder="Taman Meruya">
        </div>

            @error('Alamat')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror

        <div class="mb-3">
            <label for="file" class="form-label">Nomor</label>
            <input name= "file" type="file" class="form-control" id="file" placeholder="081213132">
        </div>

            @error('Nomor')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror

        <button type="submit" class="btn btn-success">Update</button>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
