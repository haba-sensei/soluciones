 <?php  

  switch ($_SESSION['CodigoArea']) {
	  case 1:
		echo ' 
			<ul class="nav">
			<li class="active"><a href="index.php"><i class="fas fa-home fa-fw"></i> <span style="letter-spacing: 3px;">Inicio</span></a></li>

			<li class="active"><a href="../contable/index.php"><i class="fas fa-book fa-fw"></i> <span style="letter-spacing: 3px;">Contabilidad</span></a></li>
			<li class="active"><a href="tazaCambio.php"><i class="fas fa-money-bill-alt fa-fw"></i> <span style="letter-spacing: 3px;">Taza Cambio</span></a></li>
			<li class="has-sub ">
			<a href="javascript:;">
			<b class="caret"></b>
			<i class="fa fa-cubes" style="font-size:16px;"></i>
			<span style="color:white; letter-spacing: 3px;" >Articulos</span>
			</a>
			<ul class="sub-menu">

			<li class="has-sub ">


			<li style=" letter-spacing: 3px;"> <a href="addStock_tec.php"><i class="fa fa-cubes"></i>&nbsp;Añadir Arti.</a></li>
			<li  style=" letter-spacing: 3px;"><a href="actualizarStock.php"><i class="fas fa-search"></i>&nbsp;Ver Articulos.</a></li>
			<li  style=" letter-spacing: 3px;"><a href="actualizarStockAgotado.php"><i class="fas fa-search"></i>&nbsp;Sin Stock.</a></li>



			</li>

			</ul>

			</li>
			<li class="has-sub ">
			<a href="javascript:;">
			<b class="caret"></b>
			<i class="fa fa-list"></i>
			<span style="color:white; letter-spacing: 3px;" >Categorias</span>
			</a>
			<ul class="sub-menu">
			<li style="color:white; letter-spacing: 3px;"><a href="anadirCat_inv.php"><i class="fas fa-plus-square"></i>&nbsp;Añadir Catego.</a></li>
			<li  style="color:white; letter-spacing: 3px;"><a href="actualizarCat_inv.php"><i class="fas fa-search"></i>&nbsp;Ver Categoria.</a></li>
			</ul>
			</li>
			<li class="has-sub ">
			<a href="javascript:;">
			<b class="caret"></b>
			<i class="fa fa-list"></i>
			<span style="color:white; letter-spacing: 3px;" >Ordenes</span>
			</a>
			<ul class="sub-menu">
			<li style="color:white; letter-spacing: 3px;"><a href="listaPedidos.php"><i class="fas fa-plus-square"></i>&nbsp;Pedidos.</a></li>
			<li  style="color:white; letter-spacing: 3px;"><a href="listaCotiza.php"><i class="fas fa-plus-square"></i>&nbsp;Cotizacion.</a></li>

			</ul>
			</li>
			<li class="has-sub ">
			<a href="javascript:;">
			<b class="caret"></b>
			<i class="fa fa-list"></i>
			<span style="color:white; letter-spacing: 3px;" >Reportes</span>
			</a>
			<ul class="sub-menu">
			<li style="color:white; letter-spacing: 3px;"><a href="../process/reportes/producto/index.php" target="_blank"><i class="fas fa-file-pdf"></i> <span>General.</span></a></li>
			<li style="color:white; letter-spacing: 3px;"><a href="../process/reportes/stock/index.php" target="_blank"><i class="fas fa-file-pdf"></i> <span>Stock Existente </span></a></li>
			<li style="color:white; letter-spacing: 3px;"><a href="../process/reportes/agotado/index.php" target="_blank"><i class="fas fa-file-pdf"></i> <span>Stock Agotado</span></a></li>
			<li style="color:white; letter-spacing: 3px;"><a href="../process/reportes/stock_cliente/index.php" target="_blank"><i class="fas fa-file-pdf"></i> <span>Stock Ventas</span></a></li>

			</ul>
			</li>
			</a>
			</li>
			<li class="active"><a href="clientes.php"><i class="fas fa-users fa-fw"></i> <span style="letter-spacing: 3px;">Clientes</span></a></li>

			<li class="has-sub ">
			<a href="javascript:;">
			<b class="caret"></b>
			<i class="fa fa-truck" style="font-size:16px;"></i>
			<span style="color:white; letter-spacing: 3px;" >Despachos</span>
			</a>
			<ul class="sub-menu">

			<li class="has-sub ">

			<li style=" letter-spacing: 3px;"> <a href="deliveryEspera.php"><i class="fa fa-cubes"></i>&nbsp;General</a></li>
			<li style=" letter-spacing: 3px;"> <a href="delivery.php"><i class="fa fa-cubes"></i>&nbsp;Delivery</a></li>
			<li  style=" letter-spacing: 3px;"><a href="envios.php"><i class="fas fa-cubes"></i>&nbsp;Envios</a></li>
			<li  style=" letter-spacing: 3px;"><a href="recojo.php"><i class="fas fa-cubes"></i>&nbsp;Recojo</a></li>



			</li>

			</ul>

			</li>

			<li class="active"><a href="../process/logout.php"><i class="fas fa-key"></i> <span>Cerrar Session</span></a></li>
			</ul>
			</div>
			</div>
			<div class="sidebar-bg"></div>
		';
	  break;
	  
	  case 2:
		echo ' 
			<ul class="nav">
			<li class="active"><a href="index.php"><i class="fas fa-home fa-fw"></i> <span style="letter-spacing: 3px;">Inicio</span></a></li>

			 

			<li class="has-sub ">
			<a href="javascript:;">
			<b class="caret"></b>
			<i class="fa fa-cubes" style="font-size:16px;"></i>
			<span style="color:white; letter-spacing: 3px;" >Articulos</span>
			</a>
			<ul class="sub-menu">

			<li class="has-sub ">


			<li style=" letter-spacing: 3px;"> <a href="addStock_tec.php"><i class="fa fa-cubes"></i>&nbsp;Añadir Arti.</a></li>
			<li  style=" letter-spacing: 3px;"><a href="actualizarStock.php"><i class="fas fa-search"></i>&nbsp;Ver Articulos.</a></li>
			<li  style=" letter-spacing: 3px;"><a href="actualizarStockAgotado.php"><i class="fas fa-search"></i>&nbsp;Sin Stock.</a></li>



			</li>

			</ul>

			</li>
			<li class="has-sub ">
			<a href="javascript:;">
			<b class="caret"></b>
			<i class="fa fa-list"></i>
			<span style="color:white; letter-spacing: 3px;" >Categorias</span>
			</a>
			<ul class="sub-menu">
			<li style="color:white; letter-spacing: 3px;"><a href="anadirCat_inv.php"><i class="fas fa-plus-square"></i>&nbsp;Añadir Catego.</a></li>
			<li  style="color:white; letter-spacing: 3px;"><a href="actualizarCat_inv.php"><i class="fas fa-search"></i>&nbsp;Ver Categoria.</a></li>
			</ul>
			</li>
			 
			<li class="has-sub ">
			<a href="javascript:;">
			<b class="caret"></b>
			<i class="fa fa-list"></i>
			<span style="color:white; letter-spacing: 3px;" >Reportes</span>
			</a>
			<ul class="sub-menu">
			<li style="color:white; letter-spacing: 3px;"><a href="../process/reportes/producto/index.php" target="_blank"><i class="fas fa-file-pdf"></i> <span>General.</span></a></li>
			<li style="color:white; letter-spacing: 3px;"><a href="../process/reportes/stock/index.php" target="_blank"><i class="fas fa-file-pdf"></i> <span>Stock Existente </span></a></li>
			<li style="color:white; letter-spacing: 3px;"><a href="../process/reportes/agotado/index.php" target="_blank"><i class="fas fa-file-pdf"></i> <span>Stock Agotado</span></a></li>
			<li style="color:white; letter-spacing: 3px;"><a href="../process/reportes/stock_cliente/index.php" target="_blank"><i class="fas fa-file-pdf"></i> <span>Stock Ventas</span></a></li>

			</ul>
			</li>
			</a>
			</li>
			 

			<li class="active"><a href="../process/logout.php"><i class="fas fa-key"></i> <span>Cerrar Session</span></a></li>
			</ul>
			</div>
			</div>
			<div class="sidebar-bg"></div>
		';
	  break;

	  case 3:
		echo ' 
			<ul class="nav">
			<li class="active"><a href="index.php"><i class="fas fa-home fa-fw"></i> <span style="letter-spacing: 3px;">Inicio</span></a></li>

			 
			<li class="has-sub ">
			<a href="javascript:;">
			<b class="caret"></b>
			<i class="fa fa-cubes" style="font-size:16px;"></i>
			<span style="color:white; letter-spacing: 3px;" >Articulos</span>
			</a>
			<ul class="sub-menu">

			<li class="has-sub ">


			<li style=" letter-spacing: 3px;"> <a href="addStock_tec.php"><i class="fa fa-cubes"></i>&nbsp;Añadir Arti.</a></li>
			<li  style=" letter-spacing: 3px;"><a href="actualizarStock.php"><i class="fas fa-search"></i>&nbsp;Ver Articulos.</a></li>
			<li  style=" letter-spacing: 3px;"><a href="actualizarStockAgotado.php"><i class="fas fa-search"></i>&nbsp;Sin Stock.</a></li>



			</li>

			</ul>

			</li>
			 
			 
			<li class="has-sub ">
			<a href="javascript:;">
			<b class="caret"></b>
			<i class="fa fa-list"></i>
			<span style="color:white; letter-spacing: 3px;" >Reportes</span>
			</a>
			<ul class="sub-menu">
			<li style="color:white; letter-spacing: 3px;"><a href="../process/reportes/producto/index.php" target="_blank"><i class="fas fa-file-pdf"></i> <span>General.</span></a></li>
			<li style="color:white; letter-spacing: 3px;"><a href="../process/reportes/stock/index.php" target="_blank"><i class="fas fa-file-pdf"></i> <span>Stock Existente </span></a></li>
			<li style="color:white; letter-spacing: 3px;"><a href="../process/reportes/agotado/index.php" target="_blank"><i class="fas fa-file-pdf"></i> <span>Stock Agotado</span></a></li>
			<li style="color:white; letter-spacing: 3px;"><a href="../process/reportes/stock_cliente/index.php" target="_blank"><i class="fas fa-file-pdf"></i> <span>Stock Ventas</span></a></li>

			</ul>
			</li>
			</a>
			</li>
			 

			<li class="active"><a href="../process/logout.php"><i class="fas fa-key"></i> <span>Cerrar Session</span></a></li>
			</ul>
			</div>
			</div>
			<div class="sidebar-bg"></div>
		';
	  break;

	  case 4:
		echo ' 
			<ul class="nav">
			<li class="active"><a href="index.php"><i class="fas fa-home fa-fw"></i> <span style="letter-spacing: 3px;">Inicio</span></a></li>
 
			<li class="active"><a href="listaPedidos.php"><i class="fas fa-plus-square"></i> <span style="letter-spacing: 3px;">Pedidos.</span></a></li>
			<li class="active"><a href="listaCotiza.php"><i class="fas fa-plus-square"></i> <span style="letter-spacing: 3px;">Cotizacion.</span></a></li>
			
			<li class="active"><a href="clientes.php"><i class="fas fa-users fa-fw"></i> <span style="letter-spacing: 3px;">Clientes</span></a></li>


			<li class="active"><a href="../process/logout.php"><i class="fas fa-key"></i> <span>Cerrar Session</span></a></li>
			</ul>
			</div>
			</div>
			<div class="sidebar-bg"></div>
		';
	  break;

	  case 5:
		echo ' 
			<ul class="nav">
			<li class="active"><a href="index.php"><i class="fas fa-home fa-fw"></i> <span style="letter-spacing: 3px;">Inicio</span></a></li>

			  
			
			<li class="active"><a href="listaPedidos.php"><i class="fas fa-plus-square"></i> <span style="letter-spacing: 3px;">Pedidos.</span></a></li>
			<li class="active"><a href="listaCotiza.php"><i class="fas fa-plus-square"></i> <span style="letter-spacing: 3px;">Cotizacion.</span></a></li>
			
			<li class="active"><a href="clientes.php"><i class="fas fa-users fa-fw"></i> <span style="letter-spacing: 3px;">Clientes</span></a></li>
  
			<li class="active"><a href="../process/logout.php"><i class="fas fa-key"></i> <span>Cerrar Session</span></a></li>
			</ul>
			</div>
			</div>
			<div class="sidebar-bg"></div>
		';
	  break;

	  case 6:
		echo ' 
			<ul class="nav">
			<li class="active"><a href="index.php"><i class="fas fa-home fa-fw"></i> <span style="letter-spacing: 3px;">Inicio</span></a></li>
 
		 

			<li class="has-sub ">
			<a href="javascript:;">
			<b class="caret"></b>
			<i class="fa fa-truck" style="font-size:16px;"></i>
			<span style="color:white; letter-spacing: 3px;" >Despachos</span>
			</a>
			<ul class="sub-menu">

			<li class="has-sub ">

			<li style=" letter-spacing: 3px;"> <a href="deliveryEspera.php"><i class="fa fa-cubes"></i>&nbsp;General</a></li>
			<li style=" letter-spacing: 3px;"> <a href="delivery.php"><i class="fa fa-cubes"></i>&nbsp;Delivery</a></li>
			<li  style=" letter-spacing: 3px;"><a href="envios.php"><i class="fas fa-cubes"></i>&nbsp;Envios</a></li>
			<li  style=" letter-spacing: 3px;"><a href="recojo.php"><i class="fas fa-cubes"></i>&nbsp;Recojo</a></li>



			</li>

			</ul>

			</li>
			<li class="active"><a href="../process/logout.php"><i class="fas fa-key"></i> <span>Cerrar Session</span></a></li>
			</ul>
			</div>
			</div>
			<div class="sidebar-bg"></div>
		';
	  break;
 
		  
	  default:
	  header("Location: ../login.php");
	  exit();

	  break;
  }
