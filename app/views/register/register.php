<?php $this->setSiteTitle('Register'); ?>
<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>
<div id="form_wrapper">
    <h3 class="h text-center">Register Here!</h3>
    <form class="login_form" action="<?php echo FROOT;?>register/register" method="post">
        <div class="bg-danger">
          <?php echo $this->displayErrors; ?>
        </div>
        <div class="form-group">
            <label for="fname">First Name</label>
            <input type="text" name="fname" id="fname" class="form-control" placeholder="First Name" value="<?php echo $this->post['fname'];?>"/>
        </div><!--form-group-->
        <div class="form-group">
            <label for="lname">Last Name</label>
            <input type="text" name="lname" id="lname" class="form-control" placeholder="Last Name" value="<?php echo $this->post['lname'];?>"/>
        </div><!--form-group-->
        <div class="form-group">
            <label for="username">Choose a username</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="Choose a username" value="<?php echo $this->post['username'];?>"/>
        </div><!--form-group-->
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="Email" value="<?php echo $this->post['email'];?>"/>
        </div><!--form-group-->
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password" value="<?php echo $this->post['password'];?>"/>
        </div><!--form-group-->
        <div class="form-group">
            <label for="confirm_password">Confirm Password</label>
            <input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Confirm Password" value="<?php echo $this->post['confirm_password'];?>"/>
        </div><!--form-group-->

        <div class="button-wrap">
            <input type="submit" class="default-btn" value="Register"/>
            <a href="<?php echo FROOT;?>register/login" class="link text-right">Log In</a>
        </div> <!-- Button Wrap-->
    </form>
</div><!-- Form Wrapper -->
<?php $this->end(); ?>
