<?php
/**
 * SI.php
 * @author Revin Roman http://phptime.ru
 */

namespace rmrevin\yii\socicon;

/**
 * Class SI
 * @package rmrevin\yii\socicon
 */
class SI extends Socicon
{

    /** @var string CSS Class prefix */
    public static $cssPrefix = 'socicon';

    /**
     * Get all icon constants for dropdown list in example
     * @param bool $html whether to render icon as array value prefix
     * @return array
     */
    public static function getConstants($html = false)
    {
        $result = [];
        foreach ((new \ReflectionClass(get_class()))->getConstants() as $constant) {
            $key = static::$cssPrefix . ' ' . static::$cssPrefix . '-' . $constant;

            $result[$key] = ($html)
                ? static::icon($constant) . '&nbsp;&nbsp;' . $constant
                : $constant;
        }
        return $result;
    }

    const _TWITTER = 'twitter';
    const _FACEBOOK = 'facebook';
    const _GOOGLE = 'google';
    const _PINTEREST = 'pinterest';
    const _FOURSQUARE = 'foursquare';
    const _YAHOO = 'yahoo';
    const _SKYPE = 'skype';
    const _YELP = 'yelp';
    const _FEEDBURNER = 'feedburner';
    const _LINKEDIN = 'linkedin';
    const _VIADEO = 'viadeo';
    const _XING = 'xing';
    const _MYSPACE = 'myspace';
    const _SOUNDCLOUD = 'soundcloud';
    const _SPOTIFY = 'spotify';
    const _GROOVESHARK = 'grooveshark';
    const _LASTFM = 'lastfm';
    const _YOUTUBE = 'youtube';
    const _VIMEO = 'vimeo';
    const _DAILYMOTION = 'dailymotion';
    const _VINE = 'vine';
    const _FLICKR = 'flickr';
    const _500PX = '500px';
    const _INSTAGRAM = 'instagram';
    const _WORDPRESS = 'wordpress';
    const _TUMBLR = 'tumblr';
    const _BLOGGER = 'blogger';
    const _TECHNORATI = 'technorati';
    const _REDDIT = 'reddit';
    const _DRIBBBLE = 'dribbble';
    const _STUMBLEUPON = 'stumbleupon';
    const _DIGG = 'digg';
    const _ENVATO = 'envato';
    const _BEHANCE = 'behance';
    const _DELICIOUS = 'delicious';
    const _DEVIANTART = 'deviantart';
    const _FORRST = 'forrst';
    const _PLAY = 'play';
    const _ZERPLY = 'zerply';
    const _WIKIPEDIA = 'wikipedia';
    const _APPLE = 'apple';
    const _FLATTR = 'flattr';
    const _GITHUB = 'github';
    const _CHIMEIN = 'chimein';
    const _FRIENDFEED = 'friendfeed';
    const _NEWSVINE = 'newsvine';
    const _IDENTICA = 'identica';
    const _BEBO = 'bebo';
    const _ZYNGA = 'zynga';
    const _STEAM = 'steam';
    const _XBOX = 'xbox';
    const _WINDOWS = 'windows';
    const _OUTLOOK = 'outlook';
    const _CODERWALL = 'coderwall';
    const _TRIPADVISOR = 'tripadvisor';
    const _APPNET = 'appnet';
    const _GOODREADS = 'goodreads';
    const _TRIPIT = 'tripit';
    const _LANYRD = 'lanyrd';
    const _SLIDESHARE = 'slideshare';
    const _BUFFER = 'buffer';
    const _RSS = 'rss';
    const _VKONTAKTE = 'vkontakte';
    const _DISQUS = 'disqus';
    const _HOUZZ = 'houzz';
    const _MAIL = 'mail';
    const _PATREON = 'patreon';
    const _PAYPAL = 'paypal';
    const _PLAYSTATION = 'playstation';
    const _SMUGMUG = 'smugmug';
    const _SWARM = 'swarm';
    const _TRIPLEJ = 'triplej';
    const _YAMMER = 'yammer';
    const _STACKOVERFLOW = 'stackoverflow';
    const _DRUPAL = 'drupal';
    const _ODNOKLASSNIKI = 'odnoklassniki';
    const _ANDROID = 'android';
    const _MEETUP = 'meetup';
    const _PERSONA = 'persona';

