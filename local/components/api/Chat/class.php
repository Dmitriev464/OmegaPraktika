<?php 


use  BlockMod\Entity\ChatsTable;

use  Bitrix\Main\Loader;
class b_chats extends \CBitrixComponent
{
    
    public function executeComponent()
    {
       
         $post = (array) $this->request->getPostList()->toArray();

        Loader::includeModule('block.mod');
        $chat = ChatsTable::getList(array(
                        'select' => array('UF_USER1',
                        'UF_USER2',
                        'Username1'=>'b_users1.UF_USERNAME',
                        'Username2'=>'b_users2.UF_USERNAME') 

                        
              ))->fetchAll();
              if(empty($chat))
              header('HTTP/1.1 204 No Content');
          header('Content-Type: application/json; charset=utf-8');
          echo json_encode($chat);
    }
}


