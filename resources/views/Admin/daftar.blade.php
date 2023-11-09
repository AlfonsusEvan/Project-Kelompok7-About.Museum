@extends('Admin.mainA.maina')
 @section('container1')
 
 <div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="">
                <div class="">
                    <a href="/admin" class="btn btn-md btn-success mb-3">TAMBAH POST</a>
                    {{-- {{ route('posts.create') }} --}}
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <td scope="col">GAMBAR1</td>
                            <td scope="col">GAMBAR2</td>
                            <td scope="col">GAMBAR3</td>
                            <td scope="col">GAMBAR4</td>
                            <td scope="col">GAMBAR5</td>
                            <td scope="col">GAMBAR6</td>
                            <td scope="col">EVENT</td>
                            <td scope="col">TIKET</td>
                            <td scope="col">JADWAL</td>
                            <td scope="col"></td>
                          </tr>

                        </thead>
                        @foreach ($posts as $row)
                          <tr>
                            <td><img src="pots/{{ $row -> images1 }}"width="100px"></td>
                            <td><img src="pots/{{ $row -> images2 }}"width="100px"></td>
                            <td><img src="pots/{{ $row -> images3 }}"width="100px"></td>
                            <td><img src="pots/{{ $row -> images4 }}"width="100px"></td>
                            <td><img src="pots/{{ $row -> images5 }}"width="100px"></td>
                            <td><img src="pots/{{ $row -> images6 }}"width="100px"></td>
                            <td><img src="pots/{{ $row -> event }}"width="100px"></td>
                            <td>{{ $row -> tiket }}</td>
                            <td>{{ $row -> jadwal }}</td>
                            <td>
                              <a href="/tampilkandata/{{ $row -> id }}"  class="btn btn-info">Edit</a>
                              <form action="/delete1/{{ $row -> id }}" onsubmit="return confirm('Yakin mau dihpus??')" class="mt-2" >
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                            {{-- <td>
                                <a href="" class="badge bg-warning"><span data-feater="edit"><i class="bi bi-pencil-fill"></i></span></a>
                                <form action="/daftar/{{ $post->slug }}" method="POST">
                                  @method('delete')
                                  @csrf
                                  <button class="badge bg-danger border-0" onclick="return confirm('Are you  sure ?')"><span data-feater="x-circle"><i class="bi bi-x-circle"></i></span></button>
                                </form>
                            </td> --}}
                          </tr>
                          @endforeach
                        {{-- <tbody>
                          @forelse ($posts as $post)
                            <tr>
                                <td class="text-center">
                                    <img src="{{ Storage::url('public/posts/').$post->image }}" class="rounded" style="width: 150px">
                                </td>
                                <td>{{ $post->title }}</td>
                                <td>{!! $post->content !!}</td>
                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                    </form>
                                </td>
                            </tr>
                          @empty
                              <div class="alert alert-danger">
                                  Data Post belum Tersedia.
                              </div>
                          @endforelse
                        </tbody> --}}
                      </table>  
                      {{-- {{ $posts->links() }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
     
 @endsection

