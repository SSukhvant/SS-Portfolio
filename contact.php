<?php

$name = $_REQUEST['name'];
$email = $_REQUEST['Email'];
$message = $_REQUEST['Message'];

if (empty($name) || empty($email) || empty($message))
{
    echo "Please fill all the fields";
}
else
{
    mail("sukhvantsingh2@gmail.com", "Web Visitor", $message, "From: $name <$email>");
    echo "<script type='text/javascript'>alert('Your message sent successfully');
    window.history.log(-1);
    </script>";
}
?>
