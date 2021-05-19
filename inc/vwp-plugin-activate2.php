<?php

class VwpPluginActivate2
{
  public static function activate() {
    flush_rewrite_rules();
  }
}
