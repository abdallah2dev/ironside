<?php

use App\User;
use App\Role;

if (!function_exists('notify_admins')) {
    function notify_admins($class, $argument, $forceEmail = "")
    {
        if (strlen($forceEmail) >= 2) {
            $admins = User::where('email', $forceEmail)->get();
        }
        else {
            $admins = User::whereRole(Role::$ADMINISTRATOR)->get();
        }

        if ($admins) {
            foreach ($admins as $a => $admin) {
                $admin->notify(new $class($argument));
            }
        }
    }

    if(!function_exists('isRight'))
    {
        function isRTL()
        {
            return app()->isLocal('ar');
        }
    }
}
