@extends('user')
@section('content')
<?php 
$res="listemploye"
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
                            <h1>Employé</h1>
                            <small>liste des employés</small>
                            <ol class="breadcrumb hidden-xs">
                                <li><a href="index.html"><i class="pe-7s-home"></i> Employé</a></li>
                                <li class="active">liste des employés</li>
                            </ol>
                        </div>
                    </section>



<section class="content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">

                                    <div class="btn-group"> 
                                        <a class="btn btn-success" href="{{ route('employe') }}"> <i class="fa fa-plus"></i>  Ajouter employé</a>  
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                     

                          </div>
                          <div class="table-responsive">
                            <table  id="myTable" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Nom et prénom </th>
                                        <th>email</th>
                                        <th>Mot De Pass</th>
                                        <th>num</th>
                                        <th>Post</th>
                                        <th>address</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                    
                            
                            
                    
        @foreach($users as $user)        
        <tr >
       <td>{{ $user->name }}</td>
       <td>{{ $user->email }}</td>
       <td>**********</td>
       <td>{{ $user->num }}</td>
       <td>
        @if($user->post_id == 1)
        Directeur
        @elseif($user->post_id == 2)
        Chef De Projet
        @elseif($user->post_id == 3)
        ingénieur Topoghraphe
        @elseif($user->post_id == 4)
        Superviseur Topoghraphe
        @elseif($user->post_id == 5)
        technicien Topoghraphe
        @elseif($user->post_id == 6)
        Aide Topoghraphe
        @elseif($user->post_id == 7)
        Port Mire
        @elseif($user->post_id == 8)
        Chauffeur
        @elseif($user->post_id == 9)
        administrateur
        @endif
       </td>
       <td>{{ $user->address }}</td>
       <td>
        @if(auth()->user()->post_id == 9 )
        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModa13" data-name="{{ $user->name }}" data-email="{{ $user->email }}" data-num="{{ $user->num }}" data-post_id="{{ $user->post_id }}" data-address="{{ $user->address }}"  data-id="{{ $user->id }}" ><i class="fa fa-pencil" aria-hidden="true"></i></button>
        
        
        
        <a class="btn btn-danger btn-sm"  title="Delete" href="{{ url('employee/delete/'.$user->id) }}"  data-toggle="tooltip" data-placement="right" onclick="return confirm('are you sure to delete');"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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










<div class="modal fade" id="exampleModa13" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title" id="exampleModalLabel">Modifier Commune</h4>
      </div>
      
        <form action="{{ url('employee/update') }}" method="POST" class="col-sm-12">
                              @csrf

                                <div class="form-group">
                                  <br>
                                    <label>Nom et prénom<label class="text-danger">*</label></label>
                                    <input type="hidden" name="user_id" id="user_id" value="">

                                    <input type="text" class="form-control" id="name" name="name" placeholder="name" required>

                                    <label>email<label class="text-danger">*</label></label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="email" required>

                                    <label>num<label class="text-danger">*</label></label>
                                    <input type="text" class="form-control" id="num" name="num" placeholder="num" required>

                                    <label>Post <label class="text-danger">*</label></label>
                                    <select class="form-control" id="post_id" name="post_id"  >
                                      
                                    
                                        <option value="1">Directeur</option>
                                                    <option value="2">Chef De Projet</option>
                                                    <option value="3">ingénieur Topoghraphe</option>
                                                    <option value="4">Superviseur Topoghraphe</option>
                                                    <option value="5">technicien Topoghraphe</option>
                                                    <option value="6">Aide Topoghraphe</option>
                                                    <option value="7">Port Mire</option>
                                                    <option value="8">Chauffeur</option>
                                                    <option value="9">administrateur</option>
                                    </select>

                                    <label>address<label class="text-danger">*</label></label>
                                    <input type="text" class="form-control" id="address" name="address" placeholder="address" required>
                                    
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