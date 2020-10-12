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



while(true) {
printf("Input size (0 for exit):");
$row=$_SERVER['argv'][1];
fscanf(STDIN,"%d",$num);

if($num==0) break;
$n= new mul($row,$num);
$n->print($num);
}
