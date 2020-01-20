<?php
namespace BlockMod\Entity;

use Bitrix\Main\Entity\DataManager;
use Bitrix\Main\Entity\IntegerField;
use Bitrix\Main\Entity\StringField;
use Bitrix\Main\Entity\ReferenceField;
class ChatsTable extends DataManager
{
    public static function getTableName()
        {
            return 'b_chats';
        }

    public static function getMap()
        {
            return [
                new IntegerField(
                    'ID',
                    [
                        'primary'      => true,
                        'autocomplete' => true,
                        'column_name'  => 'ID'
                    ]
            ),
        
            
                new StringField(
                    'UF_USER1',
                    [
                        'required'    => true,
                        'column_name' => 'UF_USER1',
                        'title'       => 'Имя пользователя1'
                    ]

                ),
              
                new StringField(
                    'UF_USER2',
                    [
                        'required'    => true,
                        'column_name' => 'UF_USER2',
                        'title'       => 'Имя пользователя2'
                    ]

                ),
                new ReferenceField(
                    'b_users',
                    'BlockMod\Entity\UsersTable',
                    [
                        'this.UF_USER1' => 'ref.ID',
                        'this.UF_USER2' => 'ref.ID'
                    ]
                ),
            ];
        }  

};
?>
