<?php
$users = [
    ['name' => 'Jan Kowalski', 'email' => 'jan@example.com', 'active' => true],
    ['name' => 'Anna Nowak', 'email' => 'anna@example.com', 'active' => false],
    ['name' => 'Piotr Wiśniewski', 'email' => 'piotr@example.com', 'active' => true],
];
?>


<?php
if (!empty($users)) {
    echo "<table class=\" border='1'>";
    echo "<tr><th>Imię</th><th>Email</th><th>Status<th></tr>";
    foreach ($users as $user) {
        $status = $user['active'] ? 'Aktywny' : 'Nieaktywny';
        echo "<tr>";
        echo "<td>{$user['name']}</td>";
        echo "<td>{$user['email']}</td>";
        echo "<td>{$status}</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p>Brak użytkowników do wyświetlenia.</p>";
}
?>