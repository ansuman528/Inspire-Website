<?php
    include ('partials\connection.php');
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $referal="ayushanitr";
        $email= $_POST['email'];
        $greferal= $_POST['referal'];
        $pass= $_POST['password'];
        $conn = new mysqli($servername, $username, $password, $database);
            // Check connection
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }
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
                    $sql = "INSERT INTO users (SL_NO,email_id,password)
                    VALUES (SL_NO, '$email', '$pass')";
                    if ($conn->query($sql) === TRUE) {
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
<a style="" href="registration.php">signup</a><br>
<a href="login.php">login</a>