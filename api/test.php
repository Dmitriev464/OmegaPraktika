<?php 
// include($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
// CModule :: IncludeMOdule ("highloadblock");

      

// $APPLICATION->includeComponent("api:component","");

// // $hlblock_id=1;
// // $hlblock = HL\HighloadBlockTable::getById($hlblock_id)->fetch();
// // $entity = HL\HighloadBlockTable::compileEntity($hlblock);
// // $entity_data_class = $entity->getDataClass();
// // $entity_table_name = $hlblock['TABLE_NAME'];

// // $arFilter = array(); //задаете фильтр по вашим полям

// // $sTableID = 'tbl_'.$entity_table_name;
// // $rsData = $entity_data_class::getList(array(
// // "select" => array('*'), //выбираем все поля
// // "filter" => $arFilter,
// // "order" => array("UF_SORT"=>"ASC") // сортировка по полю UF_SORT, будет работать только, если вы завели такое поле в hl'блоке
// // ));
// // $rsData = new CDBResult($rsData, $sTableID);
// // while($arRes = $rsData->Fetch()){
// // var_dump($arRes);
// // }

// if (CModule::IncludeModule('highloadblock')) {
//     $Date = date(CDatabase::DateFormatToPHP(FORMAT_DATETIME));
//     $arHLBlock = Bitrix\Highloadblock\HighloadBlockTable::getById(3)->fetch();
//     $obEntity = Bitrix\Highloadblock\HighloadBlockTable::compileEntity($arHLBlock);
//     $strEntityDataClass = $obEntity->getDataClass();

//     $resData = $strEntityDataClass::getList(array(
//        'select' => array('*'),
//        'order' => array('ID' => 'ASC'),
//        'limit' => 100,
//     ));
//     while ($arItem = $resData->Fetch()) {
//        print '<pre>'.print_r($arItem,1).'</pre>';
//     }
//  }
include($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
 $APPLICATION->includeComponent("api:Chat","");
?>