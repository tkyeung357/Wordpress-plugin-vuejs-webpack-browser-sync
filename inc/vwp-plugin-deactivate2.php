<?php

class VwpPluginDeactivate2
{
  public static function deactivate() {
    flush_rewrite_rules();
  }
}
