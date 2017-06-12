<?php
$session = new USER();
if(!$session->is_loggedin()) {
    $session->redirect('?page=index');
}
?>