<?php

require_once('sessao/confirmaLogin.php');


echo 'usuário deslogado';
session_destroy();
session_unset();