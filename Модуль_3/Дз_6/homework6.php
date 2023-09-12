<?php
class User{
    private $name;

    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }
}
$me = new User();
echo $me->setName('Max');
echo $me->getName();
?>