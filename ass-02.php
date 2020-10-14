<?php
/**
     * ID:602110189
     * Name: Mao Jia
     * WeChat: Ga
     */
class price
{
  private $pricings;
  private $unit;
/**
 * The assgiment requires you to pass filename as constructor argument
 * but you pass associative array instead.
 * And I think you don't want $unit here because you don't use it anywher
 * in your code.
 */
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

$fp=fopen($_SERVER['argv'][1],"r");
fscanf($fp,"%d",$n);
for($i=0;$i<$n;$i++){
    fscanf($fp,"%d %d %d",$pricing['unit'],$pricing['price'],$pricing['isWhole']);
    $pricings[]=$pricing;
   }
fclose($fp);

while(true){
    printf("Input usage unit(-1 for exit):");
    fscanf(STDIN,"%d",$unit);
    if ($unit==-1) break;
    $price= new price($pricings,$unit);
    $price->calculatePrice($unit);
}