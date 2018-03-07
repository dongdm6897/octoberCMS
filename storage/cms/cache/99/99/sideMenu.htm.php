<?php 
class Cms5a9ed8d6b9c84750625272_038400ebd749a3d60288e285f63b43ffClass extends Cms\Classes\PartialCode
{
public function onEnd()
{
    $this['parentPage'] = explode("/", substr($this->page->url,1));
    $this['getMenu'] = $this['parentPage'][0];
    $this['subMenu'] = ucwords(str_replace("-"," ",$this['getMenu']));
}
}
