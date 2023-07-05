@extends('layouts.app')

@section('content')
<main class="login-form">
<div class="main-wrapper">
<div class="account-page">
<div class="container">
<h3 class="account-title">Login</h3>
<div class="account-box">
<div class="account-wrapper">
<div class="account-logo">
<a><img src="assets/img/logo2.png" alt="Preadmin"></a>
</div>
<form method="POST" action="{{ route('login.custom') }}">
@csrf
<div class="form-group form-focus">
<label class="focus-label">Username or Email</label>
<input class="form-control floating" type="email" name="email">
</div>
<div class="form-group form-focus">
<label class="focus-label">Password</label>
<input class="form-control floating" type="password" name="password">
</div>
<div class="form-group text-center">
<button class="btn btn-primary btn-block account-btn" type="submit">Login</button>
</div>
<div class="text-center">
<a href="forgot-password.html">Forgot your password?</a>
</div>
</form>
</div>
</div>
</div>
</div>
</div>

</div>

</div>

<div class="sidebar-overlay" data-reff=""></div>

<script src="assets/js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="assets/js/moment.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/jquery.slimscroll.js"></script>

<script src="assets/js/app.js"></script>
</main>
@endsection