@extends('user')
@section('content')
<?php 
$res="addattachementfinal"
?>

<section class="content-header">
                        <div class="header-icon">
                            <i class="fa fa-list-alt"></i>
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
                            <h1>Attachement final</h1>
                            <small>Ajouter attachement final</small>
                            <ol class="breadcrumb hidden-xs">
                                <li><a href="index.html"><i class="pe-7s-home"></i> Attachement final</a></li>
                                <li class="active">Ajouter attachement final</li>
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
                                            <a class="btn btn-primary" href="{{ route('attachementfinallist') }}"> <i class="fa fa-list"></i>  liste des attachements final </a>  
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <form  class="col-sm-12" action="{{ route('storeattfin') }}" method="POST" >
                                          @csrf
                                            <div class="col-sm-6 form-group">
                                                <label>ref_att<label class="text-danger">*</label></label>
                                                <input id="ref_att" name="ref_att" type="text" class="form-control" placeholder="ref_att" required>
                                                @error('ref_att')
                                                <span  style="" class="text-danger">{{ $message }}</span>
                                                @enderror
                                                
                                            </div>

                                            <div class="col-sm-6 form-group">
                                                <label>Fiche Contart Ref<label class="text-danger">*</label></label>
                                                <select class="form-control" id="fiche_id" name="fiche_id" >
                                                    <option value="0">-sélectionner-</option>
                                                    @foreach($fiches as $fiche)
                                                    <option value="{{ $fiche->id }}">{{ $fiche->ref }}</option>
                                                    @endforeach
                                                </select>
                                                
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
                                                <label>date_att<label class="text-danger">*</label></label>
                                                <input id="date_att" name="date_att" type="date" class="form-control" placeholder="date_att" required>
                                                
                                            </div>

                                            <div class="col-sm-6 form-group">
                                                <label>att_signe<label class="text-danger">*</label></label>
                                                <input id="att_signe" name="att_signe" type="text" class="form-control" placeholder="att_signe" required>
                                                
                                            </div>
                                            
                                            <div class="col-sm-6 form-group">
                                                <label>montant_global<label class="text-danger">*</label></label>
                                                <input id="montant_global" name="montant_global" type="number" step="0.01" class="form-control" placeholder="montant_global" required>
                                                
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