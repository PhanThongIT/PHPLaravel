<?php
require_once 'DBConnect.php';

class BaseModel extends DBConnect
{
    function selectMenu()
    {
        $sql = "SELECT c1.name as NAME1,pu.url as curll, c1.icon ,GROUP_CONCAT( c2.name ) AS LEVEL2
                    FROM categories c1 LEFT JOIN (SELECT c.* ,p.url FROM categories c INNER JOIN page_url p ON p.id = c.id_url 
                      WHERE id_parent is not null  )c2
                      on c1.id = c2.id_parent
                      INNER JOIN page_url pu on pu.id = c1.id_url
                      WHERE c1.id_parent is null
                      GROUP by c1.id";
        return $this->loadMoreRows($sql);

    }

}

?>