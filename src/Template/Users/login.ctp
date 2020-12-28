<!DOCTYPE html>
<html lang="en">

<head>
    <title>Garmin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body style="background: #669aff!important;">


    <section class="wrape-lg-reg-form">
        <div class="login-register-page panel">

            <h2 class="text-center">Login</h2>
            <?php echo $this->Form->create(null, ['class' => 'form-signin']); ?>
            <div class="form-group">
                <label for="uname"><b>Username</b></label>

                <?php //echo __('Email / Username'); ?>
                <?php echo $this->Form->control("email", ['label' => false, 'div' => false, 'class' => 'form-control', 'placeholder' => 'Email Address', 'autofocus' => 'autofocus']); ?>

            </div>
            <div class="form-group">
                <label for="psw"><b>Password</b></label>

                <?php //echo __('Password'); ?>
                <?php echo $this->Form->control("password", array("type" => "password", 'label' => false, 'div' => false, 'class' => 'form-control', 'placeholder' => 'Password')); ?>

            </div>

            <div class="form-group">
                <?php echo $this->Form->submit('Login', array('class' => 'btn btn-danger btn-block btn-login', 'div' => false)); ?>
            </div>


            <!-- <div class="remember-pass">
                <?php //if (!isset($this->request->data['User']['remember']))
//$this->request->data['User']['remember'] = true; ?>

                <?php //echo $this->Form->control("remember", array("type" => "checkbox", 'label' => false, 'div' => false)) ?><div class="pull-left">&nbsp;&nbsp;<?php //echo __('Remember me'); ?></div>

                 <a class="link" href="<?php //echo $this->Html->url('/', true) . 'forgotPassword'; ?>">Forgot your password?</a>
            </div> -->
            <?php echo $this->Form->end(); ?>
        </div>
    </section>

    <!-- <p class="text-center">Not registered? <a href="/garmin/register">Register here</a></p> -->

</body>

</html>
<script>
    document.getElementById("UserEmail").focus();
</script>