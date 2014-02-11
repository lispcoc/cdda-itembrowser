<?php

class ToolGroup
{
  private $data;
  public $items;
  public function __construct($data)
  {
    $this->data = $data;
    $item = App::make('ItemRepositoryInterface');
    $this->items = array_map(function($i) use ($item) {
        return array(
          "item"=>$item->find($i[0]),
          "amount"=>$i[1]>1? " ($i[1] charges) ": ""
        );
    }, $this->data);
  }
}

