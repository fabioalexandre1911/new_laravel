@extends('adminlte::page')
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
{{-- Extend and customize the browser title --}}

@section('title')
    {{ config('adminlte.title') }}
    @hasSection('subtitle') | @yield('subtitle') @endif
@stop

{{-- Extend and customize the page content header --}}

@section('content_header')
    @hasSection('content_header_title')
        <h1 class="text-muted">
            @yield('content_header_title')

            @hasSection('content_header_subtitle')
                <small class="text-dark">
                    <i class="fas fa-xs fa-angle-right text-muted"></i>
                    @yield('content_header_subtitle')
                </small>
            @endif
        </h1>
    @endif
@stop

{{-- Rename section content to content_body --}}

@section('content')

<div> <!-- Color System -->
    <div class="row">
        <div class="col-lg-3 col-6">
        
        <div class="small-box bg-info">
        <div class="inner">
        <h3>Cadastro</h3>
        <p>De Produtos</p>
        </div>
        <div class="icon">
        <i class="ion ion-bag"></i>
        </div>
        <a href="#" class="small-box-footer">Clique Aqui <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        
        <div class="col-lg-3 col-6">
        
        <div class="small-box bg-success">
        <div class="inner">
        <h3>Cadastro</h3>
        {{-- <sup style="font-size: 20px">%</sup> --}}
        <p>De Clientes</p>
        </div>
        <div class="icon">
        <i class="ion ion-person-add"></i>
        </div>
        <a href="#" class="small-box-footer">Clique Aqui <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        
        <div class="col-lg-3 col-6">
        
        <div class="small-box bg-warning">
        <div class="inner">
        <h3>Exibir </h3>
        <p>Vendas</p>
        </div>
        <div class="icon">
            <i class="ion ion-stats-bars"></i>
        </div>
        <a href="#" class="small-box-footer">Clique Aqui <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        
        <div class="col-lg-3 col-6">
        
        <div class="small-box bg-danger">
        <div class="inner">
        <h3>Suporte</h3>
        <p>Ao Cliente</p>
        </div>
        <div class="icon">
        <i class="ion ion-pie-graph"></i>
        </div>
        <a href="#" class="small-box-footer">Clique Aqui <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        
        </div>
</div>

    @yield('content_body')
@stop

{{-- Create a common footer --}}

@section('footer')
    <div class="float-right">
        Version: {{ config('app.version', '1.0.0') }}
    </div>

    <strong>
        <a href="{{ config('app.company_url', '#') }}">
            {{ config('app.company_name', 'My company') }}
        </a>
    </strong>
@stop

{{-- Add common Javascript/Jquery code --}}

@push('js')
<script>

    $(document).ready(function() {
        // Add your common script logic here...
    });

</script>
@endpush

{{-- Add common CSS customizations --}}

@push('css')
<style type="text/css">

    {{-- You can add AdminLTE customizations here --}}
    /*
    .card-header {
        border-bottom: none;
    }
    .card-title {
        font-weight: 600;
    }
    */

</style>
@endpush