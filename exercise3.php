<?php

/**
 * INSTRUCTIONS:
 * Import the file from exercise2 to have access to the Person class.
 * Write a class named Employee that inherits from the Person class,
 * and adds the properties salary and position.
 * Override the constructor and call the parent constructor.
 * Override the displayInfos() method to display the salary and position.
 */
require_once "exercise2.php";
class Employee extends Person
{
    protected float $salary;
    protected string $position;

    public function __construct(string $first_name, string $last_name, int $age, float $salary, string $position)
    {
        parent::__construct($first_name, $last_name, $age);

        $this->setSalary($salary);
        $this->setPosition($position);
    }

    /**
     * Get the value of salary
     */
    public function getSalary(): float
    {
        return $this->salary;
    }

    /**
     * Set the value of salary
     */
    public function setSalary(float $salary): self
    {
        $this->salary = $salary;

        return $this;
    }

    /**
     * Get the value of position
     */
    public function getPosition(): string
    {
        return $this->position;
    }

    /**
     * Set the value of position
     */
    public function setPosition(string $position): self
    {
        $this->position = $position;

        return $this;
    }
    public function displayInfos()
    {

        return parent::displayInfos() . " Position:{$this->position}   Salary: {$this->salary}";
    }
}

$employee1 = new Employee("sharad", "Bhusal", 20, 2000000, "CEO");
echo $employee1->displayInfos();
