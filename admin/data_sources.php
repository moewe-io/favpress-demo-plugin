<?php

FavPress_Security::instance()->whitelist_function('favpress_copy_content');

function favpress_copy_content($value, $value2) {
    $args = func_get_args();
    return implode('', $args);
}

FavPress_Security::instance()->whitelist_function('favpress_simple_shortcode');

function favpress_simple_shortcode($name = "", $url = "", $image = "") {
    if (is_null($name)) $name = '';
    if (is_null($url)) $url = '';
    if (is_null($image)) $image = '';
    $result = '[shortcode name="' . $name . '" url="' . $url . '" image="' . $image . '"]';
    return $result;
}

FavPress_Security::instance()->whitelist_function('favpress_bind_bigcontinents');

function favpress_bind_bigcontinents() {
    $bigcontinents = array(
        'Eurafrasia',
        'America',
        'Oceania',
    );

    $result = array();

    foreach ($bigcontinents as $data) {
        $result[] = array('value' => $data, 'label' => $data, 'img' => 'http://placehold.it/100x100');
    }

    return $result;
}

FavPress_Security::instance()->whitelist_function('favpress_bind_continents');

function favpress_bind_continents($param = '') {
    $continents = array(
        'Eurafrasia' => array(
            'Africa',
            'Asia',
            'Europe'
        ),
        'America'    => array(
            'North America',
            'Central America and the Antilles',
            'South America'
        ),
        'Oceania'    => array(
            'Australasia',
            'Melanesia',
            'Micronesia',
            'Polynesia',
        ),
    );

    $result = array();
    $datas = array();

    if (is_array($param))
        $param = reset($param);

    if (array_key_exists($param, $continents))
        $datas = $continents[$param];

    foreach ($datas as $data) {
        $result[] = array('value' => $data, 'label' => $data, 'img' => 'http://placehold.it/100x100');
    }

    return $result;
}

FavPress_Security::instance()->whitelist_function('favpress_bind_countries');

function favpress_bind_countries($param = '') {
    $countries = array(
        'Africa'                           => array(
            'Algeria',
            'Nigeria',
            'Egypt',
        ),
        'Asia'                             => array(
            'Indonesia',
            'Malaysia',
            'China',
            'Japan',
        ),
        'Europe'                           => array(
            'France',
            'Germany',
            'Italy',
            'Netherlands',
        ),
        'North America'                    => array(
            'United States',
            'Mexico',
            'Canada',
        ),
        'Central America and the Antilles' => array(
            'Cuba',
            'Guatemala',
            'Haiti',
        ),
        'South America'                    => array(
            'Argentina',
            'Brazil',
            'Paraguay',
        ),
        'Australasia'                      => array(
            'Australia',
            'New Zealand',
            'Christmas Island',
        ),
        'Melanesia'                        => array(
            'Fiji',
            'Papua New Guinea',
            'Vanuatu',
        ),
        'Micronesia'                       => array(
            'Guam',
            'Nauru',
            'Palau'
        ),
        'Polynesia'                        => array(
            'American Samoa',
            'Samoa',
            'Tokelau',
        ),
    );
    $result = array();
    $datas = array();

    if (is_null($param))
        $param = '';

    if (is_array($param) and !empty($param))
        $param = reset($param);

    if (empty($param))
        $param = '';

    if (array_key_exists($param, $countries))
        $datas = $countries[$param];

    foreach ($datas as $data) {
        $result[] = array('value' => $data, 'label' => $data, 'img' => 'http://placehold.it/100x100');
    }

    return $result;
}

FavPress_Security::instance()->whitelist_function('favpress_dep_is_keyword');

function favpress_dep_is_keyword($value) {
    if ($value === 'keyword')
        return true;
    return false;
}

FavPress_Security::instance()->whitelist_function('favpress_dep_is_tags');

function favpress_dep_is_tags($value) {
    if ($value === 'tags')
        return true;
    return false;
}

FavPress_Security::instance()->whitelist_function('favpress_bind_color_accent');

function favpress_bind_color_accent($preset) {
    switch ($preset) {
        case 'red':
            return '#ff0000';
        case 'green':
            return '#00ff00';
        case 'blue':
            return '#0000ff';
        default:
            return '#000000';
    }
}

FavPress_Security::instance()->whitelist_function('favpress_bind_color_subtle');

function favpress_bind_color_subtle($preset) {
    return favpress_bind_color_accent($preset);
}

FavPress_Security::instance()->whitelist_function('favpress_bind_color_background');

function favpress_bind_color_background($preset) {
    return favpress_bind_color_accent($preset);
}

FavPress_Security::instance()->whitelist_function('favpress_font_preview');

function favpress_font_preview($face, $style, $weight, $size, $line_height) {
    $gwf = new FavPress_Site_GoogleWebFont();
    $gwf->add($face, $style, $weight);
    $links = $gwf->get_font_links();
    $link = reset($links);
    $dom = <<<EOD
<link href='$link' rel='stylesheet' type='text/css'>
<p style="padding: 0 10px 0 10px; font-family: $face; font-style: $style; font-weight: $weight; font-size: {$size}px; line-height: {$line_height}em;">
	Grumpy wizards make toxic brew for the evil Queen and Jack
</p>
EOD;
    return $dom;
}
