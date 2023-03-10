@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
          <form>
        
            <div class="form-floating">
              <input type="text" name="name" class="form-control" id="name" placeholder="Name">
              <label for="name">Name</label>
            </div>
            <div class="form-floating">
              <input type="text" name="username" class="form-control" id="username" placeholder="Username">
              <label for="username">Username</label>
            </div>
            <div class="form-floating">
              <input type="email" class="form-control" id="email" placeholder="name@example.com">
              <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">Password</label>
            </div>
        
            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
          </form>
          <small class="d-block text-center mt-3">Not Registered? <a href="/register">Register Now!</a></small>
        </main>
    </div>
</div>

@endsection