<?php 
use  BlockMod\Entity\UsersTable;
use  Bitrix\Main\Loader;
class b_users extends \CBitrixComponent
{
    
    public function executeComponent()
    {
        
        Loader::includeModule("block.mod");
        if($_SERVER['REQUEST_METHOD'] == 'DELETE'){
            $data =  $this->request->getQuery('ID');
        }
        var_dump($data['ID']);
        $result = UsersTable::delete($data['ID']);
        if (empty($result)){
            echo'Ошибка ';
            die();
        }
        echo'yes';
    }
}
