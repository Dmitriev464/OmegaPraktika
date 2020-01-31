<?php 
// use  BlockMod\Entity\MessageTable;
// use  Bitrix\Main\Loader;
// class messdel extends \CBitrixComponent
// {
    
//     public function executeComponent()
//     {
        
//         Loader::includeModule("block.mod");
//         if($_SERVER['REQUEST_METHOD'] == 'DELETE'){
//             $data =  $this->request->getQuery('ID');
//         }
//         var_dump($data['ID']);
//         $result = MessageTable::delete($data['ID']);
//         if (empty($result)){
//             echo'Ошибка ';
//             die();
//         }
//         echo'yes';
//     }
// }
use BlockMod\Services\MessageDel;
    use Bitrix\Main\Loader;

    Loader::includeModule("block.mod");
    class Messdel extends \CBitrixComponent
    {
        protected $mesDel;
        function __construct(\CBitrixComponent $component = null)
        {
            parent::__construct($component);
            $this->$mesDel = new MessageDel();
        }

        public function executeComponent()
        {
            $get = (array) $this->request->getQueryList()->toArray();
            // var_dump($get);
            // die();
            $peremen = $this->$mesDel->DelComponent($get);
            header('Content-Type: application/json; charset=utf-8');
            echo json_encode($peremen);
        }
    }

    