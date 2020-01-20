<?php
namespace BlockMod\Entity;

use Bitrix\Main\Entity\DataManager;
use Bitrix\Main\Entity\IntegerField;
use Bitrix\Main\Entity\StringField;
use Bitrix\Main\Entity\ReferenceField;
class MessageTable extends DataManager
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
        
                new TimeField(
                    'UF_TIME',
                    [
                        'required'    => true,
                        'column_name' => 'UF_TIME',
                        'title'       => 'Время сообщения'
                    ]
                    ),
            
                new StringField(
                    'UF_TEXT',
                    [
                        'required'    => true,
                        'column_name' => 'UF_TEXT',
                        'title'       => 'Сообщение'
                    ]

                ),
                new IntegerField(
                    'UF_USERID',
                    [
                        'title'       => 'id пользователя',
                        'column_name'  => 'UF_USERID'
                    ]
            ),
            new IntegerField(
                'UF_CHATID',
                [
                    'title'       => 'id чата',
                    'column_name'  => 'UF_CHATID'
                ]
        ),
                new ReferenceField(
                    'b_users',
                    'BlockMod\Entity\UsersTable',
                    [
                        'this.UF_USERNAME' => 'ref.ID'
                    ]
                ),
                new ReferenceField(
                    'b_chats',
                    'BlockMod\Entity\ChatsTable',
                    [
                        'this.UF_CHATID' => 'ref.ID'
                    ]
                ),
            ];
        }  

};
?>
