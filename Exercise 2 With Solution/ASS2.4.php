<?php

class Car {
    private $make;
    private $model;
    private $year;
    private $price;
    

    public function __construct($make, $model, $year, $price, $cyear) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->price = $price;
    
    }

    public function getMake() {
        return $this->make;
    }

    public function getModel() {
        return $this->model;
    }

    public function getYear() {
        return $this->year;
    }

    public function getPrice() {
        return $this->price;
    }

        public function calculateDepreciation($cyear) {
        $cyear = Date("Y")-this->$year;
        $depreciationRate = 0.1; 
        $depreciatedPrice = $this->price * pow(1 - $depreciationRate, $cyear);
        return $depreciatedPrice;
    }

    public function calculateResaleValue($marketFactor) {
        $resaleValue = $this->price * $marketFactor;
        return $resaleValue;
    }
}

$car = new Car("audi", "A4", 2019, 250000.00);

$make = $car->getMake();
$model = $car->getModel();
$year = $car->getYear();
$price = $car->getPrice();
//$cyear = $car->getcYear();

echo "Car Details:\n";
echo "Make: $make\n";
echo "Model: $model\n";
echo "Year: $year\n";
echo "Price: $price\n";
//echo "cyear: $cyear\n";

$yearsSincePurchase = $year ;
$depreciatedPrice = $car->calculateDepreciation($yearsSincePurchase);
echo "Depreciated Price after $yearsSincePurchase years: $depreciatedPrice\n";

$marketFactor = 0.8;
$resaleValue = $car->calculateResaleValue($marketFactor);
echo "Resale Value with market factor $marketFactor: $resaleValue\n";
?>
