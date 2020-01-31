<?

namespace BlockMod\Services;
use Bitrix\Main\Type\DateTime;
use BlockMod\Entity\MessageTable;

class MessageAdd
{
    public function AddComponent($post)
    {
        $date = date_create();
        $arFields = [
            //  "UF_TIME"=>$post['time'],
            'UF_TIME' => DateTime::createFromTimestamp(date_timestamp_get($date)),
            "UF_USERID" =>$post["userid"],
            "UF_CHATID" =>$post["chatid"],
            "UF_TEXT" =>$post["mestext"],
            ];  

            if(empty($post["mestext"] && $post["userid"] && $post["chatid"]))
            {
                var_dump($post);
                header('HTTP/1.1 400 Bad Request');
                echo "Не введены все поля";
                die();
            }
        return $result = MessageTable::add($arFields);

        if (empty($result)) {
            echo "Ошибка при сохранении данных";
            die();
        }

        echo "Ваши данные сохранены в Json-формате!";
    }
}
