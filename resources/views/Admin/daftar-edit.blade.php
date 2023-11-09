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

    <h2 class="mb-5">Input Data to Web About.Museum</h2>

    <div class="row">
        <div>
            <div class="card border-0 shadow rounded">
                <div class="card-body ">
                    <form action="{{ url('update-data', $posts -> id) }}" method="post" enctype="multipart/form-data">
                        @csrf

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
