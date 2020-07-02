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
<h3 class="text-center mt-4">Update User</h3>
<div class="row">
<form method="post" action="<?= base_url().'index.php/User/edit/'.$user['u_id']; ?>">
<div class="col-md-6 offset-md-3">
<hr>
<div class="form-group">
<?= form_label('Frist Name'); ?>
<?= form_input(['type'=>'text','name'=>'fname','value'=>set_value('fname',$user['u_fname']), 'class'=>'form-control']); ?>
 <?php echo form_error('fname'); ?>
</div>
<div class="form-group">
<?= form_label('Last Name'); ?>
<?= form_input(['type'=>'text','name'=>'lname','value'=>set_value('lname',$user['u_lname']), 'class'=>'form-control']); ?>
 <?php echo form_error('lname'); ?>
</div>
<div class="form-group">
<?= form_label('Email'); ?>
<?= form_input(['type'=>'email','name'=>'email','value'=>set_value('email',$user['u_email']), 'class'=>'form-control']); ?>
<?php echo form_error('email'); ?>
</div>
<div class="form-group">
<?= form_label('Contact No.'); ?>
<?= form_input(['type'=>'text','name'=>'mobile','value'=>set_value('mobile',$user['u_mobile']), 'class'=>'form-control']); ?>
<?php echo form_error('email'); ?>
</div>
<div class="form-group mt-3">
<?= form_submit(['type'=>'submit','value'=>'Update','class'=>'btn btn-secondary']); ?> 
<?= anchor('User','Cancel',array('class'=>'btn btn-primary')); ?>
</div>				
</div>
</form>
</div>
</div>
</body>
</html>
