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
                    <form action="{{ url('update-data', $posts -> id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- @method('PUT') --}}
                        <div class="form-group mt-3">
                            <label class="font-weight-bold">GAMBAR 1</label>
                            <input type="file" class="form-control @error('images1') is-invalid @enderror" name="images1">
                        
                            <!-- error message untuk title -->
                            @error('images1')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <img src="{{ asset('pots/'. $posts -> images1) }}" height="5%" width="30%" alt="">
                            
                        </div>
                        <div class="form-group mt-3">
                            <label class="font-weight-bold">GAMBAR 2</label>
                            <input type="file" class="form-control @error('images2') is-invalid @enderror" name="images2">
                        
                            <!-- error message untuk title -->
                            @error('images2')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <img src="{{ asset('pots/'. $posts -> images2) }}" height="5%" width="30%" alt="">
                        </div>

                        <div class="form-group mt-3">
                            <label class="font-weight-bold">GAMBAR 3</label>
                            <input type="file" class="form-control @error('images3') is-invalid @enderror" name="images3" >
                        
                            <!-- error message untuk title -->
                            @error('images3')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <img src="{{ asset('pots/'. $posts -> images3) }}" height="5%" width="30%" alt="">
                            
                        </div>

                        <div class="form-group mt-3">
                            <label class="font-weight-bold">GAMBAR 4</label>
                            <input type="file" class="form-control @error('images4') is-invalid @enderror" name="images4">
                        
                            <!-- error message untuk title -->
                            @error('images4')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <img src="{{ asset('pots/'. $posts -> images4) }}" height="5%" width="30%" alt="">
                            
                        </div>

                         <div class="form-group mt-3">
                            <label class="font-weight-bold">GAMBAR 5</label>
                            <input type="file" class="form-control @error('images5') is-invalid @enderror" name="images5">
                        
                            <!-- error message untuk title -->
                            @error('images5')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <img src="{{ asset('pots/'. $posts -> images5) }}" height="5%" width="30%" alt="">
                            
                        </div>

                        <div class="form-group mt-3 ">
                            <label class="font-weight-bold">GAMBAR 6</label>
                            <input type="file" class="form-control @error('images6') is-invalid @enderror" name="images6" value="{{ $posts -> images6 }}">
                        
                            <!-- error message untuk title -->
                            @error('images6')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <img src="{{ asset('pots/'. $posts -> images6) }}" height="5%" width="30%" alt="">
                            
                        </div>

                        <div class="form-group mt-3">
                            <label class="font-weight-bold">EVENT</label>
                            <input type="file" class="form-control @error('event') is-invalid @enderror" name="event" value="{{ $posts -> event }}">
                        
                            <!-- error message untuk title -->
                            @error('event')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <img src="{{ asset('pots/'. $posts -> event) }}" height="5%" width="30%" alt="">
                            
                        </div>

                        <div class="form-group mt-3">
                            <label class="font-weight-bold">TIKET</label>
                            <textarea class="form-control @error('tiket') is-invalid @enderror" name="tiket" rows="5" placeholder="Masukkan Konten posts">{{ $posts -> tiket }}</textarea>
                        
                            <!-- error message untuk tiket -->
                            @error('tiket')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div> 

                        <div class="form-group mt-3">
                            <label class="font-weight-bold">JADWAL</label>
                            <textarea class="form-control @error('jadwal') is-invalid @enderror" name="jadwal" rows="5" placeholder="Masukkan Konten posts">{{ $posts -> jadwal }}</textarea>
                        
                            <!-- error message untuk jadwal -->
                            @error('jadwal')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div> 

                        <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>

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
