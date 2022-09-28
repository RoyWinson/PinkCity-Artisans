<?php require 'header.php';  ?>



<section>
	<div class="Shop"><img class="Shop" src="img/pic.png" alt="Product"></div><br>

	
	<p>Saree, Handmade and Jewellery</p><br>

	<div class="grid">

        <!-- PHP request for the sql database-->
		<?php $products = $DB->query('SELECT * FROM products'); ?>
		<?php foreach ($products as $product): ?> 
		<div class="itemG">
			<!--<a href="ProductG.php">-->
				<div class="itemGbis">
					<img class="itemGbis" src="img/<?= $product->id; ?>.jpg" alt="Product">
				</div>

				<p class="ProductG"><?= $product->name; ?></p>
				<p class="priceG"><?= $product->price; ?> $</p>
				<a class="add addPanier" href="addpanier.php?id=<?= $product->id; ?>" >add</a>

			<!--</a>-->	
		</div>
	
		<?php endforeach ?>


		<!-- product before the php prog-->
<!--
		<div class="itemH">
			<a href="ProductH.php">
				<div class="itemHbis">
					<img class="itemHbis" src="img/H.jpg" alt="Product">
				</div>

				<p class="ProductH">Product title</p>
				<p class="priceH">##,## $</p>

			</a>	
		</div>



		<div class="itemI">
			<a href="ProductI.php">
				<div class="itemIbis">
					<img class="itemIbis" src="img/I.jpg" alt="Product">
				</div>

				<p class="ProductI">Product title</p>
				<p class="priceI">##,## $</p>
			</a>
		</div>

		<div class="itemJ">
			<a href="ProductJ.php">
				<div class="itemJbis">
					<img class="itemJbis" src="img/J.png" alt="Product">
				</div>

				<p class="ProductJ">Product title</p>
				<p class="priceJ">##,## $</p>
			</a>
		</div>

		<div class="itemK">
			<a href="ProductK.php">
				<div class="itemKbis">
					<img class="itemKbis" src="img/K.png" alt="Product">
				</div>

				<p class="ProductK">Product title</p>
				<p class="priceK">##,## $</p>
			</a>
		</div>

		<div class="itemL">
			<a href="ProductL.php">
				<div class="itemLbis">
					<img class="itemLbis" src="img/L.jpg" alt="Product">
				</div>

				<p class="ProductL">Product title</p>
				<p class="priceL">##,## $</p>
			</a>
		</div>
		-->
	</div> 

</section>


<?php require 'footer.php';  ?>

