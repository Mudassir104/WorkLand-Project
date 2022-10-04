<?php
    if (isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $msg=$_POST['message'];

        $to='mudassirameen104@gmail.com';
        $subject="Form submission";
        $message="Name: ".$name."\n"."Phone Number: " . $phone . "\nEmail: ". $email . "\n$name write the following messge: " . "\n\n". $msg;
        $headers= "From: " . $email;

        if (mail($to, $subject, $message, $headers)) {
            echo "Form submitted successfully. Thanks $name";
        } else {
            echo "Somting went wrong!!!";
        }
        
    }
?>