<?php
/* 
* Macotuts SEO plugin for Kirby
* Version 1.0
* Built by macotuts.com
* 
* Get metadata for current page
*
* @site (object) Kirby site object
* @page (object) Kirby page object
* @return (array)
*/
function getMeta($site, $page) {
  $meta = array();
    if($page->isHomepage()){
      $meta['title'] = $site->title();
      $meta['desc'] = excerpt(h($site->description()), 155);
      $meta['type'] = 'website';
      $meta['image'] = url('assets/images/bg.png');
    } else {
      $meta['title'] = $page->seotitle()->isNotEmpty() ? $page->seotitle() : $page->title() . ' | ' . $site->title();
      $meta['desc'] = $page->seodescription()->isNotEmpty() ? excerpt(h($page->seodescription()), 155) : html::decode(excerpt($page->description()->kt(), 155));
      $meta['type'] = 'article';
      $meta['image'] = $page->postimage()->isNotEmpty() ? $page->postimage()->toFile()->url() : url('assets/images/bg.png');
    }
  return $meta;
}
