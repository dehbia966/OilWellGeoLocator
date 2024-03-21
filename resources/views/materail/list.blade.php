@extends('user')
@section('content')
<?php 
$res="listmaterail"
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
                            <small>liste des matériels</small>
                            <ol class="breadcrumb hidden-xs">
                                <li><a href="index.html"><i class="pe-7s-home"></i> Matériel</a></li>
                                <li class="active">liste des matériels</li>
                            </ol>
                        </div>
                    </section>



<section class="content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">

                                    <div class="btn-group"> 
                                        <a class="btn btn-success" href="{{ route('materail') }}"> <i class="fa fa-plus"></i>  Ajouter Matérielle</a>  
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                     

                          </div>
                          <div class="table-responsive">
                            <table  id="myTable" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Type</th>
                                        <th>Brigade Topographe</th>
                                        <th>Code</th>
                                        <th>Description</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                    
                            
                            
                    
        @foreach($materails as $materail)        
        <tr >
       <td>{{ $materail->type }}</td>
       <td>
         @foreach($brigades as $brigade)
            @if($materail->brigade_id==$brigade->id )
                {{ $brigade->ref_brigade }}
            @endif
          @endforeach
       </td>
       <td>{{ $materail->code }}</td>
       <td>{{ $materail->description }}</td>
       <td>
        
        
        @if(auth()->user()->post_id == 9 )
        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal" data-type="{{ $materail->type }}" data-code="{{ $materail->code }}" data-description="{{ $materail->description }}" data-brigade_id="{{ $materail->brigade_id }}" data-id="{{ $materail->id }}" ><i class="fa fa-pencil" aria-hidden="true"></i></button>
        
        <a class="btn btn-danger btn-sm"  title="Delete" href="{{ url('materail/delete/'.$materail->id) }}"  data-toggle="tooltip" data-placement="right" onclick="return confirm('are you sure to delete');"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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










<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title" id="exampleModalLabel">Modifier Matérielle</h4>
      </div>
      
        <form action="{{ url('materail/update') }}" method="POST" class="col-sm-12">
                              @csrf

                                <div class="form-group">
                                  <br>
                                    <label>Type<label class="text-danger">*</label></label>
                                    <input type="hidden" name="materail_id" id="materail_id" value="">
                                    <input type="text" class="form-control" id="type" name="type" placeholder="Type" required>

                                    <label>Brigade Topographe<label class="text-danger">*</label></label>
                                    <select class="form-control" id="brigade_id" name="brigade_id"  >
                                      
                                    
                                        <option value="0">-sélectionner-</option>
                                                    @foreach($brigades as $brigade)
                                                    <option value="{{ $brigade->id }}">{{ $brigade->ref_brigade }}</option>
                                                    @endforeach
                                    </select>

                                    <label>Code<label class="text-danger">*</label></label>
                                    <input type="text" class="form-control" id="code" name="code" placeholder="Code" required>
                                    
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter description..."></textarea>
                                </div>                                   
                                  <div class="reset-button">
                                    <button type="submit" id="save" class="btn btn-success" onclick="return confirm('are you sure to save');">Save</button>
                                    
                                    <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                                     
                                 </div>
                             </form>
      
      <div class="modal-footer">
        
        
      </div>
    </div>
  </div>
</div>





                   












@endsection