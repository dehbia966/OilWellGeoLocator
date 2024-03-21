@extends('user')
@section('content')
<?php 
$res="addzone"
?>

<section class="content-header">
                        <div class="header-icon">
                            <i class="fa fa-sitemap"></i>
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
                            <h1>Zone</h1>
                            <small>Ajouter zone</small>
                            <ol class="breadcrumb hidden-xs">
                                <li><a href="index.html"><i class="pe-7s-home"></i> Zone</a></li>
                                <li class="active">Ajouter zone</li>
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
                                            <a class="btn btn-primary" href="{{ route('zonelist') }}"> <i class="fa fa-list"></i>  liste des zones </a>  
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <form  class="col-sm-12" action="{{ route('storezon') }}" method="POST" >
                                          @csrf
                                            <div class="col-sm-6 form-group">
                                                <label>Nom<label class="text-danger">*</label></label>
                                                <input id="name" name="name" type="text" class="form-control" placeholder="Nom" required>
                                                @error('name')
                                                <span  style="" class="text-danger">{{ $message }}</span>
                                                @enderror
                                                
                                            </div>
                                            
                                            <div class="col-sm-6 form-group">
                                                <label>Code<label class="text-danger">*</label></label>
                                                <input id="code" name="code" type="text" class="form-control" placeholder="Code" required>
                                                
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