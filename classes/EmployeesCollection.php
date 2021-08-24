<?php
// 26.4
//
class EmployeesCollection
{
    private $employees = [];

    public function add($newEmployee)
    {
        if (!in_array($newEmployee, $this->employees, false)) {
            $this->employees[] = $newEmployee;
        }
    }

    public function get()
    {
        return $this->employees;
    }
    /*private function exists($newEmployee)
    {
        foreach ($this->employees as $employee) {
            if ($employee === $newEmployee) {
                return true;
            }
        }
        return false;
    }*/
}