<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>PFE 2021</title>

    
   
   <!-- Start Global Mandatory Style
   =====================================================================-->
   <!-- jquery-ui css -->
   <link href="{{ asset('assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css') }}" rel="stylesheet" type="text/css"/>
   <!-- Bootstrap -->
   <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
   <!-- Bootstrap rtl -->
   <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
   <!-- Lobipanel css -->
   <link href="{{ asset('assets/plugins/lobipanel/lobipanel.min.css') }}" rel="stylesheet" type="text/css"/>
   <!-- Pace css -->
   <link href="{{ asset('assets/plugins/pace/flash.css') }}" rel="stylesheet" type="text/css"/>
   <!-- Font Awesome -->
   <link href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>
   <!-- Pe-icon -->
   <link href="{{ asset('assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}" rel="stylesheet" type="text/css"/>
   <!-- Themify icons -->
   <link href="{{ asset('assets/themify-icons/themify-icons.css') }}" rel="stylesheet" type="text/css"/>
        <!-- End Global Mandatory Style
        =====================================================================-->
        <!-- Start page Label Plugins 
        =====================================================================-->
        <!-- Toastr css -->
        <link href="{{ asset('assets/plugins/toastr/toastr.css') }}" rel="stylesheet" type="text/css"/>
        <!-- Emojionearea -->
        <link href="{{ asset('assets/plugins/emojionearea/emojionearea.min.css') }}" rel="stylesheet" type="text/css"/>
        <!-- Monthly css -->
        <link href="{{ asset('assets/plugins/monthly/monthly.css') }}" rel="stylesheet" type="text/css"/>
        <!-- End page Label Plugins 
        =====================================================================-->
        <!-- Start Theme Layout Style
        =====================================================================-->
        <!-- Theme style -->
        <link href="{{ asset('assets/dist/css/stylehealth.min.css') }}" rel="stylesheet" type="text/css"/>
        <!--<link href="assets/dist/css/stylehealth-rtl.css" rel="stylesheet" type="text/css"/>-->
        <!-- End Theme Layout Style
        =====================================================================-->


        <!-- filter in table
        =====================================================================-->
        <link href="{{ asset('assets/table/table.css') }}" rel="stylesheet" type="text/css"/>




        


    </head>
    <body class="hold-transition sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">
            @include('layouts.userbody.navbar')
            <!-- =============================================== -->
            <!-- Left side column. contains the sidebar -->
            @include('layouts.userbody.sidebar')
            <!-- =============================================== -->
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->

                
            <!-- Main content -->
            @yield('content')     
            <!-- /.content -->

            </div> <!-- /.content-wrapper -->

        </div> <!-- ./wrapper -->
        
         <!-- Start Core Plugins
        =====================================================================-->
        <!-- jQuery -->
        <script src="{{ asset('assets/plugins/jQuery/jquery-1.12.4.min.js') }}" type="text/javascript"></script>
        <!-- jquery-ui --> 
        <script src="{{ asset('assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js') }}" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <!-- lobipanel -->
        <script src="{{ asset('assets/plugins/lobipanel/lobipanel.min.js') }}" type="text/javascript"></script>
        <!-- Pace js -->
        <script src="{{ asset('assets/plugins/pace/pace.min.js') }}" type="text/javascript"></script>
        <!-- SlimScroll -->
        <script src="{{ asset('assets/plugins/slimScroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
        <!-- FastClick -->
        <script src="{{ asset('assets/plugins/fastclick/fastclick.min.js') }}" type="text/javascript"></script>
        <!-- Hadmin frame -->
        <script src="{{ asset('assets/dist/js/custom1.js') }}" type="text/javascript"></script>
        <!-- End Core Plugins
        =====================================================================-->
        <!-- Start Page Lavel Plugins
        =====================================================================-->
        <!-- Toastr js -->
        <script src="{{ asset('assets/plugins/toastr/toastr.min.js') }}" type="text/javascript"></script>
        <!-- Sparkline js -->
        <script src="{{ asset('assets/plugins/sparkline/sparkline.min.js') }}" type="text/javascript"></script>
        <!-- Data maps js -->
        <script src="{{ asset('assets/plugins/datamaps/d3.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/datamaps/topojson.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/datamaps/datamaps.all.min.js') }}" type="text/javascript"></script>
        <!-- Counter js -->
        <script src="{{ asset('assets/plugins/counterup/waypoints.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/counterup/jquery.counterup.min.js') }}" type="text/javascript"></script>
        
        <!-- Monthly js -->
        <script src="{{ asset('assets/plugins/monthly/monthly.js') }}" type="text/javascript"></script>
        <!-- Data maps -->
        <script src="{{ asset('assets/plugins/datamaps/d3.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/datamaps/topojson.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/datamaps/datamaps.all.min.js') }}" type="text/javascript"></script>
      
        <!-- End Page Lavel Plugins
        =====================================================================-->
        <!-- Start Theme label Script
        =====================================================================-->

        
        <!-- Dashboard js -->
        <script src="{{ asset('assets/dist/js/custom.js') }}" type="text/javascript"></script>

        <!-- filter in table
        =====================================================================-->
        
        <script src="{{ asset('assets/table/table.min.js') }}" type="text/javascript"></script>

        



        <!-- active sidebar links -->
        <script>$(".<?php echo $res;?>").addClass("active");</script>

        @include('layouts.userbody.notification')


        <script>
            $(document).ready( function () {
    $('#myTable').DataTable();
} );
        </script>


        <script type="text/javascript">
            $(document).ready(function(){
            $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget); // Button that triggered the modal
  var type = button.data('type');
  var brigade_id = button.data('brigade_id');
  var code = button.data('code');
  var description = button.data('description');
  var id = button.data('id'); // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this);
  
  modal.find('#type').val(type);
  modal.find('#brigade_id').val(brigade_id);
  modal.find('#code').val(code);
  modal.find('#description').val(description);
  modal.find('#materail_id').val(id);
  //modal.find('#description').val(id);
});
            });
        </script>


        <script type="text/javascript">
            $(document).ready(function(){
            $('#exampleModa2').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget); // Button that triggered the modal
  var name = button.data('name');
  var code = button.data('code');
  var id = button.data('id'); // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this);
  
  modal.find('#name').val(name);
  modal.find('#code').val(code);
  modal.find('#bassin_id').val(id);
  //modal.find('#description').val(id);
});
            });
        </script>



