<?php

function easy_theme_preprocess_node($variables) {
  if($variables['page']) {
    header("Last-Modified: " . gmdate("D, d M Y H:i:s", $variables['node']->changed) . " GMT");
  }
}
