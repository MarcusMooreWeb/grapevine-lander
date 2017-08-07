<?php

$whilelist = array( 'name', 'email', 'message');
$email_address = 'marcusmooreweb@gmail.com, camilyon2@gmail.com';
$subject = 'Contact Form Test';
$errors = array();
$fields = array();

if ( ! empty( $_POST )) {
  
  if ( intval( $_POST['human'] ) !== 7 ) {
    $errors[] = 'Your math is suspect';
  }
  
  if ( ! empty( $_POST['email'] ) && ! filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL ) ) {
    $errors[] = 'That is not a valid email adress';
  }
  
  foreach ( $whilelist as $key ) {
    $fields[$key] = $_POST[$key];
  }
  
  foreach ( $fields as $field => $data ) {
    if ( empty( $data ) ) {
      $errors[] = 'Please enter your ' . $field;
    }
  }
  
  if ( empty ( $errors ) ) {
    $sent = mail($email_address, $subject, $fields['message'] );
  }
  
}