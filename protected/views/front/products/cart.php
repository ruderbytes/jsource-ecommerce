<?php
if ($carts) {
    ?>
		<form action="index.php?r=products/cart" method="post" id="cart">
		<table>
                    <tr>
                        <td>Aksi</td>
                        <td>Nama Produk</td>
                        <td>Harga</td>
                        <td>Jumlah</td>
                        <td>Sub Total</td>
                    </tr>
                    <?php
		foreach ($carts as $id=>$stock) {
			$model=Products::model()->findByPk($id);
			
			$harga = $model->price;
			$total += $harga * $stock;
                        $totstock +=$stock;
			?>
			<tr>
			<td><a href="index.php?r=products/remove&id=<?php echo $model->prod_id;?>" class="r">Remove</a></td>
			<td><?php echo $model->prod_name;?></td>
                        <td><?php echo number_format($harga);?></td>
			<td><input type="text" name="qty['$id<?php echo $id;?>']" value="<?php echo $stock;?>" size="3" maxlength="3" /></td>
                        <td><?php echo number_format($harga * $stock);?></td>
			</tr>
		<?php }
               // yii::app()->session['qwe']=$totstock;
                ?>
		</table>
                    <p>Grand total: <strong><?php echo number_format($total);?></strong></p>
                    <p>Stock total: <strong><?php echo number_format($totstock);?></strong></p>
		<div><button type="submit">Update cart</button></div>
		</form>
	<?php } else { ?>
	<p>You shopping cart is empty.</p>
	<?php }?>
