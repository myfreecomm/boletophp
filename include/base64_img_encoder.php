<?php
  function base64_img_encode($src){
    $img_src = file_get_contents($_SERVER['PWD'].'/'.$src);
    $ext = end(explode('.', $src));
    return 'data:image/'.$ext.';base64,'.base64_encode($img_src);
  }
?>
