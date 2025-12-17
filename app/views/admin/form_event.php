<h2><?php echo isset($event) ? "Modifier l'événement" : "Ajouter un événement"; ?></h2>

<form action="index.php?action=save_event" method="POST">
    <input type="hidden" name="id" value="<?php echo $event['id'] ?? ''; ?>">

    <label>Titre :</label>
    <input type="text" name="title" value="<?php echo $event['title'] ?? ''; ?>" required>

    <label>Lieu :</label>
    <input type="text" name="location" value="<?php echo $event['location'] ?? ''; ?>" required>

    <label>Date :</label>
    <input type="datetime-local" name="date" 
           value="<?php echo isset($event['date']) ? date('Y-m-d\TH:i', strtotime($event['date'])) : ''; ?>" required>

    <label>Description :</label>
    <textarea name="description"><?php echo $event['description'] ?? ''; ?></textarea>

    <label>Nombre de places :</label>
    <input type="number" name="seats" value="<?php echo $event['seats'] ?? ''; ?>" required>

    <button type="submit">Enregistrer</button>
</form>