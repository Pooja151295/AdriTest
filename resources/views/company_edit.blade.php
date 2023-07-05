@extends('layouts.app')

@section('content')
<main class="login-form">
<div class="main-wrapper">
<div class="account-page">
<div class="container">

<div class="account-box">
<div class="account-wrapper">
<div class="account-logo">
<a><img src="assets/img/logo2.png" alt="Preadmin"></a>
</div>
<form method="POST" action="{{ route('company-update') }}" enctype="multipart/form-data">
@csrf
<div class="form-group form-focus">
<input class="form-control floating" type="text" name="id" value="{{ $data->id }}" hidden >
<label class="focus-label">Name</label>
<input class="form-control floating" type="text" name="name" value="{{ $data->name }}" >
</div>
<div class="form-group form-focus">
<label class="focus-label">Email</label>
<input class="form-control floating" type="email" name="email" value="{{ $data->email }}" >
</div>
<div class="form-group form-focus">
<label class="focus-label">Logo</label>
<input class="form-control floating" type="file" name="logo">
</div>
<div class="form-group form-focus">
<label class="focus-label">Company URL</label>
<input class="form-control floating" type="text" name="url" value="{{ $data->url }}" >
</div>
<div class="form-group form-focus">
<label class="focus-label">Contact Person</label>
<input class="form-control floating" type="text" name="contact_person" value="{{ $data->contact_person }}" >
</div>
<div class="form-group text-center">
<button class="btn btn-primary btn-block account-btn" type="submit">Edit</button>
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