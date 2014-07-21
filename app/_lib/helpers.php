<?php

function snippet($snippet, $data=array(), $return=false) {
  return tpl::loadFile(c::get('ROOT_SNIPPETS') . $snippet . '.php', $data, $return);
}

function dump($var) {
  return a::show($var);
}
