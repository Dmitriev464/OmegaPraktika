<?php 
use  BlockMod\Entity\UsersTable;
use  Bitrix\Main\Loader;
class b_users extends \CBitrixComponent
{
    
    public function executeComponent()
    {
        Loader::includeModule("block.mod");
        $post = (array) $this->request->getPostList()->toArray();
        
        $arFields = [
        "UF_USERNAME" =>$post["name"]
        ];  
        
        if(empty($post["name"]))
        {
            header('HTTP/1.1 400 Bad Request');
            echo "Не введено имя. Это обязательное поле!";
            die();
        }

      
        $result = UsersTable::add($arFields);

        if(empty($result)){
            echo"Ошибка при сохранении данных";
            die();
        }
        
        echo"Ваши данные сохранены в Json-формате!";
    
        
    }
}
