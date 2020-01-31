<?
namespace BlockMod\Services;
use BlockMod\Entity\MessageTable;
class MessageDel
{
    public function DelComponent($data)
    {
 
        var_dump($data['ID']);
     $result = MessageTable::delete($data['ID']);
    //  var_dump($result);
    //  die();
        if (empty($result)) {
            echo 'Ошибка ';
            die();
        }
        echo 'yes';
        return $result;
    }
}

