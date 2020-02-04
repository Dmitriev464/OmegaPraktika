<?php

use  Bitrix\Main\Loader;
use BlockMod\Services\MessageSel2;
Loader::includeModule("block.mod");
class MessSel2 extends \CBitrixComponent
{
    protected $message;
    function __construct(\CBitrixComponent $component = null)
    {
        parent::__construct($component);
        $this->$message = new MessageSel2();
    }
    public function executeComponent()
    {
        $get = (array) $this->request->getQueryList()->toArray();
        $vis = $this->$message->SelComponent($get);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($vis);
    }
}
