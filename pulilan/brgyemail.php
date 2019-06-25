<?php include 'functions.php'; ?>
<?php email_send() ?>
<?php include('../pulilan/brgynav.php'); ?>

    <div class="row">
        <!-- Page Header -->
        <div class="col-lg-12">
            <h1 class="page-header"> E-mail</h1>
        </div>
        <!--End Page Header -->
    </div>

    <!--******************************Content*********************************-->
    <form method="POST"> 

        <input type="email" class="form-control col col-lg-4 col-md-4" name="email" placeholder="your email">

        <textarea cols="30" rows="10" type="text" name="fullname" placeholder="Write something.." style="height:200px"></textarea>
        
        <input type="submit" name="send" name="send">
    </form>

    <!--****************************End Content*******************************-->
            
<?php include('../pulilan/adminfooter.php'); ?>