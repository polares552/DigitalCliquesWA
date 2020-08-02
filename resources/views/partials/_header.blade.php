<!-- OBS: Caso deseje utilizar elementos tanto no lado esquerdo quando no direito alterar o "justify-content" -->
<header class="da-header da-header--shadowbottom">
    <!-- Right Options -->
    <div class="da-header__topbar">
        <!-- Search -->
        <div class="da-header__topbar-item da-header__topbar-item--search dropdown">
            <div class="da-header__topbar-wrapper" data-toggle="dropdown">
                <span class="da-header__topbar-icon">
                    <i class="flaticon2-search-1"></i>
                </span>
            </div>
            <div class="dropdown-menu" x-placement="bottom-end">
                Busca Geral
            </div>
        </div>
        <!-- End: Search -->

        <!-- Notification -->
        <div class="da-header__topbar-item dropdown">
            <div class="da-header__topbar-wrapper" data-toggle="dropdown">
                <span class="da-header__topbar-icon">
                    <i class="flaticon2-bell-alarm-symbol"></i>
                    <span class="da-badge da-badge--dot da-badge--notify da-badge--sm da-badge--brand"></span>
                </span>
            </div>
            <div class="dropdown-menu dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-fit" x-placement="bottom-end">
                Notificação
            </div>
        </div>
        <!-- End: Notification -->

        <!-- User -->
        <div class="da-header__topbar-item da-header__topbar-item--user">
            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" aria-expanded="false">

                <div class="da-header__topbar-user rounded">
                    <span class="da-header__topbar-welcome">Olá,</span>
                    <span class="da-header__topbar-username">Caio Felipe</span>
                    <img alt="Caio Felipe" src="{{ asset('media/avatar.jpg')}}">
                </div>
            </div>
            <div class="dropdown-menu">
                Usuário
            </div>
        </div>
        <!-- End: User -->

    </div>
    <!-- End: Right Options -->
</header>
