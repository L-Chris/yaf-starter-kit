<?php
function get_client_ip() {
  $http_client_ip = getenv('HTTP_CLIENT_IP');
  if ($http_client_ip && strcasecmp($http_client_ip, 'unknown'))
    return $http_client_ip;

  $http_x_forwarded_for = getenv('HTTP_X_FORWARDED_FOR');
  if ($http_x_forwarded_for && strcasecmp($http_x_forwarded_for, 'unknown'))
    return $http_x_forwarded_for;

  $remote_addr = getenv('REMOTE_ADDR');
  if ($remote_addr && strcasecmp($remote_addr, 'unknown'))
    return $remote_addr;

  $remote_addr = $_SERVER['REMOTE_ADDR'];
  if (isset($remote_addr) && $remote_addr && strcasecmp($remote_addr))
    return $remote_addr;

  return 'unknown';
}
?>