<?php

function inputBlock($type, $label, $name, $value='',$inputAttrs=[], $divAttrs=[]){
    $divString = stringFyAttrs($divAttrs);
    $inputString = stringFyAttrs($inputAttrs);
    $html = '<div '.$divString.'>';
    $html .= '<label for="'.$name.'">'.$label.'</label>';
    $html .= '<input type="'.$type.'" id="'.$name.'" name="'.$name.'" value="'.$value.'" '.$inputString.'/>';
    $html .= '</div>';
    return $html;
}
function submitTag($buttonText, $inputAttrs=[]){
    $inputString = stringFyAttrs($inputAttrs);
    $html = '<input type="submit" value="'.$buttonText.'"'.$inputString.'>';
    return $html;
}

function submitBlock($buttonText, $inputAttrs=[], $divAttrs=[]){
    $divString = stringFyAttrs($divAttrs);
    $inputString = stringFyAttrs($inputAttrs);
    $html = '<div '.$divString.'>';
    $html .= '<input type="submit" value="'.$buttonText.'"'.$inputString.'>';
    $html .= '</div>';
    return $html;
}

function stringFyAttrs($attrs){
    $string = '';
    foreach ($attrs as $key => $val){
        $string .= ' '.$key.'="'.$val.'"';
    }
    return $string;
}