<?php

class User
{
    public $name;
    public $age;
    private $nationality;

    public function __construct($name, $age, $nationality)
    {
        $this->name = $name;
        $this->age = $age;
        $this->nationality = $nationality;
    }

    public function getWelcome($name)
    {
        return 'Здравствуйте, ' . $name . '! Меня зовут ' . $this->name . '!' . PHP_EOL;
    }

    public function changeNationality($nationality1)
    {
        return $this->nationality = $nationality1;
    }

    public function showNationality()
    {
        echo $this->nationality . '.' . PHP_EOL;
    }

    public function getStatus()
    {
        if ($this ->age < 18) {
            $status = 'ребенок';
        } elseif ($this->age > 64) {
            $status = 'пенсионер';
        } else {
            $status = 'взрослый';
        }
        return $status;
    }

    const HANDS_COUNT = 2;

    const FOOTS_COUNT = 2;
}

$name = 'Alex';

$user = new User('Вова', '33','русский');
echo $user -> getWelcome($name);
echo $user->name. ' - '.$user->getStatus().' и по национальности ';
$user->showNationality();
echo '<br>';

$user2 = new User('Дима', '17','еврей');
echo $user2->getWelcome($name);
echo $user2->name. ' - '.$user2->getStatus().' и по национальности ';
$user2->showNationality();
echo '<br>';

$user3 = new User ('Ренат', '67','татарин');
echo $user3->getWelcome($name);
echo $user3->name. ' - '.$user3->getStatus().' и по национальности ';
$user3->showNationality();
echo '<br>';

$user2->changeNationality('тоже русский');
echo $user2->name. ' - '.$user2->getStatus().' и по национальности ';
$user2->showNationality();
echo '<br>';

$user3 = new User('Невозможное действие', '40','татарин');
echo $user3 ->name.'<br>';
echo '<br>';

echo 'Количество рук : '.User::HANDS_COUNT.'<br>';

echo 'Количество ног : '.User::FOOTS_COUNT.'<br>' ;


?>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    