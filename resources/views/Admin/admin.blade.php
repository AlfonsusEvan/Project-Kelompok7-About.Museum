@extends('Admin.mainA.maina')


@section('container1')
<div class="container mt-5 mb-5">

    <h2 class="mb-5">Input Data to Web About.Museum</h2>

    <div class="row">
            @if (session('success'))
            <div class="alert alert-success d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                <div>
                    {{ session('success') }}
                </div>
              </div>
            @endif
          
        <div>
            <div class="card border-0 shadow rounded">
                <div class="card-body ">
                    <form action="{{ route('storeData') }}" method="POST" enctype="multipart/form-data">
                    
                        @csrf

                        {{-- <div class="form-group mt-3">
                            <label class="font-weight-bold">Pilih Museum</label>
                            <select class="form-control @error('museum') is-invalid @enderror" name="museum" id="museum">
                                @foreach ($data as $item)
                                <option value="{{ $item->museum }}">{{ $item->museum }}</option>  
                                @endforeach
                                 <option value="MuseumNI">Museum Nasional Indonesia</option>
                                <option value="MuseumTBDA">Museum Tsunami Banda Aceh</option>
                                <option value="MuseumHOS">Museum House of Sampoerna</option>
                                <option value="MuseumBI">Museum Batik Indonesia</option>
                                <option value="MuseumW">Museum Wayang</option>
                                <option value="MuseumB">Museum Buleleng</option>
                                <option value="MuseumRM">Museum Rekor Muri</option> 
                            </select>

                            <!-- error message untuk title -->
                            @error('museum')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div> --}}

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
                            <label class="font-weight-bold">GAMBAR 3</label>
                            <input type="file" class="form-control @error('images3') is-invalid @enderror" name="images3">
                        
                            <!-- error message untuk title -->
                            @error('images3')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
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
                            <label class="font-weight-bold">GAMBAR 5</label>
                            <input type="file" class="form-control @error('images5') is-invalid @enderror" name="images5">
                        
                            <!-- error message untuk title -->
                            @error('images5')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mt-3 ">
                            <label class="font-weight-bold">GAMBAR 6</label>
                            <input type="file" class="form-control @error('images6') is-invalid @enderror" name="images6">
                        
                            <!-- error message untuk title -->
                            @error('images6')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label class="font-weight-bold">EVENT</label>
                            <input type="file" class="form-control @error('event') is-invalid @enderror" name="event">
                        
                            <!-- error message untuk title -->
                            @error('event')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label class="font-weight-bold">TIKET</label>
                            <textarea class="form-control @error('tiket') is-invalid @enderror" name="tiket" rows="5" placeholder="Masukkan Konten Post">{{ old('tiket') }}</textarea>
                        
                            <!-- error message untuk tiket -->
                            @error('tiket')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div> 

                        <div class="form-group mt-3">
                            <label class="font-weight-bold">JADWAL</label>
                            <textarea class="form-control @error('jadwal') is-invalid @enderror" name="jadwal" rows="5" placeholder="Masukkan Konten Post">{{ old('jadwal') }}</textarea>
                        
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
@endsection
