@extends('layouts.default')

@section('content')
<!-- Credits -->
<div class="da-credits">
    <div class="da-credits__wrapper">
        <!-- Welcome -->
        <div class="da-credits__welcome">
            <div class="da-credits__welcome-title">
                Bem Vindo, <strong>Caio Felipe</strong>
            </div>
            <div class="da-credits__welcome-subtitle">
                Como você está hoje?
            </div>
        </div>
        <!-- End: Welcome -->

        <!-- Quickview -->
        <div class="da-quickview">
            <div class="da-quickview__item">
                <div class="da-quickview__item-total">10</div>
                <div class="da-quickview__item-description">
                    <span>Crédito Mensal</span>
                </div>
            </div>
            <div class="da-quickview__item">
                <div class="da-quickview__item-total">8</div>
                <div class="da-quickview__item-description">
                    <span>Crédito Anual</span>
                </div>
            </div>
            <div class="da-quickview__item">
                <div class="da-quickview__item-total">0</div>
                <div class="da-quickview__item-description">
                    <span>Crédito Vitalício</span>
                </div>
            </div>
        </div>
        <!-- End: Quickview -->
    </div>
</div>
<!-- End: Credits -->

<!-- Overview -->
<div class="da-overview">
    <div class="da-overview__card">
        <div class="da-overview__card-icon da-overview__card-icon--valid">
            <i class="flaticon2-check-mark"></i>
        </div>
        <div class="da-overview__card-description">
            <div class="da-overview__card-title">
                Clientes Válidos
            </div>
            <div class="da-overview__card-subtitle">
                12
            </div>
        </div>
    </div>
    <div class="da-overview__card">
        <div class="da-overview__card-icon da-overview__card-icon--online">
            <i class="flaticon2-wifi"></i>
        </div>
        <div class="da-overview__card-description">
            <div class="da-overview__card-title">
                Clientes Online
            </div>
            <div class="da-overview__card-subtitle">
                1
            </div>
        </div>
    </div>
    <div class="da-overview__card">
        <div class="da-overview__card-icon da-overview__card-icon--invalid">
            <i class="flaticon2-warning"></i>
        </div>
        <div class="da-overview__card-description">
            <div class="da-overview__card-title">
                Clientes Inválidos
            </div>
            <div class="da-overview__card-subtitle">
                2
            </div>
        </div>
    </div>
    <div class="da-overview__card">
        <div class="da-overview__card-icon da-overview__card-icon--total">
            <i class="flaticon-users"></i>
        </div>
        <div class="da-overview__card-description">
            <div class="da-overview__card-title">
                Total de Clientes
            </div>
            <div class="da-overview__card-subtitle">
                13
            </div>
        </div>
    </div>
</div>
<!-- End: Overview -->

<!-- Container -->
<div class="container-fluid">
    <div class="row">
        <div class="col col-xs-6">
            <!-- Portlet Chart -->
            <div class="da-portlet da-portlet--height-fluid">
                <div class="da-portlet__header">
                    <div class="da-portlet__header-label">
                        <h3 class="da-portlet__header-title">Aquisição de Clientes</h3>
                    </div>
                    <div class="da-portlet__header-toolbar">
                        <div class="da-portlet__header-toolbar-wrapper">
                            <div class="dropdown dropdown-inline">
                                <button type="button" class="btn btn-label-brand dropdown-toggle btn-bold" data-toggle="dropdown">Exportar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="da-portlet__body da-portlet__body--fluid">
                    <div class="da-widget-chart">
                        <div class="da-widget-chart__chart">
                            <canvas id="da_chart_clients_statistics" height="300"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End: Portlet Chart -->
        </div>
        <div class="col col-xs-6">
            <!-- Portlet About Panel -->
            <div class="da-portlet da-portlet--height-fluid">
                <div class="da-portlet__header">
                    <div class="da-portlet__header-label">
                        <h3 class="da-portlet__header-title">Sobre o Painel de Controle</h3>
                    </div>
                </div>
                <div class="da-portlet__body da-portlet__body--fluid">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col p-0 text-center">
                                <img src="{{ asset('media/about_panel.png') }}" alt="Sobre o Painel de Controle">
                            </div>
                            <div class="col text-justify">
                                <p>Neste painel você poderá visualizar dados sobre seus clientes e seu negócio. Acima estão localizadas as métricas sobre seus clientes,
                                    tais como: total de clientes com acesso válido (data), inválidos (expirados), online e o total de clientes que estão sob seus cuidados.</p>
                                <p>A esquerda temos há visualização do total de clientes recrutados no mês, este gráfico é atualizado constantemente de forma automâtica.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-center mt-4">
                                <p class="font-italic">Um forte abraço da diretoria e boas vendas. David Ricardo, CEO.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End: Portlet About Panel -->
        </div>
    </div>
</div>
<!-- End Container -->
@endsection
