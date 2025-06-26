@extends('admin.master')
@section('title','Dashboard')

@section('content')
    <div class="container-fluid">

        <div class="panel shadow">
            <div class="header">
                <h2 class="title"><i class="fas fa-chart-bar"></i> Estadísticas Rápidas</h2>
            </div>
        </div>

        <div class="row mtop16">

            <div class="col-md-4">
                <div class="panel shadow">
                    <div class="header">
                        <h2 class="title"><i class="fas fa-users"></i><strong> Citas Agendadas</strong></h2>
                    </div>
                    <div class="inside">
                        <div class="big_count">
                            {{ $citas_d }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel shadow">
                    <div class="header">
                        <h2 class="title"><i class="fas fa-users"></i><strong> Citas en Atención</strong></h2>
                    </div>
                    <div class="inside">
                        <div class="big_count">
                            {{ $citas_d_aten }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel shadow">
                    <div class="header">
                        <h2 class="title"><i class="fas fa-users"></i><strong> Citas Ausentes</strong></h2>
                    </div>
                    <div class="inside">
                        <div class="big_count">
                            {{ $citas_d_aus }}
                        </div>
                    </div>
                </div>
            </div>

            
        </div>  

        <div class="panel shadow">
            <div class="header">
                <h2 class="title"><i class="fas fa-chart-bar"></i> Noticias o Alertas del Sistema</h2>
            </div>
        </div>

        <div class="row mtop16">

            <div class="col-md-12">
                <div class="panel shadow">
                    <div class="header">
                        <h2 class="title"><i class="fas fa-news"></i><strong> Citas Agendadas</strong></h2>
                    </div>
                    <div class="inside">
                        <p>
                            <ul>
                                <li>
                                    Para un mejor control de los modulos de citas, fueron separadas. 
                                </li>
                                <li>
                                    El cita toma en cuenta los dias festivos, la jefatura del departamento de Radiologia sera la encargada de asignar los mismos.
                                    Tomar en cuenta que las unicas citas validas para estos dias son de Hospitalización o Emergencia.
                                </li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>



            
        </div>  

    </div>

@endsection