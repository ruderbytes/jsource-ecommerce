<?php
/* @var $this CatalogProductController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Category Products',
);

$this->menu=array(
	array('label'=>'Create CategoryProduct', 'url'=>array('create')),
	array('label'=>'Manage CategoryProduct', 'url'=>array('admin')),
);
?>
<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Katalog Produk</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Table Katalog Produk
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-gear fa-fw"></i>Pengaturan
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Tambah Katalog baru</a>
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
