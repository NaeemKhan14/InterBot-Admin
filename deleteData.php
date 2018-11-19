<?php

include_once("DataProcessor.php");

$data = new DataProcessor();
echo $data->destroyData();

header("refresh: 5; url = index.php");
?>
