<?php


class BtsEntity {
   public $id;
   public $name;
   public $numberofmembers;
   public $country;
   public $image;
   function __construct($id, $name, $numberofmembers, $country, $image) {
       $this->id = $id;
       $this->name = $name;
       $this->numberofmembers = $numberofmembers;
       $this->country = $country;
       $this->image = $image;
   }

}
?>