<script type="text/javascript">
            $(document).ready(function(){
            $('#exampleModa3').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget); // Button that triggered the modal
  var name = button.data('name');
  var code = button.data('code');
  var id = button.data('id'); // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this);
  
  modal.find('#name').val(name);
  modal.find('#code').val(code);
  modal.find('#wilaya_id').val(id);
  
});
            });
        </script>



<script type="text/javascript">
            $(document).ready(function(){
            $('#exampleModa4').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget); // Button that triggered the modal
  var name = button.data('name');
  var code = button.data('code');
  var id = button.data('id'); // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this);
  
  modal.find('#name').val(name);
  modal.find('#code').val(code);
  modal.find('#zone_id').val(id);
  
});
            });
        </script>



<script type="text/javascript">
            $(document).ready(function(){
            $('#exampleModa5').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget); // Button that triggered the modal
  var name = button.data('name');
  var wilaya_id= button.data('wilaya_id');
  var code = button.data('code');
  var id = button.data('id'); // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this);
  
  modal.find('#name').val(name);
  modal.find('#wilaya_id').val(wilaya_id);
  modal.find('#code').val(code);
  modal.find('#commune_id').val(id);
  
});
            });
        </script>



<script type="text/javascript">
            $(document).ready(function(){
            $('#exampleModa6').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget); // Button that triggered the modal
  var name = button.data('name');
  var bassin_id = button.data('bassin_id');
  var code = button.data('code');
  var id = button.data('id'); // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this);
  
  modal.find('#name').val(name);
  modal.find('#bassin_id').val(bassin_id);
  modal.find('#code').val(code);
  modal.find('#bloc_id').val(id);
  
});
            });
        </script>


<script type="text/javascript">
            $(document).ready(function(){
            $('#exampleModa7').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget); // Button that triggered the modal
  var ref_att = button.data('ref_att');
  var fiche_id = button.data('fiche_id');
  var project_id = button.data('project_id');
  var date_att = button.data('date_att');
  var att_signe = button.data('att_signe');
  var montant_global = button.data('montant_global');
  var description = button.data('description');
  var id = button.data('id'); // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this);
  
  modal.find('#ref_att').val(ref_att);
  modal.find('#fiche_id').val(fiche_id);
  modal.find('#project_id').val(project_id);
  modal.find('#date_att').val(date_att);
  modal.find('#att_signe').val(att_signe);
  modal.find('#montant_global').val(montant_global);
  modal.find('#description').val(description);
  modal.find('#attachementfinal_id').val(id);
});
            });
        </script>  


