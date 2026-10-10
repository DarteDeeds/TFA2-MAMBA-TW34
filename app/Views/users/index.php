<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Accounts - POS System</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f4f4f9; }
        nav a { margin-right: 15px; text-decoration: none; color: #007bff; font-weight: bold; }
        nav a:hover { text-decoration: underline; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; background: white; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #007bff; color: white; }
        tr:nth-child(even) { background-color: #f9f9f9; }
    </style>
</head>
<body>

    <!-- Navigation Links between your four pages -->
    <nav>
        <a href="<?= base_url('/') ?>">Home</a>
        <a href="<?= base_url('/about') ?>">About</a>
        <a href="<?= base_url('/customers') ?>">Customers</a>
        <a href="<?= base_url('/users') ?>">Users</a>
    </nav>

    <h1>User Accounts (Staff)</h1>
    <p>This data is fetched dynamically from the database using CodeIgniter's Model and Query Builder[cite: 2].</p>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Full Name</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($users) && is_array($users)): ?>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= esc($user['id']); ?></td>
                        <td><?= esc($user['username']); ?></td>
                        <td><?= esc($user['full_name']); ?></td>
                        <td><?= esc($user['created_at']); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4">No user records found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

</body>
</html>