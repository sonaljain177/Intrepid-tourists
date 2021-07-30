<?php

$user_name = ($_POST['user1']);
$pas_word = ($_POST['pas']);
if($user_name=='travelogue' && $pas_word=='strength')
{
    header('location:validateAdmin.php');
}
else
{
    header('location:adUser.php');
}?>