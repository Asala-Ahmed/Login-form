<?php
session_start();
 $conn = new mysqli('localhost', 'root', '', 'registration') or die(mysql_error());
 $mail=$_POST['email'];
 $pass=md5($_POST['pass']);
 // Check connection
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  if($mail!=null && $pass!=null)
  {
    $query = "SELECT * FROM user where email ='$mail' AND password = '$pass'";
    $result = $conn->query($query);
    if(mysqli_num_rows($result) > 0)
    {
      $row=$result->fetch_assoc();
      $username = $row["NAME"];
      echo "welcome $username";
 
    }
    else
    {
      echo "invalid user name or pasword";
      ?><html>
          <body>
            <form action="loginform.html">
              <button type="submit">Ok</button>
            </form>
          </body>
        </html>
        <?php
    }
  }
 $conn->close();
   ?>