<?php 

class person {
   
    //initial state
   var $name = "momo";
    
    function set_name($new_name) {
        $this->name = $new_name;
    }

    function get_name() {
        return $this->name;
    }

}

class boy extends person {

    var $height;

  function set_height($new_height) {
    $this->height = $new_height;

  }  
  
  function get_height() {
    return $this->height;

  }  

}

?>