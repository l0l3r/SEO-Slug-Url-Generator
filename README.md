SEO Slug URL Generator
==============

## About

This mini function will help you to create best link for your website to better optimize search engines.

Added Georgian Language Support!

## Example

News title: PHP Slug URL Generator By Levan Lotuashvili

News URL: http://example.com/php-slug-url-generator-by-levan-lotuashvili



News Title: გრძელი სიტყვა მოკლედ ითქმის

News URL: http://example.com/grdzeli-sityva-mokled-itqmis

## Usage

## 1. Include this file in to your *.php file
```php
include 'slug.function.php';
```

## 2. Get Slug URL
```php
echo createSlug("PHP Slug Url Generator by Levan Lotuashvili"); // Output: php-slug-url-generator-by-levan-lotuashvili
echo createSlug("გრძელი სიტყვა მოკლედ ითქმის."); // Output: grdzeli-sityva-mokled-itqmis
```
