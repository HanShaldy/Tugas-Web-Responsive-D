@extends('layout.main')

@section('container')
  
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-5 mt-5">

              @if (session()->has('success'))    
                <div class="alert alert-info alert-dismissible fade show" role="alert">
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

                <div class="card border-1">
                    <div class="card-header text-center bg-info">
                        <strong>FORM <span class="text-light">LOGIN</span></strong>
                    </div>
                    <div class="card-body">
                        <form action="/login" method="post">
                            @csrf
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
                                    <input type="submit" name="submit" class="btn btn-primary w-100" value="Sign In">
                                </div>
                                <div class="col">
                                    <p class="text-end">Belum Punya Akun? <a href="/register" class="text-decoration-none " style="color: deepskyblue"><strong>Sign Up</strong></a> </p>
                                </div>
                            </div>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection