<?php

/**
 * INSTRUCTIONS:
 * Write a PHP class named Person with protected properties first_name, last_name, and age.
 * Add a constructor.
 * Add the getters and setters.
 * Add a method displayInfos() to display the person's information.
 * Create a new object and display its information.
 */
class Person
{
    protected string $first_name;
    protected string $last_name;
    protected int $age;


    public function __construct(string $first_name, string $last_name, int $age)
    {

        $this->setFirstName($first_name);
        $this->setLastName($last_name);
        $this->setAge($age);
    }


    /**
     * Get the value of first_name
     */
    public function getFirstName(): string
    {
        return $this->first_name;
    }

    /**
     * Set the value of first_name
     */
    public function setFirstName(string $first_name): self
    {
        $this->first_name = $first_name;

        return $this;
    }

    /**
     * Get the value of last_name
     */
    public function getLastName(): string
    {
        return $this->last_name;
    }

    /**
     * Set the value of last_name
     */
    public function setLastName(string $last_name): self
    {
        $this->last_name = $last_name;

        return $this;
    }

    /**
     * Get the value of age
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * Set the value of age
     */
    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }
    public function displayInfos()
    {
        return "
        First Name:    {$this->first_name}
        Last Name:      {$this->last_name}
        Age:    {$this->age}
        ";
    }
}

$person1 = new Person("sharad", "bhusal", 21);
$person2 = new Person("shrine", "sigdel", 20);

echo $person1->displayInfos();
echo $person2->displayInfos();
