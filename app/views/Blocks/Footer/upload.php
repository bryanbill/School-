<?php
try {
  $response = FroalaEditor_Image::getList('$images');
  echo stripslashes(json_encode($response));
}
catch (Exception $e) {
  http_response_code(404);
}

?>