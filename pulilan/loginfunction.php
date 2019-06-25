<?php
  if(isset($_POST["submit"])){

    $username =$_POST['username'];
    $password =$_POST['password'];

    $connection = mysqli_connect("localhost", "root", "","pulilan");
    $query = mysqli_query($connection,"SELECT * FROM mainuser_acc WHERE username='{$username}' AND password='{$password}' AND activate = '0'");
    $count = mysqli_num_rows($query);

    if ($query) {
      if ($count > 0) {
        while($row = $query->fetch_assoc()){
            $type = $row['type'];
            $user_id = $row['user_id'];
            $lol = $row['brgy_location'];
          


        }
        if($type === 'admin'){
            $_SESSION['name'] = $name;
            $_SESSION['username'] = $username;
            $_SESSION['user_id'] = $user_id;
            $_SESSION['type'] = $type;
            header("location: adminindex.php");
            exit();
        }
        elseif($type === 'official'){
            $_SESSION['username'] = $username;
            $_SESSION['user_id'] = $user_id;
            $_SESSION['type'] = $type;
            $_SESSION['lol'] = $lol;
            header("location: brgyindex.php");
            $_GET['log_id'];
            $connection = mysqli_connect("localhost", "root", "", "pulilan");
            $query = mysqli_query($connection, "INSERT INTO loghistory(username, timein, timeout, type) VALUES('$username', '$timein', '$timeout', '$type')");
            exit();
        }
        elseif($type == 'resident'){
            $_SESSION['name'] = $name;
            $_SESSION['position'] = $position;
            $_SESSION['username'] = $username;
            $_SESSION['user_id'] = $user_id;
            $_SESSION['type'] = $type;
            $_SESSION['lol'] = $lol;
            header("location: residentindex.php");
            exit();
        }
        elseif($type === 'dilg'){
            $_SESSION['username'] = $username;
            $_SESSION['user_id'] = $user_id;
            $_SESSION['type'] = $type;
            header("location: dilgindex.php");
            exit();
    }
     elseif($type === 'executive'){
            $_SESSION['username'] = $username;
            $_SESSION['user_id'] = $user_id;
            $_SESSION['type'] = $type;
            header("location: executiveindex.php");
            exit();
    }
        
      }
    }  
      else{

                echo'<script>';
               echo'alert("Incorrect!");';
               echo'window.location.href="login.php";';
               echo'</script>';
      }
}

  ?>