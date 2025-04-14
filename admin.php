<?php
$conn = new mysqli("localhost", "root", "", "db_login");
$data = $conn->query("SELECT * FROM akun");
?>
<h2>Data Akun</h2>
<table border="1">
<tr><th>ID</th><th>Email</th><th>Password</th><th>Waktu</th></tr>
<?php while ($row = $data->fetch_assoc()): ?>
<tr>
  <td><?= $row['id'] ?></td>
  <td><?= $row['email'] ?></td>
  <td><?= $row['password'] ?></td>
  <td><?= $row['waktu'] ?></td>
</tr>
<?php endwhile; ?>
</table>