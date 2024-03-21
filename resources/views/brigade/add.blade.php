@extends('user')
@section('content')
<?php 
$res="addbrigade"
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
                            <h1>Brigade</h1>
                            <small>Ajouter brigade</small>
                            <ol class="breadcrumb hidden-xs">
                                <li><a href="index.html"><i class="pe-7s-home"></i> Brigade</a></li>
                                <li class="active">Ajouter brigade</li>
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
                                            <a class="btn btn-primary" href="{{ route('brigadelist') }}"> <i class="fa fa-list"></i>  liste des brigades topographe </a>  
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <form  class="col-sm-12" action="{{ route('storebri') }}" method="POST" >
                                          @csrf
                                            <div class="col-sm-6 form-group">
                                                <label>ref_brigade<label class="text-danger">*</label></label>
                                                <input id="ref_brigade" name="ref_brigade" type="text" class="form-control" placeholder="ref_brigade" required>
                                                @error('ref_brigade')
                                                <span  style="" class="text-danger">{{ $message }}</span>
                                                @enderror
                                                
                                            </div>

                                            <div class="col-sm-6 form-group">
                                                <label>Employé<label class="text-danger">*</label></label>
                                                <select class="form-control" id="user_id" name="user_id" >
                                                    <option value="0">-sélectionner-</option>
                                                    @foreach($users as $user)
                                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                    @endforeach
                                                </select>
                                                
                                            </div>

                                            <div class="col-sm-6 form-group">
                                                <label>material code<label class="text-danger">*</label></label>
                                                <select class="form-control" id="material_id" name="material_id" >
                                                    <option value="0">-sélectionner-</option>
                                                    @foreach($materials as $material)
                                                    <option value="{{ $material->id }}">{{ $material->code }}</option>
                                                    @endforeach
                                                </select>
                                                
                                            </div>

                                            <div class="col-sm-6 form-group">
                                                <label>project name<label class="text-danger">*</label></label>
                                                <select class="form-control" id="project_id" name="project_id" >
                                                    <option value="0">-sélectionner-</option>
                                                    @foreach($projects as $project)
                                                    <option value="{{ $project->id }}">{{ $project->name }}</option>
                                                    @endforeach
                                                </select>
                                                
                                            </div>

                                            <div class="col-sm-6 form-group">
                                                <label>site_hebergement<label class="text-danger">*</label></label>
                                                <input id="site_hebergement" name="site_hebergement" type="text" class="form-control" placeholder="site_hebergement" required>
                                                
                                            </div>
                                            
                                            <div  class="col-sm-6 form-group">
                                                <label>date_sorti<label class="text-danger">*</label></label>
                                                <input id="date_sorti" name="date_sorti" type="date" class="form-control" placeholder="date_sorti" required>
                                                
                                            </div>

                                            <div  class="col-sm-6 form-group">
                                                <label>date_retour<label class="text-danger">*</label></label>
                                                <input id="date_retour" name="date_retour" type="date" class="form-control" placeholder="date_retour" required>
                                                
                                            </div>

                                            <div  class="col-sm-6 form-group">
                                                <label>date_inspection<label class="text-danger">*</label></label>
                                                <input id="date_inspection" name="date_inspection" type="date" class="form-control" placeholder="date_inspection" required>
                                                
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