<?php
  /**
   * Runs the PHP function htmlspecialchars on the value passed.
   *
   * @param  string $value  the value to escape
   * @return string the escaped value
   */
function esc_specialchars($value){
    // Numbers and boolean values get turned into strings which can cause problems
    // with type comparisons (e.g. === or is_int() etc).
    return is_string($value) ? htmlspecialchars($value, ENT_QUOTES, sfConfig::get('sf_charset')) : $value;
}

define('ESC_SPECIALCHARS','esc_specialchars');