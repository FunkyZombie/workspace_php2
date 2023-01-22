<?php

namespace Notedly\Blog;

use Notedly\Users\User;

class Post {
    private User $user;
    private string $text;

    function __construct(User $user, string $text)
    {
        $this->user = $user;
        $this->text = $text;
    }
}