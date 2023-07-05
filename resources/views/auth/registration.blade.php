@extends('layouts.app')
@section('content')
<main class="signup-form">
<div class="main-wrapper">
<div class="account-page">
<div class="container">
<h3 class="account-title">Register</h3>
<div class="account-box">
<div class="account-wrapper">
<div class="account-logo">
<a href="index.html"><img src="assets/img/logo2.png" alt="Preadmin"></a>
</div>
<form action="{{ route('register.custom') }}" method="POST">
    @csrf
<div class="form-group form-focus">
<label class="focus-label">Username</label>
<input class="form-control floating" type="text" name="name">
</div>
<div class="form-group form-focus">
<label class="focus-label">Email</label>
<input class="form-control floating" type="text" name="email">
</div>
<div class="form-group form-focus">
<label class="focus-label">Password</label>
<input class="form-control floating" type="password" name="password">
</div>  
<div class="form-group text-center">
<button class="btn btn-primary btn-block account-btn" type="submit">Register</button>
</div>
<div class="text-center">
<a href="login.html">Already have an account?</a>
</div>
</form>
</div>
</div>
</div>
</div>
</div>

<script src="assets/js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="assets/js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/app.js"></script>
</main>
@endsection