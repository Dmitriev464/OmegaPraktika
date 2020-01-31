<?php
// use Bitrix\Main\Loader;

// Loader::registerAutoLoadClasses('omega.roles', array(
    // 'Omega\Roles\Tables\RoleTable' => 'lib/Omega/Tables/RoleTable.php',
//     'Omega\Roles\Tables\PermissionTable' => 'lib/Omega/Tables/PermissionTable.php',
//     'Omega\Roles\Tables\PermissionRoleTable' => 'lib/Omega/Tables/PermissionRoleTable.php',
//     'Omega\Roles\Tables\UserRoleTable' => 'lib/Omega/Tables/UserRoleTable.php',
//     'Omega\Roles\Role' => 'lib/Omega/Role.php',
//     'Omega\Roles\UserTrait' => 'lib/Omega/UserTrait.php',
//     'Omega\Roles\Interfaces\RoleInterface' => 'lib/Omega/Interfaces/RoleInterface.php',
//     'Omega\Roles\Interfaces\UserInterface' => 'lib/Omega/Interfaces/UserInterface.php',
// ));
use Bitrix\Main\Loader;
Loader::registerAutoLoadClasses('block.mod', [
    'BlockMod\Entity\UsersTable' => 'lib/Entity/UsersTable.php',
     'BlockMod\Entity\ChatsTable' => 'lib/Entity/ChatsTable.php',
    'BlockMod\Entity\MessageTable' => 'lib/Entity/MessageTable.php',
    'BlockMod\Services\MessageAdd' => 'lib/Services/MessageAdd.php',
    'BlockMod\Services\MessageDel' => 'lib/Services/MessageDel.php',
    'BlockMod\Services\MessageSel' => 'lib/Services/MessageSel.php'

]); 
?>