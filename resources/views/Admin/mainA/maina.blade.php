<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="public/">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-da bg-primary ">
      <div class="container">
        <ul class="nav nav-pills">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Admin") ? 'active' : '' }}" aria-current="page" href="/admin">Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Daftar")  ? 'active' : ''}}" href="/daftar">Daftar Isi Inputtan</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Pesanan")  ? 'active' : ''}}" href="/pesanan">Daftar Pesanann</a>
          </li> 
        </ul> 
          <ul class="navbar-nav ms-auto">
            @auth
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome Back, {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><hr class="dropdown-divider"></li>
                <form action="/logout" method="POST">
                  @csrf
                  <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right mr-2"></i>  Logout</button>
              </form>
              <form> 
                <button type="submit" class="dropdown-item"><i class="bi bi-patch-plus-fill"></i><a style="text-decoration:none; color:rgb(6, 5, 5)" href="/register">  Register </a></button>
              </form>
              </ul>
            </li>
              @else 
              <li class="nav-item">
                <a href="/" class="nav-link">Logout</a>
              </li>
            @endauth  
          </ul>
        </div>
      </div>
    </nav>
    <div>
        @yield('container1')
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