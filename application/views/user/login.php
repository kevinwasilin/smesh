<?php echo validation_errors(); ?>
<?php echo login_errors(); ?>

<?php echo form_open() ?>
Username
<?php echo form_input('username',set_value('username')) ?><br />
Password
<?php echo form_password('password','') ?>
<?php echo form_submit('submit','Submit') ?>
<?php echo form_close() ?>
