<?php

  // Login/Logout functions 

  function login($x) {
    session_regenerate_id();
    $_SESSION['account_id'] = $x['id'];
    $_SESSION['last_login'] = time();
    return true;
  }

  function logout_account() {
    unset($_SESSION['account_id']);
    unset($_SESSION['last_login']);
    return true;
  }

  function is_logged_in() {
    return isset($_SESSION['account_id']);
  }

  function require_login() {
    if(!is_logged_in()) {
      redirect_to(WWW_ROOT);
    } else {

    }
  }

?>
