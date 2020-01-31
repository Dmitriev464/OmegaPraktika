<?
namespace BlockMod\Services;
use BlockMod\Entity\MessageTable;
use Bitrix\Main\Type\DateTime;
class MessageSel
{
    public function SelComponent($get)
    {
 
        $message = MessageTable::getList(array(
            'select' => array('time'=>'UF_TIME','UF_TEXT','UF_USERID','UF_CHATID') , 
            'filter' =>
            array_filter(

                [
                    'UF_TEXT' => $get['text']
                ]
            )
  ))->fetch();
 $message['time'] = $message['time']->getTimestamp();

 
 return $message;
 }
}
 
