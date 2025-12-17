<h2>Réservations pour : <?php echo htmlspecialchars($event['title']); ?></h2>
<a href="index.php?action=admin_dashboard">Retour au tableau de bord</a>

<table border="1" style="width:100%; margin-top:20px; border-collapse: collapse;">
    <thead>
        <tr style="background-color: #f2f2f2;">
            <th>Nom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Date d'inscription</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($reservations)): ?>
            <?php foreach ($reservations as $res): ?>
                <tr>
                    <td><?php echo htmlspecialchars($res['name']); ?></td>
                    <td><?php echo htmlspecialchars($res['email']); ?></td>
                    <td><?php echo htmlspecialchars($res['phone']); ?></td>
                    <td><?php echo $res['created_at']; ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="4" style="text-align:center;">Aucune réservation pour cet événement.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
