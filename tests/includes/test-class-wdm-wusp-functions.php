<?php
/**
 * Class cspFunctions
 * 
 * @package Phpunit_Test_Sample
 * The class cspFunctions contains all the commonly used functions in the extension
 * 
 */
class cspFunctions extends WP_UnitTestCase {
	
	public $cspFunctions;
    function setup()
    {
        include_once(CSP_PLUGIN_PATH.'/includes/class-wdm-wusp-functions.php');
        $this->cspFunctions=new cspFunctions\WdmWuspFunctions();
    }
	
	/**
	 * A function to unit test method wdmGetSiteUserByI
	 *
	 * @covers wdmGetSiteUserById
	 */
	public function test_wdmGetSiteUserById() {
		 //Tests using wordpress database.
		 $userId1=wp_create_user('john', 'johnpwd', 'john@testing.com');
		 $userId2=wp_create_user('taylor', 'taylorpwd', 'taylor@testing.com');
		 $usersList=$this->cspFunctions->getSiteUserIdNamePairs();
		 
		 $this->assertEquals('admin', $this->cspFunctions->wdmGetSiteUserById($usersList, 1));
		 $this->assertEquals('john', $this->cspFunctions->wdmGetSiteUserById($usersList, $userId1));
		 $this->assertEquals('taylor', $this->cspFunctions->wdmGetSiteUserById($usersList, $userId2));
	}


	/**
	 * A function to unit test method getProductId
	 *
	 * @return void
	 */
	public function test_getProductId() {
		$product_id = WCProductOptions::createWCSimpleProduct("First Product", 100, "Product To test");
		$product =  wc_get_product($product_id);
		$this->assertEquals($product_id, $this->cspFunctions->getProductId($product));
		//$this->assertEquals(0, $this->cspFunctions->getProductId($product));
	}
}

/**
 * This class can be used to manage woocommerce product
 * related operations which are essential for testing
 */
class WCProductOptions {

	/**
	 * This function creates a new simple woocommerce product & returns its ID
	 *
	 * @param [type] $title
	 * @param [type] $price
	 * @param [type] $description
	 * @param [type] $status
	 * @return int woocommerce productID
	 */
	public static function createWCSimpleProduct($title, $price, $description= '', $status = 'publish', $author = 1, $sku='') { 
		$post_id = wp_insert_post( array(
			'post_author' => $author,
			'post_title' => $title,
			'post_content' => $description,
			'post_status' => $status,
			'post_type' => "product",
		) );
		$price = $price>=0?$price:'';

		wp_set_object_terms( $post_id, 'simple', 'product_type' );
    	update_post_meta( $post_id, '_visibility', 'visible' );
    	update_post_meta( $post_id, '_stock_status', 'instock');
    	update_post_meta( $post_id, 'total_sales', '0' );
    	update_post_meta( $post_id, '_downloadable', 'no' );
    	update_post_meta( $post_id, '_virtual', 'yes' );
    	update_post_meta( $post_id, '_regular_price', '' );
    	update_post_meta( $post_id, '_sale_price', '' );
    	update_post_meta( $post_id, '_purchase_note', '' );
    	update_post_meta( $post_id, '_featured', 'no' );
    	update_post_meta( $post_id, '_weight', '' );
    	update_post_meta( $post_id, '_length', '' );
    	update_post_meta( $post_id, '_width', '' );
    	update_post_meta( $post_id, '_height', '' );
    	update_post_meta( $post_id, '_sku', $sku );
    	update_post_meta( $post_id, '_product_attributes', array() );
    	update_post_meta( $post_id, '_sale_price_dates_from', '' );
    	update_post_meta( $post_id, '_sale_price_dates_to', '' );
    	update_post_meta( $post_id, '_price', $price);
    	update_post_meta( $post_id, '_sold_individually', '' );
    	update_post_meta( $post_id, '_manage_stock', 'no' );
    	update_post_meta( $post_id, '_backorders', 'no' );
    	update_post_meta( $post_id, '_stock', '' );
	
		return $post_id;
	}

}
