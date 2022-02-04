<?php

/**
 * yep, removes accents
 * na take ze ā,ă,ą,ġ,ĥ,ĩ,į,ŧ a podobne zvrhlosti som uz nemal naladu.. ked sa niekomu bude chciet, moze sa vyzurit :)
 * btw najlepsie je aj tak evil 'u':   ǚ   :)
 */
function remove_accents ($str)
{
	return str_replace (
	array(
		'à','á','â','ã','ä','ç','ć','č','ď','đ','è','é','ê','ë','ě','ì','í','î','ï','ĺ','ľ','ň','ñ','ò','ó','ô','õ','ö','ő','ŕ','ř','ś','š','ť','ù','ú','û','ü','ů','ű','ý','ÿ','ž',
		'À','Á','Â','Ã','Ä','Ç','Ć','Č','Ď','Đ','È','É','Ê','Ë','Ě','Ì','Í','Î','Ï','Ĺ','Ľ','Ň','Ñ','Ò','Ó','Ô','Õ','Ö','Ő','Ŕ','Ř','Ś','Š','Ť','Ù','Ú','Û','Ü','Ů','Ű','Ý','Ÿ','Ž'
	),
	array(
		'a','a','a','a','a','c','c','c','d','d','e','e','e','e','e','i','i','i','i','l','l','n','n','o','o','o','o','o','o','r','r','s','s','t','u','u','u','u','u','u','y','y','z',
		'A','A','A','A','A','C','C','C','D','D','E','E','E','E','E','I','I','I','I','L','L','N','N','O','O','O','O','O','O','R','R','S','S','T','U','U','U','U','U','U','Y','Y','Z'
	), $str );
}



/**
 * removes "non-word-constituent" characters
 * cize necha cisla, male a velke pismena a vsetko >128
 * zvysok nahradi medzerami a tie collapse-ne
 */
function remove_nwc_chars ($string)
{
  $string = preg_replace('/[^a-zA-Z0-9\x80-\xFF.-]/', '_', $string);
  return preg_replace('/_+/', '_', $string);
}



function str_keep_alphanumeric ($string)
{
	return preg_replace('/[^a-zA-Z0-9\x80-\xFF]/', '', $string);
}



function str_keep_numbers ($string)
{
	return preg_replace('/[^0-9]/', '', $string);
}



/*
 * opak nl2br
 */
function br2nl($text)
{
	return preg_replace('/<br\\s*?\\/??' . '>/i', PHP_EOL, $text); // "\n"
}



/*
 * normalny strip_tags neodstrani text v tych tagoch, toto by malo..
 */
function strip_tags_content($text, $tags = '', $invert = FALSE)
{
	preg_match_all('/<(.+?)[\s]*\/?[\s]*>/si', trim($tags), $tags);

	$tags = array_unique($tags[1]);

	if (is_array($tags) AND count($tags) > 0)
	{
		if ($invert == FALSE)
		{
			return preg_replace('@<(?!(?:'. implode('|', $tags) .')\b)(\w+)\b.*?' . '>.*?</\1>@si', '', $text);
		}
		else
		{
			return preg_replace('@<('. implode('|', $tags) .')\b.*?' . '>.*?</\1>@si', '', $text);
		}
	}
	else if ($invert == FALSE)
	{
		return preg_replace('@<(\w+)\b.*?' . '>.*?</\1>@si', '', $text);
	}

	return $text;
}



/*
 * zoberie array, pripadne exploadne string podla delimitera, a vrati string s hodnotami oddelenymi separatorom
 */
function separate ($input, $separator = ', ', $delimiter = ',')
{
	if (!is_array($input)) $input = explode($delimiter, $input);

	// ulozime validne emaily oddelene ciarkou a medzerou
	foreach ($input as $val) {
		$val = trim($val);
		if ($val) $ret .= $val.$separator;
	}

	// odsekneme posledne 2 znaky (ciarka a medzera)
	// todo: skor length separatora
	return (substr($ret, 0, -2));
}



/**
 * touto funkciou sa generuju pekne url aliasy.. pathauto to mal bloated a hlavne nahovno :)
 */
function _adminmodule_make_alias ($str)
{
	$str = remove_accents($str);
	//                                    "'`.,{}()[]
	$str = strtr($str, ' "\'`.,{}()[]', '-!!!!!!!!!!!');
	$str = str_replace(array("!"), array(""), $str);
	$str = preg_replace('/[^a-zA-Z0-9-]/', '-', $str);
	return trim(preg_replace('/-+/', '-', $str), "- ");
}



/*
 * to iste jak to nad tym.. s lepsim nazvom :P
 */
function seo_url($str)
{
	// str bude z nazvu, odstranime accents a dame ho lowecase:
	$str = strtolower(remove_accents($str));

	// nahradi vsetky divne chars pomlckami:
	$re = '/[^[:alpha:][:digit:]]/';
	$replacement = '-';
	$str = preg_replace($re, $replacement, $str);

	// odstrani duplicitne pomlacky a pomlcky na zaciatku a na konci, ktore mohli vzniknut tam hore:
	$str = trim(trim($str), '-');
	$re = '/[-]+/';
	$replacement = '-';
	$str = preg_replace($re, $replacement, $str);

	return $str;
}



