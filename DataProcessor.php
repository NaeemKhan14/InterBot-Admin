<?php

/**
* This class is made to store and retrieve the Questions for the bot
*/

class DataProcessor {
  // Properties
  private $fileToCheck = "data.txt";

  /*
  * This function checks if the file exists, if it does then it appends the
  * input in it. Otherwise it creates that file and stores that input
  */
  function putData($input): void {
    // Retrieve the property to get file name
    $file = $this->fileToCheck;

    if(file_exists($file)) {
      $data = file_get_contents($file);
      $data .= $input; // Append the input to file contents
      file_put_contents($file, $data);
      echo "Entry posted successfully!";
    } else {
      // Create the new file
      file_put_contents($file, $input);
      echo "File created successfully!";
    }

  }

  /*
  * This function opens the file, reads and puts each line into an array, and
  * returns it in when finished
  */
  function displayData() {
    $file = $this->fileToCheck;

    if(file_exists($file) && filesize($file) > 0) {
      // Open the file
      $data = fopen($file, "r"); // Open the file from the beginning as read-only
      $line = fgets($data); // Get next line
      $returnData = [];

      // As long as there are entries in file, this loop will run
      while(!feof($data)) {
        $returnData[] = $line;
        $line = fgets($data); // Move pointer to next line
      }

      fclose($data);
      return $returnData;
    } else {
      return "File does not exist or Dataset is empty!";
    }

  }

  /*
  * This function truncates the file if it exist
  */
  function destroyData() {
    $file = $this->fileToCheck;
    // If file exist and is not empty
    if(file_exists($file) && filesize($file) > 0 ) {
      fclose(fopen($file, "w"));
      return "Successfully destroyed all the data!";
    } else {
      return "Dataset is empty";
    }
  }

}

?>
