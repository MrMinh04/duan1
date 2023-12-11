<?php
function register($account_user, $account_pass, $account_sdt, $account_email, $account_address){
    $sql = "INSERT INTO account(account_user, account_pass, account_sdt, account_email, account_address) VALUES('$account_user', '$account_pass', '$account_sdt', '$account_email', '$account_address')";
    pdo_execute($sql);
}
function check_user($account_user, $account_pass){
    $sql = "SELECT * FROM account WHERE account_user='".$account_user."' AND account_pass='".$account_pass."'";
    $check_user = pdo_query_one($sql);
    return $check_user;
}
function select_account(){
    $sql = "SELECT * FROM account";
    $account = pdo_query($sql);
    return $account;
}
function select_account_user(){
    $sql = "SELECT account_user FROM account";
    $account_user = pdo_query($sql);
    return $account_user;
}
function delete_account($account_id){
    $sql = "DELETE FROM account WHERE account_id=$account_id";
    pdo_execute($sql);
}
?>