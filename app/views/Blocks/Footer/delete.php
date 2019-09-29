<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

try {
  $response = FroalaEditor_Image::delete($_POST['src']);
  echo stripslashes(json_encode('Success'));
}
catch (Exception $e) {
  http_response_code(404);
}
