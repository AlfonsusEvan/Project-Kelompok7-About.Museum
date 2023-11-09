<html>
    <head>
        <title>Halaman Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="css/register.css">
      
    </head>
    <body>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <main>
                    <div class="register">
                        <h2>Register</h2>
                          <form action="/register" method="post">
                            @csrf
                              <label for="name">Name</label>
                              <br>
                              <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name " required value="{{ old('name') }}">
                              @error('name')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                              @enderror

                              <br>
                              <label for="username">Username</label>
                              <br>
                              <input type="text" name="username" class="form-control rounded-top @error('username') is-invalid @enderror" id="username" required value="{{ old('username') }}">
                              @error('username')
                              <div class="invalid-feedback" >
                                {{ $message }}
                              </div>
                              @enderror
                              
                              <br>
                              <label for="email">Email</label>
                              <br>
                              <input type="text" name="email" class="form-control rounded-top @error('email') is-invalid @enderror" id="email" required value="{{ old('email') }}">
                              @error('email')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                              @enderror
                              
                              <br>
                              <label for="password">Password</label>
                              <br>
                              <input type="password" name="password"  class="form-control rounded-top @error('password') is-invalid @enderror" id="password" required>
                              <br>
                              @error('password')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                              @enderror

                              <button class="regis" type="submit">Register</button>
        
                              {{-- <a href="" class="regis">Register</a> --}}
                              <p class="regis-p"> Sudah punya akun?
                                <a href="/login">Login di sini</a>
                              </p>
                          </form>
                      </div>
                </main>
            </div>
        </div>
        
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     
    </body>
</html>
