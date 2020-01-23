<?php 
use  BlockMod\Entity\UsersTable;
use  Bitrix\Main\Loader;
class b_users extends \CBitrixComponent
{
    
    public function executeComponent()
    {
       
         $post = (array) $this->request->getPostList()->toArray();

        Loader::includeModule('block.mod');
        $user = UsersTable::getList(array(
                        'select' => array('UF_USERNAME') , 
                        'filter' => ['ID'=>$post["ID"]],
              ))->fetchAll();
              if(empty($user))
              header('HTTP/1.1 204 No Content');
          header('Content-Type: application/json; charset=utf-8');
          echo json_encode($user);
    }
}
