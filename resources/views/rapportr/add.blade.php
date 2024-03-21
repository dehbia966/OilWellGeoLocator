@extends('user')
@section('content')
<?php 
$res="addrapport"
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
                            <h1>Rapport reconnaissance</h1>
                            <small>Ajouter rapport reconnaissance</small>
                            <ol class="breadcrumb hidden-xs">
                                <li><a href="index.html"><i class="pe-7s-home"></i> Rapport reconnaissance</a></li>
                                <li class="active">Ajouter rapport reconnaissance</li>
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
                                            <a class="btn btn-primary" href="{{ route('rapportlist') }}"> <i class="fa fa-list"></i>  liste des rapports reconnaissance </a>  
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <form  class="col-sm-12" action="{{ route('storerap') }}" method="POST" >
                                          @csrf
                                            <div class="col-sm-6 form-group">
                                                <label>ref_rapport<label class="text-danger">*</label></label>
                                                <input id="ref_rapport" name="ref_rapport" type="text" class="form-control" placeholder="ref_rapport" required>
                                                @error('ref_rapport')
                                                <span  style="" class="text-danger">{{ $message }}</span>
                                                @enderror
                                                
                                            </div>

                                            <div class="col-sm-6 form-group">
                                                <label>project<label class="text-danger">*</label></label>
                                                <select class="form-control" id="project_id" name="project_id" >
                                                    <option value="0">-sélectionner-</option>
                                                    @foreach($projects as $project)
                                                    <option value="{{ $project->id }}">{{ $project->name }}</option>
                                                    @endforeach
                                                </select>
                                                
                                            </div>

                                            
                                            <div  class="col-sm-6 form-group">
                                                <label>date_recp_imp<label class="text-danger">*</label></label>
                                                <input id="date_recp_imp" name="date_recp_imp" type="date" class="form-control" placeholder="date_recp_imp" required>
                                                
                                            </div>
                                            
                                            <div class="col-sm-6 form-group">
                                                <label>coordonne_x<label class="text-danger">*</label></label>
                                                <input id="coordonne_x" name="coordonne_x" type="number" class="form-control" placeholder="coordonne_x" required>
                                                
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label>coordonne_y<label class="text-danger">*</label></label>
                                                <input id="coordonne_y" name="coordonne_y" type="number" class="form-control" placeholder="coordonne_y" required>
                                                
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label>coordonne_z<label class="text-danger">*</label></label>
                                                <input id="coordonne_z" name="coordonne_z" type="number" class="form-control" placeholder="coordonne_z" required>
                                                
                                            </div>

                                            <div class="col-sm-2 form-group">
                                                <label>degx<label class="text-danger">*</label></label>
                                                <input id="degx" name="degx" type="number" class="form-control" placeholder="degx" required>  
                                            </div>
                                            <div class="col-sm-1 form-group">
                                                <label>minx<label class="text-danger">*</label></label>
                                                <input id="minx" name="minx" type="number" class="form-control" placeholder="minx" required>  
                                            </div>
                                            <div class="col-sm-2 form-group">
                                                <label>secx<label class="text-danger">*</label></label>
                                                <input id="secx" name="secx" type="number" step="0.01" class="form-control" placeholder="secx" required>  
                                            </div>
                                            <div class="col-sm-1 form-group">
                                                <label>dirx<label class="text-danger">*</label></label>
                                                <select class="form-control" id="dirx" name="dirx" >
                                                    
                                                    
                                                    <option value="N">N</option>
                                                    <option value="S">S</option>
                                                    <option value="E">E</option>
                                                    <option value="W">W</option>
                                                    
                                                </select> 
                                            </div>

                                            <div class="col-sm-2 form-group">
                                                <label>degy<label class="text-danger">*</label></label>
                                                <input id="degy" name="degy" type="number" class="form-control" placeholder="degy" required>  
                                            </div>
                                            <div class="col-sm-1 form-group">
                                                <label>miny<label class="text-danger">*</label></label>
                                                <input id="miny" name="miny" type="number" class="form-control" placeholder="miny" required>  
                                            </div>
                                            <div class="col-sm-2 form-group">
                                                <label>secy<label class="text-danger">*</label></label>
                                                <input id="secy" name="secy" type="number" step="0.01" class="form-control" placeholder="secy" required>  
                                            </div>
                                            <div class="col-sm-1 form-group">
                                                <label>diry<label class="text-danger">*</label></label>
                                                <select class="form-control" id="diry" name="diry" >
                                                    
                                                    
                                                    <option value="N">N</option>
                                                    <option value="S">S</option>
                                                    <option value="E">E</option>
                                                    <option value="W">W</option>
                                                    
                                                </select> 
                                            </div>
                                            

                                            <div class="col-sm-12 form-group">
                                                <label>Description</label>
                                                <textarea id="description" name="description" class="form-control" rows="3" placeholder="Description ..."></textarea>
                                                
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