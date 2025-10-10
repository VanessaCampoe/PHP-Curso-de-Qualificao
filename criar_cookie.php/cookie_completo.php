<?php 
setcookie(
    "preferencia",  // nome
    "tema=escuro&fonte=grande", // valor
    time() + (86400 * 30), // expira em 30 dias
    "/",      //path: disponivel em todo site
    "",       //domaian: 
    true,      // secure: só 
    true,    // httponly: nao e acessivel via javascript 

);
    echo " Cookie de preferencia cirado ";
    ?>