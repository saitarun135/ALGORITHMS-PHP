<?php
/**
 * inslude() will only generate a phpwarning but allow script execution to continue 
 * if the file to be included can't be found,whereas the require() statement
 *  will generate a fatal error and stops script execution
 */
use PHPUnit\Framework\TestCase;
require 'Algorithms.php';

class AlgorithmsTest extends TestCase{

   //linearsearch Test case
   
   public function testChecksLinearSearch(){
      $al=new Algorithms();
      $list=array(5,10,15,20,25,30);
      $test=$al->linearSearch($list,25);
      $this->assertEquals($test,4);
  }
   
   //interpolationSearch TestCase   
   
   public function  testChecksInterpolationSearch(){
      $al=new Algorithms();
      $list = array(2,14, 25, 43,758,999,1200);
      $test=$al->interpolationSearch($list,999);
      $this->assertEquals($test,5);
   }
   
   //BinarysearchTestCase

   public function testChecksBinarySearch(){
      $al=new Algorithms();
      $array=array(5,10,50,500,2500);
      $test=$al->binarySearch($array,2500);
      $this->assertEquals($test,4);
   }
   
   //insertion sorting

   public function testChecksInsertionSort(){
      $al=new Algorithms();
      $test_array=array(5,4,3,2);
      $actual=$al->insertion_sort($test_array);
      $expected=array(2,3,4,5);
      $this->assertEquals($actual,$expected);
   }
   
   //mergesort
   
  public function testChecksMergeSort(){
        $al=new Algorithms();
        $test_array=array(50,30,40,10);
        $act=$al->merge_sort($test_array);
        $expect=array(10,30,40,50);
        $this->assertEquals( $act,$expect);
     }
   
}
?>