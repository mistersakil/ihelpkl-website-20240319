<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\Facades\Route;

/**
 * dateFormat function format date as user needs
 * @param string $date date('Y-m-d')
 * @param string $format "Y-m-d"
 * @return string $date
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */

if (!function_exists('dateFormat')) {
    function dateFormat($date = "date('Y-m-d')", $format = "Y-m-d")
    {
        $date = date_create($date);
        $date = date_format($date, $format);
        return $date;
    }
}


/**
 * _icons function returns necessary icons 
 * @param string $icon_name
 * @param bool $all
 * @return array <mixed>
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */

if (!function_exists('_icons')) {
    function _icons(string $icon_name = 'user', bool $all = false)
    {
        $icon_list = [
            'api'                       => 'bi bi-code-slash',
            'activity'                  => 'bi bi-activity',
            'about'                     => 'bi bi-person-badge',
            'activity_log'              => 'bi bi-clock-history',
            'add'                       => 'bi bi-plus-lg',
            'attachments'               => 'bi bi-folder-symlink',
            'arrow_right'               => 'bi bi-arrow-right-short',
            'arrow_right2'              => 'bi bi-chevron-right',
            'arrow_right3'              => 'bi bi-chevron-double-right',
            'arrow_left'                => 'bi bi-arrow-left-short',
            'arrow_left2'               => 'bi bi-chevron-left',
            'arrow_left3'               => 'bi bi-chevron-double-left',
            'arrow_down'                => 'bi bi-chevron-double-down',
            'arrow_up'                  => 'bi bi-chevron-double-up',
            'attributes'                => 'bi bi-boxes',
            'agent'                     => 'bi bi-headset',
            'blog'                      => 'bi bi-newspaper',
            'bell'                      => 'bi bi-bell',
            'bin'                       => 'bi bi-trash2',
            'business'                  => 'bi bi-building',
            'body'                      => 'bi bi-body-text',
            'boost'                      => 'bi bi-rocket',
            'back'                      => 'bi bi-chevron-left',
            'circle'                    => 'bi bi-circle',
            'clients'                   => 'bi bi-person-hearts',
            'cog'                       => 'bi bi-gear',
            'contact'                   => 'bi bi-envelope-open',
            'conversations'             => 'bi bi-person',
            'close'                     => 'bi bi-x-square',
            'chat'                      => 'bi bi-chat',
            'calendar'                  => 'bi bi-calendar-day',
            'collection'                => 'bi bi-collection',
            'cart'                      => 'bi bi-cart',
            'corporate'                 => 'bi bi-buildings',
            'category'                  => 'bi bi-trophy',
            'customer'                  => 'bi bi-person-standing',
            'dashboard'                 => 'bi bi-speedometer2',
            'dark'                      => 'bi bi-lightbulb-fill',
            'default'                   => 'bi bi-info-circle',
            'delete'                    => 'bi bi-trash3',
            'delete_all'                => 'bi bi-trash2',
            'document'                  => 'bi bi-journals',
            'dollar'                    => 'bi bi-currency-dollar',
            'database'                  => 'bi bi-database',
            'database_gear'             => 'bi bi-database-gear',
            'database_lock'             => 'bi bi-database-lock',
            'docs'                      => 'bi bi-file-earmark-text',
            'display'                   => 'bi bi-display',
            'download'                   => 'bi bi-cloud-download',
            'email'                     => 'bi bi-envelope',
            'edit'                      => 'bi bi-pen',
            'example'                   => 'bi bi-example',
            'facebook'                  => 'bi bi-facebook',
            'flag'                      => 'bi bi-flag',
            'focus'                     => 'bi bi-eye',
            'globe'                     => 'bi bi-globe2',
            'google_play'               => 'bi bi-google-play',
            'heart'                     => 'bi bi-heart',
            'home'                      => 'bi bi-house-door',
            'history'                   => 'bi bi-clock-history',
            'hide'                      => 'bi bi-eye-slash',
            'headset'                   => 'bi bi-headset',
            'headphones'                => 'bi bi-headphones',
            'image'                     => 'bi bi-card-image',
            'images'                    => 'bi bi-images',
            'instagram'                 => 'bi bi-instagram',
            'lead'                      => 'bi bi-person-gear',
            'light'                     => 'bi bi-lightbulb',
            'linkedin'                  => 'bi bi-linkedin',
            'link'                      => 'bi bi-link',
            'link45'                    => 'bi bi-link-45deg',
            'link_text'                 => 'bi bi-text-wrap',
            'logout'                    => 'bi bi-box-arrow-right',
            'list'                      => 'bi bi-list-nested',
            'location'                  => 'bi bi-geo-alt-fill',
            'lock'                      => 'bi bi-lock',
            'live_chat'                 => 'bi bi-headset',
            'laptop'                    => 'bi bi-laptop',
            'messages'                  => 'bi bi-chat-dots',
            'mobile'                    => 'bi bi-phone',
            'money'                     => 'bi bi-cash-coin',
            'magic'                     => 'bi bi-magic',
            'order_by'                  => 'bi bi-boxes',
            'order_direction'           => 'bi bi-sort-alpha-down',
            'portfolio'                 => 'bi bi-briefcase',
            'products'                  => 'bi bi-boxes',
            'pinterest'                 => 'bi bi-pinterest',
            'per_page'                  => 'bi bi-sort-numeric-up',
            'phone'                     => 'bi bi-telephone-outbound',
            'phone2'                    => 'bi bi-telephone',
            'plan'                      => 'bi bi-clipboard-check',
            'portal'                    => 'bi bi-door-open',
            'question'                  => 'bi bi-question-circle',
            'question2'                 => 'bi bi-patch-question',
            'quote'                     => 'bi bi-quote',
            'reboot'                    => 'bi bi-bootstrap-reboot',
            'resume'                    => 'bi bi-file-diff',
            'reset'                     => 'bi bi-arrow-repeat',
            'remove'                    => 'bi bi-x-lg',
            'robot'                     => 'bi bi-robot',
            'reports'                   => 'bi bi-graph-up-arrow',
            'realtime'                  => 'bi bi-graph-up',
            'relationship'              => 'bi bi-heart',
            'save'                      => 'bi bi-save2',
            'save2'                     => 'bi bi-check2-circle',
            'save3'                     => 'bi bi-check-lg',
            'save4'                     => 'bi bi-check2',
            'sections'                  => 'bi bi-puzzle',
            'services'                  => 'bi bi-tools',
            'service'                   => 'bi bi-hammer',
            'sidebar'                   => 'bi bi-layout-sidebar',
            'setting'                   => 'bi bi-wrench-adjustable',
            'settings'                  => 'bi bi-wrench-adjustable-circle',
            'skill'                     => 'bi bi-mortarboard',
            'sliders'                   => 'bi bi-sliders',
            'speedometer'               => 'bi bi-speedometer2',
            'search'                    => 'bi bi-search',
            'sales'                     => 'bi bi-receipt-cutoff',
            'twitter'                   => 'bi bi-twitter',
            'ticket'                    => 'bi bi-ticket',
            'tracking'                  => 'bi bi-compass',
            'stop'                      => 'bi bi-person-raised-hand',
            'layers'                    => 'bi bi-layers',
            'tags'                      => 'bi bi-tags',
            'tag'                       => 'bi bi-tag',
            'template'                  => 'bi bi-code-slash',
            'testimonials'              => 'bi bi-vector-pen',
            'trash'                     => 'bi bi-trash3',
            'tools'                     => 'bi bi-tools',
            'title'                     => 'bi bi-signpost',
            'tv'                        => 'bi bi-tv',
            'tiktok'                    => 'bi bi-tiktok',
            'upload'                    => 'bi bi-cloud-upload',
            'user'                      => 'bi bi-person',
            'users'                     => 'bi bi-people',
            'user_heart'                => 'bi bi-person-hearts',
            'user_lock'                 => 'bi bi-person-lock',
            'user_gear'                 => 'bi bi-person-gear',
            'user_slash'                => 'bi bi-person-slash',
            'view'                      => 'bi bi-eye',
            'website'                   => 'bi bi-globe-asia-australia',
            'welcome'                   => 'bi bi-megaphone',
            'watch'                     => 'bi bi-watch',
            'wallet'                    => 'bi bi-wallet2',
            'warning'                   => 'bi bi-exclamation-triangle',
            'youtube'                   => 'bi bi-youtube',

        ];
        if ($all) {
            return $icon_list;
        } elseif (array_key_exists($icon_name, $icon_list)) {
            return $icon_list["$icon_name"];
        } else {
            return $icon_list["default"];
        }
    }
}


