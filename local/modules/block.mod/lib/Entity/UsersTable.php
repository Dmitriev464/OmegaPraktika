<?php
namespace BlockMod\Entity;

use Bitrix\Main\Entity\DataManager;
use Bitrix\Main\Entity\IntegerField;
use Bitrix\Main\Entity\StringField;

class UsersTable extends DataManager
{
    public static function getTableName()
        {
            return 'b_users';
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
                    'UF_USERNAME',
                    [
                        'required'    => true,
                        'column_name' => 'UF_USERNAME',
                        'title'       => 'Имя пользователя'
                    ]

                ),
              
            ];
        }  

};
?>
