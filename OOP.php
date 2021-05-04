<?php
class Vehicle{
    public $model;
    public $serialNumber;
    public $wheelAmount;
    public $maxSpeed;
    public $passCapacity;

    public function __construct(string $model, int $serialNumber, int $wheelAmount, int $maxSpeed, int $passCapacity)
    {
        $this->model = $model;
        $this->serialNumber = $serialNumber;
        $this->wheelAmount = $wheelAmount;
        $this->maxSpeed = $maxSpeed;
        $this->passCapacity = $passCapacity;
        echo "Создан " . __CLASS__  . "\n";
    }
}

class Car extends Vehicle{

    public $cargoCapacity;
    public $transmissionType;

    function __construct(string $model, int $serialNumber, int $wheelAmount, int $maxSpeed, int $passCapacity,
                         int $cargoCapacity, string $transmissionType)
    {
        parent::__construct($model, $serialNumber, $wheelAmount, $maxSpeed, $passCapacity);
        $this->cargoCapacity = $cargoCapacity;
        $this->transmissionType = $transmissionType;
        echo "Создан " . __CLASS__  . "\n";
    }

    function __destruct() {
        echo "Уничтожается " . __CLASS__  . "\n";
    }
}

class Train extends Vehicle{

    public $carAmount;
    public $engineType;

    function __construct(string $model, int $serialNumber, int $wheelAmount, int $maxSpeed, int $passCapacity,
                         int $carAmount, string $engineType)
    {
        parent::__construct($model, $serialNumber, $wheelAmount, $maxSpeed, $passCapacity);
        $this->carAmount = $carAmount;
        $this->engineType = $engineType;
        echo "Создан " . __CLASS__  . "\n";
    }

    function __destruct() {
        echo "Уничтожается " . __CLASS__  . "\n";
    }
}

$car1 = new Car('Hyundai', 254, 4, 200,
    5, 400, 'Variator');

echo '<br/>';

$train1 = new Train('InterCity', 453, 36, 150,
    180, 6, 'Electric');

echo '<br/>';