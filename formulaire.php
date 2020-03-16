<?php
if (isset($_POST['bouton'])){
    
    $nom = empty($_POST['user_lastname']) ? null : $_POST['user_lastname'];
    $prenom = empty($_POST['user_firstname']) ? null : $_POST['user_firstname'];
    $email = empty($_POST['user_email']) ? null : $_POST['user_email'];
    $messages = empty($_POST['user_message']) ? null : $_POST['user_message'];
    
    if ($nom === null || $prenom === null || $email === null || $messages === null) {
       echo 'champ non rempli';
    } else {
        $to = 'lefevre.gregoire19@gmail.com';
        $subject = 'Contact';
        $message = " $messages";
        $headers = "From: $nom $prenom <".$email.">  \r\n" ;
        "Reply-To: $email \r\n" ;
        
        mail($to, $subject, $message, $headers);
        
        
        $user = "dbu164958";
        $pass = "***REMOVED***";
        
        $dbh = new PDO('mysql:host=db5000303931.hosting-data.io;dbname=dbs296967', $user, $pass);
        
        $pdoStat = $dbh->prepare ("INSERT INTO emailcontact(nom, prenom, emails, messages) VALUES (:nom, :prenom, :email, :messages)") ;
        
        
        $pdoStat->bindValue(':nom', $nom);
        $pdoStat->bindValue(':prenom', $prenom);
        $pdoStat->bindValue(':email', $email);
        $pdoStat->bindValue(':messages', $messages);
        
        $pdoStat->execute();
    }
}



