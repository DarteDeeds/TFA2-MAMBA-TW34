<nav>
    <a href="<?= base_url('/') ?>">Home</a> | 
    <a href="<?= base_url('/about') ?>">About</a> | 
    <a href="<?= base_url('/customers') ?>">Customer Accounts</a> | 
    <a href="<?= base_url('/users') ?>">User Accounts</a>
</nav>
<hr>
<h1>User Accounts</h1>
<table border="1">
    <tr><th>Username</th><th>Full Name</th><th>Role</th></tr>
    <?php foreach ($users as $u): ?>
        <tr>
            <td><?= esc($u['username']) ?></td>
            <td><?= esc($u['full_name']) ?></td>
            <td><?= esc($u['role']) ?></td>
        </tr>
    <?php endforeach; ?>
</table>