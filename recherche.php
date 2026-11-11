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
                <a href="index.php" ><img width="24" height="24" src="https://img.icons8.com/fluency-systems-regular/48/home--v1.png" alt="home--v1"/></a> 
                <a href="https://www.buyphone.com" target="_blank"><img src="https://img.icons8.com/material/24/facebook-new.png" alt="Facebook"></a>
                <a href="https://www.buyphone.com" target="_blank"><img src="https://img.icons8.com/material-outlined/24/instagram-new--v1.png" alt="instagram-new--v1"/></a>
                <a href="panier.php"><img width="24" height="24" src="https://img.icons8.com/ios-glyphs/30/shopping-cart-loaded.png" alt="shopping-cart-loaded"/></a>
                <a href="favoris.php"><img width="24" height="24" src="https://img.icons8.com/ios-filled/50/like--v1.png" alt="like--v1"/></a>
            </div>
        </header>
        <?php include 'config.php' ;
        $q = $_POST['q'];

        $stmt1 = $pdo->prepare("SELECT * FROM telephone WHERE nom_t LIKE :q");
        $stmt1->execute([
            ':q' => '%' . $q . '%'
        ]);

        $telephones = $stmt1->fetchAll(PDO::FETCH_ASSOC);

        $stmt2 = $pdo->prepare("SELECT * FROM accessoires WHERE nom_a LIKE :q");
        $stmt2->execute([
            ':q' => '%' . $q . '%'
        ]);

        $accessoires= $stmt2->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <main>
            <section id="offres">
                <div class="offres-grid">
                        <?php include 'config.php' ;?>
                        <?php
                        if (count($telephones) > 0) {
                            foreach ($telephones as $telephone): ?>
                                <div class="phone-card">
                                    <?php if ($telephone['promo']): ?>
                                        <span class="promo-badge">PROMO -10%</span>
                                    <?php  endif; ?>
                                    <img src="<?php echo htmlspecialchars($telephone['image_t']); ?>"
                                    alt="<?php echo htmlspecialchars($telephone['nom_t']); ?>">
                                    <h3><?php echo htmlspecialchars($telephone['nom_t']); ?></h3>
                                    <p><?php echo htmlspecialchars($telephone['description_t']); ?></p> 
                                    <?php if ($telephone['promo']=="true"): ?>
                                    <?php $prixRemise = $telephone['prix_t'] * 0.9 ;?>
                                        <p>
                                            <span class="price-old"><?php echo (int) $telephone['prix_t']; ?> Dinar</span><br>
                                            À partir de <strong class="price-new"><?php echo (int) $prixRemise; ?> Dinar</strong>
                                        </p>
                                    <?php else: ?>
                                        <p>À partir de <strong><?php echo (int) $telephone['prix_t']; ?> Dinar</strong></p>
                                    <?php endif; ?>
                                    <div class="btn">
                                        <form action="list_panier.php" method="POST">
                                                
                                            <input type="hidden" name="nom" value="<?= htmlspecialchars($telephone['id_t']) ?>">
                                            <input type="submit" class="btn-panier" value="Ajouter 🛒 ">

                                        </form>
                                    
                                    </div>
                            </div>
                        <?php endforeach;
                            
                        }elseif (count($accessoires) > 0){
                            foreach ($accessoires as $accessoire): ?>
                                <div class="phone-card">
                                    <?php if ($accessoire['promo_a']): ?>
                                        <span class="promo-badge">PROMO -10%</span>
                                    <?php  endif; ?>
                                    <img src="<?php echo htmlspecialchars($accessoire['image_a']); ?>"
                                    alt="<?php echo htmlspecialchars($accessoire['nom_a']); ?>">
                                    <h3><?php echo htmlspecialchars($accessoire['nom_a']); ?></h3>
                                    <p><?php echo htmlspecialchars($accessoire['descreption_a']); ?></p> 
                                    <?php if ($accessoire['promo_a']=="true"): ?>
                                    <?php $prixRemise = $accessoire['prix_a'] * 0.9 ;?>
                                        <p>
                                            <span class="price-old"><?php echo (int) $accessoire['prix_a']; ?> Dinar</span><br>
                                            À partir de <strong class="price-new"><?php echo (int) $prixRemise; ?> Dinar</strong>
                                        </p>
                                    <?php else: ?>
                                        <p>À partir de <strong><?php echo (int) $accessoire['prix_a']; ?> Dinar</strong></p>
                                    <?php endif; ?>
                                    <div class="btn">
                                        <form action="list_panier.php" method="POST">
                                                
                                            <input type="hidden" name="nom" value="<?= htmlspecialchars($accessoire['id_a']) ?>">
                                            <input type="submit" class="btn-panier" value="Ajouter 🛒 ">

                                        </form>
                                    </form>
                                </div>
                            </div>
                        <?php endforeach;}
                        else{
                            echo "aucun produit trouvée .";
                        }?>
                    </div>
                            
                        
                        
                            
                </section>

        </main>
        <?php include 'footer.php' ; ?>
    </body>
</html>


            

