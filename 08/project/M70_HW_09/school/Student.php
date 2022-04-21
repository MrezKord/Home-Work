<?php


final class Student extends Person{

    private array $classes;    

    /**
     * return array of classes
     *
     * @return array
     */
    public function classList():array
    {
        return $this->classes;
    }

    /**
     * add $classItem to list student class, if not exist
     *
     * @param ClassItem $classItem
     * @return $this
     */
    public function addClass(ClassItem $classItem): Student
    {
        $this->classes[] = $classItem->get_classItem();
        return $this;
    }

    /**
     * return true if student has this class else return false
     *
     * @param ClassItem $classItem
     * @return bool
     */
    public function isStudentHasClass(ClassItem $classItem): bool
    {   
        $flag = false;
        foreach ($this->classes as $value) {
            if ($classItem->get_classItem() == $value) {
                $flag = true;
                // break;
            }
        }
        return $flag;
    }

    /**
     * @param ClassItem $classItem
     * @return string
     */
    public function removeClass(ClassItem $classItem)
    {
        foreach ($this->classes as $key => $value) {
            if ($classItem->get_classItem() == $value) {
                unset($this->classes[$key]);
            }
        }
    }
}
