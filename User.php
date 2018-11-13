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

    public static function getWelcome($name, $user)
    {
        return 'Здравствуйте, ' . $name . '! Меня зовут ' . $user->name . '!' . '<br>';
    }

    public static function changeNationality($user, $nationality1)
    {
        return $user->nationality = $nationality1;
    }

    public static function showNationality($user)
    {
        echo $user->nationality . '.' . '<br>';
    }

    public static function getStatus($user)
    {
        if ($user->age < 18) {
            $status = 'ребенок';
        } elseif ($user->age > 64) {
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

$user1 = new User('Вова', '33','русский');
echo User::getWelcome($name, $user1);
echo $user1->name. ' - '.User::getStatus($user1).' и по национальности ';
User::showNationality($user1);
echo '<br>';

$user2 = new User('Дима', '17','еврей');
echo User::getWelcome($name, $user2);
echo $user2->name. ' - '.User::getStatus($user2).' и по национальности ';
User::showNationality($user2);
echo '<br>';

$user3 = new User('Ренат', '67','татарин');
echo User::getWelcome($name, $user3);
echo $user3->name. ' - '.User::getStatus($user3).' и по национальности ';
User::showNationality($user3);
echo '<br>';

User::changeNationality($user2, 'тоже русский');
echo $user2->name. ' - '.User::getStatus($user2).' и по национальности ';
User::showNationality($user2);
echo '<br>';

$user4 = new User('Невозможное действие', '40','татарин');
echo $user4 ->name.'<br>';
echo '<br>';

echo 'Количество рук : '.User::HANDS_COUNT.'<br>';

echo 'Количество ног : '.User::FOOTS_COUNT.'<br>' ;


?>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    