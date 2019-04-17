<footer>
<small>&copy; 2019-<span id="thisYear"></span> karplusan forest inc.</small>
</footer>
{literal}
<script>
  date = new Date();
  thisYear = date.getFullYear();
  document.getElementById("thisYear").innerHTML = thisYear;
</script>
{/literal}
<script src="{asset('js/util.js')}"></script>
<script src="{asset('js/menu-aim.js')}"></script>
<script src="{asset('js/main.js')}"></script>
</html>