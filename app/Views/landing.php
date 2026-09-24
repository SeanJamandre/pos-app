<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS System | Home</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background: #f4f7fb; color: #1f2937; }
        nav { background: #12355b; padding: 16px; text-align: center; }
        nav a { color: white; text-decoration: none; margin: 0 12px; font-weight: bold; }
        main { max-width: 900px; margin: 60px auto; padding: 40px; background: white; border-radius: 12px; text-align: center; box-shadow: 0 4px 16px #0001; }
        h1 { color: #12355b; font-size: 42px; }
        .button { display: inline-block; padding: 12px 20px; background: #1976d2; color: white; border-radius: 6px; text-decoration: none; margin: 8px; }
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
        <h1>Point-of-Sale System</h1>
        <p>Welcome to our basic POS management system.</p>
        <p>This first version demonstrates CodeIgniter routing, controllers, views, and static PHP data.</p>
        <a class="button" href="<?= base_url('customers') ?>">View Customers</a>
        <a class="button" href="<?= base_url('users') ?>">View Users</a>
    </main>
</body>
</html>

