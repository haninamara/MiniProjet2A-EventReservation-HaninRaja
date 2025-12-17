<?php
include_once '../app/views/partials/header.php'; 
if (!isset($event) || !is_array($event)) {
    echo "<p>Événement non trouvé.</p>";
    return; 
}
?>
<div class="event-details">
    <h1><?= htmlspecialchars($event['title'] ?? 'Titre indisponible') ?></h1>
    <p><?= htmlspecialchars($event['description'] ?? 'Description indisponible') ?></p>
    <p><strong>Date :</strong> <?= htmlspecialchars($event['date'] ?? 'Date indisponible') ?></p>
    <p><strong>Lieu :</strong> <?= htmlspecialchars($event['location'] ?? 'Lieu indisponible') ?></p>
</div>

<hr>

<h3>Réserver votre place</h3>
<form action="index.php?action=reserve" method="POST">
    <input type="hidden" name="event_id" value="<?= htmlspecialchars($event['id'] ?? '') ?>">

    <label>Nom complet :</label>
    <input type="text" name="name" required>

    <label>Email :</label>
    <input type="email" name="email" required>

    <label>Téléphone :</label>
    <input type="text" name="phone" required>

    <button type="submit">Confirmer la réservation</button>
</form>
<?php include_once '../app/views/partials/footer.php'; ?>