<?php
if($_POST["message"]) {
    mail("alisonchan617@gmail.com", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>
