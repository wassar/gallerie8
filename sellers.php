<?php

$sellers = [
    'sbs' => (object) [
        'name' => 'SBS INFORMATIQUE',
        'uri'  => 'http://www.sbsinformatique.com/',
        'path' => 'search.asp?P=1&ob=&sw=&Keyword=',
        'patr' => "/<table cellspacing=\"0\" class=\"blocProduit\">(\s.*?)*<!-- prix -->/",
        'pos'  => (object)[
            'patr'  => '/<img src="(.*)" alt=.* onload="CheckWidth\(this, \'84\'\);" \/>[^*]+<a href="(.*)" class="sable12"><b class="VignBlue">(.*)<\/b>[^*]*<b class="bordeau14">(.*)DT/',
            'image' => 1,
            'link'  => 2,
            'name'  => 3,
            'price' => 4,
        ]
    ]
];