/**
 * Created strConversion function convert string as required
 * @param string $string null
 * @param string $type ucfirst
 * @param bool $remove_dash false
 * @param bool $is_file false
 * @return string
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
if (!function_exists('strConversion')) {
    function strConversion(string $string = null, string $type = 'ucfirst', bool $remove_dash = false, bool $is_file = false)
    {
        $string = strtolower(trim($string));
        if ($remove_dash) {
            $string = str_replace('_', ' ', $string);
            $string = str_replace('-', ' ', $string);
        }
        if ($is_file) {
            $string = str_ireplace(" ", "_", $string);
        }

        $string = $type($string);
        return $string;
    }
}

/**
 * osRelevantFileUploadPath this function will format upload absolute path on any type of operating system
 * @param string $path
 * @return string $path
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
if (!function_exists('osRelevantFileUploadPath')) {
    function osRelevantFileUploadPath($path)
    {
        $path = str_replace('\\', '/',  $path);
        $path = str_replace('///', '/', $path);
        $path = str_replace('//', '/', $path);
        $path = str_replace('\/', '/', $path);
        return $path;
    }
}


/**
 * subString function returns specific length of characters
 * @param string $str
 * @param int $length 50
 * @param bool $dots true
 * @param string $convert
 * @return string $str
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
if (!function_exists('subString')) {
    function subString(string $str, int $length = 50, bool $dots = false, string $convert = '')
    {
        if (strlen($str) > $length) {
            $str = substr($str, 0, $length);
            ## Remove breaking words
            if (str_word_count($str) > 1) {
                $last_whitespace_position = strrpos($str, ' ');
                $str = substr($str, 0, $last_whitespace_position);
            }
            ## Add dots
            if ($dots) {
                $str .= "...";
            }
        }

        ## Convert string 
        if (!empty($convert)) {
            $str = $convert($str);
        }

        return $str;
    }
}

/**
 * localList function returns all available locals or a specific local
 * @param string $localKey [Key of available local
 * @return mixed
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
if (!function_exists('localList')) {
    function localList(string $localKey = ''): mixed
    {
        $locals = [
            'en' => 'English',
            'bd' => 'বাংলা',
            'my' => 'Malay'
        ];
        if (array_key_exists($localKey, $locals)) {
            return $locals[$localKey];
        }
        return $locals;
    }
}

/**
 * generateHexColor function generate a random hexadecimal color code
 * @param string $localKey [Key of available local
 * @return mixed
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
if (!function_exists('generateHexColor')) {
    function generateHexColor(): string
    {
        ## Generate a random RGB color
        $red = mt_rand(0, 255);
        $green = mt_rand(0, 255);
        $blue = mt_rand(0, 255);

        ## Convert RGB to hexadecimal
        $hexColor = sprintf("%02x%02x%02x", $red, $green, $blue);

        return $hexColor;
    }
}


if (!function_exists('truncate_without_breaking')) {
    /**
     * Truncate a string to a specific character length without breaking the last word.
     * Ensures proper sentence case and avoids cutting off words at the limit.
     *
     * @param string $text The input string.
     * @param int $limit The maximum length of the string (default: 30).
     * @param string $end The ending to append (optional, default: '...').
     * @return string
     */
    function truncate_without_breaking(string $text, int $limit = 30, string $end = '...'): string
    {
        ## Remove leading/trailing whitespace and ensure the string is sentence-cased
        $text = trim($text);
        $text = Str::ucfirst(Str::lower($text));

        ## If the string length is already within the limit, return as is
        if (Str::length($text) <= $limit) {
            return $text;
        }

        ## Find the position to truncate without breaking a word
        $truncated = Str::substr($text, 0, $limit);
        $lastSpace = strrpos($truncated, ' ');

        ## Trim to the last complete word, if applicable
        if ($lastSpace !== false) {
            $truncated = Str::substr($truncated, 0, $lastSpace);
        }

        ## Return the truncated string with the specified ending
        return "{$truncated}{$end}";
    }
}


