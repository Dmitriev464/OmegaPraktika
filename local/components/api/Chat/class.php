<?php 
// use  BlockMod\Entity\UsersTable;
// use  Bitrix\Main\Loader;
// class Users extends \CBitrixComponent
// {
    
//     public function executeComponent()
//     {
       
//          $post = (array) $this->request->getPostList()->toArray();

//         Loader::includeModule('block.mod');
//         $user = UsersTable::getList(array(
//                         'select' => array('UF_USERNAME') , 
//                         'filter' => ['UF_USERNAME'=>$post["name"]],
//               ))->fetchAll();
//               if(empty($user))
//               header('HTTP/1.1 204 No Content');
//           header('Content-Type: application/json; charset=utf-8');
//           echo json_encode($user);
//     }
// }

use  BlockMod\Entity\ChatsTable;

use  Bitrix\Main\Loader;
class b_chats extends \CBitrixComponent
{
    
    public function executeComponent()
    {
       
         $post = (array) $this->request->getPostList()->toArray();

        Loader::includeModule('block.mod');
        $chat = ChatsTable::getList(array(
                        'select' => array('UF_USER1','UF_USER2') , 
                        'filter' => ['ID'=>$post["ID"]],
              ))->fetchAll();
              if(empty($chat))
              header('HTTP/1.1 204 No Content');
          header('Content-Type: application/json; charset=utf-8');
          echo json_encode($chat);
    }
}


// class Nam extends \CBitrixComponent
// {
//     public function executeComponent()
//     {
        
//         if (CModule::IncludeModule('highloadblock')) {
//             $Date = date(CDatabase::DateFormatToPHP(FORMAT_DATETIME));
//             $arHLBlock = Bitrix\Highloadblock\HighloadBlockTable::getById(1)->fetch();
//             $obEntity = Bitrix\Highloadblock\HighloadBlockTable::compileEntity($arHLBlock);
//             $strEntityDataClass = $obEntity->getDataClass();
        
//             $resData = $strEntityDataClass::getList(array(
//                'select' => array('*'),
//                'order' => array('ID' => 'ASC'),
//                'limit' => 100,
//             ))->fetchAll();
        
        
//             foreach($resData as $item){
//                 echo "ID: ".$item['ID'];
//                 echo "   ".$item['UF_USERNAME'];
//                 echo "  ".$item['UF_OBJECT_TYPE_ID'].'<br>';
//                echo "<br>";
            
        
//             }
//             echo '<br>';
//             echo 'Данные в формате Json'.'<br>';
//             echo json_encode($resData).'<br>';
//         };
//     }
// }