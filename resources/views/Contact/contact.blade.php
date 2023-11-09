@extends('Main.main')

@section('container')

		
	<div class="fh5co-loader"></div>
	<div class="container">
		<div id="fh5co-intro">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 col-md-pull-2">
					<h2>Untuk Pemesanan Tiket Bisa isi Forum di bawah</h2>
				</div>
			</div>
		</div>
		<div id="fh5co-contact">
			<div class="row">
				<div class="col-md-4 animate-box">
					<h3>Contact Information</h3>
					<ul class="contact-info">
						<li><a class="icon-phone3" href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=febyanaji16@gmail.com">febyanaji16@gmail.com</a></li>
                    	<li><a  class="icon-phone3" href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=evan.benardo@gmail.com">evan.benardo@gmail.com</a></li>
                    	<li><a class="icon-phone3" href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=fauzyachmademha02@gmail.com">fauzyachmademha02@gmail.com</a></li>
                    	<li><a  class="icon-phone3" href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=rmbagaskarads.com">rmbagaskarads.com</a></li>
						{{-- <li><i class="icon-location4"></i>198 West 21th Street, Suite 721 New York NY 10016</li>
						<li><i class="icon-phone3"></i>+ 1235 2355 98</li>
						<li><i class="icon-location3"></i><a href="#">info@yoursite.com</a></li>
						<li><i class="icon-globe2"></i><a href="#">www.yoursite.com</a></li> --}}
					</ul>
				</div>
				<div class="col-md-8 animate-box">
					<div class="form-wrap">
						<h4>	
						@if (session('success'))
						{{ session('success') }}
						@endif
						</h4>
						<div class="row">
							<form action="{{ route('storeContact') }}" method="post" enctype="multipart/form-data" >
								@csrf

							<div class="col-md-12">
									<div class="form-group">
									<label for="name">Masukkan Nama Anda</label>
									<input name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" required value="{{ old('name') }}"  cols="30" rows="15" placeholder="your name">
									@error('name')
									<div class="alert alert-danger mt-2">
										{{ $message }}
									</div>
									@enderror
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
								<label for="email">Masukkan Email Anda</label>
								<input name="email" class="form-control rounded-top @error('email') is-invalid @enderror" id="email" required value="{{ old('email') }}"  cols="30" rows="15" placeholder="your email">
								@error('email')
								<div class="alert alert-danger mt-2">
									{{ $message }}
								</div>
								@enderror
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group">
							<label for="umur">Masukkan Umur Anda</label>
							<input name="umur" class="form-control rounded-top @error('umur') is-invalid @enderror" id="umur" required value="{{ old('umur') }}"  cols="30" rows="15" placeholder="your age">
							@error('umur')
							<div class="alert alert-danger mt-2">
								{{ $message }}
							</div>
							@enderror
						</div>
					</div>
							
						<div class="col-md-12">
							<div class="form-group">
							<label for="telepon">Masukkan Nomor Telepon Anda</label>
							<input name="telepon" class="form-control rounded-top @error('telepon') is-invalid @enderror" id="telepon" required value="{{ old('telepon') }}"  cols="30" rows="15" placeholder="your telephone number">
							@error('telepon')
							<div class="alert alert-danger mt-2">
								{{ $message }}
							</div>
							@enderror
						</div>
					</div>

						
					<div class="col-md-12">
						<div class="form-group">
						<label for="tanggal">Masukkan Tanggal-Nya :</label>
						<input name="tanggal" type="date" class="form-control rounded-top @error('tanggal') is-invalid @enderror" id="tanggal" required value="{{ old('tanggal') }}"  cols="30" rows="15" placeholder="your telephone number">
						@error('tanggal')
						<div class="alert alert-danger mt-2">
							{{ $message }}
						</div>
						@enderror
					</div>
				</div>
								
							<div class="col-md-12">
								<div class="form-group">
									<label for="pesanan">Ingin Memesan Tiekt Apa ?</label>
									<textarea name="pesanan" class="form-control rounded-top @error('pesanan') is-invalid @enderror" id="pesanan" required value="{{ old('pesanan') }}"  cols="30" rows="15" placeholder="Message"></textarea>
									@error('pesanan')
									<div class="alert alert-danger mt-2">
										{{ $message }}
									</div>
									@enderror
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<button type="submit" value="Send Message" class="btn btn-primary btn-modify">SIMPAN</button>
									{{-- <input type="submit" value="Send Message" class="btn btn-primary btn-modify"> --}}
								</div>
							</div>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- END container -->


    @endsection

	{{-- <div class="col-md-12">
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" required value="{{ old('name') }}" placeholder="Name">
			@error('name')
			<div class="alert alert-danger mt-2">
				{{ $message }}
			</div>
		@enderror
		</div>
	</div>
	<div class="col-md-12">
		<div class="form-group">
			<label for="email">Email</label>
			<input type="text" class="form-control rounded-top @error('email') is-invalid @enderror" id="email" required value="{{ old('email') }}" placeholder="Email">
			@error('email')
		  <div class="invalid-feedback">
		{{ $message }}
	  </div>
	  @enderror
		</div>
	</div>
	<div class="col-md-12">
		<div class="form-group">
			<label for="no_tanggal">Nomor Telepon</label>
			<input type="text" class="form-control rounded-top @error('no_telepon') is-invalid @enderror" id="no_telepon" required value="{{ old('no_telepon') }}" placeholder="No_Telepon">
			@error('no_telepon')
			<div class="alert alert-danger mt-2">
				{{ $message }}
			</div>
		@enderror
		</div>
	</div> --}}