<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Événements</title>
    <link rel="stylesheet" href="css/style.css"> </head>
<body>
    <h1>Événements à venir</h1>
    
    <div class="event-container">
        <?php if (!empty($events)): ?>
            <?php foreach ($events as $event): ?>
                <div class="event-card">
                    <h2><?php echo htmlspecialchars($event['title']); ?></h2>
                    <p><strong>Lieu :</strong> <?php echo htmlspecialchars($event['location']); ?></p>
                    <p><strong>Date :</strong> <?php echo $event['date']; ?></p>
                    <a href="index.php?action=details&id=<?php echo $event['id']; ?>">Voir détails</a>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Aucun événement trouvé.</p>
        <?php endif; ?>
    </div>
</body>
</html>