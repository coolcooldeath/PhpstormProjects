<?php


class Cat{
     private $name;
     private $age;
     public static $count_of_limbs = 4;


    public function __construct(string $name, int $age) {
        $this->name = $name;
        $this->age = $age;
        echo " Создан кот через конструктор - $name, возраст - $age <br> ";
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public static function getCountOfLimbs(): int
    {
        return self::$count_of_limbs;
    }

    /**
     * @param int $count_of_limbs
     */
    public static function setCountOfLimbs(int $count_of_limbs): void
    {
        self::$count_of_limbs = $count_of_limbs;
    }
}

/*$catMurzik = new Cat();*/
$catVasya = new Cat("Vasya","5");
$catVasya->setAge(6);
echo "Имя - " . $catVasya->getName() .  "<br> Возраст - " . $catVasya->getAge() . "<br>";
echo "У всех котиков - " . Cat::$count_of_limbs .  " ноги";
/*$catMurzik->name = "Мурзик";
$catMurzik->age = 4;
echo $catMurzik->name . "<br>";
echo $catMurzik->age  . "<br>";*/