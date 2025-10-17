<?php 
setcookie(
    "preferencias",       //nome
    "tema=escuro&fonte=grande", //valor
    time() + (86400 * 30), // expira em 30 dias
    "/",          //path: disponivel em todo site
    "",         //domain: 
    true,    //secure: só envia via HTTPS
    true,      //httponly: não é acessivel via JavaScript
);
echo "Cookie de preferências criado";
?>