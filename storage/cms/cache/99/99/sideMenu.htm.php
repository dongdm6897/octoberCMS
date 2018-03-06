<?php 
class Cms5a9e43bb4e25b534803384_3efec61e980de45f1196971419c246dbClass extends Cms\Classes\PartialCode
{
public function onEnd()
{
    $this['parentPage'] = explode("/", substr($this->page->url,1));
    $this['getMenu'] = $this['parentPage'][0];
    $this['subMenu'] = ucwords(str_replace("-"," ",$this['getMenu']));
}
}
