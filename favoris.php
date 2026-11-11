<!DOCTYPE html>

<html>
    <head>
        <title>ACCUEIL - BUYPHONE</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        
        <header>
            <div id="logo-phone">
                <img src="images/logo.png" alt="logo buy phone">
            </div>
            <div class="header-text">
                <h1>BUY PHONE</h1>
                <p class="subtitle">Find the perfect smartphone at the best price</p>
            </div>
            <div class="retour">
                <a href="index.php" ><img width="24" height="24" src="https://img.icons8.com/fluency-systems-regular/48/home--v1.png" alt="home--v1"/></a> 
            </div>
        </header>
        <nav>
            <ul>
                <li><a href="index.php" class="menu-link">Phones</a></li>
                <li><a href="accessoire.php" class="menu-link">Accessoires</a></li>
                <li><a href="affaire.php" class="menu-link">Des Bons affaires</a></li>
                
            </ul>
        </nav>
  
        <main>
            <h2>Liste de fovoris</h2>
            <?php
            include "config.php";
            $id_t=htmlspecialchars($_POST['id_t']);

            $stmt=$pdo->prepare("select * from telephone where id_t = :id_t");
            $stm->execute([':id_t'=>$id_t]);
            $tab=$stm->fetchAll(PDO::FETCH_ASSOC)
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nom=htmlspecialchars($_POST["nom"]) ;
                $description=htmlspecialchars($_POST["description"]) ;
                $prix=htmlspecialchars($_POST["prix"]) ;
                $image=htmlspecialchars($_POST["image"]) ;
            }else{
                ?>
                <div class="favoris-grid">
                    <div class="favoris-card">
                        <div class="img-card">
                            <img src="<?php $image ; ?>">
                        </div>
                        <div class="inf-card">
                            <h3><?php $nom ;?></h3>
                            <p><?php $description ;?></p>
                            <p><?php $prix ;?></p>
                        </div>
                        <form action="panier.php" method="POST">
                                
                            <input type="hidden" name="nom" value="<?= htmlspecialchars($nom) ?>">
                            <input type="submit" class="btn-panier" value="Ajouter 🛒 ">

                        </form>

                    </div>


                </div>
            <?php 
            }?>
