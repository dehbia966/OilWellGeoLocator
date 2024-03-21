@extends('user')
@section('content')
<?php 
$res="listbrigade"
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
                            <small>liste des brigades</small>
                            <ol class="breadcrumb hidden-xs">
                                <li><a href="index.html"><i class="pe-7s-home"></i> brigade</a></li>
                                <li class="active">liste des Brigades</li>
                            </ol>
                        </div>
                    </section>



<section class="content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">

                                    <div class="btn-group"> 
                                        <a class="btn btn-success" href="{{ route('brigade') }}"> <i class="fa fa-plus"></i>  Ajouter Brigade Topographe</a>  
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                     

                          </div>
                          <div class="table-responsive">
                            <table  id="myTable" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ref_brigade</th>Employé
                                        <th>Employé</th>
                                        <th>site_hebergement</th>
                                        <th>project</th>
                                        <th>Code de matériel</th>
                                        <th>date_sorti</th>
                                        <th>date_retour</th>
                                        <th>date_inspection</th>
                                        <th>créé à</th>
                                        <th>mis à jour à</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                    
                            
                            
                    
        @foreach($brigades as $brigade)        
        <tr>
       <td>{{ $brigade->ref_brigade }}</td>
       <td>
         @foreach($users as $user)
            @if($brigade->user_id==$user->id )
                {{ $user->name }}
            @endif
          @endforeach
       </td>
       <td>{{ $brigade->site_hebergement }}</td>
       <td>
         @foreach($projects as $project)
            @if($brigade->project_id==$project->id )
                {{ $project->name }}
            @endif
          @endforeach
       </td>
       <td>
         @foreach($materials as $material)
            @if($brigade->material_id==$material->id )
                {{ $material->code }}
            @endif
          @endforeach
       </td>
       <td>{{ $brigade->date_sorti }}</td>
       <td>{{ $brigade->date_retour }}</td>
       <td>{{ $brigade->date_inspection }}</td>
       <td>{{ $brigade->created_at }}</td>
       <td>{{ $brigade->updated_at }}</td>
       
       <td>
        @if(auth()->user()->post_id == 9 )
        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModa9" data-ref_brigade="{{ $brigade->ref_brigade }}" data-site_hebergement="{{ $brigade->site_hebergement }}" data-date_sorti="{{ $brigade->date_sorti }}" data-date_retour="{{ $brigade->date_retour }}" data-date_inspection="{{ $brigade->date_inspection }}" data-project_id="{{ $brigade->project_id }}" data-material_id="{{ $brigade->material_id }}" data-user_id="{{ $brigade->user_id }}"data-id="{{ $brigade->id }}" ><i class="fa fa-pencil" aria-hidden="true"></i></button>
        
        
        
        <a class="btn btn-danger btn-sm"  title="Delete" href="{{ url('brigade/delete/'.$brigade->id) }}"  data-toggle="tooltip" data-placement="right" onclick="return confirm('are you sure to delete');"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
        @else
        @endif
    </td>
    </tr>
    @endforeach
</tbody>
</table>
</div>


</div>
</div>
</div>
</div>
</section> <!-- /.content -->










<div class="modal fade" id="exampleModa9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title" id="exampleModalLabel">Modifier Attachement Final</h4>
      </div>
      
        <form action="{{ url('brigade/update') }}" method="POST" class="col-sm-12">
                              @csrf

                                <div class="form-group">
                                  <br>
                                    <label>ref_brigade<label class="text-danger">*</label></label>
                                    <input type="hidden" name="brigade_id" id="brigade_id" value="">
                                    <input type="text" class="form-control" id="ref_brigade" name="ref_brigade" placeholder="ref_brigade" required>

                                    <label>Employé<label class="text-danger">*</label></label>
                                    <select class="form-control" id="user_id" name="user_id"  >
                                      
                                    
                                        <option value="0">-sélectionner-</option>
                                                    @foreach($users as $user)
                                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                    @endforeach
                                    </select>

                                    <label>Project<label class="text-danger">*</label></label>
                                    <select class="form-control" id="project_id" name="project_id"  >
                                      
                                    
                                        <option value="0">-sélectionner-</option>
                                                    @foreach($projects as $project)
                                                    <option value="{{ $project->id }}">{{ $project->name }}</option>
                                                    @endforeach
                                    </select>

                                    <label>material Code<label class="text-danger">*</label></label>
                                    <select class="form-control" id="material_id" name="material_id"  >
                                      
                                    
                                        <option value="0">-sélectionner-</option>
                                                    @foreach($materials as $material)
                                                    <option value="{{ $material->id }}">{{ $material->code }}</option>
                                                    @endforeach
                                    </select>
                                    

                                    <label>site_hebergement<label class="text-danger">*</label></label>
                                    <input type="text" class="form-control" id="site_hebergement" name="site_hebergement" placeholder="site_hebergement" required>

                                    <label>date_sorti<label class="text-danger">*</label></label>
                                    <input type="date" class="form-control" id="date_sorti" name="date_sorti" placeholder="date_sorti" required>
                                    <label>date_retour<label class="text-danger">*</label></label>
                                    <input type="date" class="form-control" id="date_retour" name="date_retour" placeholder="date_retour" required>
                                    <label>date_inspection<label class="text-danger">*</label></label>
                                    <input type="date" class="form-control" id="date_inspection" name="date_inspection" placeholder="date_inspection" required>
                                    
                                    
                                    
                                </div>
                                                                   
                                  <div class="reset-button">
                                    <button type="submit" id="save" class="btn btn-success" onclick="return confirm('are you sure to save');">sauvegarder</button>
                                    
                                    <button type="button" class="btn btn-warning" data-dismiss="modal">Annuler</button>
                                     
                                 </div>
                             </form>
      
      <div class="modal-footer">
        
        
      </div>
    </div>
  </div>
</div>





                   












@endsection