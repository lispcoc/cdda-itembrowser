<?php

class ItemPresenter extends Robbo\Presenter\Presenter
{
  function presentSymbol()
  {
    $symbol = $this->object->symbol;
    if($symbol==" ")
      return "&nbsp;";
    return htmlspecialchars($symbol);
  }

  public function presentName()
  { 
    return <<<EOF
    <span style="color: $this->color">$this->symbol {$this->object->name}</span>    
EOF;
  }

  public function presentVolume()
  {
    return $this->object->volume?:"N/A";
  }

  public function presentWeight()
  {
    return $this->object->weight?:"N/A";
  }

  public function presentBashing()
  {
    return $this->object->bashing?:"N/A";
  }

  public function presentCutting()
  {
    return $this->object->cutting?:"N/A";
  }

  public function presentToHit()
  {
    return $this->object->to_hit?:"N/A";
  }

  public function presentMovesPerAttack()
  {
    return $this->object->moves_per_attack?:"N/A";
  }

  public function presentRecipes()
  {
    return array_map(function($recipe)
        { return new RecipePresenter($recipe); }
    , $this->object->recipes);
  }

  public function presentDisassembly()
  {
    return array_map(function($recipe)
        { return new RecipePresenter($recipe); }
    , $this->object->disassembly);
  }

}