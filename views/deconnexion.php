<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deconnexion_Profil</title>
    <link rel="stylesheet" href="./../css/deconnexion.css">
</head>
<body>
    <div class="deconnexion-wrapper">
    <div class="deconnexion-card">
        <p>Voulez-vous vraiment vous déconnecter ? </p>
        <div class="buttons-container">
            <form action="./../controllers/deconnexion_controller.php" method="POST">
                <button type="submit" class="action-btn">OUI</button>
            </form>
            <form action="./profil.php" method="GET">
                <button type="submit" class="action-btn">NON</button>
            </form>
        </div>
    </div>
    </div>
 
    
</body>
</html>