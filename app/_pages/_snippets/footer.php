<!-- Scripts -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="/assets/js/jquery-1.10.2.min.js"><\/script>')</script>
  <script src="/assets/js/main.js"></script>

  <?
    /**
     * LOAD CUSTOM JS
     */
  ?>
  <? if (isset($js)): ?>

    <? if (is_array($js)): ?>
      <? foreach ($js as $jsFile):?>
        <script src="/assets/js/<?=$jsFile?>.js"></script>
      <? endforeach; ?>
    <? elseif ($js !== false): ?>
      <script src="/assets/js/<?=$js?>.js"></script>
    <? endif; ?>

  <? endif; ?>

</body>
</html>
