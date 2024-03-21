@extends('user')
@section('content')
<?php 
$res="listattachementfinal"
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
                            <h1>Attachement Final</h1>
                            <small>liste des attachement Finals</small>
                            <ol class="breadcrumb hidden-xs">
                                <li><a href="index.html"><i class="pe-7s-home"></i> Attachement Final</a></li>
                                <li class="active">liste des attachement Finals</li>
                            </ol>
                        </div>
                    </section>



<section class="content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">

                                    <div class="btn-group"> 
                                        <a class="btn btn-success" href="{{ route('attachementfinal') }}"> <i class="fa fa-plus"></i>  Ajouter Attachement Final</a>  
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                     

                          </div>
                          <div class="table-responsive">
                            <table  id="myTable" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ref_att</th>
                                        <th>Fiche Contrat</th>
                                        <th>Project</th>
                                        <th>date_att</th>
                                        <th>att_signe</th>
                                        <th>montant_global</th>
                                        <th>description</th>
                                        <th>créé à</th>
                                        <th>mis à jour à</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                    
                            
                            
                    
        @foreach($attachementfinals as $attachementfinal)        
        <tr >
       <td>{{ $attachementfinal->ref_att }}</td>
       <td>
         @foreach($fiches as $fiche)
            @if($attachementfinal->fiche_id==$fiche->id )
                {{ $fiche->ref }}
            @endif
          @endforeach
       </td>
       <td>
         @foreach($projects as $project)
            @if($attachementfinal->project_id==$project->id )
                {{ $project->name }}
            @endif
          @endforeach
       </td>
       <td>{{ $attachementfinal->date_att }}</td>
       <td>{{ $attachementfinal->att_signe }}</td>
       <td>{{ $attachementfinal->montant_global }}</td>
       <td>{{ $attachementfinal->description }}</td>
       <td>{{ $attachementfinal->created_at }}</td>
       <td>{{ $attachementfinal->updated_at }}</td>
       
       <td>
        
        @if(auth()->user()->post_id == 2 )
        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModa7" data-ref_att="{{ $attachementfinal->ref_att }}" data-date_att="{{ $attachementfinal->date_att }}" data-att_signe="{{ $attachementfinal->att_signe }}" data-montant_global="{{ $attachementfinal->montant_global }}" data-description="{{ $attachementfinal->description }}" data-fiche_id="{{ $attachementfinal->fiche_id }}" data-project_id="{{ $attachementfinal->project_id }}" data-id="{{ $attachementfinal->id }}" ><i class="fa fa-pencil" aria-hidden="true"></i></button>
        
        
        <a class="btn btn-danger btn-sm"  title="Delete" href="{{ url('attachemnt-final/delete/'.$attachementfinal->id) }}"  data-toggle="tooltip" data-placement="right" onclick="return confirm('are you sure to delete');"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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










<div class="modal fade" id="exampleModa7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title" id="exampleModalLabel">Modifier Attachement Final</h4>
      </div>
      
        <form action="{{ url('attachemnt-final/update') }}" method="POST" class="col-sm-12">
                              @csrf

                                <div class="form-group">
                                  <br>
                                    <label>ref_att<label class="text-danger">*</label></label>
                                    <input type="hidden" name="attachementfinal_id" id="attachementfinal_id" value="">
                                    <input type="text" class="form-control" id="ref_att" name="ref_att" placeholder="ref_att" required>
                                    <label>Fiche Contrat<label class="text-danger">*</label></label>
                                    <select class="form-control" id="fiche_id" name="fiche_id"  >
                                      
                                    
                                        <option value="0">-sélectionner-</option>
                                                    @foreach($fiches as $fiche)
                                                    <option value="{{ $fiche->id }}">{{ $fiche->ref }}</option>
                                                    @endforeach
                                    </select>
                                    <label>Project<label class="text-danger">*</label></label>
                                    <select class="form-control" id="project_id" name="project_id"  >
                                      
                                    
                                        <option value="0">-sélectionner-</option>
                                                    @foreach($projects as $project)
                                                    <option value="{{ $project->id }}">{{ $project->name }}</option>
                                                    @endforeach
                                    </select>
                                    <label>date_att<label class="text-danger">*</label></label>
                                    <input type="date" class="form-control" id="date_att" name="date_att" placeholder="date_att" required>
                                    <label>att_signe<label class="text-danger">*</label></label>
                                    <input type="text" class="form-control" id="att_signe" name="att_signe" placeholder="att_signe" required>
                                    <label>montant_global<label class="text-danger">*</label></label>
                                    <input type="number" step="0.01" class="form-control" id="montant_global" name="montant_global" placeholder="montant_global" required>

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