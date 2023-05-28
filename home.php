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
            
            <script src="AggiungiRimuoviPreferiti.js" defer="true"></script>
            <script src="home.js" defer="true"></script>

            <meta name="viewport" content="width=device-width, initial-scale=1">
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
                            
                            <img classe="icona"   src="https://dissidiadb.com/static/img/chocobo.9505311.png" />
                            
                            
                            <div id="menu">
                                    
                                <a id="cerca"href=Cerca.php>Cerca Personaggi</a>
                                <a id="preferiti" href=Preferiti.php>Preferiti</a>
                                <a id="CercaGiochi"href=CercaGiochi.php>Cerca dei giochi della saga</a>
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
                        <h1>Ecco alcuni dei personaggi della saga</h1>
                    </div>

                    <div id="pers"> </div>

                </section>

                <footer>
                    <p>Davide Consoli<br/>A.A. 2022/2023</p>
                </footer>
                
            </article>

        </body>

    </html>