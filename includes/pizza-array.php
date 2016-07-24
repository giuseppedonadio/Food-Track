<?php
/**
 *
 * pizza-array.php
 *
 * creates an array of pizzas for food track
 *
 * @package FoodTrack
 * @author Giuseppe Donadio <giuseppedonadio@gmail.com>
 * @version 0.1 2016/07/13
 * @link http://www.giuseppedonadio.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @todo finish instruction sheet
 * @todo add more complicated checkbox & radio button examples
 */

  include 'pizza.php';

  $pizzas[]=new Pizza('Margherita','Large',19.99);
  $pizzas[]=new Pizza('Pepperoni','Medium',17.99);
  $pizzas[]=new Pizza('Combination','Small',15.99);


 ?>
