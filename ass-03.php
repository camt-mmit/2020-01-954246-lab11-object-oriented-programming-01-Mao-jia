<?php
/**
     * ID:602110189
     * Name: Mao Jia
     * WeChat: Ga
     */
class mul
{
  private $row;
  private $num;
 
  function __construct($row,$num)
  {
      $this->row=$row;
      $this->num=$num;

  }
  function print($n){
      for ($i=1;$i<=$this->row;$i++){
          for($j=2;$j<=$n;$j++){
              printf("%4d",$j*$i);
          }
          printf("\n");
      }
  }
}

class price
{
  private $pricings;
  private $unit;
function __construct($pricings,$unit)
{
 $this->pricings=$pricings;
 $pricings=[];
 $this->unit=$unit;
}

function calculatePrice($unit){
    $price = 0;
	for($i = 0; $unit > 0; $i++) {
		$unitCal = ($unit > $this->pricings[$i]['unit'])? $this->pricings[$i]['unit'] : $unit;
		$price += ($this->pricings[$i]['isWhole']==1)? $this->pricings[$i]['price'] : $unitCal * $this->pricings[$i]['price'];
		$unit -= $unitCal;
	}
	printf("price of electricity bill = %d\n", $price);
}
}


class App
{
    private $category;
 
   function __construct($category)
  {
      $this->category=$category;
    }

 function run()
 {if ($this->category==1){ 
    printf("Input size:");
    fscanf(STDIN,"%d",$num);
    $row=15;
    $n=new mul($row,$num);
    $n->print($num);}
    printf("\n");
  if ($this->category==2){
    $pricings = [
		[ 'unit' => 10,           'price' => 10, 'isWhole' => 1 ],
		[ 'unit' => 5,           'price' =>  3, 'isWhole' => 0 ],
		[ 'unit' => 5,           'price' =>  5, 'isWhole' => 0 ],
        [ 'unit' => 10,           'price' => 10, 'isWhole' => 0 ],
        [ 'unit' => PHP_INT_MAX, 'price' => 20, 'isWhole' => 0 ],
    ];
    printf("Input usage unit:");
    fscanf(STDIN,"%d",$unit);
    $price= new price($pricings,$unit);
    $price->calculatePrice($unit);
    printf("\n");
  }  
  if ($this->category!=1 and $this->category!=2) {printf("Invalid menu number %d!!!\n",$this->category); 
    printf("\n");}
}
}


while(true){
printf(<<<EOT
         1. Multiplication Table
         2. Electricity Bill calculation
         3. exit

Input menu number:
EOT);
fscanf(STDIN,"%d",$category);
if ($category==3) break;
$app=new APP($category);
$app->run();
}