<?php
/**
     * ID:602110189
     * Name: Mao Jia
     * WeChat: Ga
     */
class mul
{
  /**
   * I think you don't want $num here
   * because you don't use it anywher on your code.
   */
//   private $row;
//   private $num;
// 
//   function __construct($row,$num)
//   {
//       $this->row=$row;
//       $this->num=$num;
//
//   }
  private $row;

  function __construct($row)
  {
      $this->row=$row;
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

/**
 * Only one instance of class mul can work for multiple call.
 */
// while(true) {
// printf("Input size (0 for exit):");
// $row=$_SERVER['argv'][1];
// fscanf(STDIN,"%d",$num);

// if($num==0) break;
// $n= new mul($row,$num);
// $n->print($num);
// }

$row=$_SERVER['argv'][1];
$n= new mul($row);
while(true) {
    printf("Input size (0 for exit):");
    fscanf(STDIN,"%d",$num);

    if($num==0) break;
    $n->print($num);
}
