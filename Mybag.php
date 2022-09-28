<?php require 'header.php';  ?>
<?php 
if(isset($_GET['del'])){
			$panier->del($_GET['del']);
}
?><!-- complete card and resumé -->
<section id="basket" class="flex-column-centre">

				<!-- Bag Title -->

				<div id="blocTitrePanier" class="flex-start size80">
					<h2 id="titre-panier">
						ADD PRODUCTS IN YOUR BAG 
					</h2>
				</div>
				
				<!-- <form method="post" action="mybag.php"></form>-->
				<div id="basket-fiche" class="flex-around">

					<!-- Bag card -->
					<div id="injectJs">
						
						<?php
						$ids = array_keys($_SESSION['panier']);
						if(empty($ids)){
							$products = array();
						}else{
							$products = $DB->query('SELECT * FROM products WHERE id IN ('.implode(',',$ids).')');
						}
						foreach($products as $product) :
						?>
												<div id="basketProduct" class="flex-around">
													
													<div id="blocImage">
														<img class="itemAbis" src="img/<?= $product->id; ?>.jpg" alt="Product">
													</div>

													<div id="blocProduct" class="flex-column-around">
														
														<h2>Product</h2>
														<p><?= $product->price; ?> $</p>
														<p><?= $product->name; ?></p>
														<p><i class="fas fa-truck"></i> in stock</p>

													</div>

													<div id="bloc-change-product" class="flex-around">
														<div class="flex-centre">
															<span class="Product-quantite"><input type="text" name ="panier[quantity][<?= $product->id; ?>]" value="<?= $_SESSION['panier'][$product->id]; ?>"></span>
						
														</div>

														<div><p>TOTAL</p>
															<p><?= number_format($panier->total(),2,',',''); ?> $</p></div>
														<a href="mybag.php?del=<?= $product->id; ?>" class ="del"><button ><i class="fa fa-trash-alt rouge" ></i></button></a>
								
							</div>
						</div>	
					</div>

					<?php endforeach; ?>
					<!--<input type="submit" value="Recalculate">
</form>-->
					<!-- bag resumé -->

					<div id="basket-recap">
						<!-- <h2 class="titre-recap rouge">Summary</h2>
							
							<div class="flex-around">
								<p id="nbArticle">0 article</p>
			            		<p id="prixArticle">0</p>
			            	</div>

						<div class="flex-around">
		            		<p>delivery</p>
		            		<p id="prixLivraison">free</p>
						</div>

						<div class="trait-design"></div>
		          			<div class="flex-around">
		            			<h3>Total TTC</h3>
		            			<p id="prixTtc">0</p>
	          			</div> 

	          			<div>
			            	<a id="continueCommande" class="flex-around" href="#ancreForm">
			             	 CONTINUE <i class="fas fa-chevron-right"></i>
			           		 </a>
	          			</div>-->

	         			 <div>
	        	    		<p><i class="fas fa-truck vert"></i> Delivery within 3 weeks</p>
	          			</div>
	          		</div>
	          	</div>
	          	
	          	<div class="flex-start size80">
        					
        			<a class="continuer" href="index.html">
          					<i class="fas fa-chevron-left"></i> CONTINUE MY SHOPPING
        			</a>
      			</div>

      			<div id="ancreForm">
        			<form id="formulaireContact" action="post">
          					<h2 class="flex-centre">Personal informations</h2>
          				<div class="nom-prenom flex-centre">
            				<div class="flex-column-start">
              					<label for="prenom" class="flex-start">First name</label>
              					<input class="champ" id="prenom" type="text" />
              					<span id="errorPrenom"></span>
            				</div>
            				<div class="flex-column-start">
              					<label for="nom" class="flex-start">Name</label>
              					<input class="champ" id="nom" type="text" />
              					<span id="errorNom"></span>
           					 </div>
          				</div>
          					<div class="flex-column-centre">
            					<div class="flex-column-start">
              						<label for="adresse" class="flex-start">Address</label>
              						<input class="champ" id="adresse" type="text" />
              						<span id="errorAdresse"></span>
            					</div>
            						<div class="flex-column-start">
              							<label for="ville" class="flex-start">City</label>
              							<input class="champ" id="ville" type="text" />
              							<span id="errorVille"></span>
            						</div>
            					<div class="flex-column-start">
              						<label for="email" class="flex-start">Email</label>
              						<input class="champ" id="email" type="mail" />
              						<span id="errorEmail"></span>
            					</div>
            				<button class="bouton-commande" type="submit">Order</button>
          				</div>
        			</form>
      			</div>
    </section>

<?php require 'footer.php'  ?>