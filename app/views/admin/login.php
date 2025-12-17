<?php include_once '../app/views/partials/header.php'; ?>
<h2>Connexion Administration</h2>
<form action="index.php?action=admin_login" method="POST">
    <label>Nom d'utilisateur :</label>
    <input type="text" name="username" required>
    
    <label>Mot de passe :</label>
    <input type="password" name="password" required>
    
    <button type="submit">Se connecter</button>
</form>
<?php include_once '../app/views/partials/footer.php'; ?>