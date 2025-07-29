<header class="bg-red-600 px-3 py-4">
    <div class="max-w-screen-xl mx-auto flex flex-wrap items-center justify-between">
        <!-- Logo e botão mobile -->
        <div class="flex items-center gap-3 w-full md:w-auto justify-between md:justify-start">
            <a href="{{ url('/') }}" class="logo">
                <img src="{{ asset('marca.png') }}" alt="Logo da Paróquia" class="h-12" />
            </a>
            <button class="block md:hidden" id="menuToggle" aria-label="Abrir menu">
                <span class="block w-6 h-0.5 bg-black mb-1"></span>
                <span class="block w-6 h-0.5 bg-black mb-1"></span>
                <span class="block w-6 h-0.5 bg-black"></span>
            </button>
        </div>

        <!-- Navegação -->
        <nav class="hidden md:block mt-4 md:mt-0">
            <ul class="flex flex-col md:flex-row gap-4 md:gap-6 font-semibold text-[1.0625rem]">
                <li><a href="#inicio" class="text-marrom-escuro hover:text-vermelho-vinho">INÍCIO</a></li>
                <li><a href="#sobre" class="text-marrom-escuro hover:text-vermelho-vinho">SOBRE NÓS</a></li>
                <li><a href="#sacramentos" class="text-marrom-escuro hover:text-vermelho-vinho">SACRAMENTOS</a></li>
                <li><a href="#pastorais" class="text-marrom-escuro hover:text-vermelho-vinho">PASTORAIS E MOVIMENTOS</a></li>
                <li><a href="#contato" class="text-marrom-escuro hover:text-vermelho-vinho">CONTATO</a></li>
            </ul>
        </nav>

        <!-- Redes sociais -->
        <div class="hidden md:flex gap-4 mt-4 md:mt-0">
            <a href="#"><i class="fab fa-facebook text-[25px] text-marrom-escuro hover:text-vermelho-vinho"></i></a>
            <a href="#"><i class="fab fa-instagram text-[25px] text-marrom-escuro hover:text-vermelho-vinho"></i></a>
            <a href="#"><i class="fab fa-youtube text-[25px] text-marrom-escuro hover:text-vermelho-vinho"></i></a>
        </div>
    </div>
</header>
