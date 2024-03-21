@extends('user')
@section('content')
<?php 
$res="addemploye"
?>

<section class="content-header">
                        <div class="header-icon">
                            <i class="fa fa-user"></i>
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
                            <h1>Employé</h1>
                            <small>Ajouter employé</small>
                            <ol class="breadcrumb hidden-xs">
                                <li><a href="index.html"><i class="pe-7s-home"></i> Employé</a></li>
                                <li class="active">Ajouter employé</li>
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
                                            <a class="btn btn-primary" href="{{ route('employelist') }}"> <i class="fa fa-list"></i>  liste des employés </a>  
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <form  class="col-sm-12" action="{{ route('storeemploye') }}" method="POST" >
                                          @csrf
                                            <div class="col-sm-6 form-group">
                                                <label>Nom et prénom<label class="text-danger">*</label></label>
                                                <input id="name" name="name" type="text" class="form-control" placeholder="Nom" required>
                                                @error('name')
                                                <span  style="" class="text-danger">{{ $message }}</span>
                                                @enderror
                                                
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label>email<label class="text-danger">*</label></label>
                                                <input id="email" name="email" type="email" class="form-control" placeholder="email" required>
                                                @error('email')
                                                <span  style="" class="text-danger">{{ $message }}</span>
                                                @enderror
                                                
                                            </div>

                                            <div class="col-sm-6 form-group">
                                                <label>Mot De Pass<label class="text-danger">*</label></label>
                                                <input id="password" name="password" type="password" class="form-control" placeholder="password" required>
                                                
                                            </div>

                                            <div class="col-sm-6 form-group">
                                                <label>num<label class="text-danger">*</label></label>
                                                <input id="num" name="num" type="text" class="form-control" placeholder="email" required>
                                                
                                            </div>

                                            <div class="col-sm-6 form-group">
                                                <label>Post<label class="text-danger">*</label></label>
                                                <select class="form-control" id="post_id" name="post_id" >
                                                    
                                                    
                                                    <option value="1">Directeur</option>
                                                    <option value="2">Chef De Projet</option>
                                                    <option value="3">ingénieur Topoghraphe</option>
                                                    <option value="4">Superviseur Topoghraphe</option>
                                                    <option value="5">technicien Topoghraphe</option>
                                                    <option value="6">Aide Topoghraphe</option>
                                                    <option value="7">Port Mire</option>
                                                    <option value="8">Chauffeur</option>
                                                    <option value="9">administrateur</option>
                                                    
                                                </select>
                                                
                                            </div>
                                            

                                            
                                            <div class="col-sm-6 form-group">
                                                <label>address<label class="text-danger">*</label></label>
                                                <input id="address" name="address" type="text" class="form-control" placeholder="address" required>
                                                
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