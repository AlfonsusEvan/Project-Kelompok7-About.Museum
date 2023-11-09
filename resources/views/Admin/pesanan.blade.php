@extends('Admin.mainA.maina')
 @section('container1')
 
 <div class="container mt-5">
    <div class="row">
      @if (session('tampil'))
						{{ session('tampil') }}
						@endif
        <div class="col-md-12">
            <div class="">
                <div class="">
                    {{-- {{ route('posts.create') }} --}}
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <td scope="col">NAMA</td>
                            <td scope="col">EMAIL</td>
                            <td scope="col">UMUR</td>
                            <td scope="col">NO_TELEPON</td>
                            <td scope="col">PESANAN NYA</td>
                            <td scope="col">TANGGAL NYA</td>
                          </tr>

                        </thead>
                        @foreach ($posts as $post)
                          <tr>
                            <td>{{ $post -> name }}</td>
                            <td>{{ $post -> email }}</td>
                            <td>{{ $post -> umur }}</td>
                            <td>{{ $post -> telepon }}</td>
                            <td>{{ $post -> pesanan }}</td>
                            <td>{{ $post -> tanggal }}</td>
                            <td>
                              <a href="/TampilPesanan/{{ $post -> id }}"  class="btn btn-info">Edit</a>
                              <form action="/delete/{{ $post -> id }}" onsubmit="return confirm('Yakin mau dihpus??')"  class="mt-2">
                              @method('delete')
                              @csrf
                              <button class="btn btn-danger">Delate</button>
                              </form>
                            </td>
                              {{-- <a onclick="konfirmasi()" href="/delete/{{ $post -> id }}" class="btn btn-danger" onsubmit="return confirm('Yakin mau dihpus??')">Hapus Data</a></td> --}}
                          </tr>
                          @endforeach
     
 @endsection

