<?php 
    $errorMessage ="";
    $succesMessage ="";
    if ($_POST){
        if ($_POST["email"]=="" || filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)==false){
            $errorMessage .="Your email is incorrect.<br>";
        }
        if ($_POST["subject"]==""){
            $errorMessage .="You are missing your subject.<br>";
        }
        if ($_POST["message"]==""){
            $errorMessage .="You are missing your message.<br>";
        }
        if ($errorMessage!=""){
            echo '<div class="alert alert-danger" role="alert">There are some errors:<br>'.$errorMessage.'</div>';
        }
        else{
            $emailTo="tieuvinhkhang3004@gmail.com";
            $emailFrom="From: ".$_POST["email"];
            $subject=$_POST["subject"];
            $message=$_POST["message"];
            if (mail($emailTo,$subject,$message,$emailFrom)){
                echo '<p class="alert alert-success" role="alert"> Your message has been sent!</p>';
            }
            else{
                echo '<p class="alert alert-warning" role="alert"> Oops! There are problems encounter when sending this email, please try again later!</p>';
            }
        }
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Contact me!</title>
  </head>
  <body>
    <div class="container">
        <h1>GET IN TOUCH WITH ME</h1>
        <div>
            <? $errorMessage.$succesMessage;?>
        </div>
        <form method="post">
            <fieldset class="form-group">
                <label for="email">Email:</label>
                <input class="form-control" name="email" placeholder="Enter email">
            </fieldset>
            <fieldset class="form-group">
                <label for="subject">Subject:</label>
                <input class="form-control" name="subject">
            </fieldset>
            <fieldset class="form-group">
                <label for="message">Message:</label>
                <textarea class="form-control" name="message" rows="3"></textarea>
            </fieldset>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>