<script type="text/javascript">
            $(document).ready(function(){
            $('#exampleModa8').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget); // Button that triggered the modal
  var sigle = button.data('sigle');
  var name = button.data('name');
  var rapport_id = button.data('rapport_id');
  var zone_id = button.data('zone_id');
  var bloc_id = button.data('bloc_id');
  var commune_id = button.data('commune_id');
  var status = button.data('status');
  var date_c = button.data('date_c');
  var type = button.data('type');
  var id = button.data('id'); // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this);
  
  modal.find('#sigle').val(sigle);
  modal.find('#name').val(name);
  modal.find('#rapport_id').val(rapport_id);
  modal.find('#zone_id').val(zone_id);
  modal.find('#bloc_id').val(bloc_id);
  modal.find('#commune_id').val(commune_id);
  modal.find('#status').val(status);
  modal.find('#date_c').val(date_c);
  modal.find('#type').val(type);
  modal.find('#projet_id').val(id);
});
            });
        </script>  

<script type="text/javascript">
            $(document).ready(function(){
            $('#exampleModa9').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget); // Button that triggered the modal
  var ref_brigade = button.data('ref_brigade');
  var material_id = button.data('material_id');
  var user_id = button.data('user_id');
  var project_id = button.data('project_id');
  var site_hebergement = button.data('site_hebergement');
  var date_sorti = button.data('date_sorti');
  var date_retour = button.data('date_retour');
  var date_inspection = button.data('date_inspection');
  var id = button.data('id'); // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this);
  
  modal.find('#ref_brigade').val(ref_brigade);
  modal.find('#material_id').val(material_id);
  modal.find('#user_id').val(user_id);
  modal.find('#project_id').val(project_id);
  modal.find('#site_hebergement').val(site_hebergement);
  modal.find('#date_sorti').val(date_sorti);
  modal.find('#date_retour').val(date_retour);
  modal.find('#date_inspection').val(date_inspection);
  modal.find('#brigade_id').val(id);
});
            });
        </script> 


<script type="text/javascript">
            $(document).ready(function(){
            $('#exampleModa10').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget); // Button that triggered the modal
  var ref_rapport = button.data('ref_rapport');
  var project_id = button.data('project_id');
  var date_recp_imp = button.data('date_recp_imp');
  var coordonne_x = button.data('coordonne_x');
  var coordonne_y = button.data('coordonne_y');
  var coordonne_z = button.data('coordonne_z');
  var utm_x = button.data('utm_x');
  var utm_y = button.data('utm_y');
  var description = button.data('description');
  var id = button.data('id'); // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this);
  
  modal.find('#ref_rapport').val(ref_rapport);
  modal.find('#project_id').val(project_id);
  modal.find('#date_recp_imp').val(date_recp_imp);
  modal.find('#coordonne_x').val(coordonne_x);
  modal.find('#coordonne_y').val(coordonne_y);
  modal.find('#coordonne_z').val(coordonne_z);
  modal.find('#utm_x').val(utm_x);
  modal.find('#utm_y').val(utm_y);
  modal.find('#description').val(description);
  modal.find('#rapport_id').val(id);
});
            });
        </script> 


<script type="text/javascript">
            $(document).ready(function(){
            $('#exampleModa11').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget); // Button that triggered the modal
  var ref = button.data('ref');
  var date_debut = button.data('date_debut');
  var date_fin = button.data('date_fin');
  var montant_global_implantation = button.data('montant_global_implantation'); 
  var id = button.data('id'); // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this);
  
  modal.find('#ref').val(ref);
  modal.find('#date_debut').val(date_debut);
  modal.find('#date_fin').val(date_fin);
  modal.find('#montant_global_implantation').val(montant_global_implantation);
  modal.find('#fiche_id').val(id);
});
            });
        </script>



