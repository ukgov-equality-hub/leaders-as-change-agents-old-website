<?php

function siteorigin_widgets_icons_typicons_filter( $icons ) {
	return array_merge( $icons, array(
		'adjust-brightness' => '&#xe000;',
		'adjust-contrast' => '&#xe001;',
		'anchor-outline' => '&#xe002;',
		'anchor' => '&#xe003;',
		'archive' => '&#xe004;',
		'arrow-back-outline' => '&#xe005;',
		'arrow-back' => '&#xe006;',
		'arrow-down-outline' => '&#xe007;',
		'arrow-down-thick' => '&#xe008;',
		'arrow-down' => '&#xe009;',
		'arrow-forward-outline' => '&#xe00a;',
		'arrow-forward' => '&#xe00b;',
		'arrow-left-outline' => '&#xe00c;',
		'arrow-left-thick' => '&#xe00d;',
		'arrow-left' => '&#xe00e;',
		'arrow-loop-outline' => '&#xe00f;',
		'arrow-loop' => '&#xe010;',
		'arrow-maximise-outline' => '&#xe011;',
		'arrow-maximise' => '&#xe012;',
		'arrow-minimise-outline' => '&#xe013;',
		'arrow-minimise' => '&#xe014;',
		'arrow-move-outline' => '&#xe015;',
		'arrow-move' => '&#xe016;',
		'arrow-repeat-outline' => '&#xe017;',
		'arrow-repeat' => '&#xe018;',
		'arrow-right-outline' => '&#xe019;',
		'arrow-right-thick' => '&#xe01a;',
		'arrow-right' => '&#xe01b;',
		'arrow-shuffle' => '&#xe01c;',
		'arrow-sorted-down' => '&#xe01d;',
		'arrow-sorted-up' => '&#xe01e;',
		'arrow-sync-outline' => '&#xe01f;',
		'arrow-sync' => '&#xe020;',
		'arrow-unsorted' => '&#xe021;',
		'arrow-up-outline' => '&#xe022;',
		'arrow-up-thick' => '&#xe023;',
		'arrow-up' => '&#xe024;',
		'at' => '&#xe025;',
		'attachment-outline' => '&#xe026;',
		'attachment' => '&#xe027;',
		'backspace-outline' => '&#xe028;',
		'backspace' => '&#xe029;',
		'battery-charge' => '&#xe02a;',
		'battery-full' => '&#xe02b;',
		'battery-high' => '&#xe02c;',
		'battery-low' => '&#xe02d;',
		'battery-mid' => '&#xe02e;',
		'beaker' => '&#xe02f;',
		'beer' => '&#xe030;',
		'bell' => '&#xe031;',
		'book' => '&#xe032;',
		'bookmark' => '&#xe033;',
		'briefcase' => '&#xe034;',
		'brush' => '&#xe035;',
		'business-card' => '&#xe036;',
		'calculator' => '&#xe037;',
		'calender-outline' => '&#xe038;',
		'calender' => '&#xe039;',
		'camera-outline' => '&#xe03a;',
		'camera' => '&#xe03b;',
		'cancel-outline' => '&#xe03c;',
		'cancel' => '&#xe03d;',
		'chart-area-outline' => '&#xe03e;',
		'chart-area' => '&#xe03f;',
		'chart-bar-outline' => '&#xe040;',
		'chart-bar' => '&#xe041;',
		'chart-line-outline' => '&#xe042;',
		'chart-line' => '&#xe043;',
		'chart-pie-outline' => '&#xe044;',
		'chart-pie' => '&#xe045;',
		'chevron-left-outline' => '&#xe046;',
		'chevron-left' => '&#xe047;',
		'chevron-right-outline' => '&#xe048;',
		'chevron-right' => '&#xe049;',
		'clipboard' => '&#xe04a;',
		'cloud-storage' => '&#xe04b;',
		'code-outline' => '&#xe04c;',
		'code' => '&#xe04d;',
		'coffee' => '&#xe04e;',
		'cog-outline' => '&#xe04f;',
		'cog' => '&#xe050;',
		'compass' => '&#xe051;',
		'contacts' => '&#xe052;',
		'credit-card' => '&#xe053;',
		'cross' => '&#xe054;',
		'css3' => '&#xe055;',
		'database' => '&#xe056;',
		'delete-outline' => '&#xe057;',
		'delete' => '&#xe058;',
		'device-desktop' => '&#xe059;',
		'device-laptop' => '&#xe05a;',
		'device-phone' => '&#xe05b;',
		'device-tablet' => '&#xe05c;',
		'directions' => '&#xe05d;',
		'divide-outline' => '&#xe05e;',
		'divide' => '&#xe05f;',
		'document-add' => '&#xe060;',
		'document-delete' => '&#xe061;',
		'document-text' => '&#xe062;',
		'document' => '&#xe063;',
		'download-outline' => '&#xe064;',
		'download' => '&#xe065;',
		'dropbox' => '&#xe066;',
		'edit' => '&#xe067;',
		'eject-outline' => '&#xe068;',
		'eject' => '&#xe069;',
		'equals-outline' => '&#xe06a;',
		'equals' => '&#xe06b;',
		'export-outline' => '&#xe06c;',
		'export' => '&#xe06d;',
		'eye-outline' => '&#xe06e;',
		'eye' => '&#xe06f;',
		'feather' => '&#xe070;',
		'film' => '&#xe071;',
		'filter' => '&#xe072;',
		'flag-outline' => '&#xe073;',
		'flag' => '&#xe074;',
		'flash-outline' => '&#xe075;',
		'flash' => '&#xe076;',
		'flow-children' => '&#xe077;',
		'flow-merge' => '&#xe078;',
		'flow-parallel' => '&#xe079;',
		'flow-switch' => '&#xe07a;',
		'folder-add' => '&#xe07b;',
		'folder-delete' => '&#xe07c;',
		'folder-open' => '&#xe07d;',
		'folder' => '&#xe07e;',
		'gift' => '&#xe07f;',
		'globe-outline' => '&#xe080;',
		'globe' => '&#xe081;',
		'group-outline' => '&#xe082;',
		'group' => '&#xe083;',
		'headphones' => '&#xe084;',
		'heart-full-outline' => '&#xe085;',
		'heart-half-outline' => '&#xe086;',
		'heart-outline' => '&#xe087;',
		'heart' => '&#xe088;',
		'home-outline' => '&#xe089;',
		'home' => '&#xe08a;',
		'html5' => '&#xe08b;',
		'image-outline' => '&#xe08c;',
		'image' => '&#xe08d;',
		'infinity-outline' => '&#xe08e;',
		'infinity' => '&#xe08f;',
		'info-large-outline' => '&#xe090;',
		'info-large' => '&#xe091;',
		'info-outline' => '&#xe092;',
		'info' => '&#xe093;',
		'input-checked-outline' => '&#xe094;',
		'input-checked' => '&#xe095;',
		'key-outline' => '&#xe096;',
		'key' => '&#xe097;',
		'keyboard' => '&#xe098;',
		'leaf' => '&#xe099;',
		'lightbulb' => '&#xe09a;',
		'link-outline' => '&#xe09b;',
		'link' => '&#xe09c;',
		'location-arrow-outline' => '&#xe09d;',
		'location-arrow' => '&#xe09e;',
		'location-outline' => '&#xe09f;',
		'location' => '&#xe0a0;',
		'lock-closed-outline' => '&#xe0a1;',
		'lock-closed' => '&#xe0a2;',
		'lock-open-outline' => '&#xe0a3;',
		'lock-open' => '&#xe0a4;',
		'mail' => '&#xe0a5;',
		'map' => '&#xe0a6;',
		'media-eject-outline' => '&#xe0a7;',
		'media-eject' => '&#xe0a8;',
		'fast-forward-outline' => '&#xe0a9;',
		'media-fast-forward' => '&#xe0aa;',
		'media-pause-outline' => '&#xe0ab;',
		'media-pause' => '&#xe0ac;',
		'media-play-outline' => '&#xe0ad;',
		'play-reverse-outline' => '&#xe0ae;',
		'media-play-reverse' => '&#xe0af;',
		'media-play' => '&#xe0b0;',
		'media-record-outline' => '&#xe0b1;',
		'media-record' => '&#xe0b2;',
		'media-rewind-outline' => '&#xe0b3;',
		'media-rewind' => '&#xe0b4;',
		'media-stop-outline' => '&#xe0b5;',
		'media-stop' => '&#xe0b6;',
		'message-typing' => '&#xe0b7;',
		'message' => '&#xe0b8;',
		'messages' => '&#xe0b9;',
		'microphone-outline' => '&#xe0ba;',
		'microphone' => '&#xe0bb;',
		'minus-outline' => '&#xe0bc;',
		'minus' => '&#xe0bd;',
		'mortar-board' => '&#xe0be;',
		'news' => '&#xe0bf;',
		'notes-outline' => '&#xe0c0;',
		'notes' => '&#xe0c1;',
		'pen' => '&#xe0c2;',
		'pencil' => '&#xe0c3;',
		'phone-outline' => '&#xe0c4;',
		'phone' => '&#xe0c5;',
		'pi-outline' => '&#xe0c6;',
		'pi' => '&#xe0c7;',
		'pin-outline' => '&#xe0c8;',
		'pin' => '&#xe0c9;',
		'pipette' => '&#xe0ca;',
		'plane-outline' => '&#xe0cb;',
		'plane' => '&#xe0cc;',
		'plug' => '&#xe0cd;',
		'plus-outline' => '&#xe0ce;',
		'plus' => '&#xe0cf;',
		'of-interest-outline' => '&#xe0d0;',
		'point-of-interest' => '&#xe0d1;',
		'power-outline' => '&#xe0d2;',
		'power' => '&#xe0d3;',
		'printer' => '&#xe0d4;',
		'puzzle-outline' => '&#xe0d5;',
		'puzzle' => '&#xe0d6;',
		'radar-outline' => '&#xe0d7;',
		'radar' => '&#xe0d8;',
		'refresh-outline' => '&#xe0d9;',
		'refresh' => '&#xe0da;',
		'rss-outline' => '&#xe0db;',
		'rss' => '&#xe0dc;',
		'scissors-outline' => '&#xe0dd;',
		'scissors' => '&#xe0de;',
		'shopping-bag' => '&#xe0df;',
		'shopping-cart' => '&#xe0e0;',
		'social-at-circular' => '&#xe0e1;',
		'social-dribbble-circular' => '&#xe0e2;',
		'social-dribbble' => '&#xe0e3;',
		'social-facebook-circular' => '&#xe0e4;',
		'social-facebook' => '&#xe0e5;',
		'social-flickr-circular' => '&#xe0e6;',
		'social-flickr' => '&#xe0e7;',
		'social-github-circular' => '&#xe0e8;',
		'social-github' => '&#xe0e9;',
		'google-plus-circular' => '&#xe0ea;',
		'social-google-plus' => '&#xe0eb;',
		'social-instagram-circular' => '&#xe0ec;',
		'social-instagram' => '&#xe0ed;',
		'last-fm-circular' => '&#xe0ee;',
		'social-last-fm' => '&#xe0ef;',
		'social-linkedin-circular' => '&#xe0f0;',
		'social-linkedin' => '&#xe0f1;',
		'social-pinterest-circular' => '&#xe0f2;',
		'social-pinterest' => '&#xe0f3;',
		'social-skype-outline' => '&#xe0f4;',
		'social-skype' => '&#xe0f5;',
		'social-tumbler-circular' => '&#xe0f6;',
		'social-tumbler' => '&#xe0f7;',
		'social-twitter-circular' => '&#xe0f8;',
		'social-twitter' => '&#xe0f9;',
		'social-vimeo-circular' => '&#xe0fa;',
		'social-vimeo' => '&#xe0fb;',
		'social-youtube-circular' => '&#xe0fc;',
		'social-youtube' => '&#xe0fd;',
		'sort-alphabetically-outline' => '&#xe0fe;',
		'sort-alphabetically' => '&#xe0ff;',
		'sort-numerically-outline' => '&#xe100;',
		'sort-numerically' => '&#xe101;',
		'spanner-outline' => '&#xe102;',
		'spanner' => '&#xe103;',
		'spiral' => '&#xe104;',
		'star-full-outline' => '&#xe105;',
		'star-half-outline' => '&#xe106;',
		'star-half' => '&#xe107;',
		'star-outline' => '&#xe108;',
		'star' => '&#xe109;',
		'starburst-outline' => '&#xe10a;',
		'starburst' => '&#xe10b;',
		'stopwatch' => '&#xe10c;',
		'support' => '&#xe10d;',
		'tabs-outline' => '&#xe10e;',
		'tag' => '&#xe10f;',
		'tags' => '&#xe110;',
		'th-large-outline' => '&#xe111;',
		'th-large' => '&#xe112;',
		'th-list-outline' => '&#xe113;',
		'th-list' => '&#xe114;',
		'th-menu-outline' => '&#xe115;',
		'th-menu' => '&#xe116;',
		'th-small-outline' => '&#xe117;',
		'th-small' => '&#xe118;',
		'thermometer' => '&#xe119;',
		'thumbs-down' => '&#xe11a;',
		'thumbs-ok' => '&#xe11b;',
		'thumbs-up' => '&#xe11c;',
		'tick-outline' => '&#xe11d;',
		'tick' => '&#xe11e;',
		'ticket' => '&#xe11f;',
		'time' => '&#xe120;',
		'times-outline' => '&#xe121;',
		'times' => '&#xe122;',
		'trash' => '&#xe123;',
		'tree' => '&#xe124;',
		'upload-outline' => '&#xe125;',
		'upload' => '&#xe126;',
		'user-add-outline' => '&#xe127;',
		'user-add' => '&#xe128;',
		'user-delete-outline' => '&#xe129;',
		'user-delete' => '&#xe12a;',
		'user-outline' => '&#xe12b;',
		'user' => '&#xe12c;',
		'vendor-android' => '&#xe12d;',
		'vendor-apple' => '&#xe12e;',
		'vendor-microsoft' => '&#xe12f;',
		'video-outline' => '&#xe130;',
		'video' => '&#xe131;',
		'volume-down' => '&#xe132;',
		'volume-mute' => '&#xe133;',
		'volume-up' => '&#xe134;',
		'volume' => '&#xe135;',
		'warning-outline' => '&#xe136;',
		'warning' => '&#xe137;',
		'watch' => '&#xe138;',
		'waves-outline' => '&#xe139;',
		'waves' => '&#xe13a;',
		'weather-cloudy' => '&#xe13b;',
		'weather-downpour' => '&#xe13c;',
		'weather-night' => '&#xe13d;',
		'weather-partly-sunny' => '&#xe13e;',
		'weather-shower' => '&#xe13f;',
		'weather-snow' => '&#xe140;',
		'weather-stormy' => '&#xe141;',
		'weather-sunny' => '&#xe142;',
		'weather-windy-cloudy' => '&#xe143;',
		'weather-windy' => '&#xe144;',
		'wi-fi-outline' => '&#xe145;',
		'wi-fi' => '&#xe146;',
		'wine' => '&#xe147;',
		'world-outline' => '&#xe148;',
		'world' => '&#xe149;',
		'zoom-in-outline' => '&#xe14a;',
		'zoom-in' => '&#xe14b;',
		'zoom-out-outline' => '&#xe14c;',
		'zoom-out' => '&#xe14d;',
		'zoom-outline' => '&#xe14e;',
		'zoom' => '&#xe14f;',
	) );
}
add_filter( 'siteorigin_widgets_icons_typicons', 'siteorigin_widgets_icons_typicons_filter' );
