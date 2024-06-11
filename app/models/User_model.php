<?php 

class User_model {
    private $name = 'Mike';

    public function getUser()
    {
        return $this->name;
    }

}