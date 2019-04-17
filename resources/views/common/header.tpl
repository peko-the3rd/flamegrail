<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link rel="stylesheet" href="{asset('css/style.css')}">
  <link rel="stylesheet" href="{asset('css/table_style.min.css')}">
  <link rel="shortcut icon" href="{asset('img/faviconr.png?v=20190416')}">
  <title>jungle coin</title>
  {literal}
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-134249621-1"></script>
  <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-134249621-1');
  </script>
  {/literal}
  {if isset($smarty.capture.chartjs) }
  {$smarty.capture.chartjs}
  {/if}
</head>