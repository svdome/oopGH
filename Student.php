<?

abstract class Student extends Human 
{
    private $scholarship;

    public function getScholarship() 
    {
        return $this->scholarship;
    }

    public function setScholarship($scholarship) 
    {
        $this->scholarship=$scholarship;
    }
}