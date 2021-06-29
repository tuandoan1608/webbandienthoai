<?php
namespace App;
class Wishlist{
    public $item=null;
    public function __construct($oldwishlist)
    {
        if($oldwishlist){
            $this->item=$oldwishlist->item;
        }
    }
    public function add($item,$id)
    {
        $wishlist=['item'=>$item];
        if($this->item){
            if(array_key_exists($id,$this->item)){
                $wishlist=$this->item[$id];
            }
        }
        $this->item[$id]=$wishlist;
    }

    public function deletewish($id)
    {

        unset($this->item[$id]);
    }
}