<?php
/* @var $this CatalogProductController */
/* @var $model CategoryProduct */

$this->breadcrumbs=array(
	'Category Products'=>array('index'),
	$model->category_id,
);

$this->menu=array(
	array('label'=>'List CategoryProduct', 'url'=>array('index')),
	array('label'=>'Create CategoryProduct', 'url'=>array('create')),
	array('label'=>'Update CategoryProduct', 'url'=>array('update', 'id'=>$model->category_id)),
	array('label'=>'Delete CategoryProduct', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->category_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CategoryProduct', 'url'=>array('admin')),
);
?>
<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><h2>Katalog Produk <?php echo $model->cat_name; ?></h2></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-gear fa-fw"></i>Pengaturan
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Tambah Katalog <?php echo $model->cat_name; ?></a>
                                        </li>
                                        <li><a href="#">Hapus Terseleksi</a>
                                        </li>
                                    </ul>
                                </div></div><font size=4px">Sub Katalog Produk <?php echo $model->cat_name; ?></font> 
                                
                        </div>
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>check</th>
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>Edit</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
//  $catalog= CategoryProduct::model()->findAll(array(
  //    'order'=>'category_id desc'
  //));  
foreach ($modelcat as $catalotProducr):
    ?>
                                        <tr class="odd gradeX">
                                            <td></td>
                                            <td><?php echo $catalotProducr->category_id;?></td>
                                            <td><a href="<?php echo yii::app()->request->baseUrl;?>/jpanel.php/catalogProduct/<?php echo $catalotProducr->category_id;?>"><?php echo $catalotProducr->cat_name;?></a></td>
                                            <td class="center">4</td>
                                            <td class="center">X</td>
                                        </tr>
                                        <?php 
endforeach;
    ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>


<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <font size=4px">Produk Pada Katalog <?php echo $model->cat_name; ?></font>
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-gear fa-fw"></i>Pengaturan
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="../products/create">Tambah Produk <?php echo $model->cat_name; ?></a>
                                        </li>
                                        <li><a href="#">Hapus Terseleksi</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>check</th>
                                            <th>Harga Jual</th>
                                            <th>Aktifkan?</th>
                                            <th>Gambar</th>
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>Edit</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
foreach ($modelkat as $subcatproduk):
    ?>
                                        <tr class="odd gradeX">
                                            <td><div class="panel-heading">
                                        
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $subcatproduk->prod_id;?>">Detail Item #<?php echo $subcatproduk->prod_id;?></a>
                                        
                                    </div></td>
                                    <td><?php echo "Rp.".number_format($subcatproduk->price);?></td>
                                    <td><a href="<?php echo $this->createUrl("../jpanel.php/products/enable",array("id"=>$subcatproduk->prod_id));?>"><?php echo $subcatproduk->is_shown==2?" <button type='button' class='btn btn-warning btn-circle'><i class='fa fa-times'></i></button>":"<button type='button' class='btn btn-info btn-circle'><i class='fa fa-check'></i></button>";?></a></td>
                                    <td><img src="http://localhost/phpmyadmin/themes/jsource/img/logo_left.png" width="50"></td>
                                            <td><?php echo $subcatproduk->prod_id;?></td>
                                            <td><a href="<?php echo yii::app()->request->baseUrl;?>/jpanel.php/products/<?php echo $subcatproduk->prod_id;?>"><?php echo $subcatproduk->prod_name;?></a></td>
                                            <td class="center">4</td>
                                            <td class="center">X</td>
                                          
                                        </tr>     <tr> 
                                    <td colspan="8">
                                                <div class="panel panel-default">
                                    
                                    <div id="collapse<?php echo $subcatproduk->prod_id;?>" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <?php echo $subcatproduk->descript;?>
                                        </div>
                                    </div>
                                </div>
                                                
                                            </td>
                                        </tr>
                                        <?php 
endforeach;
    ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            <div class="well">
                                <h4>DataTables Usage Information</h4>
                                <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>
                                <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>


<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'category_id',
		'cat_name',
		'cat_parent_id',
		'position',
		'is_shown',
	),
)); ?>
