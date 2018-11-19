<?php
include_once("DataProcessor.php");
// EOL = End of Line. So each a new line starts after every entry
$input = $_POST['input_field'] . PHP_EOL;

if(isset($input)) {
  $putData = new DataProcessor();
  $putData->putData($input);
}

?>
