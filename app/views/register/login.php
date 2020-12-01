<?php $this->setSiteTitle('Login'); ?>
<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>
<div id="form_wrapper">
    <h3 class="h text-center">Log In</h3>
    <form class="login_form" action="<?php echo FROOT;?>register/login" method="post">
        <div class="bg-danger"><?php echo $this->displayErrors; ?></div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="Username"/>
        </div><!--form-group-->
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password"/>
        </div><!--form-group-->
        <div class="form-group">
            <label for="remember_me"> Remember Me <input type="checkbox" name="remember_me" id="remember_me" value="on"/> </label>
        </div>
        <div class="button-wrap">
            <input type="submit" class="default-btn" value="Login"/>
            <a href="<?php echo FROOT;?>register/register" class="link text-right">Register</a>
        </div> <!-- Button Wrap-->
    </form>
</div><!-- Form Wrapper -->
<?php $this->end(); ?>
