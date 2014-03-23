<?php
/*
 * @name: PHP Slug URL Generator
 * @author: GWSMaster (Levan Lotuashvili) <gwsmaster@gmail.com>
 * @version: 1.0
 */
function createSlug($slug) {
	$lettersNumbersSpacesHypens = '/[^\-\s\pN\pL]+/u';
	$spacesDuplicateHypens = '/[\-\s]+/';
	$slug = preg_replace($lettersNumbersSpacesHypens, '', mb_strtolower($slug, 'UTF-8'));
	$slug = preg_replace($spacesDuplicateHypens, '-', $slug);
	$slug = trim($slug, '-');
	return $slug;
}
?>