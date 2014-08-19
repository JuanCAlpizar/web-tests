<?php
    $input_file = fopen("sample-input.csv", "r");
    $position = 0;
    $process_input;
    if ($input_file !== false){
        while (!feof($input_file)){
            $process = fgetcsv($input_file, 0, ",", "/");
            $process_input[$position] = $process;
            $position++;
        }
        die(var_dump($process_input));
    }
?>
