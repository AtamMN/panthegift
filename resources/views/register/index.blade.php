<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>Register | PANTHEGIFT INDONESIA</title>
</head>

<body class="container">
  <div class="row justify-content-center py-5">
    <div class="col-md-4">
      <form action="/register" method="post">
        @csrf
        <div class="d-flex justify-content-center">
          <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
        </div>
        <h1 class="h3 mb-3 fw-normal">Create New Account</h1>
    
        <div class="form-floating">
          <input required value="{{ old('name') }}" type="text" name="name"  class="form-control @error('name') is-invalid @enderror" id="name" placeholder="your name">
          <label for="name">Name</label>
          @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="form-floating">
          <input required value="{{ old('username') }}" type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="your_username123">
          <label for="username">Username</label>
          @error('username')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="form-floating">
          <input required value="{{ old('email') }}" type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com">
          <label for="email">Email address</label>
          @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="form-floating">
          <input required type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password">
          <label for="password">Password</label>
          @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
    
        <button class="btn btn-primary w-100 py-2 mt-4" type="submit">Register</button>
        <div class="mt-2 d-flex justify-content-center"><small>Already have an account? <a href="/login">Login</a></small></div>
        <p class="mt-3 text-body-secondary">&copy; PANTHEGIFT 2023</p>
      </form>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></scrip>
</body>
</html>