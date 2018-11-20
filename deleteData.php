<?php

include_once("DataProcessor.php");

$data = new DataProcessor();
echo $data->destroyData();

echo "You will be redirected back in 5 seconds";

header("refresh: 5; url = index.php");
?>
