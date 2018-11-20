<?php
include_once("DataProcessor.php");

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  // EOL = End of Line. So each a new line starts after every entry
  $input = strip_tags($_POST['input_field'] . "###" . PHP_EOL);

  $putData = new DataProcessor();
  $putData->putData($input);
}
?>

<form action="#" method="post">
  <input type="text" name="input_field">
  <input type="submit" value="submit">
</form>
<a href="./">Go back</a>
