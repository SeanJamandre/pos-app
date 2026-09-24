<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS System | About</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background: #f4f7fb; color: #1f2937; }
        nav { background: #12355b; padding: 16px; text-align: center; }
        nav a { color: white; text-decoration: none; margin: 0 12px; font-weight: bold; }
        main { max-width: 900px; margin: 40px auto; padding: 35px; background: white; border-radius: 12px; box-shadow: 0 4px 16px #0001; }
        h1 { color: #12355b; }
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
        <h1>About This POS System</h1>
        <p>This is a basic Point-of-Sale system created for the IT0049 Web System Technologies laboratory activity.</p>
        <p>The application uses the CodeIgniter 4 MVC architecture. Routes connect URLs to controller methods, controllers prepare the data, and views display the pages.</p>
        <p>The customer and user listings currently use static PHP arrays. A database can be added in a later activity.</p>
    </main>
</body>
</html>

