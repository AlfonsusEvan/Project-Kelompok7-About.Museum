<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  </head>
  <body>
<div class="container mt-5 mb-5">

    <h2 class="mb-5">Edit Data to Web About.Museum</h2>

    <div class="row">
            
        <div>
            <div class="card border-0 shadow rounded">
                <div class="card-body ">
                    <form action="{{ url('update-data', $contact -> id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- @method('PUT') --}}
                         <div class="form-group mt-3">
                            <label class="font-weight-bold">Nama Anda</label>
                            <input class="form-control @error('name') is-invalid @enderror" name="name" rows="5" placeholder="Masukkan Konten posts" value=" {{$contact-> name }}">
                        
                            <!-- error message untuk name -->
                            @error('name')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div> 

                        <div class="form-group mt-3">
                            <label class="font-weight-bold">Email Anda</label>
                            <input class="form-control @error('email') is-invalid @enderror" name="email" rows="5" placeholder="Masukkan Konten posts" value=" {{$contact-> email }}">
                        
                            <!-- error message untuk email -->
                            @error('email')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div> 

                        <div class="form-group mt-3">
                            <label class="font-weight-bold">umur Anda</label>
                            <input class="form-control @error('umur') is-invalid @enderror" name="umur" rows="5" placeholder="Masukkan Konten posts" value=" {{$contact-> umur }}">
                        
                            <!-- error message untuk umur -->
                            @error('umur')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div> 

                        <div class="form-group mt-3">
                            <label class="font-weight-bold">No.Telepon Anda</label>
                            <input class="form-control @error('telepon') is-invalid @enderror" name="telepon" rows="5" placeholder="Masukkan Konten posts" value=" {{$contact-> telepon }}">
                        
                            <!-- error message untuk telepon -->
                            @error('telepon')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div> 

                        <div class="form-group mt-3">
                            <label class="font-weight-bold">Tanggal Anda</label>
                            <input class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" type="date" rows="5" placeholder="Masukkan Konten posts"  value=" {{$contact-> tanggal }}" >
                        
                            <!-- error message untuk tanggal -->
                            @error('tanggal')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div> 

                        <div class="form-group mt-3">
                            <label class="font-weight-bold">Pesanan Anda</label>
                            <textarea class="form-control @error('pesanan') is-invalid @enderror" name="pesanan" rows="5" placeholder="Masukkan Konten posts">{{ $contact -> pesanan }}</textarea>
                        
                            <!-- error message untuk pesanan -->
                            @error('pesanan')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div> 


                        

                        <button type="submit" style="margin-top: 15px" class="btn btn-md btn-primary">SIMPAN</button>

                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'content' );
    </script>
    <script>
      function konfirmasi() {
        confirm("Apakah Anda Akan Menghapus Data Ini ?");
      }
    </script>
  </body>
</html>
