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
                <script src="VisualizzaPreferiti.js" defer="true"></script>
                <link rel="stylesheet" href="home.css"/>

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
                                    <a id="home"href=home.php>Home</a>
                                    <a id="cerca"href=Cerca.php>Cerca altri personaggi</a>
                                    <a id="CercaGiochi" href=CercaGiochi.php>Cerca i giochi della saga</a>
                                    <a id="logout"href=logout.php>Logout</a>
                                        
                                </div>
                            </div>
                        
                           

                        </nav>


                    </header>
                    
                    <section>
                        <div id="titoloPreferiti">
                            <h1>Ecco qui i tuoi personaggi preferiti <?php echo$_SESSION['username']?></h1>
                        </div>
                        <div id="pers_preferiti"> </div>
                    </section>

                    <footer>
                        <p>Davide Consoli 1000016099<br/>A.A. 2022/2023</p>
                    </footer>

                </article>
            </body>
    </html>