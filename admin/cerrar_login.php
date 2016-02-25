<?php
session_start();
unset($_SESSION['Usuario']);
unset($_SESSION['Admin']);
unset($_SESSION['Horario']);
header("Location: ../login/usuarios");
?>