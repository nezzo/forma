<?php
// ������ ��� ������ � "�������"!

session_start();
unset ($_SESSION['login']);
header ('Location: index.html');
exit();
?>