<?php
class Counter{
    private $count;
    public function __get($name)
    {
        return $this->$name;
    }
    public function __set($name, $value)
    {
        $this->$name = $value;
    }
}
$obj = new Counter();
$obj->count = 10;
echo $obj->count;
?>