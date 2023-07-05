

<?php $__env->startSection('content'); ?>
<main class="login-form" style="margin-top:100px;">
<div class="main-wrapper">
<div class="account-page">
<div class="container">
<h3 class="account-title">Create New Company</h3>
<div class="account-box">
<div class="account-wrapper">
<div class="account-logo">
<a><img src="assets/img/logo2.png" alt="Preadmin"></a>
</div>
<form method="POST" action="<?php echo e(route('new-comapny')); ?>" enctype="multipart/form-data">
<?php echo csrf_field(); ?>

<div class="form-group form-focus">
<label class="focus-label">Name</label>
<input class="form-control floating" name="name">
</div>
<div class="form-group form-focus">
<label class="focus-label">Email</label>
<input class="form-control floating" type="email" name="email">
</div>
<div class="form-group form-focus">

<input class="form-control" type="file" name="logo">
</div>
<div class="form-group form-focus">
<label class="focus-label">Company URL</label>
<input class="form-control floating" name="url">
</div>
<div class="form-group form-focus">
<label class="focus-label">Contact Person</label>
<input class="form-control floating" name="contact_person">
</div>
<div class="form-group text-center">
<button class="btn btn-primary btn-block account-btn" type="submit">Create</button>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AdriTest\resources\views/create_company.blade.php ENDPATH**/ ?>