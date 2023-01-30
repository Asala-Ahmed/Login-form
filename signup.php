<?php
session_start();
 $conn = new mysqli('localhost', 'root', '', 'registration') or die(mysql_error());
 $mail=$_POST['email'];
 $name=$_POST['name'];
 $pass=md5($_POST['pass']);
 // Check connection
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "INSERT INTO user (email, name, password)
 VALUES ('$mail','$name','$pass')";
 $query2 = "SELECT * FROM user email where email='$mail'";
 $result = $conn->query($query2);
  if(mysqli_num_rows($result) > 0)
  {
    echo "email already exists";
    ?><html>
          <body>
            <form action="signupform.html">
              <button type="submit">Ok</button>
            </form>
          </body>
        </html>
        <?php
  }else{
        
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
   } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
 }

$conn->close();
  ?>