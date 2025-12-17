
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiniEvent - Gestion d'Événements</title>
    <link rel="stylesheet" href="css/style.css"> </head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php?action=list">Accueil</a></li>
                <?php if(isset($_SESSION['admin_id'])): ?>
                    <li><a href="index.php?action=admin_dashboard">Dashboard Admin</a></li>
                <?php else: ?>
                    <li><a href="index.php?action=admin_login">Connexion Admin</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>
    <main class="container">