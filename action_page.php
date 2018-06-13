<?php
 
if ( isset( $_REQUEST ) && !empty( $_REQUEST ) ) {
 if (
 isset( $_REQUEST['Name'], $_REQUEST['Email'], $_REQUEST['Message'] ) &&
  !empty( $_REQUEST['Name'] ) &&
  !empty( $_REQUEST['Email'] )
 ) {
  $message = wordwrap( $_REQUEST['Message'], 70 );
  $to = $_REQUEST['Name'] . '@' . $_REQUEST['Email'];
  $result = @mail( $to, '', $message );
  print 'Message was sent to ' . $to;
 } else {
  print 'Not all information was submitted.';
 }
}
