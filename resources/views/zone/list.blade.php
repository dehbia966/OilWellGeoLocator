@extends('user')
@section('content')
<?php 
$res="listzone"
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
                            <h1>Zone</h1>
                            <small>liste des zones</small>
                            <ol class="breadcrumb hidden-xs">
                                <li><a href="index.html"><i class="pe-7s-home"></i> Zone</a></li>
                                <li class="active">liste des zones</li>
                            </ol>
                        </div>
                    </section>



<section class="content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">

                                    <div class="btn-group"> 
                                        <a class="btn btn-success" href="{{ route('zone') }}"> <i class="fa fa-plus"></i>  Ajouter zone</a>  
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
                                        <th>Code</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                    
                            
                            
                    
        @foreach($zones as $zone)        
        <tr >
       <td>{{ $zone->name }}</td>
       <td>{{ $zone->code }}</td>
       
       <td>
        
        @if(auth()->user()->post_id == 9 )
        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModa4" data-name="{{ $zone->name }}" data-code="{{ $zone->code }}"  data-id="{{ $zone->id }}" ><i class="fa fa-pencil" aria-hidden="true"></i></button>
        
        
        <a class="btn btn-danger btn-sm"  title="Delete" href="{{ url('zone/delete/'.$zone->id) }}"  data-toggle="tooltip" data-placement="right" onclick="return confirm('are you sure to delete');"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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










<div class="modal fade" id="exampleModa4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title" id="exampleModalLabel">Modifier Zone</h4>
      </div>
      
        <form action="{{ url('zone/update') }}" method="POST" class="col-sm-12">
                              @csrf

                                <div class="form-group">
                                  <br>
                                    <label>Type<label class="text-danger">*</label></label>
                                    <input type="hidden" name="zone_id" id="zone_id" value="">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
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