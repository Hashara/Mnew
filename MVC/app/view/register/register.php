<?php $this->setSiteTitle('User Registration'); ?>

<?php $this->start('head'); ?>
<script src="<?=PROOT.'/js/register_form_validate.js'?>"></script>
<?php $this->end(); ?>

<?php $this->start('body'); ?>
<div class="container">
    <h3 class="text-center p-4"> Register  </h3>
        <form class="form" action="" method="post"> 
            <div class= "col-6">
                <label for="username">Username*</label>
                <input type="text" name="username" id="username" class="form-control" required value="<?=$this->post['username'] ?>">
            </div>
            <div class="form-row col">
                <div class="col">
                    <label for="password">Password*</label>
                    <input type="password" name="password" id="password" class="form-control" required value="<?=$this->post['password'] ?>">
                </div>
                <div class="col">
                    <label for="confirm">Confirm Password*</label>
                    <input type="password" name="confirm" id="confirm" class="form-control" required value="<?=$this->post['confirm'] ?>">
                </div>
            </div>
            </div>
            <div class="col-6">
                <label for="address">Address*</label>
                <input type="text" name="address" id="address" class="form-control" required title="must be a valid address"value="<?=$this->post['address'] ?>">
            </div>
            <div class="col-6">
                <label for="contactnumber">Contact Number</label>
                <input type="text" name="contactnumber" id="contactnumber" class="form-control" title="must be a valid Phone number"value="<?=$this->post['contactnumber'] ?>">
            </div>
            <div><?=$this->displayErrors ?></div>
            <div class="text-center">
                <input type="submit" class="btn btn-xs btn-primary" value="Register" >
            </div>
        <div class = "col-md-12 text-center">
        <a href="<?=PROOT?>" class="btn btn-default"> Cancel </a>
        </div>
    </form>
</div>
<script type="text/javascript">
    function disableCustomer(){
        //code to diasble
    }
</script>
<?php $this->end(); ?>