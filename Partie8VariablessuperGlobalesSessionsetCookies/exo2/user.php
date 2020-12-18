<?php
session_start();
?>
<div>Bonjour <?= $_SESSION['lastname'] . ' ' . $_SESSION['firsname'];?> tu as <?= $_SESSION['age']; ?> ans.</div>