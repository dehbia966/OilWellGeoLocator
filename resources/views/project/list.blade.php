@extends('user')
@section('content')
<?php 
$res="projectlist"
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
                            <small>liste des projets</small>
                            <ol class="breadcrumb hidden-xs">
                                <li><a href="index.html"><i class="pe-7s-home"></i> Projet</a></li>
                                <li class="active">liste des Projets</li>
                            </ol>
                        </div>
                    </section>



<section class="content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">

                                    <div class="btn-group"> 
                                        <a class="btn btn-success" href="{{ route('project') }}"> <i class="fa fa-plus"></i>  Ajouter Projet</a>  
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                     

                          </div>
                          <div class="table-responsive">
                            <table  id="myTable" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>sigle</th>
                                        <th>Nom</th>
                                        <th>Project</th>
                                        <th>zone</th>
                                        <th>bloc</th>
                                        <th>commune</th>
                                        <th>status</th>
                                        <th>date_c</th>
                                        <th>type</th>
                                        <th>créé à</th>
                                        <th>mis à jour à</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                    
                            
                            
                    
        @foreach($projets as $projet)        
        <tr >
       <td>{{ $projet->sigle }}</td>
       <td>{{ $projet->name }}</td>
       <td>
          @foreach($rapports as $rapport)
            @if($projet->rapport_id==$rapport->id )
                {{ $rapport->ref_rapport }}
            @endif
          @endforeach
       </td>
       <td>
          @foreach($zones as $zone)
            @if($projet->zone_id==$zone->id )
                {{ $zone->name }}
            @endif
          @endforeach
       </td>
       <td>
          @foreach($blocs as $bloc)
            @if($projet->bloc_id==$bloc->id )
                {{ $bloc->name }}
            @endif
          @endforeach
       </td>
       <td>
          @foreach($communes as $commune)
            @if($projet->commune_id==$commune->id )
                {{ $commune->name }}
            @endif
          @endforeach
       </td>

       <td>{{ $projet->status }}</td>
       <td>{{ $projet->date_c }}</td>
       <td>{{ $projet->type }}</td>
       <td>{{ $projet->created_at }}</td>
       <td>{{ $projet->updated_at }}</td>
       
       <td>
        @if(auth()->user()->post_id == 2 )
        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModa8" data-sigle="{{ $projet->sigle }}" data-name="{{ $projet->name }}" data-status="{{ $projet->status }}" data-date_c="{{ $projet->date_c }}" data-type="{{ $projet->type }}" data-zone_id="{{ $projet->zone_id }}" data-bloc_id="{{ $projet->bloc_id }}" data-commune_id="{{ $projet->commune_id }}" data-rapport_id="{{ $projet->rapport_id }}" data-id="{{ $projet->id }}" ><i class="fa fa-pencil" aria-hidden="true"></i></button>
        
        
        
        <a class="btn btn-danger btn-sm"  title="Delete" href="{{ url('projet/delete/'.$projet->id) }}"  data-toggle="tooltip" data-placement="right" onclick="return confirm('are you sure to delete');"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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










<div class="modal fade" id="exampleModa8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title" id="exampleModalLabel">Modifier Projet</h4>
      </div>
      
        <form action="{{ url('projet/update') }}" method="POST" class="col-sm-12">
                              @csrf

                                <div class="form-group">
                                  <br>
                                    <label>sigle<label class="text-danger">*</label></label>
                                    <input type="hidden" name="projet_id" id="projet_id" value="">
                                    <input type="text" class="form-control" id="sigle" name="sigle" placeholder="ref_att" required>
                                    <label>nom<label class="text-danger">*</label></label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Nom" required>
                                    <label>rapport reconnaissance<label class="text-danger">*</label></label>
                                    <select class="form-control" id="rapport_id" name="rapport_id"  >
                                      
                                    
                                        <option value="0">-sélectionner-</option>
                                                    @foreach($rapports as $rapport)
                                                    <option value="{{ $rapport->id }}">{{ $rapport->ref_rapport }}</option>
                                                    @endforeach
                                    </select>
                                    <label>Zone<label class="text-danger">*</label></label>
                                    <select class="form-control" id="zone_id" name="zone_id"  >
                                      
                                    
                                        <option value="0">-sélectionner-</option>
                                                    @foreach($zones as $zone)
                                                    <option value="{{ $zone->id }}">{{ $zone->name }}</option>
                                                    @endforeach
                                    </select>

                                    <label>Bloc<label class="text-danger">*</label></label>
                                    <select class="form-control" id="bloc_id" name="bloc_id"  >
                                      
                                    
                                        <option value="0">-sélectionner-</option>
                                                    @foreach($blocs as $bloc)
                                                    <option value="{{ $bloc->id }}">{{ $bloc->name }}</option>
                                                    @endforeach
                                    </select>

                                    <label>Commune<label class="text-danger">*</label></label>
                                    <select class="form-control" id="commune_id" name="commune_id"  >
                                      
                                    
                                        <option value="0">-sélectionner-</option>
                                                    @foreach($communes as $commune)
                                                    <option value="{{ $commune->id }}">{{ $commune->name }}</option>
                                                    @endforeach
                                    </select>

                                    <label>status<label class="text-danger">*</label></label>
                                    <input type="text" class="form-control" id="status" name="status" placeholder="att_signe" required>

                                    <label>date_c<label class="text-danger">*</label></label>
                                    <input type="date" class="form-control" id="date_c" name="date_c" placeholder="Code" required>
                                    
                                    <label>type<label class="text-danger">*</label></label>
                                    <input type="text" class="form-control" id="type" name="type" placeholder="att_signe" required>

                                    
                                    
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