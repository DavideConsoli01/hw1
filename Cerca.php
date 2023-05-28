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
            <title >Final Fantasy World</title>
            
            <script src="AggiungiRimuoviPreferiti.js" defer="true"></script>
            <script src="Cerca.js" defer="true"></script>

            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="home.css"/>
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
                                     
                                <a id="home"href=home.php>Home</a>
                                <a id="preferiti" href=Preferiti.php>Preferiti</a>
                                <a id="CercaGiochi"href=CercaGiochi.php>Cerca i giochi della saga</a>
                                <a id="logout"href=logout.php>Logout</a>
                                    

                            </div>
                        </div>
                       
                       

                    </nav>

                    
                </header>

                <section>

                <div id="titolocerca">
                           <h1>Cerca qualche personaggio</h1>
                </div>
                
                    <div id="Ricerca">

                    <input type="text" id="barra-ricerca" />
                    <button id="btn-ricerca">cerca</button>
                    
                    </div>

                    <div id="risultati"> </div>
                      

                </section>
    
            
            <footer>
       
            <p>Davide Consoli 1000016099</p>
       
    </footer> 
    </article>

        </body>

    </html>
