<?php
/**
 * Class cspFunctions
 * 
 * @package Phpunit_Test_Sample
 * The class cspFunctions contains all the commonly used functions in the extension
 * 
 */
class cspImportCommons extends WP_UnitTestCase {
	
	public $importCommons;
    function setup()
    {
        include_once(CSP_PLUGIN_PATH.'/includes/import-export/import-new/class-import-commons.php');
        $this->importCommons=new cspImportExport\Import\WisdmCSPImportCommons();
    }
	
	/**
	 * A function to unit test method wdmGetSiteUserByI
	 *
	 * @covers wdmGetSiteUserById
	 */
	public function test_getEquivalentNewHeadersForOldHeaders($headersToPass = array()) {
		 //Tests using wordpress database.
		 $headersToPass = array('product id', 'user', 'min qty', 'flat', '%');
		 $expectedHeaders=array('product_id', 'user', 'min_quantity', 'flat_price', '%_discount');
		 
		 $this->assertEquals([], array_diff($this->importCommons::getEquivalentNewHeadersForOldHeaders($headersToPass), $expectedHeaders));

		 $headersToPass = array('product id', 'user_id', 'min qty', 'flat', '%');
		 $this->assertEquals([], array_diff($this->importCommons::getEquivalentNewHeadersForOldHeaders($headersToPass), $expectedHeaders));

		 $headersToPass = array('product id', 'user_abc', 'min qty', 'flat', '%');
		 $this->assertNotEquals([], array_diff($this->importCommons::getEquivalentNewHeadersForOldHeaders($headersToPass), $expectedHeaders));		 
	}


	public function test_getValidHeadersAndFileColumnsMapping() {
		
	}


	/**
	 * The function getValidFileHeaders is responsible for trimming-out/removing
	 * the headers which are not used by import functionality. 
	 *
	 * @param array $fileHeaders
	 * @return void
	 */
	public function test_getValidFileHeaders($fileHeaders=array()) {
		$fileHeaders	 = array();
		$expectedHeaders = array();

		$this->assertEquals([], array_diff($this->importCommons::getValidFileHeaders($fileHeaders), $expectedHeaders));
		
		$fileHeaders	 = array('not_supported_header_1', 'not_supported_header_2', 'not_supported_header_x');
		$this->assertEquals([], array_diff($this->importCommons::getValidFileHeaders($fileHeaders), $expectedHeaders));

		$fileHeaders	 = array('product_id', 'user', 'min_qty', 'flat_price', 'not_supported_header_1', '%_discount', 'not_supported_header_2', '');
		$expectedHeaders = array('product_id', 'user', 'min_qty', 'flat_price', '%_discount');
		$this->assertEquals([], array_diff($this->importCommons::getValidFileHeaders($fileHeaders), $expectedHeaders));

		$fileHeaders	 = array('product id', 'user', 'min qty', 'flat price', 'not_supported_header_1', '%_discount', 'not_supported_header_2', '');
		$expectedHeaders = array('user', '%_discount');
		$this->assertEquals([], array_diff($this->importCommons::getValidFileHeaders($fileHeaders), $expectedHeaders));

		$fileHeaders	 = array('product_id', 'x-1', 'user', 'role', 'group', 'min_qty', 'flat_price', 'not_supported_header_1', '%_discount', 'not_supported_header_2', '');
		$expectedHeaders = array('product_id', 'user', 'role', 'group', 'min_qty', 'flat_price', '%_discount');
		$this->assertEquals([], array_diff($this->importCommons::getValidFileHeaders($fileHeaders), $expectedHeaders));
	}



	/**
 	 * Determine if two associative arrays are similar
 	 *
 	 * Both arrays must have the same indexes with identical values
 	 * without respect to key ordering 
 	 * 
 	 * @param array $a
 	 * @param array $b
 	 * @return bool
 	 */
	public function arrays_are_similar($a, $b) {
		// if the indexes don't match, return immediately
		if (count(array_diff_assoc($a, $b))) {
		  return false;
		}
		// we know that the indexes, but maybe not values, match.
		// compare the values between the two arrays
		foreach($a as $k => $v) {
		  if ($v !== $b[$k]) {
			return false;
		  }
		}
		// we have identical indexes, and no unequal values
		return true;
  	}
}
