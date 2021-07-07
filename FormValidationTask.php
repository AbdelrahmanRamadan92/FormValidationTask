<!DOCTYPE html>
<html>
<body>

<h2>Form Validation </h2>

<?php 
function CleanInputs($input){

    $input = trim($input);
    $input = stripcslashes($input);
    $input = htmlspecialchars($input);
    
    return $input;
    }

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $email    = CleanInputs($_POST['email']);
        $v_email = filter_var($email,FILTER_VALIDATE_EMAIL);
        $url = CleanInputs($_POST['url']);
        $v_url = filter_var($url,FILTER_VALIDATE_URL);
        $password    = CleanInputs($_POST['password']);
        if($password < 6)
        {
            echo "error password lesser than 6 ";
        }
        else
        {
        echo "Email :".$v_email.'<br>'."Password :".$password.'<br>'."LinkedInAccount :". $v_url;
        }
    }
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email"><br>
  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password"><br>
  <label for="url">LinkedInAccount:</label><br>
  <input type="text" id="url" name="url"><br><br>
  <input type="submit" value="Submit">
</form> 



</body>
</html>



