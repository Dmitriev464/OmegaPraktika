<?php
use BlockMod\Entity\UsersTable;
use Bitrix\Main\Loader;

class b_users extends \CBitrixComponent
{
 
    public function executeComponent()
    {
        Loader::includeModule("block.mod");
        if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
            $putdata = json_decode($this->request->getInput(), true);
            //$putdata = $this->request->getInput();
        }

        // var_dump($putdata['ID']); 
        // die();

        $objUp = [ 
            'UF_USERNAME' => $putdata['usname']
        ];
        // var_dump($objUp);
        // var_dump($putdata);
        // die();
        $resultObj = UsersTable::update($putdata['ID'], $objUp);
        // var_dump($resultObj);
        // die();
        if (empty($resultObj)) {
 
            var_dump($resultObj);
            echo 'Ошибка';
            die();
        }

         echo"Успешно!";

        // $upDt = [
        //     'AUTHOR.UF_NAME' => 'name',
        //     'AUTHOR.UF_SURNAME' => 'surname',
        //     'TYPE.UF_NAME' => 'type',
        //     'UF_NAME_OBJECT' => 'nameObject'
        // ];

        }

    }