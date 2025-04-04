# BDrive

A drive application with a comprehensive permission system.

## Permission System

The permission system is built around two main policy classes:

- `FileEntryPolicy`: Base policy class that handles basic file permissions
- `DriveFileEntryPolicy`: Extended policy class with additional drive-specific permissions

### Permission Types

- canEdit: Ability to modify file/folder contents
- canDelete: Ability to remove files/folders
- canUpload: Ability to upload new files
- canView: Ability to view file/folder contents
- canShare: Ability to share files/folders with others

### User Roles

- Regular users: Basic permissions on their own files
- Admin: Full permissions on all files
- Superadmin: Full permissions on all files

## Setup

1. Clone the repository
2. Install dependencies
3. Configure your environment
4. Run migrations

## License

MIT