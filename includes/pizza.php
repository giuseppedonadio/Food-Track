<?php
/**
  *
  * The above live of code shows the parameter "act" being loaded with the value "next" which would be the
  * unique identifier for the next step of a multi-step process
  *
  * @package FoodTrack
  * @author Giuseppe Donadio <giuseppedonadio@gmail.com>
  * @version 0.1 2016/07/13
  * @link http://www.giuseppedonadio.com/
  * @license http://www.apache.org/licenses/LICENSE-2.0
  * @todo finish instruction sheet
  * @todo add more complicated checkbox & radio button examples
  *
  * Pizza class and what it does
  *
  * More stuff about the class
  *
  *<code>
  * $myPizza = new somePizza('Margherita','Large',19.99);
  *</code>
  *
  * @todo none
*/

class Pizza
{
    public $Type = "";
    public $Size = "";
    public $Price = 19.99;

  /**
   * Loads Pizza Data
   *
   * More detail about description
   *
   * <code>
   * $myPizza = new somePizza('Margherita','Large',19.99);
   *</code>
   *
   * @param string $Type The name of the pizza
   * @param string $Size The size of the pizza
   * @return float $Price The cost of the pizza
   * @todo none
   */

    public function __construct($Type,$Size,$Price)
    {
      $this->Type=$Type;
      $this->Size=$Size;
      $this->Price=$Price;
    }//end constructor


}//end pizza class


 ?>
