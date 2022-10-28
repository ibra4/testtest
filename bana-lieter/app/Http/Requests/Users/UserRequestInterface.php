<?php

namespace App\Http\Requests\Users;

interface UserRequestInterface
{
    public function getRole(): string;
}