<script type="text/javascript">
            $(document).ready(function(){
            $('#exampleModa12').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget); // Button that triggered the modal
  var ref_dos_tech = button.data('ref_dos_tech');
  var project_id = button.data('project_id');
  var date_recept_ord = button.data('date_recept_ord');
  var date_envoi_odt = button.data('date_envoi_odt');
  var date_envoi_ods = button.data('date_envoi_ods');
  var date_fin_ods = button.data('date_fin_ods');
  var ref_ods = button.data('ref_ods');
  var ref_odt = button.data('ref_odt');
  var laltitude = button.data('laltitude');
  var longitude = button.data('longitude');
  var ref_sis = button.data('ref_sis');
  var pos_sis = button.data('pos_sis');
  var orgi_si = button.data('orgi_si');
  var paramatre_trans = button.data('paramatre_trans');
  var altemetric = button.data('altemetric');

  var id = button.data('id'); // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this);
  
  modal.find('#ref_dos_tech').val(ref_dos_tech);
  modal.find('#project_id').val(project_id);
  modal.find('#date_recept_ord').val(date_recept_ord);
  modal.find('#date_envoi_odt').val(date_envoi_odt);
  modal.find('#date_envoi_ods').val(date_envoi_ods);
  modal.find('#date_fin_ods').val(date_fin_ods);
  modal.find('#ref_ods').val(ref_ods);
  modal.find('#ref_odt').val(ref_odt);
  modal.find('#laltitude').val(laltitude);
  modal.find('#longitude').val(longitude);
  modal.find('#ref_sis').val(ref_sis);
  modal.find('#pos_sis').val(pos_sis);
  modal.find('#orgi_si').val(orgi_si);
  modal.find('#paramatre_trans').val(paramatre_trans);
  modal.find('#altemetric').val(altemetric);

  modal.find('#fiche_id').val(id);
});
            });
        </script>


<script type="text/javascript">
            $(document).ready(function(){
            $('#exampleModa13').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget); // Button that triggered the modal
  var name = button.data('name');
  var email = button.data('email');
  var num = button.data('num');
  var post_id = button.data('post_id'); 
  var address = button.data('address'); 
  var id = button.data('id'); // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this);
  
  modal.find('#name').val(name);
  modal.find('#email').val(email);
  modal.find('#num').val(num);
  modal.find('#post_id').val(post_id);
  modal.find('#address').val(address);
  modal.find('#user_id').val(id);
});
            });
        </script>  






        <!-- End Theme label Script
        =====================================================================-->
         <script>
                "use strict"; // Start of use strict
                // notification
                

                //counter
                $('.count-number').counterUp({
                    delay: 10,
                    time: 500
                });

                

        

                      //radar chart
                var ctx = document.getElementById("radarChart");
                var myChart = new Chart(ctx, {
                    type: 'radar',
                    data: {
                        labels: [["Eating", "Dinner"], ["Drinking", "Water"], "Sleeping", ["Designing", "Graphics"], "Coding", "Cycling", "Running"],
                        datasets: [
                            {
                                label: "My First dataset",
                                data: [65, 59, 66, 45, 56, 55, 40],
                                borderColor: "#00968866",
                                borderWidth: "1",
                                backgroundColor: "rgba(0, 150, 136, 0.35)"
                            },
                            {
                                label: "My Second dataset",
                                data: [28, 12, 40, 19, 63, 27, 87],
                                borderColor: "rgba(55, 160, 0, 0.7",
                                borderWidth: "1",
                                backgroundColor: "rgba(0, 150, 136, 0.35)"
                            }
                        ]
                    },
                    options: {
                        legend: {
                            position: 'top'
                        },
                        scale: {
                            ticks: {
                                beginAtZero: true
                            }
                        }
                    }
                });

                // Message
                $('.message_inner').slimScroll({
                    size: '3px',
                    height: '320px'
                });

                //emojionearea
                $(".emojionearea").emojioneArea({
                    pickerPosition: "top",
                    tonesStyle: "radio"
                });

                //monthly calender
                $('#m_calendar').monthly({
                    mode: 'event',
                    //jsonUrl: 'events.json',
                    //dataType: 'json'
                    xmlUrl: 'events.xml'
                });
            
            
             //line chart
                var ctx = document.getElementById("lineChart");
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                        datasets: [
                            {
                                label: "My First dataset",
                                borderColor: "rgba(0,0,0,.09)",
                                borderWidth: "1",
                                backgroundColor: "rgba(0,0,0,.07)",
                                data: [22, 44, 67, 43, 76, 45, 12, 45, 65, 55, 42, 61, 73]
                            },
                            {
                                label: "My Second dataset",
                                borderColor: "#009688",
                                borderWidth: "1",
                                backgroundColor: "#009688",
                                pointHighlightStroke: "#009688",
                                data: [16, 32, 18, 26, 42, 33, 44, 24, 19, 16, 67, 71, 65]
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        tooltips: {
                            mode: 'index',
                            intersect: false
                        },
                        hover: {
                            mode: 'nearest',
                            intersect: true
                        }

                    }
                });


        </script>

        <script type="text/javascript">

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#patient_image").change(function(){
    readURL(this);
}); 

</script>







    </body>
</html>


