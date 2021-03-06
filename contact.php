<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alexis Beucher - Portfolio</title>
    <link rel="icon" href="./img/favicon.ico" />
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/script.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Lato:wght@400;700&family=Nunito:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/09a639c3b1.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>  
    <header id="top">
        <div class="logo">
            <h1>Alexis Beucher</h1>
            <p>
                <i class="fa-solid fa-code fa-2xs fa-rotate-by" style="--fa-rotate-angle: 14deg;"></i>
                Developpeur Web Junior 
                <i class="fa-solid fa-code fa-2xs fa-rotate-by" style="--fa-rotate-angle: -14deg;"></i>
            </p>   
        </div>
        
        <nav class="navbar">
            <button><a href="./contact.php">Accueil</a></button>
        <button><a href="./contact.php">Contact</a></button>
            <!-- <ul class="nav">
                <li class="nav-item"><a href="./index.html">Accueil</a></li>
                <li class="nav-item"><a href="./contact.php">Contact</a></li>
            </ul> -->
        </nav>
    </header>
    <main class="page-content">
        
        <div class="col-1">
            
            <div class="service">
                <h2>Envie de prendre contact?</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique maiores impedit possimus asperiores tempora aliquid excepturi enim modi deserunt sit!</p>
            </div>
            
        </div>
        <div class="service">
        <?php
            if (isset($_POST['message'],($_POST['text']))) {
                    $retour = mail('contact@alexisbeucher.go.yj.fr', 'Envoi depuis la page Contact', $_POST['message'], $_POST['text'], 
                    'From: contact@alexisbeucher.go.yj.fr' . "\r\n" . 'Reply-to: ' . $_POST['email']);
                    if($retour)
                    echo '<h2>Message envoy??!</h2>';
            }
        ?>
        </div>
        <section class="card col-1">
        
                <div class="formulaire">
                        <form method="post">
                        
                                <fieldset>
                                        <legend>Mes coordonn??es</legend>
                                        <div class="field">
                                        <label for="text">Nom & pr??nom :</label>
                                        <div class="value"><input type="text" name="text" required></div>
                                        </div>
                                        <div class="field">
                                        <label for="email">Email :</label>
                                        <div class="value"> <input type="email" name="email" required></div>
                                        </div>
                                </fieldset>
                                <fieldset>
                                        <legend>Votre message</legend>
                                        
                                        <textarea name="message" id="query" required ></textarea>
                                </fieldset>
                                <div class="toolbar">
                                        <button type="submit" class="button">Envoyer</button>
                                </div>
                        </form>
                </div>
                
        </section>

    </main>

<footer>
 
    <p>d??velopper avec <i class="fa-regular fa-heart anim-heart"></i> par Alexis Beucher</p>
    <p><a href="#top">Revenir en haut du site</i></a></p>

</footer>
<script>
    $(window).resize(checkWidth);
</script>
</body>
</html>