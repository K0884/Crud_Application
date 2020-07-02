<!DOCTYPE html>
<html>
<head>
<title>Crud Application</title>
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">

</head>
<body>
<div class="navbar navbar-dark bg-dark">
<div class="container">
<?= anchor('','CRUD APPLICATION',array('class'=>'navbar-brand')); ?>
</div>
</div>
<div class="container">
<h3 class="text-center mt-4">Login User</h3>
<div class="row">
<?= form_open('login/index'); ?>
<div class="col-md-6 offset-md-3">
<hr>
<div class="form-group">
<?= form_label('Email'); ?>
<?= form_input(['type'=>'email','name'=>'email','value'=>set_value('email'), 'class'=>'form-control']); ?>
<?php echo form_error('email'); ?>
</div>
<div class="form-group">
<?= form_label('Password'); ?>	
<?= form_input(['type'=>'password','name'=>'password','class'=>'form-control']); ?>
<?php echo form_error('password'); ?>
</div>
<div class="form-group mt-3">
<?= form_submit(['type'=>'submit','value'=>'Submit','class'=>'btn btn-secondary']); ?> 

</div>				
</div>
<?= form_close(); ?>
</div>
</div>
</body>
</html>
