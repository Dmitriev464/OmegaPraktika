<?php
use  BlockMod\Entity\MessageTable;
use  Bitrix\Main\Loader;
use Bitrix\Main\Type\DateTime;
class b_message extends \CBitrixComponent
{
    
    public function executeComponent()
    {
       
         $post = (array) $this->request->getPostList()->toArray();

        Loader::includeModule('block.mod');
        $message = MessageTable::getList(array(
                        'select' => array('time'=>'UF_TIME','UF_TEXT','UF_USERID','UF_CHATID') , 
                        'filter' => ['UF_USERID'=>$post["ID"]],
              ))->fetch();
             $message['time'] = $message['time']->getTimestamp();
              
              
              if(empty($message))
              header('HTTP/1.1 204 No Content');
          header('Content-Type: application/json; charset=utf-8');
          echo json_encode($message);
    }
}
