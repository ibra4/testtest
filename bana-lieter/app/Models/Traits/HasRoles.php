<?php

namespace App\Models\Traits;

trait HasRoles
{
    /**
     * Check if user has a given role
     *
     * @param  string $roleName
     * @return boolean
     */
    public function hasRole($roleName)
    {
        return $this->role == 'root' ? true : $this->role === $roleName;
    }
}
