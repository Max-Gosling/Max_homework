<?php
class figure{
    public $color = 'purple';
};
class sqare extends figure{
    public $widht = '100px';
};
$new_figure = new sqare();
var_dump($new_figure);
?>