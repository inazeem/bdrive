<?php

namespace App\Controllers;

use App\Policies\DriveFileEntryPolicy;

class FolderController {
    public function makeFolderPage($user, $folder) {
        $policy = new DriveFileEntryPolicy();
        $permissions = $policy->setPermissionsOnEntry($user, $folder);
        
        return [
            'folder' => $folder,
            'permissions' => $permissions
        ];
    }
}