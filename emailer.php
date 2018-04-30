<?php

    //Get the form fields, removes html tags and whitespace.
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $phone = strip_tags(trim($_POST["phone"]));
    $phone = str_replace(array("\r","\n"),array(" "," "),$phone);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL); 
    
    $addressline1 = strip_tags(trim($_POST["addressLine1"]));
    $addressline1 = str_replace(array("\r","\n"),array(" "," "),$addressline1);
    $addressline2 = strip_tags(trim($_POST["addressLine2"]));
    $addressline2 = str_replace(array("\r","\n"),array(" "," "),$addressline2);
    $addressline3 = strip_tags(trim($_POST["addressLine3"]));
    $addressline3 = str_replace(array("\r","\n"),array(" "," "),$addressline3);


    // Check the data.
    if (empty($name) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: http://www.take2tech.ca/InnoGradSurvey/index.php?success=-1#surveySubmit");
        exit;
    }

    // // // // Check the data.
    // // // if (empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // // //     header("Location: http://www.take2tech/InnoGradSurvey/index.php?success=-1#survey");
    // // //     exit;
    // // // }

    // Set the recipient email address. Update this to YOUR desired email address.
    $recipient = "tmurv@shaw.ca";

    // Set the email subject.
    $subject = "New contact from $name";

    // Build the email content.
    $email_content = "Contact Info:\n\n";
    $email_content .= "Name: $name\n";
    $email_content .= "Phone: $phone\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Address Line 1: $addressline1\n";
    $email_content .= "Address Line 2: $addressline2\n";
    $email_content .= "City/Province/Postal: $addressline3\n\n";
    // // //$email_content .= "Message:\n$message\n";

    // Build the email headers.
    $email_headers = "From: $name <$email>";

    // Send the email.
    mail($recipient, $subject, $email_content, $email_headers);
    
    // Redirect to the index.html page with success code
    header("Location: http://www.take2tech.ca/InnoGradSurvey/index.php?success=1#surveySubmit");

?>