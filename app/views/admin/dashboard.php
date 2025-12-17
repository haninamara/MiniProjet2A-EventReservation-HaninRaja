<h1>Tableau de Bord Admin</h1>
<a href="index.php?action=add_event">Ajouter un événement</a>
<a href="index.php?action=logout">Déconnexion</a>

<table border="1">
    <tr>
        <th>Titre</th>
        <th>Date</th>
        <th>Actions</th>
    </tr>
    <?php if (!empty($events) && is_array($events)): ?>
    <?php foreach ($events as $event): ?>
        <tr>
            <td><?php echo $event['title']; ?></td>
            <td><?php echo $event['date']; ?></td>
            <td>
                <a href="index.php?action=edit_event&id=<?php echo $event['id']; ?>">Modifier</a> |
                <a href="index.php?action=delete_event&id=<?php echo $event['id']; ?>" onclick="return confirm('Supprimer ?')">Supprimer</a> |
                <a href="index.php?action=view_reservations&id=<?php echo $event['id']; ?>">Voir Inscriptions</a>            </td>
        </tr>
    <?php endforeach; ?>
<?php else: ?>
    <tr>
        <td colspan="3">Aucun événement trouvé</td>
    </tr>
<?php endif; ?>

</table>