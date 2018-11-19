<?php
include_once("DataProcessor.php");

$data = new DataProcessor();

/*
* If the returned value from the function is a string, that means the dataset
* was empty.
*/

if(!is_string($data->displayData())) {
  foreach($data->displayData() as $result) {
    echo $result . "<br />";
  }
} else {
  echo "Dataset is empty!";
}

?>
