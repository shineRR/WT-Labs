<?php

function writeFile($user)
{
    $fp = fopen('users.csv', 'a');
    fputcsv($fp, $user);
    fclose($fp);
}

function valid_email($email)
{
    return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) ? false : true;
}

function emailExists($email)
{
    if (file_exists('users.csv')) {
        $handle = fopen('users.csv', 'r') or die("gg");
        while (($data = fgetcsv($handle, 1000, ",")) !== false) {
            $num = count($data);
            if (($num > 0) && ($data[0] == $email)) {
                fclose($handle);
                return true;
            }
        }
        fclose($handle);
    }
    return false;
}

function validateFieldsLength($email, $name)
{
    return (strlen($email) > 0 && strlen($name) > 0) ? true : false;
}

$error = '';

if (isset($_GET['email']) && isset($_GET['name'])) {
    $email = $_GET['email'];
    $name = $_GET['name'];
    if (validateFieldsLength($email, $name)) {
        if (!valid_email($email)) {
            $error = "Invalid email address.";
        } else {
            if (!emailExists($email)) {
                $user = array($email, $name);
                writeFile($user);
                $error = 'Valid email address.';
            } else {
                $error = 'Email already exists.';
            }
        }
    } else {
        $error = 'All field lengths must be greater than 0.';
    }
}
