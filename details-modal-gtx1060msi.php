<?php 

	require_once 'core/init.php';
	$user = 'root';
	$pass ='';
	$sql = "SELECT * FROM products WHERE featured = 1";
	$db = 'redstoneshop';
	$db = new mysqli('localhost', $user,$pass, $db) or die("fuck u");
	$featured = $db->query($sql);
 ?>
<div class="modal fade details-1" id="details-1" tableindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-tittle text-center"> Nvidia Gtx 1060</h4>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-6">
							<div class="center-blcok">
								<img src="images/gtx1060msi.jpg" alt="Graphic card" class="details img-responsive" />
							</div>
						</div>
						<div class="col-sm-6">
							<?php while($product = $featured->fetch_assoc()): ?>
							<h4>Details</h4>
							<p><?= $product['description']; ?></p>
							<hr />
							<p>Price: $250</p>
							<p>Really cool man</p>
							<form action="add_cart.php" method="post">
								<div class="form-group">
									<div class="col-xs-3">
										<label for="quantity" id="quantity-label">Quantity:</label>
										<input type="text" class="form-control" id="quantity" name="quantity">
									</div><br /><br /><br /><br
									<div class="form-group">
										<label for="size">Size:</label>
										<select name="size" id="size" class="form-control">
											<option value=""></option>
											<option value="28">28</option>
											<option value="32">32</option>
										</select>
									</div>
									<?php endwhile; ?>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal">Close</button>
					<button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-shopping-cart">Add to cart</span></button>
				</div>
			</div>

		</div>
	</div>
</div>