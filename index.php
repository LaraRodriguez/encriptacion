<?php
echo sha1("juan");

$password1 = password_hash('ana', PASSWORD_DEFAULT);
$password2 = password_hash('luis', PASSWORD_DEFAULT);
$password3 = password_hash('jose', PASSWORD_DEFAULT);
$password4 = password_hash('juan', PASSWORD_DEFAULT);
echo '<br>'.$password1;
echo '<br>'.$password2;
echo '<br>'.$password3;
echo '<br>'.$password4;