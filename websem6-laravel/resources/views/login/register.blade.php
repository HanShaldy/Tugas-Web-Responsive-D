@extends('layout.logreg')

@section('logreg')
  
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-5 mt-5">
                <div class="card border-1">
                    <div class="card-header text-center bg-info">
                        <strong>FORM <span class="text-light">REGISTER</span></strong>
                    </div>
                    <div class="card-body">
                        <form action="/register" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="namainput" class="form-label">Nama</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="namainput" aria-describedby="namaHelp"
                                name="nama" placeholder="Masukkan Nama" autofocus value="{{ old('nama') }}">
                                @error('nama')    
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                              </div>
                            <div class="mb-3">
                                <label for="usernameinput" class="form-label">Username</label>
                                <input type="text" class="form-control  @error('username') is-invalid @enderror" id="usernameinput" aria-describedby="usernameHelp"
                                name="username" placeholder="Masukkan Username" autofocus value="{{ old('username') }}">
                                @error('username')    
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                              </div>
                            <div class="mb-3">
                              <label for="emailinput" class="form-label">Email Address</label>
                              <input type="email" class="form-control  @error('email') is-invalid @enderror" id="emailinput" aria-describedby="emailHelp"
                              name="email" placeholder="Masukkan Email" value="{{ old('email') }}">
                              @error('email')    
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                              @enderror
                            </div>
                            <div class="mb-3">
                              <label for="passwordinput" class="form-label">Password</label>
                              <input type="password" class="form-control  @error('password') is-invalid @enderror" id="passwordinput" 
                              name="password" placeholder="Masukkan Password" value="{{ old('password') }}">
                              @error('password')    
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                              @enderror
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input type="submit" name="submit" class="btn btn-primary w-100" value="Sign Up">
                                </div>
                                <div class="col-5">
                                    <p class="text-end">Punya akun? <a href="/login" class="text-decoration-none " style="color: deepskyblue"><strong>Sign In</strong></a> </p>
                                </div>
                            </div>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection