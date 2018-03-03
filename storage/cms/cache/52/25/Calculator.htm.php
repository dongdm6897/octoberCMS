<?php 
class Cms5a98511eae053871075161_b473e7ade6805a094356237fb6b39589Class extends \Cms\Classes\PageCode
{
public function onTest(){
    $value1 =post('value1');
    $value2 =post('value2');
    $operation=post('operation');
    switch ($operation){
        case '+':
            $this['answer']= $value1 + $value2;
            break;
        case '-':
            $this['answer']= $value1 - $value2;
            break;
        case '*':
            $this['answer']= $value1 * $value2;
            brreak;
        case '/':
            $this['answer']= $value1 / $value2;
            break;
    }
}
}
