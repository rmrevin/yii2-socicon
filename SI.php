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
    const _GOOGLEPLUS = 'googleplus';
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
    const _MIXCLOUD = 'mixcloud';
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
    const _AMAZON = 'amazon';
    const _ELLO = 'ello';
    const _8TRACKS = '8tracks';
    const _TWITCH = 'twitch';
    const _AIRBNB = 'airbnb';
    const _POCKET = 'pocket';
    const _WHATSAPP = 'whatsapp';
    const _STOREHOUSE = 'storehouse';
    const _ICQ = 'icq';
    const _MODELMAYHEM = 'modelmayhem';
    const _ISTOCK = 'istock';
    const _ANGELLIST = 'angellist';
    const _PERISCOPE = 'periscope';
    const _RAVELRY = 'ravelry';
    const _SNAPCHAT = 'snapchat';
    const _WEIBO = 'weibo';
    const _DOUBAN = 'douban';
    const _BAIDU = 'baidu';
    const _QQ = 'qq';
    const _RENREN = 'renren';
    const _EBAY = 'ebay';
    const _IMDB = 'imdb';
    const _STAYFRIENDS = 'stayfriends';
    const _RESIDENTADVISOR = 'residentadvisor';
    const _GOOGLE = 'google';
    const _YANDEX = 'yandex';
    const _SHARETHIS = 'sharethis';
    const _BANDCAMP = 'bandcamp';
    const _ITUNES = 'itunes';
    const _DEEZER = 'deezer';
    const _MEDIUM = 'medium';
    const _TELEGRAM = 'telegram';
    const _OPENID = 'openid';
    const _AMPLEMENT = 'amplement';
    const _VIBER = 'viber';
    const _ZOMATO = 'zomato';
    const _QUORA = 'quora';
    const _DRAUGIEM = 'draugiem';
    const _ENDOMONDO = 'endomondo';
    const _FILMWEB = 'filmweb';
    const _STACKEXCHANGE = 'stackexchange';
    const _WYKOP = 'wykop';
    const _TEAMSPEAK = 'teamspeak';
    const _VENTRILO = 'ventrilo';
    const _RAIDCALL = 'raidcall';
    const _MUMBLE = 'mumble';
    const _TEAMVIEWER = 'teamviewer';
    const _YOUNOW = 'younow';
    const _BEBEE = 'bebee';
    const _HITBOX = 'hitbox';
    const _REVERBNATION = 'reverbnation';
    const _FORMULR = 'formulr';

    const _TWITTER_COLOR = '#4da7de';
    const _FACEBOOK_COLOR = '#3e5b98';
    const _GOOGLEPLUS_COLOR = '#dd4b39';
    const _PINTEREST_COLOR = '#c92619';
    const _FOURSQUARE_COLOR = '#f94877';
    const _YAHOO_COLOR = '#6e2a85';
    const _SKYPE_COLOR = '#28abe3';
    const _YELP_COLOR = '#c83218';
    const _FEEDBURNER_COLOR = '#ffcc00';
    const _LINKEDIN_COLOR = '#3371b7';
    const _VIADEO_COLOR = '#e4a000';
    const _XING_COLOR = '#005a60';
    const _MYSPACE_COLOR = '#323232';
    const _SOUNDCLOUD_COLOR = '#fe3801';
    const _SPOTIFY_COLOR = '#7bb342';
    const _GROOVESHARK_COLOR = '#000000';
    const _MIXCLOUD_COLOR = '#000000';
    const _LASTFM_COLOR = '#d41316';
    const _YOUTUBE_COLOR = '#e02a20';
    const _VIMEO_COLOR = '#51b5e7';
    const _DAILYMOTION_COLOR = '#004e72';
    const _VINE_COLOR = '#00b389';
    const _FLICKR_COLOR = '#1e1e1b';
    const _500PX_COLOR = '#58a9de';
    const _INSTAGRAM_COLOR = '#000000';
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
    const _FRIENDFEED_COLOR = '#2F72C4';
    const _NEWSVINE_COLOR = '#075B2F';
    const _IDENTICA_COLOR = '#000000';
    const _BEBO_COLOR = '#EF1011';
    const _ZYNGA_COLOR = '#DC0606';
    const _STEAM_COLOR = '#171a21';
    const _XBOX_COLOR = '#92C83E';
    const _WINDOWS_COLOR = '#00BDF6';
    const _OUTLOOK_COLOR = '#0072C6';
    const _CODERWALL_COLOR = '#3E8DCC';
    const _TRIPADVISOR_COLOR = '#4B7E37';
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
    const _AMAZON_COLOR = '#ff9900';
    const _ELLO_COLOR = '#000000';
    const _8TRACKS_COLOR = '#122c4b';
    const _TWITCH_COLOR = '#6441a5';
    const _AIRBNB_COLOR = '#ff5a5f';
    const _POCKET_COLOR = '#ED4055';
    const _WHATSAPP_COLOR = '#20B038';
    const _STOREHOUSE_COLOR = '#25B0E6';
    const _ICQ_COLOR = '#7EBD00';
    const _MODELMAYHEM_COLOR = '#000000';
    const _ISTOCK_COLOR = '#000000';
    const _ANGELLIST_COLOR = '#000000';
    const _PERISCOPE_COLOR = '#3AA4C6';
    const _RAVELRY_COLOR = '#B6014C';
    const _SNAPCHAT_COLOR = '#fffa37';
    const _WEIBO_COLOR = '#e31c34';
    const _DOUBAN_COLOR = '#3ca353';
    const _BAIDU_COLOR = '#2629d9';
    const _QQ_COLOR = '#4297d3';
    const _RENREN_COLOR = '#2266b0';
    const _EBAY_COLOR = '#333333';
    const _IMDB_COLOR = '#E8BA00';
    const _STAYFRIENDS_COLOR = '#F08A1C';
    const _RESIDENTADVISOR_COLOR = '#B3BE1B';
    const _GOOGLE_COLOR = '#4285f4';
    const _YANDEX_COLOR = '#FF0000';
    const _SHARETHIS_COLOR = '#01bf01';
    const _BANDCAMP_COLOR = '#619aa9';
    const _ITUNES_COLOR = '#ff5e51';
    const _DEEZER_COLOR = '#32323d';
    const _MEDIUM_COLOR = '#000000';
    const _TELEGRAM_COLOR = '#0088cc';
    const _OPENID_COLOR = '#f78c40';
    const _AMPLEMENT_COLOR = '#0996c3';
    const _VIBER_COLOR = '#7b519d';
    const _ZOMATO_COLOR = '#cb202d';
    const _QUORA_COLOR = '#cb202d';
    const _DRAUGIEM_COLOR = '#ffa32b';
    const _ENDOMONDO_COLOR = '#86ad00';
    const _FILMWEB_COLOR = '#ffc404';
    const _STACKEXCHANGE_COLOR = '#2f2f2f';
    const _WYKOP_COLOR = '#328efe';
    const _TEAMSPEAK_COLOR = '#465674';
    const _VENTRILO_COLOR = '#77808A';
    const _RAIDCALL_COLOR = '#073558';
    const _MUMBLE_COLOR = '#5AB5D1';
    const _TEAMVIEWER_COLOR = '#168EF4';
    const _YOUNOW_COLOR = '#61C03E';
    const _BEBEE_COLOR = '#f28f16';
    const _HITBOX_COLOR = '#99CC00';
    const _REVERBNATION_COLOR = '#000000';
    const _FORMULR_COLOR = '#ff5a60';

}