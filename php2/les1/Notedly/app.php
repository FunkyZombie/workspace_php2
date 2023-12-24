<?php

use Notedly\Blog\Post;
use Notedly\Users\User;

$user = new User('Alex');
echo '<pre>';
print_r(new Post($user, 'Перечень неважных дел Гарри Поттера.'));
echo '</pre>';