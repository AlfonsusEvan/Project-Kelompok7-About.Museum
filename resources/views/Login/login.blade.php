<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="css/login.css">
       
    </head>
   
    <body>
        <div>
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
               {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif

              @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
               {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
        <main>
            <div class="container">
                <h1>Login</h1>
                  <form action="/login" method="post">
                    @csrf
                      <label for="email">Email</label><br>
                      <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" autofocus required value="{{ old ('email') }}"><br>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                      <label>Password</label><br>
                      <input type="password" name="password" class="form-control" id="password" required><br>
                      <button class="login" type="submit">Login</button>

                  {{-- <a href="isi.html" class="login">Log in</a> --}}
                  {{-- <p class="div-p">Belum punya akun ?
                  <a href="/register">Klik di sini</a> --}}
                  </p> 
                  </form>
              </div>
        </main>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     
    </body>
</html>