{include file="common/header.tpl"}
<body>
  {include file="nav.tpl"}
  <main class="cd-main-content">
    <nav class="cd-side-nav js-cd-side-nav">
      <ul class="cd-side__list js-cd-side__list">
        <li class="cd-side__label"><span></span>
            {literal}
            <!-- ads -->
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- fast -->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-3321194381719400"
                 data-ad-slot="9792460235"
                 data-ad-format="auto"
                 data-full-width-responsive="true"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            {/literal}
        </li>
      </ul>
    </nav>
    <table class="fl-table">
      <thead>
        <tr>
          <th>日付</th>
          <th>500円</th>
          <th>1000円</th>
          <th>2500円</th>
          <th>5000円</th>
          <th>10000円</th>
          <th>50000円</th>
        </tr>
      </thead>
      <tbody>
          {foreach from=$rows item=row}
          <tr>
              {foreach from=","|explode:$row item="column"}
              <td>{$column}</td>
              {/foreach}
          </tr>
          {/foreach}
      </tbody>
    </table>
  </main> <!-- .cd-main-content -->
</body>
{include file="common/footer.tpl"}