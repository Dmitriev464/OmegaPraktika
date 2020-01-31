<?php 
// use  BlockMod\Entity\MessageTable;
// use  Bitrix\Main\Loader;
use Bitrix\Main\Type\DateTime;
// class messadd extends \CBitrixComponent
// {
    
//     public function executeComponent()
//     {
//         Loader::includeModule("block.mod");
//         $post = (array) $this->request->getPostList()->toArray();

//         //$data=getdate();
//         $date = date_create();
        
//         $arFields = [
//         //  "UF_TIME"=>$post['time'],
//         'UF_TIME' => DateTime::createFromTimestamp(date_timestamp_get($date)),
//         "UF_USERID" =>$post["userid"],
//         "UF_CHATID" =>$post["chatid"],
//         "UF_TEXT" =>$post["mestext"],
//         ];  
// // var_dump($arFields);
// // die();

//         if(empty($post["mestext"] && $post["userid"] && $post["chatid"]))
//         {
//             var_dump($post);
//             header('HTTP/1.1 400 Bad Request');
//             echo "Не введены все поля";
//             die();
//         }

      
//         $result = MessageTable::add($arFields);
// // var_dump($result);
// // die();
//         if(empty($result)){
//             echo"Ошибка при сохранении данных";
//             die();
//         }
//         var_dump($arFields);
//         echo"Ваши данные сохранены в Json-формате!";
    
        
//     }
// }


use Bitrix\Main\Loader;
use BlockMod\Services\MessageAdd;


Loader::includeModule("block.mod");
class madd extends \CBitrixComponent
{

    protected $mesAdd;
    function __construct(\CBitrixComponent $component = null)
    {
        parent::__construct($component);
        $this->$mesAdd = new MessageAdd();
    }

    public function executeComponent()
    {
        $post = (array) $this->request->getPostList()->toArray();
        $peremen = $this->$mesAdd->AddComponent($post);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($peremen);
    }
}