    const _TWITTER_CHAR = 'a';
    const _FACEBOOK_CHAR = 'b';
    const _GOOGLE_CHAR = 'c';
    const _PINTEREST_CHAR = 'd';
    const _FOURSQUARE_CHAR = 'e';
    const _YAHOO_CHAR = 'f';
    const _SKYPE_CHAR = 'g';
    const _YELP_CHAR = 'h';
    const _FEEDBURNER_CHAR = 'i';
    const _LINKEDIN_CHAR = 'j';
    const _VIADEO_CHAR = 'k';
    const _XING_CHAR = 'l';
    const _MYSPACE_CHAR = 'm';
    const _SOUNDCLOUD_CHAR = 'n';
    const _SPOTIFY_CHAR = 'o';
    const _GROOVESHARK_CHAR = 'p';
    const _LASTFM_CHAR = 'q';
    const _YOUTUBE_CHAR = 'r';
    const _VIMEO_CHAR = 's';
    const _DAILYMOTION_CHAR = 't';
    const _VINE_CHAR = 'u';
    const _FLICKR_CHAR = 'v';
    const _500PX_CHAR = 'w';
    const _INSTAGRAM_CHAR = 'x';
    const _WORDPRESS_CHAR = 'y';
    const _TUMBLR_CHAR = 'z';
    const _BLOGGER_CHAR = 'A';
    const _TECHNORATI_CHAR = 'B';
    const _REDDIT_CHAR = 'C';
    const _DRIBBBLE_CHAR = 'D';
    const _STUMBLEUPON_CHAR = 'E';
    const _DIGG_CHAR = 'F';
    const _ENVATO_CHAR = 'G';
    const _BEHANCE_CHAR = 'H';
    const _DELICIOUS_CHAR = 'I';
    const _DEVIANTART_CHAR = 'J';
    const _FORRST_CHAR = 'K';
    const _PLAY_CHAR = 'L';
    const _ZERPLY_CHAR = 'M';
    const _WIKIPEDIA_CHAR = 'N';
    const _APPLE_CHAR = 'O';
    const _FLATTR_CHAR = 'P';
    const _GITHUB_CHAR = 'Q';
    const _CHIMEIN_CHAR = 'R';
    const _FRIENDFEED_CHAR = 'S';
    const _NEWSVINE_CHAR = 'T';
    const _IDENTICA_CHAR = 'U';
    const _BEBO_CHAR = 'V';
    const _ZYNGA_CHAR = 'W';
    const _STEAM_CHAR = 'X';
    const _XBOX_CHAR = 'Y';
    const _WINDOWS_CHAR = 'Z';
    const _OUTLOOK_CHAR = '1';
    const _CODERWALL_CHAR = '2';
    const _TRIPADVISOR_CHAR = '3';
    const _APPNET_CHAR = '4';
    const _GOODREADS_CHAR = '5';
    const _TRIPIT_CHAR = '6';
    const _LANYRD_CHAR = '7';
    const _SLIDESHARE_CHAR = '8';
    const _BUFFER_CHAR = '9';
    const _RSS_CHAR = ',';
    const _VKONTAKTE_CHAR = ';';
    const _DISQUS_CHAR = ':';
    const _HOUZZ_CHAR = '+';
    const _MAIL_CHAR = '@';
    const _PATREON_CHAR = '=';
    const _PAYPAL_CHAR = '-';
    const _PLAYSTATION_CHAR = '^';
    const _SMUGMUG_CHAR = '¨';
    const _SWARM_CHAR = '$';
    const _TRIPLEJ_CHAR = '*';
    const _YAMMER_CHAR = '&';
    const _STACKOVERFLOW_CHAR = '(';
    const _DRUPAL_CHAR = '#';
    const _ODNOKLASSNIKI_CHAR = '.';
    const _ANDROID_CHAR = '_';
    const _MEETUP_CHAR = ']';
    const _PERSONA_CHAR = ')';

