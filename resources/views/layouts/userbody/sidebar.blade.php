<aside class="main-sidebar">
                <!-- sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="image pull-left">
                            <img src="{{ asset('assets/dist/img/avatar5.png') }}" class="img-circle" alt="User Image">
                        </div>
                        <div class="info">
                            <h4>Bienvenue</h4>
                            <p>Mr. {{ Auth::user()->name }}</p>
                        </div>
                    </div>
                   
                    <!-- sidebar menu -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="{{ route('dashboard') }}"><i class="fa fa-hospital-o"></i><span>Tableau de bord</span>
                            </a>
                        </li>

                        @if(auth()->user()->post_id == 9 || auth()->user()->post_id == 1  )
                        <li class="treeview addbassin listbassin">
                            <a href="#">
                                <i class="fa fa-sitemap"></i><span>Bassin</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                @if(auth()->user()->post_id == 9 )
                                <li class="addbassin"><a href="{{ route('bassin') }}">Ajouter Bassin </a></li>
                                @else
                                @endif
                                <li class="listbassin"><a href="{{ route('bassinlist') }}">Liste des Bassins</a></li>
                            </ul>
                        </li>

                        <li class="treeview addcommune listcommune">
                            <a href="#">
                                <i class="fa fa-sitemap"></i><span>Commune</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                @if(auth()->user()->post_id == 9 )
                                <li class="addcommune"><a href="{{ route('commune') }}">Ajouter Commune</a></li>
                                @else
                                @endif
                                <li class="listcommune"><a href="{{ route('communelist') }}">Liste des Communes</a></li>
                            </ul>
                        </li>

                        <li class="treeview addwilaya listwilaya">
                            <a href="#">
                                <i class="fa fa-sitemap"></i><span>Wilaya</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                @if(auth()->user()->post_id == 9 )
                                <li class="addwilaya"><a href="{{ route('wilaya') }}">Ajouter Wilaya </a></li>
                                @else
                                @endif
                                <li class="listwilaya"><a href="{{ route('wilayalist') }}">Liste des Wilaya</a></li>
                            </ul>
                        </li>

                        <li class="treeview addbloc listbloc">
                            <a href="#">
                                <i class="fa fa-sitemap"></i><span>Bloc</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                @if(auth()->user()->post_id == 9 )
                                <li class="addbloc"><a href="{{ route('bloc') }}">Ajouter Bloc</a></li>
                                @else
                                @endif
                                <li class="listbloc"><a href="{{ route('bloclist') }}">Liste des Blocs</a></li>
                            </ul>
                        </li>

                        <li class="treeview addzone listzone">
                            <a href="#">
                                <i class="fa fa-sitemap"></i><span>Zone</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                @if(auth()->user()->post_id == 9 )
                                <li class="addzone"><a href="{{ route('zone') }}">Ajouter Zone </a></li>
                                @else
                                @endif
                                <li class="listzone"><a href="{{ route('zonelist') }}">Liste des Zones</a></li>
                            </ul>
                        </li>

                        
                        <li class="treeview addmaterail listmaterail">
                            <a href="#">
                                <i class="fa fa-check-square-o"></i><span>Matérielle</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                @if(auth()->user()->post_id == 9 )
                                <li class="addmaterail"><a href="{{ route('materail') }}">Ajouter Matérielle </a></li>
                                @else
                                @endif
                                <li class="listmaterail"><a href="{{ route('materaillist') }}">Liste des matériels</a></li>
                            </ul>
                        </li>


                        <li class="treeview addbrigade listbrigade">
                            <a href="#">
                                <i class="fa fa-user"></i><span>Brigade Topographe</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                @if(auth()->user()->post_id == 9 )
                                <li class="addbrigade"><a href="{{ route('brigade') }}">Ajouter Brigade Topographe </a></li>
                                @else
                                @endif
                                <li class="listbrigade"><a href="{{ route('brigadelist') }}">Liste des Brigades Topographe</a></li>
                            </ul>
                        </li>

                        <li class="treeview addemploye listemploye">
                            <a href="#">
                                <i class="fa fa-user"></i><span>Employés</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                @if(auth()->user()->post_id == 9 )
                                <li class="addemploye"><a href="{{ route('employe') }}">Ajouter Employé</a></li>
                                @else
                                @endif
                                <li class="listemploye"><a href="{{ route('employelist') }}">Liste des Employés</a></li>
                            </ul>
                        </li>

                        @else
                        @endif

                        

                        


                        


                        

                        @if(auth()->user()->post_id == 2 || auth()->user()->post_id == 1)
                        

                        <li class="treeview addattachementfinal listattachementfinal">
                            <a href="#">
                                <i class="fa fa-list-alt"></i><span>Attachement Final</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                @if(auth()->user()->post_id == 2 )
                                <li class="addattachementfinal"><a href="{{ route('attachementfinal') }}">Ajouter Attachement Final</a></li>
                                @else
                                @endif
                                <li class="listattachementfinal"><a href="{{ route('attachementfinallist') }}">Liste des Attachements Final</a></li>
                            </ul>
                        </li>

                        <li class="treeview addfichecontart listfichecontart">
                            <a href="#">
                                <i class="fa fa-file-text"></i><span>Fiche Contart</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                @if(auth()->user()->post_id == 2 )
                                <li class="addfichecontart"><a href="{{ route('fiche') }}">Ajouter Fiche Contart</a></li>
                                @else
                                @endif
                                <li class="listfichecontart"><a href="{{ route('fichelist') }}">Liste des Fiches Contart</a></li>
                            </ul>
                        </li>

                        <li class="treeview addprojet projectlist">
                            <a href="#">
                                <i class="fa fa-list-alt"></i><span>Projet</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                @if(auth()->user()->post_id == 2 )
                                <li class="addprojet"><a href="{{ route('project') }}">Ajouter Projet</a></li>
                                @else
                                @endif
                                <li class="projectlist"><a href="{{ route('projectlist') }}">Liste des Projets</a></li>
                            </ul>
                        </li>

                        <li class="treeview addrapport rapportlist">
                            <a href="#">
                                <i class="fa fa-file-text"></i><span>Rapport Reconnaissance</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                @if(auth()->user()->post_id == 2 )
                                <li class="addrapport"><a href="{{ route('rapport') }}">Ajouter Rapport</a></li>
                                @else
                                @endif
                                <li class="rapportlist"><a href="{{ route('rapportlist') }}">Liste des Rapports</a></li>
                            </ul>
                        </li>

                        <li class="treeview addfichetechnique listfichetechnique">
                            <a href="#">
                                <i class="fa fa-file-text"></i><span>Fiche Technique</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                @if(auth()->user()->post_id == 2 )
                                <li class="addfichetechnique"><a href="{{ route('fichet') }}">Ajouter Fiche Technique</a></li>
                                @else
                                @endif
                                <li class="listfichetechnique"><a href="{{ route('fichetlist') }}">Liste des Fiches Technique</a></li>
                            </ul>
                        </li>
                        @else
                        @endif
                        
                                        
            </ul>
        </div> <!-- /.sidebar -->
    </aside>