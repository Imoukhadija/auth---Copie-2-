<?php
$hash = '$2y$10$e0NR7eQ0YlP0/Z1yHfX9Kuq7S/5tFz3sZqgDq4YFQz0qZ5lF5r1V6';
$tests = ['password', 'admin', 'admin123', 'password123', '123456', 'khadija', 'test123', '1234', 'admin@123'];

foreach($tests as $pwd) {
  if (password_verify($pwd, $hash)) {
    echo "MATCH: $pwd\n";
    exit(0);
  }
}

echo "No match found in common passwords.\n";
echo "Hash: $hash\n";
