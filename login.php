<?php
    session_start();

    if(isset($_SESSION['username'])){
        header("Location: Home.php");
        exit;
    }

    if(!empty($_POST["user"]) && !empty($_POST["password"])){

        $conn=mysqli_connect("localhost","root","","utenti")or die(mysqli_connect_error());

        $username= mysqli_real_escape_string($conn,$_POST["user"]);

        $password= mysqli_real_escape_string($conn,$_POST["password"]);

        $query="SELECT userID,pass from utenti where userID='".$username."'";


        $res=mysqli_query($conn,$query)or die(mysqli_error($conn));

        if(mysqli_num_rows($res)>0){

            $entry=mysqli_fetch_assoc($res);

            if(password_verify($_POST['password'],$entry['pass']) && $_POST['user']== $entry['userID']){
                $_SESSION["username"]=$_POST["user"];
                header("Location: Home.php");
                mysqli_free_result($res);
                mysqli_close($conn);
                exit;
            }else{
                $errore=true;
            }

        
        }else{
            $errore=true;
        }
        
        
    }

?>


<!DOCTYPE html> 
  <html>
    <head>
        <title>FF World LOG_IN</title>
        <script src="login.js" defer="true"></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation:wght@400;600&display=swap" rel="stylesheet">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="login.css"/>
    </head>
    <body>
        
        <section> 
            
                <h1>LOGIN:</h1>
                <form id="form" name="login" method="post" >

                    <label>UserName <input type='text' name='user'></label>

                    <label>Password <input type='password' name='password'></label>

                    <label id="ricerca"> <input  id="submit"type='submit'></label>

            <div id=errore>
                <?php 
                    if(isset($errore))
                        echo "<h1>Credenziali errate</h1>"; 
                ?>
            </div>
                
                </form>
            <a href=Registrazione.php>Registrati ora</a>
                
        </section>

    </body>

  </html>