/**
 * naformatuje plain text tak aby sa pekne zobrazil v html, cize:
 * zmeni < , > a & na html entity, prida <br> a podciarkne linky
 */
function format_plain ($src)
{
	$str = str_replace(array("\r\n", "\r"), "\n", $str);
	return str_replace("\n", "<br>\n", _filter_url(str_replace(array('<','>','&'), array('&lt;', '&gt;', '&amp;'), $src), 1));
}



/**
 * valid email?
 */
function is_valid_email($str)
{
	return ( ! preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
}



function plain( $str )
{
	return htmlspecialchars( $str, ENT_NOQUOTES );
}

function auto_p($str)
{
	// Trim whitespace
	if (($str = trim($str)) === '') return '';

	// Standardize newlines
	$str = str_replace(array("\r\n", "\r"), "\n", $str);

	// Trim whitespace on each line
	$str = preg_replace('~^[ \t]+~m', '', $str);
	$str = preg_replace('~[ \t]+$~m', '', $str);

	// The following regexes only need to be executed if the string contains html
	if ($html_found = (strpos($str, '<') !== FALSE))
	{
		// Elements that should not be surrounded by p tags
		$no_p = '(?:p|div|h[1-6r]|ul|ol|li|blockquote|d[dlt]|pre|t[dhr]|t(?:able|body|foot|head)|c(?:aption|olgroup)|form|s(?:elect|tyle)|a(?:ddress|rea)|ma(?:p|th))';

		// Put at least two linebreaks before and after $no_p elements
		$str = preg_replace('~^<'.$no_p.'[^>]*+>~im', "\n$0", $str);
		$str = preg_replace('~</'.$no_p.'\s*+>$~im', "$0\n", $str);
	}

	// Do the <p> magic!
	$str = '<p>'.trim($str).'</p>';
	$str = preg_replace('~\n{2,}~', "</p>\n\n<p>", $str);

	// The following regexes only need to be executed if the string contains html
	if ($html_found !== FALSE)
	{
		// Remove p tags around $no_p elements
		$str = preg_replace('~<p>(?=</?'.$no_p.'[^>]*+>)~i', '', $str);
		$str = preg_replace('~(</?'.$no_p.'[^>]*+>)</p>~i', '$1', $str);
	}

	// Convert single linebreaks to <br />
	$str = preg_replace('~(?<!\n)\n(?!\n)~', "<br>\n", $str);

	return $str;
}


/////////////////////////////// URL FILTER
/**
 * URL filter. Automatically converts text web addresses (URLs, e-mail addresses,
 * ftp links, etc.) into hyperlinks.
 */
function _filter_url($text) {
  // Pass length to regexp callback
  _filter_url_trim(NULL, 72);

  $text   = ' '. $text .' ';

  // Match absolute URLs.
  $text = preg_replace_callback("`(<p>|<li>|<br\s*/?".">|[ \n\r\t\(])((http://|https://|ftp://|mailto:|smb://|afp://|file://|gopher://|news://|ssl://|sslv2://|sslv3://|tls://|tcp://|udp://)([a-zA-Z0-9@:%_+*~#?&=.,/;()-]*[a-zA-Z0-9@:%_+*~#&=/;-]))([.,?!]*?)(?=(</p>|</li>|<br\s*/?".">|[ \n\r\t\)]))`i", '_filter_url_parse_full_links', $text);
  // Match e-mail addresses.
  //$text = preg_replace("`(<p>|<li>|<br\s*/?".">|[ \n\r\t\(])([A-Za-z0-9._-]+@[A-Za-z0-9._+-]+\.[A-Za-z]{2,4})([.,?!]*?)(?=(</p>|</li>|<br\s*/?".">|[ \n\r\t\)]))`i", '\1<a href="mailto:\2">\2</a>\3', $text);
  // Match www domains/addresses.
  $text = preg_replace_callback("`(<p>|<li>|[ \n\r\t\(])(www\.[a-zA-Z0-9@:%_+*~#?&=.,/;-]*[a-zA-Z0-9@:%_+~#\&=/;-])([.,?!]*?)(?=(</p>|</li>|<br\s*/?".">|[ \n\r\t\)]))`i", '_filter_url_parse_partial_links', $text);
  $text = substr($text, 1, -1);

  return $text;
}

/**
 * Make links out of absolute URLs.
 */
function _filter_url_parse_full_links($match) {
  $caption = (_filter_url_trim($match[2]));
  return $match[1] . '<a href="'. $match[2] .'" title="'. $match[2] .'">'. $caption .'</a>'. $match[5];
}

/**
 * Make links out of domain names starting with "www."
 */
function _filter_url_parse_partial_links($match) {
  $caption = (_filter_url_trim($match[2]));
  return $match[1] . '<a href="http://'. $match[2] .'" title="'. $match[2] .'">'. $caption .'</a>'. $match[3];
}

/**
 * Shortens long URLs to http://www.example.com/long/url...
 */
function _filter_url_trim($text, $length = NULL) {
  static $_length;
  if ($length !== NULL) $_length = $length;
  if (strlen($text) > $_length) $text = substr($text, 0, $_length) .'...';
  return $text;
}
//////////////////////////////////////////////////////

function format_text($str)
{
	return _filter_url(str_replace(array("\r", ">\n", "\n"), array("", ">\t", "<br>\n"), $str));
}