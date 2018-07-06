<?php

class Gallerie8{

    public $items = [];
    /**
     * [initialize Gallerie8]
     * @param [string] $keyword [search keyword]
     * @param [Object] $sellers [sellers list]
     */
    function __construct($keyword,$sellers){


        foreach ($sellers as $seller){
            $this->_fetch($this->_searchUri($seller,$keyword),$seller);
        }

        if(count($this->items) <= 0)
            return false;
        return asort($this->items);

    }

    /**
     * [_fetch description]
     * @param  [_searchUri()] $uri    [url to fetch]
     * @param  [object] $seller [sellers list]
     * @return [_prossesMatches]
     */
    protected function _fetch($uri,$seller){

        $data = @file_get_contents($uri);

        if(!$data)
            return false;

        preg_match_all($seller->patr,$data,$matches, PREG_SET_ORDER, 0);

        return $this->_prossesMatches($matches,$seller);
    }
    /**
     * [porsess the data coming from _fetch]
     * @param  [array] $matches [from _fetch]
     * @param  [Object] $seller  [sellers list]
     * @return [bool]
     */
    protected function _prossesMatches($matches,$seller){

        if (count($matches) <= 0)
            return false;

        foreach ($matches as $match)
            $this->_sortMatches($match[0],$seller);


        return true;
    }

    /**
     * [fill $this->items]
     * @param  [match] $match  [single match from _prossesMatches]
     * @param  [seller] $seller [sellers list object]
     * @return [pushes new results]
     */
    protected function _sortMatches($match,$seller){

        preg_match_all($seller->pos->patr,$match,$item,PREG_SET_ORDER, 0);
        return $this->items[(int)$item[0][4]] = (Object)[

            'image' => $seller->uri.$item[0][1],
            'link'  => $seller->uri.$item[0][2],
            'name'  => $item[0][3],
            'price' => number_format($item[0][4],3),
            'seller'=> $seller->name,
            'sellerLink'=> $seller->uri
        ];

    }

    /**
     * [define the url to _fetsh]
     * @param  [object] $seller  [single seller object]
     * @param  [string] $keyword [search keyword]
     * @return [string]          [url to _fetch]
     */
    protected function _searchUri($seller,$keyword){

        return $seller->uri.$seller->path.$keyword;
    }
}
