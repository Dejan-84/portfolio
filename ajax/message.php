<?php
//ini_set('display_errors',0);

//get data from form 

if (isset($_POST['form'])) {

    $validation = true;
    $message = '';
    $response = array();

    $form = array();
    parse_str($_POST['form'], $form);

    include '../includes/function.php';

    $provera = prazna_polja($form);

    if ($provera['status'] == 0) {

        $validation = false;
        $message .= $provera['message'];
    }else{
     
        $email = htmlspecialchars($form['email']);

        $provera_email = provera_formata_mejla($email);

        if($provera_email['status'] == 0){
            $validation = false;
            $message .= $provera_email['message'];
        }
    }

    if($validation){

        //setting variables
        $name = $form['name'];
        $email = htmlspecialchars($form['email']);
        $comment = $form['message'];

        $to = "dekidjurdjev@gmail.com";
        $subject = "Mail From Portfolio";

        $txt ="<p>Name = ". $name . "</p>
                <p>Email = " . $email . "</p>
                <p>Message =" . $comment . "</p>";

       

        $status_slanja = posalji_mail($subject, $to, $txt);

        $message .= $status_slanja['message'];

      
    }
   
    $response['message'] = $message;

    echo json_encode($response);
}