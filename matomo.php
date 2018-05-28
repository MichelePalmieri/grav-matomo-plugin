<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;

class matomoPlugin extends Plugin
{
    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            'onAssetsInitialized' => ['onAssetsInitialized', 0]
        ];
    }

    /**
     * Add matomo JS
     */
    public function onAssetsInitialized()
    {
        if ($this->isAdmin()) {
            return;
        }

        $siteId = trim($this->config->get('plugins.matomo.siteId'));
        $siteMatomoURL = trim($this->config->get('plugins.matomo.siteMatomoURL'));
        

        $search = array('http://','https://');
        $siteMatomoURL = str_replace($search,'',$siteMatomoURL);
        if ($siteId && $siteMatomoURL) {
            $init = "
//<!-- Matomo -->
  var _paq = _paq || [];
  // tracker methods like \"setCustomDimension\" should be called before \"trackPageView\"
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u=\"//{$siteMatomoURL}/\";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '{$siteId}']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- Matomo Image Tracker-->
<noscript><img src=\"//{$siteMatomoURL}/piwik.php?idsite={$siteId}&rec=1\" style=\"border:0\" alt=\"\" /></noscript>
<!-- End Matomo -->
<script type=\"text/javascript\">
            ";
            $this->grav['assets']->addInlineJs($init);
        }
    }
}
?>
