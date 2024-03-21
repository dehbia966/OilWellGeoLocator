@extends('user')
@section('content')
<?php 
$res="addprojet"
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
                            <h1>Projet</h1>
                            <small>Ajouter projet</small>
                            <ol class="breadcrumb hidden-xs">
                                <li><a href="index.html"><i class="pe-7s-home"></i> Projet</a></li>
                                <li class="active">Ajouter projet</li>
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
                                            <a class="btn btn-primary" href="{{ route('projectlist') }}"> <i class="fa fa-list"></i>  liste des projets </a>  
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <form  class="col-sm-12" action="{{ route('storepro') }}" method="POST" >
                                          @csrf
                                            

                                            <div class="col-sm-6 form-group">
                                                <label>sigle<label class="text-danger">*</label></label>
                                                <input id="sigle" name="sigle" type="text" class="form-control" placeholder="sigle" required>
                                                @error('sigle')
                                                <span  style="" class="text-danger">{{ $message }}</span>
                                                @enderror
                                                
                                            </div>

                                            <div class="col-sm-6 form-group">
                                                <label>nom<label class="text-danger">*</label></label>
                                                <input id="name" name="name" type="text"  class="form-control" placeholder="name" required>
                                                @error('name')
                                                <span  style="" class="text-danger">{{ $message }}</span>
                                                @enderror
                                                
                                            </div>

                                            <div class="col-sm-6 form-group">
                                                <label>Rapport Reconnaissance<label class="text-danger">*</label></label>
                                                <select class="form-control" id="rapport_id" name="rapport_id" >
                                                    <option value="0">-sélectionner-</option>
                                                    @foreach($rapports as $rapport)
                                                    <option value="{{ $rapport->id }}">{{ $rapport->ref_rapport }}</option>
                                                    @endforeach
                                                </select>
                                                
                                            </div> 
                                            <div class="col-sm-6 form-group">
                                                <label>Zone<label class="text-danger">*</label></label>
                                                <select class="form-control" id="zone_id" name="zone_id" >
                                                    <option value="0">-sélectionner-</option>
                                                    @foreach($zones as $zone)
                                                    <option value="{{ $zone->id }}">{{ $zone->name }}</option>
                                                    @endforeach
                                                </select>
                                                
                                            </div>

                                            <div class="col-sm-6 form-group">
                                                <label>Bloc<label class="text-danger">*</label></label>
                                                <select class="form-control" id="bloc_id" name="bloc_id" >
                                                    <option value="0">-sélectionner-</option>
                                                    @foreach($blocs as $bloc)
                                                    <option value="{{ $bloc->id }}">{{ $bloc->name }}</option>
                                                    @endforeach
                                                </select>
                                                
                                            </div>

                                            <div class="col-sm-6 form-group">
                                                <label>Commune<label class="text-danger">*</label></label>
                                                <select class="form-control" id="commune_id" name="commune_id" >
                                                    <option value="0">-sélectionner-</option>
                                                    @foreach($communes as $commune)
                                                    <option value="{{ $commune->id }}">{{ $commune->name }}</option>
                                                    @endforeach
                                                </select>
                                                
                                            </div>

                                            <div class="col-sm-6 form-group">
                                                <label>status<label class="text-danger">*</label></label>
                                                <input id="status" name="status" type="text"  class="form-control" placeholder="status" required>
                                                
                                            </div>
                                            
                                            <div  class="col-sm-6 form-group">
                                                <label>date_c<label class="text-danger">*</label></label>
                                                <input id="date_c" name="date_c" type="date" class="form-control" placeholder="date_c" required>
                                                
                                            </div>

                                            <div class="col-sm-6 form-group">
                                                <label>type<label class="text-danger">*</label></label>
                                                <input id="type" name="type" type="text"  class="form-control" placeholder="type" required>
                                                
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