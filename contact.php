<?php
// Initialisation des variables pour éviter les erreurs "undefined"
$affichage = "";

// On vérifie si le formulaire a été soumis via la méthode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données (Objectif du TP)
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Préparation de l'affichage (Objectif du TP)
    $affichage = "<div class='card' style='background: #d4edda; border: 1px solid #c3e6cb; padding: 15px; margin-top: 20px;'>
                    <h4>Message Reçu !</h4>
                    <p><strong>Nom :</strong> $nom</p>
                    <p><strong>Email :</strong> $email</p>
                    <p><strong>Message :</strong> $message</p>
                  </div>";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contact - <?php echo "BALAGIZI PANZU KETIA"; ?></title>
    <style>

          :root{--accent:#1e88e5;--muted:#666;}
        body{font-family:Segoe UI,Roboto,Arial;margin:0;background:#a5bfb8a9;color:#222}
        .container{max-width:900px;margin:32px auto;background:#e5efe886;padding:28px;border-radius:8px;box-shadow:0 6px 20px rgba(20,30,50,.08)}
        header{display:flex;align-items:center;gap:20px;border-bottom:1px solid #eee;padding-bottom:18px;margin-bottom:18px}
        .photo{width:110px;height:110px;border-radius:8px;background:linear-gradient(135deg,var(--accent),#6ec6ff);display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700}
        h1{margin:0;font-size:22px}
        .meta{font-size:14px;color:var(--muted)}
        .cols{display:grid;grid-template-columns:1fr 320px;gap:22px}
        section{margin-bottom:14px}
        .card{background:#fbfdff;padding:14px;border-radius:6px;border:1px solid #f0f4fb}
        ul{margin:8px 0 0 18px;padding:0}
        .skill{display:flex;justify-content:space-between;font-size:14px;margin:6px 0}
        .progress{height:8px;background:#e6eefc;border-radius:6px;overflow:hidden;margin-top:6px}
        .bar{height:100%;background:var(--accent)}
        footer{font-size:13px;color:var(--muted);text-align:center;margin-top:18px}
        @media(max-width:800px){.cols{grid-template-columns:1fr;}.photo{display:none}}
        a{color:var(--accent);text-decoration:none;font-size:14px}
        a:hover{text-decoration:underline}
        input, textarea { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 4px; }
        button { background: #1e88e5; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Contactez-moi</h2>
        <form action="contact.php" method="POST">
            <input type="text" name="nom" placeholder="Votre Nom" required>
            <input type="email" name="email" placeholder="Votre Email" required>
            <textarea name="message" rows="5" placeholder="Votre Message" required></textarea>
            <button type="submit">Envoyer le message</button>
        </form>

        <?php echo $affichage; ?>
        
        <p><a href="index.html">Retour au CV</a></p>
    </div>
</body>
</html>