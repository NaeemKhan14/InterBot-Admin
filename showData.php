<?php
include_once("DataProcessor.php");

$data = new DataProcessor();

/*
* If the returned value from the function is a string, that means the dataset
* was empty.
*/
?>
<div class="results">
  <?php
  if(!is_string($data->displayData())) {
    foreach($data->displayData() as $result) {
      echo $result . "<br />";
    }
  } else {
    echo "Dataset is empty!";
  }
  ?>
</div>

<h3>Save file as:</h3>
<h4>Write user's name as file name for better results</h4>
<h1>
  <?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo $data->saveData($_POST['filename']);
  }
  ?>
</h1>
<form action="showData.php" method="post">
  <input type="text" name="filename" />
  <input type="submit" value="Save File" />
</form>
<a href="./">Go back</a>
