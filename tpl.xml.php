<?= '<?xml version="1.0" encoding="UTF-8" ?>' ?>
<rss version="2.0" xmlns:content="http://purl.org/rss/1.0/modules/content/">
  <channel>
    <title><?= @$tpl['channel_title'] ?: 'Fortune Daddy' ?></title>
    <link><?= @$tpl['channel_link'] ?: ("http://" . $_SERVER['HTTP_HOST'] . "/" . $_SERVER['REQUEST_URI']) ?></link>
    <description><?= @$tpl['description'] ?></description>
    <pubDate><?= date('r') ?></pubDate>
    <language>en</language>
    <item>
      <title><?= htmlentities($tpl['quote']) ?></title>
      <link><?= @$tpl['quote_link'] ?: ("http://" . $_SERVER['HTTP_HOST'] . "/" . $_SERVER['REQUEST_URI']) ?></link>
      <description><?= htmlentities($tpl['quote']) ?></description>
      <guid isPermalink="false"><?= rand() ?></guid>
      <pubDate><?= date('r') ?></pubDate>
    </item>
  </channel>
</rss>
