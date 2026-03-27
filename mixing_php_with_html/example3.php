<?php
$users = [
    ['name' => 'Jan Kowalski', 'email' => 'jan@example.com', 'active' => true],
    ['name' => 'Anna Nowak', 'email' => 'anna@example.com', 'active' => false],
    ['name' => 'Piotr Wiśniewski', 'email' => 'piotr@example.com', 'active' => true],
];
?>

<?php if (!empty($users)): ?>
    <table border="1">
        <tr><th>Imię</th><th>Email</th><th>Status</th></tr>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user['name'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['active'] ? 'Aktywny' : 'Nieaktywny' ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php else: ?>
    <p>Brak użytkowników do wyświetlenia.</p>
<?php endif; ?>