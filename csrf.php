<?php

session_start();

Function CreateCSRF()
{
    $token= base64_encode(openssl_random_pseudo_bytes(32));
    $_SESSION['csrf']=$token;
    return $token; }

function UnsetCSRF()
{
    unset($_SESSION['csrf']);
}

function validation()
{  
    $csrf = isset($_SESSION['csrf']);  
    if(isset($_POST['csrf_token']))
    {  
            $value_POST=$_POST['csrf_token'];
            if($value_POST==$csrf)
            {
                UnsetCSRF();
                return true;  }else{
                UnsetCSRF();
                return false;
            }
    }
    else
    {
            UnsetCSRF();
            return false;
    }
}

?>