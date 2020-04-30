<?php

namespace App\CustomTrait\Auth;
use Auth;

trait AppRedirectUsers
{
    /**
     * Get the post register / login redirect path.
     *
     * @return string
     */
    public function redirectPath()
    {
        return property_exists($this, 'redirectTo') ? $this->redirectTo : 'dashboard';
    }
}
