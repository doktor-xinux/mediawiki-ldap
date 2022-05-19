//Add more configuration options below.
wfLoadExtension( 'Math' );
wfLoadExtension( 'DrawioEditor' );
wfLoadExtension( 'WikiEditor' );
$wgFileExtensions = [ 'pdf','png', 'gif', 'jpg', 'jpeg', 'webp', 'svg' ];
$wgDrawioEditorImageType ="png";
// Ldap Stuff
wfLoadExtension( 'LDAPProvider' );
$LDAPProviderDomainConfigs  = "$IP/ldap.json";
wfLoadExtension( 'PluggableAuth' );
$wgPluggableAuth_EnableLocalLogin = "true";
wfLoadExtension( 'LDAPAuthentication2' );
wfLoadExtension( 'LDAPAuthorization' );
//$wgGroupPermissions['*']['createaccount'] = true;
$wgGroupPermissions['*']['autocreateaccount'] = true;
error_reporting( -1 );
ini_set( 'display_errors', 1 );
$wgShowExceptionDetails = true;
//$wgDebugLogGroups['LDAP'] = $wgDebugLogGroups['MediaWiki\\Extension\\LDAPProvider\\Client'] = $wgDebugLogGroups['LDAPGroups'] = $wgDebugLogGroups['LDAPUserInfo'] = $wgDebugLogGroups['LDAPAuthorization'] = '/var/www/html/images/LDAP.log';
