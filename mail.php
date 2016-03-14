<?php

$recepient = "hello@baodigital.com";
$sitename = "http://baodigital.com/";

$name = trim($_POST["my-name"]);
$email = trim($_POST["email"]);
$mobile = trim($_POST["mobile"]);
$text = trim($_POST["text-mail"]);
$message = "Имя: $name \nemail: $email \nТелефон: $mobile \nОписание задачи: $text";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");