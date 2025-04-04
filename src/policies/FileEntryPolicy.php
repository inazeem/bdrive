<?php

namespace App\Policies;

class FileEntryPolicy {
    protected function getDefaultPermissions() {
        return [
            'canEdit' => false,
            'canDelete' => false,
            'canUpload' => false,
            'canView' => false,
            'canShare' => false
        ];
    }

    public function setPermissionsOnEntry($user, $entry) {
        $permissions = $this->getDefaultPermissions();
        
        // Basic user permissions
        if ($user && $entry) {
            $permissions['canView'] = true;
            
            if ($user->id === $entry->user_id) {
                $permissions['canEdit'] = true;
                $permissions['canDelete'] = true;
                $permissions['canUpload'] = true;
                $permissions['canShare'] = true;
            }
        }
        
        return $permissions;
    }
}