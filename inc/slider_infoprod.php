<div id="new-products2" class="owl-carousel">

    <?php


	while ($rowProd = mysqli_fetch_array($retval,  MYSQLI_ASSOC)) {
		$precio = $rowProd['Precio'];
		$ganancia = $rowProd['ganancia'];
		$medio = $rowProd['medio'];
		$total_prod = $precio * ($ganancia + $medio) / 100 + $precio;
		$p_p = ($precio * 25 / 100);
		$p_p_a =  $total_prod + $p_p;
		$p_p_r = round($p_p_a, 0, PHP_ROUND_HALF_DOWN);

		echo "<form class='product-form'>
            <div class=' col-md-12' style='    margin-bottom: 4%;'>
		    <div class='shop-product2' style='margin-left: 9px; '>
	        <div class='product-box2'>" .
			"<a href='infoProd.php?CodigoProd={$rowProd['CodigoProd']}' class='item-image'><img value='{$rowProd['Imagen']}' style='border: solid 1.2px; border-bottom: none;'  height='250px' width='500' src='assets/img-products/{$rowProd['Imagen']} ' alt=''></a>" .
			"<div class='cart-overlay'></div>" .
			"<div class='actions'>
			<div class='add-to-links'>
			
		    <input name='product_qty' type='hidden' value='1'>" .
			"<input name='CodigoProd' type='hidden' value='{$rowProd['CodigoProd']}'>" .
			"<button  class='btn-cart my-cart-btn btn-common' type='submit'><i class='icon-basket'></i>&nbsp;&nbsp;Añadir</button>" .
			"<a class='btn-quickview md-trigger' href='infoProd.php?CodigoProd={$rowProd['CodigoProd']}'><i class='icon-eye'></i>&nbsp;&nbsp;Ver Producto</a>" .
			"</div>
		    </div>
		    
		    </div>" .
			"<div class='' style='padding: 0px 15px 0px; border-top: 1px dashed; padding-right: 9px; padding-left: 12px; background: #eae8e8e6; border-left: 1px dashed; border-right: 1px dashed;'>" .
			"<h4 class='product-title' style='    margin-top: 52px;'>" .
			"<a style=' font-size: 12px; margin: -31px 0px;position: absolute; margin-right: 27px;  font-size: 14px;' href='infoProd.php?CodigoProd={$rowProd['CodigoProd']}'> {$rowProd['NombreProd']}</a>" .
			"</h4>" .
			"<h5 class='price' style='position: absolute; margin-right: 27px;  margin-top: 5px;  font-size: 13px;'><a >{$rowProd['Modelo']} - {$rowProd['Marca']}</a></h5> <br>" .
			"<h5 class='price' style='position: absolute; margin-right: 27px;  margin-top: 11px;  font-size: 15px;'> Antes: <s>{$rowProd['moneda']} {$p_p_r}.00 </s>&nbsp;&nbsp; 25 % DCTO</h5>" .
			"<div style='width: 107%; margin-left: -12px; border-top: 1.2px dashed;'></div>".
			"<div id='ribbon' style='font-weight:1000;'><span id='contento'>{$rowProd['moneda']} {$total_prod}</span>  <img src='assets/img/tarjeta.png' width='50px' height='30px' ></span> <img src='assets/img/envio.png' width='50px' height='30px' ></div></div>" .
			"</form></div></div>";
	} 
	?>
</div>
