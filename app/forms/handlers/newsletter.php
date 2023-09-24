<?php
function addSubscriber(string $email): void{
    $checkOnEmail = dbSelect(Tables::Newsletter, condition: "email = '$email'", isSingle: true);
    if ($checkOnEmail){
        notify('Email is already exists', 'warning');
        redirectBack();
    }
    $sql = "INSERT INTO " . Tables::Newsletter->value . " (email) VALUES (:email)";
    $query = DB::connect()->prepare($sql);
    $query->bindParam('email', $email);

    if(!$query->execute()){
        notify('Something goes wrong', 'danger');
        redirectBack();
    }
    notify('You are our new subscriber');
    redirectBack();
}