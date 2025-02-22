<?php
include 'config.php';

$query = "SELECT * FROM parking_slots";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parking Slot System</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <h1>Parking Slot System</h1>
    <table>
        <tr>
            <th>Slot Number</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['slot_number'] ?></td>
                <td class="<?= $row['status'] ?>"><?= ucfirst($row['status']) ?></td>
                <td>
                    <?php if ($row['status'] == 'available'): ?>
                        <button class="book-btn" data-id="<?= $row['id'] ?>">Book</button>
                    <?php else: ?>
                        <button class="release-btn" data-id="<?= $row['id'] ?>">Release</button>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
