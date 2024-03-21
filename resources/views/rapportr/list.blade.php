@extends('user')
@section('content')
<?php 
$res="rapportlist"
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
                            <small>liste des rapports reconnaissances</small>
                            <ol class="breadcrumb hidden-xs">
                                <li><a href="index.html"><i class="pe-7s-home"></i> Rapports reconnaissance</a></li>
                                <li class="active">liste des rapports reconnaissances</li>
                            </ol>
                        </div>
                    </section>



<section class="content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">

                                    <div class="btn-group"> 
                                        <a class="btn btn-success" href="{{ route('rapport') }}"> <i class="fa fa-plus"></i>  Ajouter Rapport Reconnaissance</a>  
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                     

                          </div>
                          <div class="table-responsive">
                            <table  id="myTable" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ref_rapport</th>
                                        <th>project</th>
                                        <th>date_recp_imp</th>
                                        <th>coor_x</th>
                                        <th>coor_y</th>
                                        <th>coor_z</th>
                                        <th>utm_x</th>
                                        <th>utm_y</th>
                                        <th>description</th>
                                        <th>créé à</th>
                                        <th>mis à jour à</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                    
                            
                            
                    
        @foreach($rapports as $rapport)        
        <tr >
       <td>{{ $rapport->ref_rapport }}</td>
       <td>
          @foreach($projects as $project)
            @if($rapport->project_id==$project->id )
                {{ $project->name }}
            @endif
          @endforeach
       </td>
       <td>{{ $rapport->date_recp_imp }}</td>
       <td>{{ $rapport->coordonne_x }}</td>
       <td>{{ $rapport->coordonne_y }}</td>
       <td>{{ $rapport->coordonne_z }}</td>
       <td>{{ $rapport->utm_x }}</td>
       <td>{{ $rapport->utm_y }}</td>
       <td>{{ $rapport->description }}</td>
       <td>{{ $rapport->created_at }}</td>
       <td>{{ $rapport->updated_at }}</td>
       
       <td>
        
        @if(auth()->user()->post_id == 2 )
        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModa10" data-ref_rapport="{{ $rapport->ref_rapport }}" data-date_recp_imp="{{ $rapport->date_recp_imp }}" data-coordonne_x="{{ $rapport->coordonne_x }}" data-coordonne_y="{{ $rapport->coordonne_y }}" data-coordonne_z="{{ $rapport->coordonne_z }}" data-utm_x="{{ $rapport->utm_x }}" data-utm_y="{{ $rapport->utm_y }}" data-description="{{ $rapport->description }}" data-project_id="{{ $rapport->project_id }}" data-id="{{ $rapport->id }}" ><i class="fa fa-pencil" aria-hidden="true"></i></button>
        
        <a class="btn btn-danger btn-sm"  title="Delete" href="{{ url('rapport/delete/'.$rapport->id) }}"  data-toggle="tooltip" data-placement="right" onclick="return confirm('are you sure to delete');"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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










<div class="modal fade" id="exampleModa10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title" id="exampleModalLabel">Modifier Rapport Reconnaissance</h4>
      </div>
      
        <form action="{{ url('rapport/update') }}" method="POST" class="col-sm-12">
                              @csrf

                                <div class="form-group">
                                  <br>
                                    <label>ref_rapport<label class="text-danger">*</label></label>
                                    <input type="hidden" name="rapport_id" id="rapport_id" value="">
                                    <input type="text" class="form-control" id="ref_rapport" name="ref_rapport" placeholder="ref_rapport" required>
                                    <label>project<label class="text-danger">*</label></label>
                                    <select class="form-control" id="project_id" name="project_id"  >
                                      
                                    
                                        <option value="0">-sélectionner-</option>
                                                    @foreach($projects as $project)
                                                    <option value="{{ $project->id }}">{{ $project->name }}</option>
                                                    @endforeach
                                    </select>

                                    <label>date_recp_imp<label class="text-danger">*</label></label>
                                    <input type="date" class="form-control" id="date_recp_imp" name="date_recp_imp" placeholder="Code" required>
                                    <label>coordonne_x<label class="text-danger">*</label></label>
                                    <input type="number" class="form-control" id="coordonne_x" name="coordonne_x" placeholder="coordonne_x" required>
                                    <label>coordonne_y<label class="text-danger">*</label></label>
                                    <input type="number" class="form-control" id="coordonne_y" name="coordonne_y" placeholder="coordonne_y" required>
                                    <label>coordonne_z<label class="text-danger">*</label></label>
                                    <input type="number" class="form-control" id="coordonne_z" name="coordonne_z" placeholder="coordonne_z" required>

                                    <label>utm_x<label class="text-danger">*</label></label>
                                    <input type="text"  class="form-control" id="utm_x" name="utm_x" placeholder="utm_x" required>
                                    <label>utm_y<label class="text-danger">*</label></label>
                                    <input type="text"  class="form-control" id="utm_y" name="utm_y" placeholder="utm_y" required>

                                    <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter description..."></textarea>
                                </div>
                                    
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