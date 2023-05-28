<?php
    session_start();

    if(!isset($_SESSION['username'])){
        header("Location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
    <html>
            <head>
                <title >Final Fantasy World </title>
                <script src="CercaGiochi.js" defer="true"></script>
                <link rel="stylesheet" href="home.css"/>
                <link rel="stylesheet" href="CercaGiochi.css"/>

                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation:wght@400;600&display=swap" rel="stylesheet"> 
            </head>

            <body>
                <article>
          <header> 

                

                    <nav>
                    
                        <div id="intestazione">
                            
                            <img classe="icona"   src="https://dissidiadb.com/static/img/chocobo.9505311.png"/>
                            
                            
                            <div id="menu">
                                <a id="home"href="home.php">Home</a>
                                <a id="cerca"href=Cerca.php>Cerca Personaggi</a>
                                <a id="preferiti" href=Preferiti.php>Preferiti</a>
                                <a id="logout"href=logout.php>Logout</a>
                                    

                            </div>
                        </div>
                       
                        <h1>
                            <strong>Final Fantasy World</strong><br/>
                        </h1>

                    </nav>

                    
                </header>

               <section>
                <div id="titolo">
                <h1>Qui puoi cercare la miglior offerta per acquistare il tuo gioco</h1>
                </div>
<div id="form"> 
  <form id="ricerca">
    <label>Nome gioco:  
      <input type='text' id='contenuto'>
    <input type="submit" value="cerca" id="btn-ricerca">
</label>
  </form>
</div>


<div id="offerte"></div>
</section>

                    <footer>
                        <p>Davide Consoli 1000016099<br/>A.A. 2022/2023</p>
                    </footer>

                </article>
            </body>
    </html>