<?php
require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$admin = \App\Models\Admin::where('email', 'khadija@example.com')->first();
if ($admin) {
    $admin->password = bcrypt('Password123!');
    $admin->save();
    echo "UPDATED: khadija@example.com / Password123!\n";
} else {
    echo "Admin not found\n";
}
