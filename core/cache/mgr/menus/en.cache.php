<?php  return array (
  0 => 
  array (
    'text' => 'Dashboard',
    'parent' => '',
    'action' => 0,
    'description' => '',
    'icon' => 'images/misc/logo_tbar.gif',
    'menuindex' => 0,
    'params' => '',
    'handler' => 'MODx.loadPage(""); return false;',
    'permissions' => 'home',
    'namespace' => NULL,
    'controller' => '',
    'children' => 
    array (
      0 => 
      array (
        'text' => 'Dashboards',
        'parent' => 'dashboard',
        'action' => 77,
        'description' => 'Manage all dashboard configurations.',
        'icon' => 'images/icons/information.png',
        'menuindex' => 0,
        'params' => '',
        'handler' => '',
        'permissions' => 'dashboards',
        'namespace' => 'core',
        'controller' => 'system/dashboards',
        'children' => 
        array (
        ),
      ),
    ),
  ),
  1 => 
  array (
    'text' => 'Site',
    'parent' => '',
    'action' => 0,
    'description' => '',
    'icon' => 'images/misc/logo_tbar.gif',
    'menuindex' => 1,
    'params' => '',
    'handler' => '',
    'permissions' => 'menu_site',
    'namespace' => NULL,
    'controller' => '',
    'children' => 
    array (
      0 => 
      array (
        'text' => 'View',
        'parent' => 'site',
        'action' => 0,
        'description' => 'Loads your home page in a new window.',
        'icon' => 'images/icons/show.gif',
        'menuindex' => 0,
        'params' => '',
        'handler' => 'MODx.preview(); return false;',
        'permissions' => '',
        'namespace' => NULL,
        'controller' => '',
        'children' => 
        array (
        ),
      ),
      1 => 
      array (
        'text' => 'Clear Cache',
        'parent' => 'site',
        'action' => 0,
        'description' => 'Clear your site\'s cache.',
        'icon' => 'images/icons/refresh.png',
        'menuindex' => 1,
        'params' => '',
        'handler' => 'MODx.clearCache(); return false;',
        'permissions' => 'empty_cache',
        'namespace' => NULL,
        'controller' => '',
        'children' => 
        array (
        ),
      ),
      2 => 
      array (
        'text' => 'Remove Locks',
        'parent' => 'site',
        'action' => 0,
        'description' => 'This will remove any locks that are on any manager pages as a result of other users editing them.',
        'icon' => 'images/ext/default/grid/hmenu-unlock.png',
        'menuindex' => 2,
        'params' => '',
        'handler' => '
MODx.msg.confirm({
    title: _(\'remove_locks\')
    ,text: _(\'confirm_remove_locks\')
    ,url: MODx.config.connectors_url+\'system/remove_locks.php\'
    ,params: {
        action: \'remove\'
    }
    ,listeners: {
        \'success\': {fn:function() { Ext.getCmp("modx-resource-tree").refresh(); },scope:this}
    }
});',
        'permissions' => 'remove_locks',
        'namespace' => NULL,
        'controller' => '',
        'children' => 
        array (
        ),
      ),
      3 => 
      array (
        'text' => 'Search',
        'parent' => 'site',
        'action' => 44,
        'description' => 'Search for resources.',
        'icon' => 'images/icons/context_view.gif',
        'menuindex' => 3,
        'params' => '',
        'handler' => '',
        'permissions' => 'search',
        'namespace' => 'core',
        'controller' => 'search',
        'children' => 
        array (
        ),
      ),
      4 => 
      array (
        'text' => 'New Document',
        'parent' => 'site',
        'action' => 45,
        'description' => 'Create a new document.',
        'icon' => 'images/icons/folder_page_add.png',
        'menuindex' => 4,
        'params' => '',
        'handler' => '',
        'permissions' => 'new_document',
        'namespace' => 'core',
        'controller' => 'resource/create',
        'children' => 
        array (
        ),
      ),
      5 => 
      array (
        'text' => 'New Weblink',
        'parent' => 'site',
        'action' => 45,
        'description' => 'Create a new weblink that points to an existing URL and redirects.',
        'icon' => 'images/icons/link_add.png',
        'menuindex' => 5,
        'params' => '&class_key=modWebLink',
        'handler' => '',
        'permissions' => 'new_weblink',
        'namespace' => 'core',
        'controller' => 'resource/create',
        'children' => 
        array (
        ),
      ),
      6 => 
      array (
        'text' => 'New Symlink',
        'parent' => 'site',
        'action' => 45,
        'description' => 'Create a new symlink that points to an existing URL without redirecting.',
        'icon' => 'images/icons/link_add.png',
        'menuindex' => 6,
        'params' => '&class_key=modSymLink',
        'handler' => '',
        'permissions' => 'new_symlink',
        'namespace' => 'core',
        'controller' => 'resource/create',
        'children' => 
        array (
        ),
      ),
      7 => 
      array (
        'text' => 'New Static Resource',
        'parent' => 'site',
        'action' => 45,
        'description' => 'Create a new file-based Static Resource.',
        'icon' => 'images/icons/link_add.png',
        'menuindex' => 7,
        'params' => '&class_key=modStaticResource',
        'handler' => '',
        'permissions' => 'new_static_resource',
        'namespace' => 'core',
        'controller' => 'resource/create',
        'children' => 
        array (
        ),
      ),
      8 => 
      array (
        'text' => 'Logout',
        'parent' => 'site',
        'action' => 0,
        'description' => 'Log out of the MODX manager.',
        'icon' => 'images/misc/logo_tbar.gif',
        'menuindex' => 8,
        'params' => '',
        'handler' => 'MODx.logout(); return false;',
        'permissions' => 'logout',
        'namespace' => NULL,
        'controller' => '',
        'children' => 
        array (
        ),
      ),
    ),
  ),
  2 => 
  array (
    'text' => 'Components',
    'parent' => '',
    'action' => 0,
    'description' => '',
    'icon' => 'images/icons/plugin.gif',
    'menuindex' => 2,
    'params' => '',
    'handler' => '',
    'permissions' => 'components',
    'namespace' => NULL,
    'controller' => '',
    'children' => 
    array (
    ),
  ),
  3 => 
  array (
    'text' => 'Security',
    'parent' => '',
    'action' => 0,
    'description' => '',
    'icon' => 'images/icons/lock.gif',
    'menuindex' => 3,
    'params' => '',
    'handler' => '',
    'permissions' => 'menu_security',
    'namespace' => NULL,
    'controller' => '',
    'children' => 
    array (
      0 => 
      array (
        'text' => 'Manage Users',
        'parent' => 'security',
        'action' => 46,
        'description' => 'Add, update, and assign permissions to users.',
        'icon' => 'images/icons/user.gif',
        'menuindex' => 0,
        'params' => '',
        'handler' => '',
        'permissions' => 'view_user',
        'namespace' => 'core',
        'controller' => 'security/user',
        'children' => 
        array (
        ),
      ),
      1 => 
      array (
        'text' => 'Access Controls',
        'parent' => 'security',
        'action' => 47,
        'description' => 'Manage user groups, roles, and access policies.',
        'icon' => 'images/icons/mnu_users.gif',
        'menuindex' => 1,
        'params' => '',
        'handler' => '',
        'permissions' => 'access_permissions',
        'namespace' => 'core',
        'controller' => 'security/permission',
        'children' => 
        array (
        ),
      ),
      2 => 
      array (
        'text' => 'Resource Groups',
        'parent' => 'security',
        'action' => 48,
        'description' => 'Manage the groups resources belong to.',
        'icon' => '',
        'menuindex' => 2,
        'params' => '',
        'handler' => '',
        'permissions' => 'access_permissions',
        'namespace' => 'core',
        'controller' => 'security/resourcegroup/index',
        'children' => 
        array (
        ),
      ),
      3 => 
      array (
        'text' => 'Form Customization',
        'parent' => 'security',
        'action' => 49,
        'description' => 'Customize manager forms by security permissions.',
        'icon' => 'images/misc/logo_tbar.gif',
        'menuindex' => 3,
        'params' => '',
        'handler' => '',
        'permissions' => 'customize_forms',
        'namespace' => 'core',
        'controller' => 'security/forms',
        'children' => 
        array (
        ),
      ),
      4 => 
      array (
        'text' => 'Flush Permissions',
        'parent' => 'security',
        'action' => 0,
        'description' => 'Flush all permissions and reload the cache.',
        'icon' => 'images/icons/unzip.gif',
        'menuindex' => 4,
        'params' => '',
        'handler' => 'MODx.msg.confirm({
    title: _(\'flush_access\')
    ,text: _(\'flush_access_confirm\')
    ,url: MODx.config.connectors_url+\'security/access/index.php\'
    ,params: {
        action: \'flush\'
    }
    ,listeners: {
        \'success\': {fn:function() { location.href = \'./\'; },scope:this}
    }
});',
        'permissions' => 'access_permissions',
        'namespace' => NULL,
        'controller' => '',
        'children' => 
        array (
        ),
      ),
      5 => 
      array (
        'text' => 'Flush All Sessions',
        'parent' => 'security',
        'action' => 0,
        'description' => 'Flush all sessions and logout all users.',
        'icon' => 'images/icons/unzip.gif',
        'menuindex' => 5,
        'params' => '',
        'handler' => 'MODx.msg.confirm({
    title: _(\'flush_sessions\')
    ,text: _(\'flush_sessions_confirm\')
    ,url: MODx.config.connectors_url+\'security/flush.php\'
    ,params: {
        action: \'flush\'
    }
    ,listeners: {
        \'success\': {fn:function() { location.href = \'./\'; },scope:this}
    }
});',
        'permissions' => 'flush_sessions',
        'namespace' => NULL,
        'controller' => '',
        'children' => 
        array (
        ),
      ),
    ),
  ),
  4 => 
  array (
    'text' => 'Tools',
    'parent' => '',
    'action' => 0,
    'description' => '',
    'icon' => 'images/icons/menu_settings.gif',
    'menuindex' => 4,
    'params' => '',
    'handler' => '',
    'permissions' => 'menu_tools',
    'namespace' => NULL,
    'controller' => '',
    'children' => 
    array (
      0 => 
      array (
        'text' => 'Import Resources',
        'parent' => 'tools',
        'action' => 50,
        'description' => 'Import a batch of static resources into the site.',
        'icon' => 'images/icons/application_side_contract.png',
        'menuindex' => 0,
        'params' => '',
        'handler' => '',
        'permissions' => 'import_static',
        'namespace' => 'core',
        'controller' => 'system/import',
        'children' => 
        array (
        ),
      ),
      1 => 
      array (
        'text' => 'Import HTML',
        'parent' => 'tools',
        'action' => 51,
        'description' => 'Import a batch of HTML files into the site.',
        'icon' => 'images/icons/application_side_contract.png',
        'menuindex' => 1,
        'params' => '',
        'handler' => '',
        'permissions' => 'import_static',
        'namespace' => 'core',
        'controller' => 'system/import/html',
        'children' => 
        array (
        ),
      ),
      2 => 
      array (
        'text' => 'Property Sets',
        'parent' => 'tools',
        'action' => 52,
        'description' => 'Manage all of your site\'s property sets and the elements they are assigned to.',
        'icon' => 'images/misc/logo_tbar.gif',
        'menuindex' => 2,
        'params' => '',
        'handler' => '',
        'permissions' => 'property_sets',
        'namespace' => 'core',
        'controller' => 'element/propertyset/index',
        'children' => 
        array (
        ),
      ),
      3 => 
      array (
        'text' => 'Media Sources',
        'parent' => 'tools',
        'action' => 78,
        'description' => 'Manage your media sources here.',
        'icon' => 'images/misc/logo_tbar.gif',
        'menuindex' => 2,
        'params' => '',
        'handler' => '',
        'permissions' => 'sources',
        'namespace' => 'core',
        'controller' => 'source/index',
        'children' => 
        array (
        ),
      ),
    ),
  ),
  5 => 
  array (
    'text' => 'Reports',
    'parent' => '',
    'action' => 0,
    'description' => '',
    'icon' => 'images/icons/menu_settings16.gif',
    'menuindex' => 5,
    'params' => '',
    'handler' => '',
    'permissions' => 'menu_reports',
    'namespace' => NULL,
    'controller' => '',
    'children' => 
    array (
      0 => 
      array (
        'text' => 'Site Schedule',
        'parent' => 'reports',
        'action' => 53,
        'description' => 'View Resources with upcoming publish or unpublish dates.',
        'icon' => 'images/icons/cal.gif',
        'menuindex' => 0,
        'params' => '',
        'handler' => '',
        'permissions' => 'view_document',
        'namespace' => 'core',
        'controller' => 'resource/site_schedule',
        'children' => 
        array (
        ),
      ),
      1 => 
      array (
        'text' => 'Manager Actions',
        'parent' => 'reports',
        'action' => 54,
        'description' => 'View the recent manager activity.',
        'icon' => '',
        'menuindex' => 1,
        'params' => '',
        'handler' => '',
        'permissions' => 'logs',
        'namespace' => 'core',
        'controller' => 'system/logs/index',
        'children' => 
        array (
        ),
      ),
      2 => 
      array (
        'text' => 'Error Log',
        'parent' => 'reports',
        'action' => 55,
        'description' => 'View the MODX error.log.',
        'icon' => 'images/icons/comment.gif',
        'menuindex' => 2,
        'params' => '',
        'handler' => '',
        'permissions' => 'view_eventlog',
        'namespace' => 'core',
        'controller' => 'system/event',
        'children' => 
        array (
        ),
      ),
      3 => 
      array (
        'text' => 'System Info',
        'parent' => 'reports',
        'action' => 56,
        'description' => 'View server information, such as phpinfo, database info, and more.',
        'icon' => 'images/icons/logging.gif',
        'menuindex' => 3,
        'params' => '',
        'handler' => '',
        'permissions' => 'view_sysinfo',
        'namespace' => 'core',
        'controller' => 'system/info',
        'children' => 
        array (
        ),
      ),
      4 => 
      array (
        'text' => 'About',
        'parent' => 'reports',
        'action' => 57,
        'description' => 'More information about MODX Revolution.',
        'icon' => 'images/icons/information.png',
        'menuindex' => 4,
        'params' => '',
        'handler' => '',
        'permissions' => 'about',
        'namespace' => 'core',
        'controller' => 'help',
        'children' => 
        array (
        ),
      ),
    ),
  ),
  6 => 
  array (
    'text' => 'System',
    'parent' => '',
    'action' => 0,
    'description' => '',
    'icon' => 'images/misc/logo_tbar.gif',
    'menuindex' => 6,
    'params' => '',
    'handler' => '',
    'permissions' => 'menu_system',
    'namespace' => NULL,
    'controller' => '',
    'children' => 
    array (
      0 => 
      array (
        'text' => 'Package Management',
        'parent' => 'system',
        'action' => 60,
        'description' => 'Download 3rd Party Components, add Providers, and install packages.',
        'icon' => 'images/icons/sysinfo.gif',
        'menuindex' => 0,
        'params' => '',
        'handler' => '',
        'permissions' => 'packages',
        'namespace' => 'core',
        'controller' => 'workspaces',
        'children' => 
        array (
        ),
      ),
      1 => 
      array (
        'text' => 'System Settings',
        'parent' => 'system',
        'action' => 64,
        'description' => 'Change or create site-wide system settings.',
        'icon' => 'images/icons/sysinfo.gif',
        'menuindex' => 1,
        'params' => '',
        'handler' => '',
        'permissions' => 'settings',
        'namespace' => 'core',
        'controller' => 'system/settings',
        'children' => 
        array (
        ),
      ),
      2 => 
      array (
        'text' => 'Lexicon Management',
        'parent' => 'system',
        'action' => 61,
        'description' => 'Edit any of the language strings across the MODX manager.',
        'icon' => 'images/icons/logging.gif',
        'menuindex' => 2,
        'params' => '',
        'handler' => '',
        'permissions' => 'lexicons',
        'namespace' => 'core',
        'controller' => 'workspaces/lexicon',
        'children' => 
        array (
        ),
      ),
      3 => 
      array (
        'text' => 'Content Types',
        'parent' => 'system',
        'action' => 62,
        'description' => 'Add content types for resources, such as .html, .js, etc.',
        'icon' => 'images/icons/logging.gif',
        'menuindex' => 3,
        'params' => '',
        'handler' => '',
        'permissions' => 'content_types',
        'namespace' => 'core',
        'controller' => 'system/contenttype',
        'children' => 
        array (
        ),
      ),
      4 => 
      array (
        'text' => 'Contexts',
        'parent' => 'system',
        'action' => 58,
        'description' => 'Manage site contexts and their settings.',
        'icon' => 'images/icons/sysinfo.gif',
        'menuindex' => 4,
        'params' => '',
        'handler' => '',
        'permissions' => 'view_context',
        'namespace' => 'core',
        'controller' => 'context',
        'children' => 
        array (
        ),
      ),
      5 => 
      array (
        'text' => 'Actions',
        'parent' => 'system',
        'action' => 59,
        'description' => 'Manage Actions and the Top Menu structure.',
        'icon' => 'images/icons/sysinfo.gif',
        'menuindex' => 5,
        'params' => '',
        'handler' => '',
        'permissions' => 'menus,actions',
        'namespace' => 'core',
        'controller' => 'system/action',
        'children' => 
        array (
        ),
      ),
      6 => 
      array (
        'text' => 'Namespaces',
        'parent' => 'system',
        'action' => 63,
        'description' => 'Handle namespaces, which distinguish between different custom-added components.',
        'icon' => '',
        'menuindex' => 6,
        'params' => '',
        'handler' => '',
        'permissions' => 'namespaces',
        'namespace' => 'core',
        'controller' => 'workspaces/namespace',
        'children' => 
        array (
        ),
      ),
    ),
  ),
  7 => 
  array (
    'text' => 'User',
    'parent' => '',
    'action' => 0,
    'description' => '',
    'icon' => 'images/icons/user_go.png',
    'menuindex' => 7,
    'params' => '',
    'handler' => '',
    'permissions' => 'menu_user',
    'namespace' => NULL,
    'controller' => '',
    'children' => 
    array (
      0 => 
      array (
        'text' => 'Profile',
        'parent' => 'user',
        'action' => 65,
        'description' => 'Update your personal profile.',
        'icon' => '',
        'menuindex' => 0,
        'params' => '',
        'handler' => '',
        'permissions' => 'change_profile',
        'namespace' => 'core',
        'controller' => 'security/profile',
        'children' => 
        array (
        ),
      ),
      1 => 
      array (
        'text' => 'Messages',
        'parent' => 'user',
        'action' => 66,
        'description' => 'View your messages and send new ones to users.',
        'icon' => 'images/icons/messages.gif',
        'menuindex' => 1,
        'params' => '',
        'handler' => '',
        'permissions' => 'messages',
        'namespace' => 'core',
        'controller' => 'security/message',
        'children' => 
        array (
        ),
      ),
    ),
  ),
  8 => 
  array (
    'text' => 'Support',
    'parent' => '',
    'action' => 0,
    'description' => '',
    'icon' => 'images/icons/sysinfo.gif',
    'menuindex' => 8,
    'params' => '',
    'handler' => '',
    'permissions' => 'menu_support',
    'namespace' => NULL,
    'controller' => '',
    'children' => 
    array (
      0 => 
      array (
        'text' => 'Forums',
        'parent' => 'support',
        'action' => 0,
        'description' => 'View the official MODX forums.',
        'icon' => 'images/icons/sysinfo.gif',
        'menuindex' => 0,
        'params' => '',
        'handler' => 'window.open("http://modx.com/forums");',
        'permissions' => '',
        'namespace' => NULL,
        'controller' => '',
        'children' => 
        array (
        ),
      ),
      1 => 
      array (
        'text' => 'Wiki',
        'parent' => 'support',
        'action' => 0,
        'description' => 'Launch the official MODX documentation.',
        'icon' => 'images/icons/sysinfo.gif',
        'menuindex' => 1,
        'params' => '',
        'handler' => 'window.open("http://rtfm.modx.com/");',
        'permissions' => '',
        'namespace' => NULL,
        'controller' => '',
        'children' => 
        array (
        ),
      ),
      2 => 
      array (
        'text' => 'Bugs',
        'parent' => 'support',
        'action' => 0,
        'description' => 'Launch the MODX bugtracker to track and file bugs.',
        'icon' => 'images/icons/sysinfo.gif',
        'menuindex' => 2,
        'params' => '',
        'handler' => 'window.open("http://bugs.modx.com/projects/revo/issues");',
        'permissions' => '',
        'namespace' => NULL,
        'controller' => '',
        'children' => 
        array (
        ),
      ),
      3 => 
      array (
        'text' => 'API Documentation',
        'parent' => 'support',
        'action' => 0,
        'description' => 'Complete API documentation for MODX Revolution.',
        'icon' => 'images/icons/sysinfo.gif',
        'menuindex' => 3,
        'params' => '',
        'handler' => 'window.open("http://api.modx.com/revolution/2.2/");',
        'permissions' => '',
        'namespace' => NULL,
        'controller' => '',
        'children' => 
        array (
        ),
      ),
    ),
  ),
);