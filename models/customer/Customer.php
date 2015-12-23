<?php

namespace app\models\customer;

class Customer
{
    /** @var string */
    public $name;
    
    /** @var \DateTime */
    public $birth_date;
    
    /** @var string */
    public $notes;
    
    /** @var PhoneRecord[] */
    public $phones = [];
    
    /**
     * Set values
     *  
     * @param string $name
     * @param string $birth_date
     */
    public function __construct($name, $birth_date) {
        $this->name = $name;
        $this->birth_date = $birth_date;
    }
}