    const _TWITTER_COLOR = '#4da7de';
    const _FACEBOOK_COLOR = '#3e5b98';
    const _GOOGLE_COLOR = '#d93e2d';
    const _PINTEREST_COLOR = '#c92619';
    const _FOURSQUARE_COLOR = '#F94877';
    const _YAHOO_COLOR = '#6E2A85';
    const _SKYPE_COLOR = '#28abe3';
    const _YELP_COLOR = '#c83218';
    const _FEEDBURNER_COLOR = '#FFCC00';
    const _LINKEDIN_COLOR = '#3371b7';
    const _VIADEO_COLOR = '#e4a000';
    const _XING_COLOR = '#005a60';
    const _MYSPACE_COLOR = '#323232';
    const _SOUNDCLOUD_COLOR = '#fe3801';
    const _SPOTIFY_COLOR = '#7bb342';
    const _GROOVESHARK_COLOR = '#000000';
    const _LASTFM_COLOR = '#d41316';
    const _YOUTUBE_COLOR = '#e02a20';
    const _VIMEO_COLOR = '#51b5e7';
    const _DAILYMOTION_COLOR = '#004e72';
    const _VINE_COLOR = '#00b389';
    const _FLICKR_COLOR = '#1e1e1b';
    const _500PX_COLOR = '#58a9de';
    const _INSTAGRAM_COLOR = '#9c7c6e';
    const _WORDPRESS_COLOR = '#464646';
    const _TUMBLR_COLOR = '#45556c';
    const _BLOGGER_COLOR = '#ec661c';
    const _TECHNORATI_COLOR = '#5cb030';
    const _REDDIT_COLOR = '#e74a1e';
    const _DRIBBBLE_COLOR = '#e84d88';
    const _STUMBLEUPON_COLOR = '#e64011';
    const _DIGG_COLOR = '#1d1d1b';
    const _ENVATO_COLOR = '#597c3a';
    const _BEHANCE_COLOR = '#000000';
    const _DELICIOUS_COLOR = '#020202';
    const _DEVIANTART_COLOR = '#c5d200';
    const _FORRST_COLOR = '#5B9A68';
    const _PLAY_COLOR = '#000000';
    const _ZERPLY_COLOR = '#9DBC7A';
    const _WIKIPEDIA_COLOR = '#000000';
    const _APPLE_COLOR = '#B9BFC1';
    const _FLATTR_COLOR = '#F67C1A';
    const _GITHUB_COLOR = '#221e1b';
    const _CHIMEIN_COLOR = '#888688';
    const _FRIENDFEED_COLOR = '#2F72C4';
    const _NEWSVINE_COLOR = '#075B2F';
    const _IDENTICA_COLOR = '#000000';
    const _BEBO_COLOR = '#EF1011';
    const _ZYNGA_COLOR = '#DC0606';
    const _STEAM_COLOR = '#8F8D8A';
    const _XBOX_COLOR = '#92C83E';
    const _WINDOWS_COLOR = '#00BDF6';
    const _OUTLOOK_COLOR = '#0072C6';
    const _CODERWALL_COLOR = '#3E8DCC';
    const _TRIPADVISOR_COLOR = '#000000';
    const _APPNET_COLOR = '#494949';
    const _GOODREADS_COLOR = '#463020';
    const _TRIPIT_COLOR = '#1982C3';
    const _LANYRD_COLOR = '#3c80c9';
    const _SLIDESHARE_COLOR = '#4ba3a6';
    const _BUFFER_COLOR = '#000000';
    const _RSS_COLOR = '#f26109';
    const _VKONTAKTE_COLOR = '#5a7fa6';
    const _DISQUS_COLOR = '#2e9fff';
    const _HOUZZ_COLOR = '#7CC04B';
    const _MAIL_COLOR = '#000000';
    const _PATREON_COLOR = '#E44727';
    const _PAYPAL_COLOR = '#009cde';
    const _PLAYSTATION_COLOR = '#000000';
    const _SMUGMUG_COLOR = '#ACFD32';
    const _SWARM_COLOR = '#FC9D3C';
    const _TRIPLEJ_COLOR = '#E53531';
    const _YAMMER_COLOR = '#1175C4';
    const _STACKOVERFLOW_COLOR = '#FD9827';
    const _DRUPAL_COLOR = '#00598e';
    const _ODNOKLASSNIKI_COLOR = '#f48420';
    const _ANDROID_COLOR = '#8ec047';
    const _MEETUP_COLOR = '#e2373c';
    const _PERSONA_COLOR = '#e6753d';

}