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
            <diV id="header-inf">
                <a href="https://www.buyphone.com" target="_blank"><img src="https://img.icons8.com/material/24/facebook-new.png" alt="Facebook"></a>
                
                <a href="https://www.buyphone.com" target="_blank"><img src="https://img.icons8.com/material-outlined/24/instagram-new--v1.png" alt="instagram-new--v1"/></a>
                <a href="panier.php"><img width="24" height="24" src="https://img.icons8.com/ios-glyphs/30/shopping-cart-loaded.png" alt="shopping-cart-loaded"/></a>
                <a href="favoris.php"><img width="24" height="24" src="https://img.icons8.com/ios-filled/50/like--v1.png" alt="like--v1"/></a>
            </div>
            <div class="search-box">
                <form action="recherche.php" method="POST">
                    <input type="text" placeholder="Rechercher ..." name="q">
                    <button type="submit">🔍</button>
                </form>
            </div>
        </header>
        <nav>
            <ul>
                <li><a href="index.php" class="menu-link">Téléphones</a></li>
                <li><a href="accessoire.php" class="menu-link">Accessoires</a></li>
                <li><a href="affaire.php" class="menu-link">Bons Affaires</a></li>
                
            </ul>
        </nav>
        <main>
            <section id="offres">
                
                <div class="offres-grid">
                    <?php include 'config.php' ;?>
                    <?php

                    $stmt = $pdo->query("SELECT * FROM bon_plans ") ;
                        
                    $offres = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    if (count($offres) == 0) {
                        echo "Aucune bon plan disponible." ;
                    }else{
                        foreach ($offres as $offre): ?>


                            <div class="phone-card">
                                <form action="panier.php" method="POST">
                                    
                                    <?php if($offre['disponible']): ?>

    
                                        <input type="hidden" name="nom" value="<?= $offre['nom_b'] ?>">

                                        <button type="submit">
                                            <img src="<?= $offre['image_b'] ?>" alt="<?= $offre['nom_b'] ?>">
                                        </button>


                                    <?php else: ?>
                                        <input type="hidden" name="nom" value="<?= $offre['nom_b'] ?>">

                                        <button type="submit" >
                                            <img src="<?= $offre['image_b'] ?>" alt="<?= $offre['nom_b'] ?>">
                                        </button>
                                    <?php endif; ?>
                                    
                                </form>

                            </div>
                        

                        <?php endforeach; ?>
                    <?php }; ?>
                </div>
            </section>
        </main>


    
        <?php include 'footer.php' ; ?>
    </body>
</html>


