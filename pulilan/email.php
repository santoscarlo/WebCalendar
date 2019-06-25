<?php include 'functions.php'; ?>
<?php email_send() ?>
<?php include('../pulilan/adminnav.php'); ?>

    <div class="row">
        <!-- Page Header -->
        <div class="col-lg-12">
            <h1 class="page-header"> E-mail</h1>
        </div>
        <!--End Page Header -->
    </div>

    <!--******************************Content*********************************-->
    <form method="POST"> 
        <input type="email" name="email" placeholder="your email"><br/><br>
        <textarea cols="30" rows="10" type="text" name="fullname" placeholder="Comment..."></textarea>
        <br /><br />
        <input type="submit" name="send" name="send">
    </form>

    <!--****************************End Content*******************************-->
            
<?php include('../pulilan/adminfooter.php'); ?>