<div id="loaderID" style="position:absolute; top:60%; left:53%; z-index:2; opacity:0"><img src="images/ajax-loader.gif" /></div>
<div id="productContainer">
<?php
$products = $db->allProducts();
if(count($products)>0) {
	foreach($products as $pro) {
		$productPhoto = $db->getproductPhoto($pro['ProductID']);
		?>
	<!------------------------------------------------------------------------------------------------------------------------------------------------->	
		<div class="divbox" >
        
        
        	<div style="width:300px;height:160px; background:url(images/products/medium/<?=str_replace("_R","",$productPhoto)?>) no-repeat;" alt="<?=$pro['Title']?>">
                
            </div>

			
			<div class="product_name" align="center">
				<a href="#"><span class="productname"><?=$pro['Title']?></span></a>
				<div class="price">
					<span class="product_price"><a href="#">Rs. <?=$pro['Price']?>  Lakhs</a></span>                            
				</div>
				
			</div>
		</div>
	
	<!------------------------------------------------------------------------------------------------------------------------------------------------->
		<?php
	}
}
?>
</div>