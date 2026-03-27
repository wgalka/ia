<?php
$users = [
    ['name' => 'Jan Kowalski', 'email' => 'jan@example.com', 'active' => true],
    ['name' => 'Anna Nowak', 'email' => 'anna@example.com', 'active' => false],
    ['name' => 'Piotr Wiśniewski', 'email' => 'piotr@example.com', 'active' => true],
];
?>


<?php if (!empty($users)) { ?>
    <table border="1">
        <tr><th>Imię</th><th>Email</th><th>Status</th></tr>
        <?php foreach ($users as $user) { ?>
            <tr>
                <td><?php echo $user['name']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td><?php echo $user['active'] ? 'Aktywny' : 'Nieaktywny'; ?></td>
            </tr>
        <?php } ?>
    </table>
<?php } else { ?>
    <p>Brak użytkowników do wyświetlenia.</p>
<?php } ?>