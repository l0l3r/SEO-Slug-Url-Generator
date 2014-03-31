<?php
/*
 * @name: PHP Slug URL Generator
 * @author: GWSMaster (Levan Lotuashvili) <gwsmaster@gmail.com>
 * @version: 1.1
 */
function createSlug($slug) {
	$lettersNumbersSpacesHypens = '/[^\-\s\pN\pL]+/u';
	$spacesDuplicateHypens = '/[\-\s]+/';
	$search = array(
		'/ა/',
		'/ბ/',
		'/გ/',
		'/დ/',
		'/ე/',
		'/ვ/',
		'/ზ/',
		'/თ/',
		'/ი/',
		'/კ/',
		'/ლ/',
		'/მ/',
		'/ნ/',
		'/ო/',
		'/პ/',
		'/ჟ/',
		'/რ/',
		'/ს/',
		'/ტ/',
		'/უ/',
		'/ფ/',
		'/ქ/',
		'/ღ/',
		'/ყ/',
		'/შ/',
		'/ჩ/',
		'/ც/',
		'/ძ/',
		'/წ/',
		'/ჭ/',
		'/ხ/',
		'/ჯ/',
		'/ჰ/'
	);
	$replace = array(
		'a',
		'b',
		'g',
		'd',
		'e',
		'v',
		'z',
		't',
		'i',
		'k',
		'l',
		'm',
		'n',
		'o',
		'p',
		'zh',
		'r',
		's',
		't',
		'u',
		'f',
		'q',
		'g',
		'y',
		'sh',
		'ch',
		'c',
		'dz',
		'w',
		'ch',
		'x',
		'j',
		'h'
	);
	$slug = preg_replace($lettersNumbersSpacesHypens, '', mb_strtolower($slug, 'UTF-8'));
	$slug = preg_replace($spacesDuplicateHypens, '-', $slug);
	$slug = preg_replace($search, $replace, $slug);
	$slug = trim($slug, '-');
	return $slug;
}
?>
