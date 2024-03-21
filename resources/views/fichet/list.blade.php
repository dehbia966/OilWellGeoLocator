@extends('user')
@section('content')
<?php 
$res="listfichetechnique"
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
                            <h1>Fiche Technique</h1>
                            <small>liste des fiches technique</small>
                            <ol class="breadcrumb hidden-xs">
                                <li><a href="index.html"><i class="pe-7s-home"></i> Fiche Technique</a></li>
                                <li class="active">liste des fiches technique</li>
                            </ol>
                        </div>
                    </section>



<section class="content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">

                                    <div class="btn-group"> 
                                        <a class="btn btn-success" href="{{ route('fichet') }}"> <i class="fa fa-plus"></i>  Ajouter Fiche Technique</a>  
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                     

                          </div>
                          <div class="table-responsive">
                            <table  id="myTable" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ref_dos_tech</th>
                                        
                                        <th>créé à</th>
                                        <th>mis à jour à</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                    
                            
                            
                    
        @foreach($fiches as $fiche)        
        <tr >
       <td>{{ $fiche->ref_dos_tech }}</td>
       
       <td>{{ $fiche->created_at }}</td>
       <td>{{ $fiche->updated_at }}</td>
       
       <td>
        
        @if(auth()->user()->post_id == 2 )
        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModa12" data-ref_dos_tech="{{ $fiche->ref_dos_tech }}" data-date_recept_ord="{{ $fiche->date_recept_ord }}" data-date_envoi_odt="{{ $fiche->date_envoi_odt }}" data-date_envoi_ods="{{ $fiche->date_envoi_ods }}" data-date_fin_ods="{{ $fiche->date_fin_ods }}" data-ref_ods="{{ $fiche->ref_ods }}" data-ref_odt="{{ $fiche->ref_odt }}" data-laltitude="{{ $fiche->laltitude }}" data-longitude="{{ $fiche->longitude }}" data-ref_sis="{{ $fiche->ref_sis }}" data-pos_sis="{{ $fiche->pos_sis }}" data-orgi_si="{{ $fiche->orgi_si }}" data-paramatre_trans="{{ $fiche->paramatre_trans }}" data-altemetric="{{ $fiche->altemetric }}" data-project_id="{{ $fiche->project_id }}" data-id="{{ $fiche->id }}" ><i class="fa fa-pencil" aria-hidden="true"></i></button>
        
        
        <a class="btn btn-danger btn-sm"  title="Delete" href="{{ url('fiche-technique/delete/'.$fiche->id) }}"  data-toggle="tooltip" data-placement="right" onclick="return confirm('are you sure to delete');"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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










<div class="modal fade" id="exampleModa12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title" id="exampleModalLabel">Modifier Projet</h4>
      </div>
      
        <form action="{{ url('fiche-technique/update') }}" method="POST" class="col-sm-12">
                              @csrf

                                <div class="form-group">
                                  <br>
                                    <label>ref_dos_tech<label class="text-danger">*</label></label>
                                    <input type="hidden" name="fiche_id" id="fiche_id" value="">
                                    <input type="text" class="form-control" id="ref_dos_tech" name="ref_dos_tech" placeholder="ref_dos_tech" required>

                                    <label>project<label class="text-danger">*</label></label>
                                    <select class="form-control" id="project_id" name="project_id"  >
                                      
                                    
                                        <option value="0">-sélectionner-</option>
                                                    @foreach($projects as $project)
                                                    <option value="{{ $project->id }}">{{ $project->name }}</option>
                                                    @endforeach
                                    </select>
                                    

                                    <label>date_recept_ord<label class="text-danger">*</label></label>
                                    <input type="date" class="form-control" id="date_recept_ord" name="date_recept_ord" placeholder="date_recept_ord" required>
                                    <label>date_envoi_odt<label class="text-danger">*</label></label>
                                    <input type="date" class="form-control" id="date_envoi_odt" name="date_envoi_odt" placeholder="date_envoi_odt" required>
                                    <label>date_envoi_ods<label class="text-danger">*</label></label>
                                    <input type="date" class="form-control" id="date_envoi_ods" name="date_envoi_ods" placeholder="date_envoi_ods" required>
                                    <label>date_fin_ods<label class="text-danger">*</label></label>
                                    <input type="date" class="form-control" id="date_fin_ods" name="date_fin_ods" placeholder="date_fin_ods" required>
                                    
                                    <label>ref_ods<label class="text-danger">*</label></label>
                                    <input type="text" class="form-control" id="ref_ods" name="ref_ods" placeholder="ref_ods" required>
                                    <label>ref_odt<label class="text-danger">*</label></label>
                                    <input type="text" class="form-control" id="ref_odt" name="ref_odt" placeholder="ref_odt" required>

                                    <label>laltitude<label class="text-danger">*</label></label>
                                    <input type="number" step="0.01" class="form-control" id="laltitude" name="laltitude" placeholder="laltitude" required>
                                    <label>longitude<label class="text-danger">*</label></label>
                                    <input type="number" step="0.01" class="form-control" id="longitude" name="longitude" placeholder="longitude" required>

                                    <label>ref_sis<label class="text-danger">*</label></label>
                                    <input type="text" class="form-control" id="ref_sis" name="ref_sis" placeholder="ref_sis" required>
                                    <label>pos_sis<label class="text-danger">*</label></label>
                                    <input type="text" class="form-control" id="pos_sis" name="pos_sis" placeholder="pos_sis" required>

                                    <label>orgi_si<label class="text-danger">*</label></label>
                                    <input type="number" step="0.01" class="form-control" id="orgi_si" name="orgi_si" placeholder="orgi_si" required>
                                    <label>paramatre_trans<label class="text-danger">*</label></label>
                                    <input type="number" step="0.01" class="form-control" id="paramatre_trans" name="paramatre_trans" placeholder="paramatre_trans" required>
                                    <label>altemetric<label class="text-danger">*</label></label>
                                    <input type="number" step="0.01" class="form-control" id="altemetric" name="altemetric" placeholder="altemetric" required>

                                    
                                    
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