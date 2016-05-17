<?php
App::uses('AppHelper', 'View/Helper');
class BreadcrumbHelper extends AppHelper 
{
public $helpers = array('Html','Js' => array('Jquery'));
/*
$links array containing information to create links
'title' => 'Text shown for link'
'url' => url to redirect, can be created by sending the controller and action
'class' => optional, to be added id specific CSS needed
*/
public function create($link)
{

$html = $this-> Js -> link($link[0]['title'],$link[0]['url'],
array(
'before' => $this->Js->get('#loading')->effect('fadeIn'), 
// #loading - id to show the gif while content loads
'success' => $this->Js->get('#loading')->effect('fadeOut'),
'update' => '#content', 
// #content - id to update the content on request complete
'class' => $link[0]['class']
)
);

// foreach($link as $link)
// {
// 
// // separtor for links, you can also use any symbol, its your application, you are the boss
// $html .= $this->Js->link($link['title'],$link['url'],
// array(
    // 'before' => $this->Js->get('#loading')->effect('fadeIn'),
    // 'success' => $this->Js->get('#loading')->effect('fadeOut'),
    // 'update' => '#content',
    // 'class' => $link['class']
// )
    // );
// }

return $html;
}
}

?>