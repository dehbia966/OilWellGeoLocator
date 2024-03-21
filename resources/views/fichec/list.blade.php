@extends('user')
@section('content')
<?php 
$res="listfichecontart"
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
                            <h1>Fiche Contart</h1>
                            <small>liste des fiches contart</small>
                            <ol class="breadcrumb hidden-xs">
                                <li><a href="index.html"><i class="pe-7s-home"></i> Fiche Contart</a></li>
                                <li class="active">liste des fiches contart</li>
                            </ol>
                        </div>
                    </section>



<section class="content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">

                                    <div class="btn-group"> 
                                        <a class="btn btn-success" href="{{ route('fiche') }}"> <i class="fa fa-plus"></i>  Ajouter Fiche Contart</a>  
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                     

                          </div>
                          <div class="table-responsive">
                            <table  id="myTable" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ref</th>
                                        <th>date_debut</th>
                                        <th>date_fin</th>
                                        <th>montant_global_implantation</th>
                                        <th>créé à</th>
                                        <th>mis à jour à</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                    
                            
                            
                    
        @foreach($fiches as $fiche)        
        <tr>
       <td>{{ $fiche->ref }}</td>
       <td>{{ $fiche->date_debut }}</td>
       <td>{{ $fiche->date_fin }}</td>
       <td>{{ $fiche->montant_global_implantation }}</td>
       <td>{{ $fiche->created_at }}</td>
       <td>{{ $fiche->updated_at }}</td>
       
       <td>
        
        @if(auth()->user()->post_id == 2 )
        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModa11" data-ref="{{ $fiche->ref }}" data-date_debut="{{ $fiche->date_debut }}" data-date_fin="{{ $fiche->date_fin }}" data-montant_global_implantation="{{ $fiche->montant_global_implantation }}"  data-id="{{ $fiche->id }}" ><i class="fa fa-pencil" aria-hidden="true"></i></button>
        
        
        <a class="btn btn-danger btn-sm"  title="Delete" href="{{ url('fiche-contart/delete/'.$fiche->id) }}"  data-toggle="tooltip" data-placement="right" onclick="return confirm('are you sure to delete');"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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










<div class="modal fade" id="exampleModa11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title" id="exampleModalLabel">Modifier Attachement Final</h4>
      </div>
      
        <form action="{{ url('fiche-contart/update') }}" method="POST" class="col-sm-12">
                              @csrf

                                <div class="form-group">
                                  <br>
                                    <label>ref<label class="text-danger">*</label></label>
                                    <input type="hidden" name="fiche_id" id="fiche_id" value="">
                                    <input type="text" class="form-control" id="ref" name="ref" placeholder="ref" required>
                                    <label>date_debut<label class="text-danger">*</label></label>
                                    <input type="date" class="form-control" id="date_debut" name="date_debut" placeholder="date_debut" required>
                                    
                                    <label>date_fin<label class="text-danger">*</label></label>
                                    <input type="date" class="form-control" id="date_fin" name="date_fin" placeholder="date_fin" required>
                                    
                                    <label>montant_global_implantation<label class="text-danger">*</label></label>
                                    <input type="number" step="0.01" class="form-control" id="montant_global_implantation" name="montant_global_implantation" placeholder="montant_global_implantation" required>

                                    
                                    
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