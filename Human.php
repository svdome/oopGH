<?

abstract class Human
{
    private $name;
    private $surname;
    private $age;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getSurName()
    {
        return $this->surname;
    }

    public function setSurName($surname)
    {
        $this->surname = $surname;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }
}

