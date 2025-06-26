@extends('admin.master')
@section('title','Dashboard')

@section('content')
    <div class="container-fluid">
        @if(kvfj(Auth::user()->permissions, 'dashboard_small_stats'))
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
        @endif
    </div>

@endsection