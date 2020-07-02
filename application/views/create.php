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
<h3 class="text-center mt-4">Create User</h3>
<div class="row">
<form method="post" action="<?= base_url().'index.php/User/create'; ?>">
<div class="col-md-6 offset-md-3">
<hr>
<div class="form-group">
<?= form_label('First Name'); ?>
<?= form_input(['type'=>'text','name'=>'fname','value'=>set_value('fname'), 'class'=>'form-control']); ?>
 <?php echo form_error('fname'); ?>
</div>
<div class="form-group">
<?= form_label('Last Name'); ?>
<?= form_input(['type'=>'text','name'=>'lname','value'=>set_value('lname'), 'class'=>'form-control']); ?>
 <?php echo form_error('lname'); ?>
</div>
<div class="form-group">
<?= form_label('Email'); ?>
<?= form_input(['type'=>'email','name'=>'email','value'=>set_value('email'), 'class'=>'form-control']); ?>
<?php echo form_error('email'); ?>
</div>
<div class="form-group">
<?= form_label('Contact No.'); ?>	
<?= form_input(['type'=>'text','name'=>'mobile','value'=>set_value('mobile'),'class'=>'form-control']); ?>
<?php echo form_error('mobile'); ?>
</div>
<div class="form-group mt-3">
<?= form_submit(['type'=>'submit','value'=>'Submit','class'=>'btn btn-secondary']); ?> 
<?= anchor('User','Cancel',array('class'=>'btn btn-primary')); ?>
</div>				
</div>
</form>
</div>
</div>
</body>
</html>
