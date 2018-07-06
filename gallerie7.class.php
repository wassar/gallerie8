<?php

class Gallerie8{

    public $items = [];

    function __construct($keyword,$sellers){


        foreach ($sellers as $seller){
            $this->_fetch($this->_searchUri($seller,$keyword),$seller);
        }

        if(count($this->items) <= 0)
            return false;
        return asort($this->items);

    }

    protected function _fetch($uri,$seller){

        $data = @file_get_contents($uri);

        if(!$data)
            return false;

        preg_match_all($seller->patr,$data,$matches, PREG_SET_ORDER, 0);

        return $this->_prossesMatches($matches,$seller);
    }

    protected function _prossesMatches($matches,$seller){

        if (count($matches) <= 0)
            return false;

        foreach ($matches as $match)
            $this->_sortMatches($match[0],$seller);


        return true;
    }

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
/*
        return array_push($this->items,[

            'image' => $seller->uri.$item[0][1],
            'link'  => $seller->uri.$item[0][2],
            'name'  => $item[0][3],
            'price' => number_format($item[0][4],3),
            'seller'=> $seller->name,
            'sellerLink'=> $seller->uri
        ]);
*/
    }

    protected function _searchUri($seller,$keyword){

        return $seller->uri.$seller->path.$keyword;
    }
}
