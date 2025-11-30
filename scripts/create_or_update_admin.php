<?php
// Creates or updates an admin with the given email and password hash.
require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$email = 'khadija@example.com';
$name = 'Khadija';
$hash = '$2y$10$e0NR7eQ0YlP0/Z1yHfX9Kuq7S/5tFz3sZqgDq4YFQz0qZ5lF5r1V6';

$admin = \App\Models\Admin::where('email', $email)->first();
if ($admin) {
    $admin->password = $hash;
    $admin->name = $name;
    $admin->save();
    echo "UPDATED\n";
} else {
    \App\Models\Admin::create([
        'name' => $name,
        'email' => $email,
        'password' => $hash,
    ]);
    echo "CREATED\n";
}
