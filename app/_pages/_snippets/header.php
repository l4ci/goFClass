<!doctype html>
<html class="no-js">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="robots" content="index,follow">

  <title><?= ( isset($title) ? $title : c::get('SITE_TITLE','') )?></title>
  <meta name="description" content="<?= (isset($description) ? $description : c::get('SITE_DESCRIPTION','') )?>">
  <meta name="keywords" content="<?= (isset($keywords) ? $keywords : c::get('SITE_KEYWORDS','') ) ?>">

  <link rel="canonical" href="<?=c::get('SITE_URL')?>">
  <link rel="stylesheet" href="/assets/css/main.css">
  <?
    /**
     * LOAD CUSTOM CSS
     */
  ?>
  <? if (isset($css)): ?>

    <? if (is_array($css)): ?>
      <? foreach ($css as $cssFile):?>
        <link rel="stylesheet" href="/assets/css/<?=$cssFile?>.css">
      <? endforeach; ?>
    <? elseif ($css !== false): ?>
      <link rel="stylesheet" href="/assets/css/<?=$css?>.css">
    <? endif; ?>

  <? endif; ?>

</head>

<body>
