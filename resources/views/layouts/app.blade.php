@extends('user')


@section('content')

<section class="content-header">
                     <form action="#" method="get" class="sidebar-form search-box pull-right hidden-md hidden-lg hidden-sm">
                            <div class="input-group">
                            
                                
                            </div>
                        </form>   
                    <div class="header-icon">
                        <i class="fa fa-tachometer"></i>
                    </div>
                    <div class="header-title">
                        <h1> Tableau de bord</h1>
                        <small> Fonctionnalités du tableau de bord</small>
                        <ol class="breadcrumb hidden-xs">
                            <li><a href="index.html"><i class="pe-7s-home"></i> Domicile</a></li>
                            <li class="active">Tableau de bord</li>
                        </ol>
                    </div>
                </section>

<?php 
$res="";

?>

            <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                            <div class="panel panel-bd cardbox">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number">{{ $role1 }}</span>
                                        </h2>
                                    </div>
                                    <div class="items pull-left">
                                        <i class="fa fa-users fa-2x"></i>
                                        <h4>Directeur </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                            <div class="panel panel-bd cardbox">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number">{{ $role2 }}</span>
                                        </h2>
                                    </div>
                                    <div class="items pull-left">
                                        <i class="fa fa-users fa-2x"></i>
                                        <h4>Chef De Projet</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                            <div class="panel panel-bd cardbox">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number">{{ $role3 }}</span>
                                        </h2>
                                    </div>
                                    <div class="items pull-left">
                                        <i class="fa fa-user-circle fa-2x"></i>
                                        <h4>ingénieur Topoghraphe</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                            <div class="panel panel-bd cardbox">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number">{{ $role4 }}</span>
                                        </h2>
                                    </div>
                                    <div class="items pull-left">
                                        <i class="fa fa-users fa-2x"></i>
                                        <h4>Superviseur Topoghraphe</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                            <div class="panel panel-bd cardbox">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number">{{ $role5 }}</span>
                                        </h2>
                                    </div>
                                    <div class="items pull-left">
                                        <i class="fa fa-user-circle fa-2x"></i>
                                        <h4> technicien Topoghraphe</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                            <div class="panel panel-bd cardbox">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number">{{ $role6 }}</span>
                                        </h2>
                                    </div>
                                    <div class="items pull-left">
                                    <i class="fa fa-users fa-2x"></i>
                                    <h4>Aide Topoghraphe</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                            <div class="panel panel-bd cardbox">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number">{{ $role7 }}</span>
                                        </h2>
                                    </div>
                                    <div class="items pull-left">
                                    <i class="fa fa-users fa-2x"></i>
                                    <h4>Port Mire</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                            <div class="panel panel-bd cardbox">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number">{{ $role8 }}</span>
                                        </h2>
                                    </div>
                                    <div class="items pull-left">
                                    <i class="fa fa-users fa-2x"></i>
                                    <h4>Chauffeur</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                            <div class="panel panel-bd cardbox">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number">{{ $role9 }}</span>
                                        </h2>
                                    </div>
                                    <div class="items pull-left">
                                    <i class="fa fa-users fa-2x"></i>
                                    <h4>administrateur</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="row">
                        
                        
                        <!-- Bar Chart -->
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="panel panel-bd lobidisable">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Bar chart</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <canvas id="barChart" height="200"></canvas>
                                </div>
                            </div>
                        </div>


                        @php
                        $i = 0 ;
                        @endphp
                        @foreach($rapports as $rapport) 
                        <div class="col-xs-12 col-sm-6">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Rapport ref : {{ $rapport->ref_rapport }}</h4>
                                        <h4>project : 
                                            @foreach($projects as $project)
                                            @if($rapport->project_id==$project->id )
                                            {{ $project->name }}
                                            @endif
                                            @endforeach
                                        </h4>
                                        <h4>Rapport date_recp_imp : {{ $rapport->date_recp_imp }}</h4>
                                        
                                        
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div id="map{{$i}}" class="embed-container">

                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        @php
                        $i++ ;
                        @endphp
        

                        @endforeach

                        
   
    

    
    
                         
                        
                        
                    </div> <!-- /.row -->
                </section> <!-- /.content -->

                <!-- Async script executes immediately and must be after any DOM elements used in callback. -->

                

    


               <!-- ChartJs JavaScript -->
        <script src="{{ asset('assets/plugins/chartJs/Chart.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/emojionearea/emojionearea.min.js') }}" type="text/javascript"></script>

        <!-- ./wrapper -->
        <script type="text/javascript">
          //bar chart
            
                var ctx = document.getElementById("barChart");
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: <?php echo json_encode($labels); ?>,
                        datasets: [
                            {
                                label: "montant_global",
                                data:<?php echo json_encode($montant); ?> ,
                                borderColor: "#009688",
                                borderWidth: "0",
                                backgroundColor: "#009688"
                            },
                            
                        ]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                        }
                    }
                });
          
        </script>

<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcQvLiLSlYYHxoQppOvQa_qxQoSK_YC18&callback=initMap&libraries=&v=weekly"
      async
    ></script>

                        <script type="text/javascript">
        // Initialize and add the map
function initMap() {
  // The location of Uluru
  
  var xy = (<?php echo json_encode($rapportsx); ?>);
  
  
  var uluru = [];
  var map = [];
  var marker = [];

  for (var i = 0 ; i < (xy.length); i=i+2) {
      
      uluru[i/2] = { lat: parseFloat(xy[i]), lng:parseFloat(xy[i+1])  };
      map[i/2] = new google.maps.Map(document.getElementById("map"+i/2), {
        zoom: 3,
        center: uluru[i/2],
    });
      marker[i/2] = new google.maps.Marker({
    position: uluru[i/2],
    map: map[i/2],
  });
  }

  
  
 
  
  
}
    </script>

@endsection







        
        