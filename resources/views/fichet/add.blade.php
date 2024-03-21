@extends('user')
@section('content')
<?php 
$res="addfichetechnique"
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
                            <h1>Fiches Technique</h1>
                            <small>Ajouter fiches technique</small>
                            <ol class="breadcrumb hidden-xs">
                                <li><a href="index.html"><i class="pe-7s-home"></i> Fiches Technique</a></li>
                                <li class="active">Ajouter fiches technique</li>
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
                                            <a class="btn btn-primary" href="{{ route('fichetlist') }}"> <i class="fa fa-list"></i>  liste des Fiches Technique </a>  
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <form  class="col-sm-12" action="{{ route('storefict') }}" method="POST" >
                                          @csrf
                                            

                                            <div class="col-sm-6 form-group">
                                                <label>ref_dos_tech<label class="text-danger">*</label></label>
                                                <input id="ref_dos_tech" name="ref_dos_tech" type="text" class="form-control" placeholder="ref_dos_tech" required>
                                                @error('ref_dos_tech')
                                                <span  style="" class="text-danger">{{ $message }}</span>
                                                @enderror
                                                
                                            </div>

                                            <div class="col-sm-6 form-group">
                                                <label>Project<label class="text-danger">*</label></label>
                                                <select class="form-control" id="project_id" name="project_id" >
                                                    <option value="0">-sélectionner-</option>
                                                    @foreach($projects as $project)
                                                    <option value="{{ $project->id }}">{{ $project->name }}</option>
                                                    @endforeach
                                                </select>
                                                
                                            </div> 

                                            
                                            
                                            <div  class="col-sm-6 form-group">
                                                <label>date_recept_ord<label class="text-danger">*</label></label>
                                                <input id="date_recept_ord" name="date_recept_ord" type="date" class="form-control" placeholder="date_recept_ord" required>
                                                
                                            </div>
                                            <div  class="col-sm-6 form-group">
                                                <label>date_envoi_odt<label class="text-danger">*</label></label>
                                                <input id="date_envoi_odt" name="date_envoi_odt" type="date" class="form-control" placeholder="date_envoi_odt" required>
                                                
                                            </div>

                                            <div  class="col-sm-6 form-group">
                                                <label>date_envoi_ods<label class="text-danger">*</label></label>
                                                <input id="date_envoi_ods" name="date_envoi_ods" type="date" class="form-control" placeholder="date_envoi_ods" required>
                                                
                                            </div>

                                            <div  class="col-sm-6 form-group">
                                                <label>date_fin_ods<label class="text-danger">*</label></label>
                                                <input id="date_fin_ods" name="date_fin_ods" type="date" class="form-control" placeholder="date_fin_ods" required>
                                                
                                            </div>

                                            <div class="col-sm-6 form-group">
                                                <label>ref_ods<label class="text-danger">*</label></label>
                                                <input id="ref_ods" name="ref_ods" type="text"  class="form-control" placeholder="ref_ods" required>
                                                
                                            </div>

                                            <div class="col-sm-6 form-group">
                                                <label>ref_odt<label class="text-danger">*</label></label>
                                                <input id="ref_odt" name="ref_odt" type="text"  class="form-control" placeholder="ref_odt" required>
                                                
                                            </div>

                                            <div class="col-sm-6 form-group">
                                                <label>laltitude<label class="text-danger">*</label></label>
                                                <input id="laltitude" name="laltitude" type="number" step="0.01"  class="form-control" placeholder="laltitude" required>
                                                
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label>longitude<label class="text-danger">*</label></label>
                                                <input id="longitude" name="longitude" type="number" step="0.01"  class="form-control" placeholder="longitude" required>
                                                
                                            </div>

                                            <div class="col-sm-6 form-group">
                                                <label>ref_sis<label class="text-danger">*</label></label>
                                                <input id="ref_sis" name="ref_sis" type="text"  class="form-control" placeholder="ref_sis" required>
                                                
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label>pos_sis<label class="text-danger">*</label></label>
                                                <input id="pos_sis" name="pos_sis" type="text"  class="form-control" placeholder="pos_sis" required>
                                                
                                            </div>

                                            <div class="col-sm-6 form-group">
                                                <label>orgi_si<label class="text-danger">*</label></label>
                                                <input id="orgi_si" name="orgi_si" type="number" step="0.01"  class="form-control" placeholder="orgi_si" required>
                                                
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label>paramatre_trans<label class="text-danger">*</label></label>
                                                <input id="paramatre_trans" name="paramatre_trans" type="number" step="0.01"  class="form-control" placeholder="paramatre_trans" required>
                                                
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label>altemetric<label class="text-danger">*</label></label>
                                                <input id="altemetric" name="altemetric" type="number" step="0.01"  class="form-control" placeholder="altemetric" required>
                                                
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