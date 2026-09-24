<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS System | Customer Accounts</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background: #f4f7fb; color: #1f2937; }
        nav { background: #12355b; padding: 16px; text-align: center; }
        nav a { color: white; text-decoration: none; margin: 0 12px; font-weight: bold; }
        main { max-width: 1000px; margin: 40px auto; padding: 30px; background: white; border-radius: 12px; box-shadow: 0 4px 16px #0001; }
        h1 { color: #12355b; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #dbe3ec; padding: 13px; text-align: left; }
        th { background: #1976d2; color: white; }
        tr:nth-child(even) { background: #f5f9ff; }
    </style>
</head>
<body>
    <nav>
        <a href="<?= base_url('/') ?>">Home</a>
        <a href="<?= base_url('about') ?>">About</a>
        <a href="<?= base_url('customers') ?>">Customers</a>
        <a href="<?= base_url('users') ?>">Users</a>
    </nav>
    <main>
        <h1>Customer Accounts</h1>
        <table>
            <thead>
                <tr><th>Full Name</th><th>Email</th><th>Phone</th></tr>
            </thead>
            <tbody>
                <?php foreach ($customers as $customer): ?>
                    <tr>
                        <td><?= esc($customer['full_name']) ?></td>
                        <td><?= esc($customer['email']) ?></td>
                        <td><?= esc($customer['phone']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
</body>
</html>

