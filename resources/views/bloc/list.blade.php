@extends('user')
@section('content')
<?php 
$res="listbloc"
?>

<section class="content-header">
                        <div class="header-icon">
                            <i class="fa fa-sitemap"></i>
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
                            <h1>Bloc</h1>
                            <small>liste des blocs</small>
                            <ol class="breadcrumb hidden-xs">
                                <li><a href="index.html"><i class="pe-7s-home"></i> Bloc</a></li>
                                <li class="active">liste des blocs</li>
                            </ol>
                        </div>
                    </section>



<section class="content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">

                                    <div class="btn-group"> 
                                        <a class="btn btn-success" href="{{ route('bloc') }}"> <i class="fa fa-plus"></i>  Ajouter Bloc</a>  
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                     

                          </div>
                          <div class="table-responsive">
                            <table  id="myTable" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Bassin</th>
                                        <th>Code</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                    
                            
                            
                    
        @foreach($blocs as $bloc)        
        <tr >
       <td>{{ $bloc->name }}</td>
       
         <td>
                
           @foreach($bassins as $bassin)
                @if($bloc->bassin_id==$bassin->id )
                {{ $bassin->name }}
                @endif
            @endforeach
       </td>
       
       <td>{{ $bloc->code }}</td>
       
       <td>
        @if(auth()->user()->post_id == 9 )
        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModa6" data-name="{{ $bloc->name }}" data-code="{{ $bloc->code }}" data-bassin_id="{{ $bloc->bassin_id }}"   data-id="{{ $bloc->id }}" ><i class="fa fa-pencil" aria-hidden="true"></i></button>
        
        
        
        <a class="btn btn-danger btn-sm"  title="Delete" href="{{ url('bloc/delete/'.$bloc->id) }}"  data-toggle="tooltip" data-placement="right" onclick="return confirm('are you sure to delete');"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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










<div class="modal fade" id="exampleModa6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title" id="exampleModalLabel">Modifier Bloc</h4>
      </div>
      
        <form action="{{ url('bloc/update') }}" method="POST" class="col-sm-12">
                              @csrf

                                <div class="form-group">
                                  <br>
                                    <label>nom<label class="text-danger">*</label></label>
                                    <input type="hidden" name="bloc_id" id="bloc_id" value="">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                                    <label>Bassin<label class="text-danger">*</label></label>
                                    <select class="form-control" id="bassin_id" name="bassin_id"  >
                                      
                                    
                                        <option value="0">-sélectionner-</option>
                                                    @foreach($bassins as $bassin)
                                                    <option value="{{ $bassin->id }}">{{ $bassin->name }}</option>
                                                    @endforeach
                                    </select>


                                    <label>Code<label class="text-danger">*</label></label>
                                    <input type="text" class="form-control" id="code" name="code" placeholder="Code" required>
                                    
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