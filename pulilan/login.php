<?php


session_start();

?>
<?php include 'minnav.php'; ?>

                        <a class="img img-responsive" href="nlanding.php">
                          <img class="col col-lg-12 col-md-12 col-sm-12 col-xs-12" src="../pulilan/img/plogo.png" alt="pulilan logo"/>
                        </a>
                        <h1 class="panel-title fa fa-user" style="text-shadow: 1px 1px 2px red, 0 0 25px orange, 0 0 5px yellow;"> CBMS 2017 | Login Form</h1>
                    </div>
                    <div class="panel-body">
                        <form method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" name="submit" value="LOGIN" class="btn btn-outline btn-success btn-block">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

    <?php include 'loginfunction.php'; ?>
    <?php include 'minfooter.php'; ?>