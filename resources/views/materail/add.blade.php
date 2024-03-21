@extends('user')
@section('content')
<?php 
$res="addmaterail"
?>

<section class="content-header">
                        <div class="header-icon">
                            <i class="fa fa-check-square-o"></i>
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
                            <h1>Matériel</h1>
                            <small>Ajouter matériel</small>
                            <ol class="breadcrumb hidden-xs">
                                <li><a href="index.html"><i class="pe-7s-home"></i> Matériel</a></li>
                                <li class="active">Ajouter matériel</li>
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
                                            <a class="btn btn-primary" href="{{ route('materaillist') }}"> <i class="fa fa-list"></i>  liste de matériel </a>  
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <form  class="col-sm-12" action="{{ route('storemat') }}" method="POST" >
                                          @csrf
                                            <div class="col-sm-6 form-group">
                                                <label>Type<label class="text-danger">*</label></label>
                                                <input id="type" name="type" type="text" class="form-control" placeholder="Type" required>
                                                @error('type')
                                                <span  style="" class="text-danger">{{ $message }}</span>
                                                @enderror
                                                
                                            </div>

                                            <div class="col-sm-6 form-group">
                                                <label>Brigade Tobographe<label class="text-danger">*</label></label>
                                                <select class="form-control" id="brigade_id" name="brigade_id" >
                                                    <option value="0">-sélectionner-</option>
                                                    @foreach($brigades as $brigade)
                                                    <option value="{{ $brigade->id }}">{{ $brigade->ref_brigade }}</option>
                                                    @endforeach
                                                </select>
                                                
                                            </div>
                                            
                                            <div class="col-sm-6 form-group">
                                                <label>Code<label class="text-danger">*</label></label>
                                                <input id="code" name="code" type="text" class="form-control" placeholder="Code" required>
                                                
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