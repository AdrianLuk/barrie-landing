<?php

//path and name of the file
$filetxt = '../data.json';

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message']) && !empty($_POST['terms'])){
    
    $formdata = array(
        'name'    => $_POST['name'],
        'email'   => $_POST['email'],
        'phone'   => $_POST['phone'],
        'message' => $_POST['message']
    );

    $filetxt = '../data.json';

    $arr_data = array(); //to store all form data

    //check if file exists
    if(file_exists($filetxt)){
        //gets json-data from file
        $jsondata = file_get_contents($filetxt);

        //converts json string into array
        $arr_data = json_decode($jsondata, true);

        //append array with new form data
        $arr_data[] = $formdata;

        //encodes the array into a string in JSON format (JSON_PRETTY_PRINT - uses whitespace in json-string, for human readable)
        $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);

        //save json string in data.json
        //outputs error message if data cannot be saved
        if(file_put_contents('../data.json', $jsondata)){
            header('Location: ../index.php?submit=success');
        }else{
            header('Location: ../index.php?submit=error');
        }
    }
}else{
    header('Location: ../index.php?submit=error');
}