<?php

use App\Models\PageMetaTag;
use App\Models\Category;
use Illuminate\Support\Facades\DB;


//get meta tag value
if (!function_exists('Get_Meta_Tag_Value')) {
  function Get_Meta_Tag_Value($type, $key)
  {
    $tag = PageMetaTag::where('type', '=', $type)->where('key', '=', $key)->first();
    if ($tag) {
      return ($tag->value);
    } else {
      return ("");
    }
  }
}

if (!function_exists('Get_Meta_Tag_Value')) {
  function All_Category(){
    return Category::all();
  }
}