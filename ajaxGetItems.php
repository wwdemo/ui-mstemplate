<?php

include 'getItems.php';
$result = RetrieveItems("http://catalog/items");
if (isset(json_decode($result)->errno)) {
    http_response_code(500);
}
echo $result;

?>

