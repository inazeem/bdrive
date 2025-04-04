<?php

namespace App\Policies;

class DriveFileEntryPolicy extends FileEntryPolicy {
    public function setPermissionsOnEntry($user, $entry) {
        $permissions = parent::setPermissionsOnEntry($user, $entry);
        
        if ($user->hasRole('admin') || $user->hasRole('superadmin')) {
            $permissions['canEdit'] = true;
            $permissions['canDelete'] = true;
            $permissions['canUpload'] = true;
            $permissions['canView'] = true;
            $permissions['canShare'] = true;
        }
        
        return $permissions;
    }
}