<?php
echo sha1("juan");

$password = password_hash('admin1234', PASSWORD_DEFAULT);
echo '<br>'.$password;