<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>BUY PHONE</title>
        <link rel="stylesheet" href="style.css">

        <!-- Icônes -->
        <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    </head>

    <body>

        
    <?php
    if ($user) {

    $_SESSION['user_id'] = $user['id'];
    $_SESSION['nom'] = $user['nom'];

    header("Location: favoris.php");
    exit();

} else {

    echo "<script>alert('Email ou mot de passe incorrect');history.back();</script>";

}
    session_start();
    ?>
    <!-- Fenêtre -->
        <div class="modal" id="loginModal">

            <div class="login-box">

                <span class="close">&times;</span>

                <h1>Connexion</h1>

                <p>
                    Vous n'avez pas encore de compte ?
                    <a href="creer_c.php">Sign up for free</a>
                </p>

                <form action="compte.php" method="POST">

                    <input
                    type="email"
                    name="c_mail"
                    placeholder="Email"
                    required>

                    <input
                    type="password"
                    name="c_password"
                    placeholder="Password"
                    required>

                    <a href="#" class="forgot">
                        Mot de passe oublié ?
                    </a>

                    <input
                    type="submit"
                    value="Se connecter">

                </form>

            </div>

        </div>

        <script src="script.js"></script>

    </body>
</html>