# Super Administrators

## What Are Super Administrators



## Managing Super Administrators

In your /core/includes/config.php file find this code:

```php
// ****** SUPER ADMINISTRATORS ******
// The userids specified below will have permission to access all areas of vBulletin 5.
// Note that this is different to vB3 & vB4 where they only had extra permissions in the
// Admin Control Panel. Be very careful who you grant this super power to.
// The name of this setting has changed from superadministrator to superadmins.
// This is to avoid the accidental granting of this permission when using older config files.
$config['SpecialUsers']['superadmins'] = '1';
```

Edit the values between the '' to designate additional super moderators or to remove permission from User ID# 1. These should be the user's numerical ID and a comma separated list. e.g. '1,2,3'.
