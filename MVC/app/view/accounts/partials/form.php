<?php $this->setSiteTitle('User Registration'); ?>

<?php $this->start('head'); ?>
<script src="<?=PROOT.'/js/register_form_validate.js'?>"></script>
<?php $this->end(); ?>

<?php $this->start('body'); ?>
<div class="col-md-3 col-md-offset-3 well">
    <h3 class="text-center"> Register  </h3>

        <form class="form" action="" method="post"> 
        <div><?=$this->displayErrors ?></div>
        <div class="form-group">
            <div>
                <label for="username"><h4>User Name</h4></label><br>
                <input 
                type="text" 
                name="username" 
                id="username" 
                required
                class="form-control"
                value="<?=$this->$account->username ?>">
            </div>


<!--             <div>
                <label for="email"><h4>Email</h4></label>
                <input 
                type="text" 
                name="email" 
                id="email" 
                class="form-control" 
                required
                title="must be a valid email address"
                value="<?=$this->post['email'] ?>">
            </div>
 -->
<!--             <div>
                <label for="username"><h4>Username</h4></label>
                <input 
                type="text" 
                name="username" 
                id="username" 
                class="form-control" 
                required
                value="<?=$this->post['username'] ?>">
            </div> -->
            <div>
                <label for="password"><h4>Password</h4></label>
                <input 
                type="password" 
                name="password" 
                id="password" 
                class="form-control" 
                required
                value="<?=$this->post['password'] ?>">
            </div>
            <div>
                <label for="confirm"><h4>Confirm Password</h4></label>
                <input 
                type="password" 
                name="confirm" 
                id="confirm" 
                class="form-control" 
                required
                value="<?=$this->post['confirm'] ?>">
            </div>
            <div>
                <label for="address"><h4>Address</h4></label>
                <input 
                type="text" 
                name="address" 
                id="address" 
                class="form-control" 
                required
                title="must be a valid address"
                value="<?=$this->post['address'] ?>">
            </div>

            <div>
                <label for="contactnumber"><h4>Contact Number 2</h4></label>
                <input 
                type="text" 
                name="contactnumber" 
                id="contactnumber" 
                class="form-control" 
                title="must be a valid Phone number"
                value="<?=$this->post['contactnumber'] ?>">
            </div>
        </div>
        
        <div class="text-center">
            <input type="submit" class="btn btn-xs btn-primary" value="register" >
        </div>
        <div class = "col-md-12 text-center">
        <a href="<?=PROOT?>" class="btn btn-default"> Cancel </a>
    </form>
</div>
<?php $this->end(); ?>