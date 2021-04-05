<style>
                            div.dataTables_wrapper div.dataTables_info {
                                padding-top: 0px;  
                                white-space: unset;
                                /* overflow-x: hidden!important; */
                            }
                            </style>


                        <div class="panel panel-inverse">
                            <!-- begin panel-heading -->
                            <div class="panel-heading" style="    display: flex;">

                                <h4 class="panel-title">Lista de Articulos</h4>
                                <span
                                    style="position: relative; left: 71%;"><?php echo "Taza del Dia ".$globalTasaCambio_dolar; ?></span>
									<input type="hidden" id="tasa_cambio_dia" value="<?php echo $globalTasaCambio_dolar; ?>">
                            </div>
                            <!-- end panel-heading -->
                            <!-- begin panel-body -->

                            
                            <div class="panel-body">
                                <div class="table-responsive" style="">
                                    <table id="example2" class="table table-condensed display responsive nowrap" style="width:100%" >
                                        <thead class="bg-blue">
                                            <tr>
                                            <th>Imagen</th>
                                                <th>Cod</th>
                                                <th>Articulo</th>
                                                <th>Modelo</th> 
                                                <th>Marca</th>
                                                <th>Compra</th>
                                                <th>Venta</th>
                                                <th>Opciones</th>
                                                <th>Detalle</th> 
                                                <th>Categoria</th>
                                                <th>Stock</th>
                                                <th>Peso</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                    
                                </div>
                            </div> 
                            <!-- end panel-body -->