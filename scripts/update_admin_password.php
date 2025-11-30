<?php
// Bootstraps Laravel and updates an admin's password hash.
require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$email = 'khadija@example.com';
$hash = '$2y$10$e0NR7eQ0YlP0/Z1yHfX9Kuq7S/5tFz3sZqgDq4YFQz0qZ5lF5r1V6';

$admin = \App\Models\Admin::where('email', $email)->first();
if ($admin) {
    $admin->password = $hash;
    $admin->save();
    echo "UPDATED\n";
} else {
    echo "NOT_FOUND\n";
}
