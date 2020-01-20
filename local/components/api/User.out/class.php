<?php 
use  BlockMod\Entity\ChatsTable;
use  Bitrix\Main\Loader;
class Chats extends \CBitrixComponent
{
    
    public function executeComponent()
    {
       
         $post = (array) $this->request->getPostList()->toArray();

        Loader::includeModule('block.mod');
        $chat = ChatsTable::getList(array(
                        'select' => array('UF_USER1','UF_USER2') , 
                        'filter' => ['UF_USER1'=>$post["name"]],
              ))->fetchAll();
              if(empty($chat))
              header('HTTP/1.1 204 No Content');
          header('Content-Type: application/json; charset=utf-8');
          echo json_encode($chat);
    }
}
