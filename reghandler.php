<head>
<meta http-equiv="refresh" content="5; URL=../login.php" />
</head>
<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        include ('connection.php');
        $referal="ayushanitr";
        $email= $_POST['email'];
        $greferal= $_POST['referal'];
        $name=$_POST['name'];
        $pass= $_POST['password'];

        $secpass = password_hash($pass,PASSWORD_BCRYPT); 

        if($greferal==$referal)
        {
                $sql = " SELECT * FROM users where email_id ='$email' ";
                $result = mysqli_query($conn,$sql);
                $numRows = mysqli_num_rows($result);
                if($numRows==1)
                {
                    echo '
                    <script>
                        alert("Email already exist");
                    </script>
                    ';
                }
                else{
                    $sql = "INSERT INTO users (SL_NO,email_id,password,name) VALUES (NULL, '$email', '$secpass', '$name')";
                    $res = mysqli_query($conn,$sql);
                    if ($res) {
                        echo '
                        <script>
                        alert("You are successfully registered");
                    </script>
                        ';

                    } 
                    else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                  
                  $conn->close();
                }
        }
        else{
            echo '
            <script>
                        alert("Referal Incorrect kindly contact to president");
                    </script>
            ';
        }
    }
?>
<br>
<span style="font-size: 2em;">Don't Refresh. redirecting to login in 5sec</span><br>
<span>not redirect. click here</span><a href="login.php">login</a><br>
</body>
