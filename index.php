<?php

$parag = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

$badword = $_GET["badword"];

$replace = str_replace($badword, "***", $parag);

$length_orig = strlen($parag);

$length_repl = strlen($replace);

?>

<p><?php echo $parag; ?></p>
<p><?php echo "La lunghezza del paragrafo è di " .$length_orig ." caratteri."; ?></p>
<p><?php echo $replace; ?></p>
<p><?php echo "La lunghezza del paragrafo è di " .$length_repl ." caratteri."; ?></p>
