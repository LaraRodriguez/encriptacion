<?php
echo sha1("juan");

$password1 = password_hash('ana', PASSWORD_DEFAULT);
$password2 = password_hash('pepe', PASSWORD_DEFAULT);
$password3 = password_hash('luis', PASSWORD_DEFAULT);
echo '<br>'.$password1;
echo '<br>'.$password2;
echo '<br>'.$password3;