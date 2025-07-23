<?php

namespace App\Services;

interface newsletter
{
    public function subscribe(string $email, string $list = null);
}
