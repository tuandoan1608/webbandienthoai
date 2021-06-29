<?php
namespace App;
class Compare{
    public $item=null;
    public function __construct($oldcompare)
    {
        if($oldcompare){
            $this->item=$oldcompare->item;
        }
    }
    public function add($item,$id)
    {
        $comparet=['item'=>$item];
        if($this->item){
            if(array_key_exists($id,$this->item)){
                $comparet=$this->item[$id];
            }
        }
        $this->item[$id]=$comparet;
    }

    public function delete($id)
    {

        unset($this->item[$id]);
    }
}