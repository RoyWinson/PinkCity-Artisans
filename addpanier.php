<?php
require '_header.php';
$json = array('error' => true);
if(isset($_GET['id'])){
						$product = $DB->query('SELECT id FROM products WHERE id=:id', array('id' => $_GET['id']));
						if(empty($product)){
												$json['message'] = "This product doesn't exist";
											}
							$panier->add($product[0]->id);
							$json['error'] = false;
							$json['message'] ='The product is in your bag';
						}else{
	$json['message'] ="You don't select a product";
}

echo json_encode($json);