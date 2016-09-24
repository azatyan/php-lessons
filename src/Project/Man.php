<?php

namespace Project;

/**
 * Class Man
 * @package Project
 */
class Man
{
    /**
     * @var
     */
    public $firstName;

    /**
     * @var
     */
    public $lastName;

    /**
     * @var
     */
    private $birthDate;


    /**
     * Man constructor.
     * @param $firstName
     * @param $lastName
     * @param $birthDate
     */
    public function __construct($firstName, $lastName, $birthDate)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthDate = $birthDate;
    }


    /**
     * @return \DateTime
     */
    public function getBirthDate(){

        return $this->birthDate;
    }
    
    
    /*
     * Get the Man's Full Name
     * @return string
     * 
     */
    public function getFullName(){
        
        $fullName = $this->firstName . ' ' . $this->lastName;
        
        return $fullName;
    }
}