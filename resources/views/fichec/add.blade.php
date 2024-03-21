@extends('user')
@section('content')
<?php 
$res="addfichecontart"
?>

<section class="content-header">
                        <div class="header-icon">
                            <i class="fa fa-file-text"></i>
                        </div>
                        <div class="header-title">
                            <form action="#" method="get" class="sidebar-form search-box pull-right hidden-md hidden-lg hidden-sm">
                                <div class="input-group">
                                    <input type="text" name="q" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button type="submit" name="search" id="search-btn" class="btn"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </form>  
                            <h1>Fiche contart</h1>
                            <small>Ajouter fiche contart</small>
                            <ol class="breadcrumb hidden-xs">
                                <li><a href="index.html"><i class="pe-7s-home"></i> Fiche contart</a></li>
                                <li class="active">Ajouter fiche contart</li>
                            </ol>
                        </div>
                    </section>







                    <section class="content">
                        <div class="row">
                            <!-- Form controls -->
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="btn-group"> 
                                            <a class="btn btn-primary" href="{{ route('fichelist') }}"> <i class="fa fa-list"></i>  liste des fiches contart </a>  
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <form  class="col-sm-12" action="{{ route('storefic') }}" method="POST" >
                                          @csrf
                                            <div class="col-sm-6 form-group">
                                                <label>ref<label class="text-danger">*</label></label>
                                                <input id="ref" name="ref" type="text" class="form-control" placeholder="ref" required>
                                                @error('ref')
                                                <span  style="" class="text-danger">{{ $message }}</span>
                                                @enderror
                                                
                                            </div>
                                            
                                            <div  class="col-sm-6 form-group">
                                                <label>date_debut<label class="text-danger">*</label></label>
                                                <input id="date_debut" name="date_debut" type="date" class="form-control" placeholder="date_debut" required>
                                                
                                            </div>

                                            <div  class="col-sm-6 form-group">
                                                <label>date_fin<label class="text-danger">*</label></label>
                                                <input id="date_fin" name="date_fin" type="date" class="form-control" placeholder="date_fin" required>
                                                
                                            </div>

                                            
                                            
                                            <div class="col-sm-6 form-group">
                                                <label>montant_global_implantation<label class="text-danger">*</label></label>
                                                <input id="montant_global_implantation" name="montant_global_implantation" type="number" step="0.01" class="form-control" placeholder="montant_global_implantation" required>
                                                
                                            </div>

                                            



                                            
                                            
                                              
                                                   
                                             

                                              <div class="col-sm-12 reset-button">
                                                 <button type="submit" id="save" class="btn btn-success" onclick="return confirm('are you sure to save');">sauvegarder</button>
                                    
                                                  <a href="{{ route('dashboard') }}" class="btn btn-warning">Annuler</a>
                                             </div>
                                         </form>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         
                     </section> <!-- /.content -->












@endsection