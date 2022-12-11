<?php
    if (isset($_POST['submit'])) {
        $firstName = $_POST['first-name'];
        $lastName = $_POST['last-name'];
        $mailFrom = $_POST['email'];
        $message = $_POST['message'];

        $mailTo = "voegerlt@msu.edu";
        $headers = "From: ".$mailFrom;
        $subject = "New contact form submission";
        $txt = "You have received an email from ".$firstName." ".$lastName.".\n\n".$message;

        mail($mailTo, $subject, $txt, $headers);

        header("Location: index.html?mailsent");
    }
?>
