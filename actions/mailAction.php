<?php

    if (isset($_POST['submit'])) {

        if(!empty($_POST['mailNom']) & !empty($_POST['mailPrenom']) & !empty($_POST['mailTel']) & !empty($_POST['mailMail']) & !empty($_POST['mailMessage'])){

            $lastname = htmlspecialchars($_POST['mailNom']);
            $firstname = htmlspecialchars($_POST['mailPrenom']);
            $phone = htmlspecialchars($_POST['mailTel']);
            $mail = htmlspecialchars($_POST['mailEmail']);
            $message = htmlspecialchars($_POST['mailMessage']);

            $mailFrom = "jtdr.dev@gmail.com";
            $mailTo = "jtdr.dev@gmail.com";

            $headers = "From: $mailFrom \r\n";
            $headers .= "Reply-to: $mail \r\n";
            $headers .='Content-Type:text/html; charset="uft-8"'."\n";
            $headers .='Content-Transfer-Encoding: 8bit';

            $email_body ='
            <html>
                <body>
                    <div align="left" style="color: black">
                        <ul>
                            <li>Nom :' .$lastname.'</li>
                            <li>Prénom :' .$firstname.'</li>
                            <li>Téléphone :' .$phone.'</li>
                            <li>Mail :' .$mail.'</li>
                        <ul>
                        <br />
                        '.$message.'
                        <br />
                    </div>
                </body>
            </html>';

            mail($mailTo, 'Nouveau message du site', $email_body, $headers);

            $msg= "<script language=javascript> alert('Votre message a bien été envoyé !') </script>";

        } else {
            $msg = "Veuillez renseigner tous les champs";
        }
    }
                    