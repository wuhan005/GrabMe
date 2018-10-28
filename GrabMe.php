<?php
/*
Plugin Name: 刮刮乐
Description: 为文章内容添加刮刮乐，隐藏一些不为人知的信息。
Version: 1.0
Author: John Wu
Author URI: https://wuhan5.cc/
*/

function AddCSS(){
    echo(
    '<style>
span.heimu a.external,span.heimu a.external:visited,span.heimu a.extiw,span.heimu a.extiw:visited {
    color: #252525
}

.heimu,.heimu a,a .heimu,.heimu a.new {
    background-color: #252525;
    color: #252525;
    text-shadow: none
}

body:not(.heimu_toggle_on) .heimu:hover,body:not(.heimu_toggle_on) .heimu:active,body:not(.heimu_toggle_on) .heimu.off {
    transition: color .13s linear;
    color: #fff
}

body:not(.heimu_toggle_on) .heimu:hover a,body:not(.heimu_toggle_on) a:hover .heimu,body:not(.heimu_toggle_on) .heimu.off a,body:not(.heimu_toggle_on) a:hover .heimu.off {
    transition: color .13s linear;
    color: #add8e6
}

body:not(.heimu_toggle_on) .heimu.off .new,body:not(.heimu_toggle_on) .heimu.off .new:hover,body:not(.heimu_toggle_on) .new:hover .heimu.off,body:not(.heimu_toggle_on) .heimu.off .new,body:not(.heimu_toggle_on) .heimu.off .new:hover,body:not(.heimu_toggle_on) .new:hover .heimu.off {
    transition: color .13s linear;
    color: #ba0000
}
</style>
');
}
add_filter('wp_head', 'AddCSS');

function EditContent($content){
    $content = str_replace( '&lt;@', '<span class="heimu">', $content );
    $content = str_replace( '@>', '</span>', $content );
	return $content;
}
add_filter('the_content', 'EditContent');