<?php
class Response {
  static function success($response, $data) {
    $result = array(
      'status' => 0,
      'data' => $data
    );
    $response->setBody(json_encode($result));
  }
  static function fail($response, $data) {
    $result = array(
      'status' => 1,
      'data' => $data
    );
    $response->setBody(json_encode($result));
  }
}
?>