<?
namespace BlockMod\Services;
use BlockMod\Entity\MessageTable;
use Bitrix\Main\Type\DateTime;
class MessageSel2
{
    public function SelComponent($get)
    {
 
        $message = MessageTable::getList(array(
            'select' => array('time'=>'UF_TIME','UF_TEXT','UF_USER'=>'b_users.UF_USERNAME','UF_CHATID') , 
            'filter' =>
            array_filter(

                [
                    'UF_USER' => $get['text2']
                ]
            )
  ))->fetch();
 $message['time'] = $message['time']->getTimestamp();

 
 return $message;
 }
}
 