if (!function_exists('_social_media_links')) {
    /**
     * Social media link list
     *
     * @param string $brand name of the social brands
     * @return mixed
     */
    function _social_media_links(string $brand = ''): mixed
    {
        $links = [
            'facebook' => 'https://www.facebook.com/ihelpkl',
            'map' => 'https://maps.app.goo.gl/imJJudRDhreKyuam7',
            'linkedin' => 'https://www.linkedin.com/company/ihelpkl',
            'tiktok' => 'https://www.tiktok.com/@ihelpkl',
            'pinterest' => 'https://www.pinterest.com/ihelpkl',
            'instagram' => 'https://www.instagram.com/ihelpkl',
        ];
        if (!empty($brand) && array_key_exists($brand, $links)) {
            return $links[$brand];
        }
        return $links;
    }
}


/**
 * _parse_url function format date as user needs
 * @return string $date
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */

if (!function_exists('_parse_url')) {
    function _parse_url(string $routeName = '')
    {
        try {
            ## Specify your target URL here
            $url = request()->url();

            ## Get the path from the URL
            $path = parse_url($url, PHP_URL_PATH);

            ## Return true if root path identified
            if (empty($path) && $routeName === 'web.home') {
                return true;
            }
            ## Find the route that matches the path
            $route = Route::getRoutes()->match(request()->create($path));

            ## Display the route name
            return !empty($routeName) && $route->getName() === $routeName;
        } catch (\Throwable $th) {
            return $routeName === 'web.home' ? true : false;
        }
    }
}


/**
 * _getFaviconPath get meta favicon path
 * @return string 
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */

if (!function_exists('_getFaviconPath')) {
    function _getFaviconPath()
    {
        return Vite::asset('resources/images/favicon.png');
    }
}
