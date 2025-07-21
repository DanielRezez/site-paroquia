<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paróquia de Santo António de Pádua</title>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/padroeiro.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    @include('components.header')

    <!-- Santo Padroeiro Banner -->
    <section class="santo-banner">
        <div class="container">
            <h2>O SANTO PADROEIRO</h2>
        </div>
    </section>

    <!-- Decorative Section -->
    <section class="decorative-section">
        <div class="container">
            <div class="ornament">
                <svg viewBox="0 0 200 100" class="decorative-svg">
                    <path d="M100 20 L120 40 L100 60 L80 40 Z" fill="currentColor" opacity="0.3" />
                    <path d="M100 10 L130 50 L100 90 L70 50 Z" fill="none" stroke="currentColor" stroke-width="1" />
                    <circle cx="100" cy="50" r="8" fill="currentColor" opacity="0.5" />
                </svg>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="main-content">
        <div class="container">
            <div class="content-grid">
                <div class="saint-image">
                    <img src="{{ asset('santos/saint-anthony-painting.png') }}" alt="Santo António de Pádua" />
                </div>

                <div class="saint-text">
                    <h3>A vós recorremos, <em>ó piedoso taumaturgo...</em></h3>
                    
                    <div class="text-content">
                        <p>Santo António de Pádua, nascido como Fernando de Bulhões em Lisboa, Portugal, por volta de 1195, foi um frade franciscano, teólogo e pregador. Nasceu de família nobre, ingressou inicialmente na ordem dos Cónegos Regrantes de Santo Agostinho, hoje, ao norte em contacto com alguns frades franciscanos, decidiu abraçar a vida franciscana, adoptando o nome de António.</p>

                        <p>Dotado de profundas sabedoria e zelo missionário, destacou-se como pregador popular, combatendo heresias e heresias. A biografia e pregação de Santo António são marcadas pela sua dedicação especial aos pobres e aos necessitados da Itália, especialmente em Pádua, onde aos finais da sua vida, exerceu intensamente. Ficou conhecido como o "Martelo dos Hereges" devido à sua eficácia na refutação de doutrinas erróneas.</p>

                        <p>Santo António faleceu em 1231, aos 36 anos. Foi canonizado menos de um ano após sua morte, tamanha era a devoção popular. Em 1946, foi proclamado Doutor da Igreja pelo Papa Pio XII. É considerado o santo padroeiro contra perdimento dos pobres, dos viajantes, dos casamentos e das coisas perdidas, sendo um dos santos mais invocado na cristandade.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Milagres Section -->
    <section class="milagres-section">
        <div class="container">
            <div class="milagres-content">
                <div class="milagres-image">
                    <img src="/api/placeholder/400/300" alt="Milagres de Santo António" />
                </div>
                <h3>Milagres de Santo António e o Dom Incomparável do Menino Jesus</h3>
                
                <div class="milagres-text">
                    <p>Acerca dos seus milagres prestígio e sobre milagreiros, Santo António trabalha a formação pela intercessão milagres que manifestam sua vida, sua obra, sua vida e obra e Doutrina de "Santo dos Milagres", tornando-se a descoberta com que alguns se manifestam, mostrar os afetos e Graças e prodígios dos santos de Deus.</p>

                    <p>Entre os milagres mais conhecidos está o da mula que se ajoelhou diante da Eucaristia, testemunhando a presença real de Cristo, e o da pregação aos peixes, quando os homens não quiseram escutar o Evangelho dos pobres que se recusaram atentamente à sua voz.</p>

                    <p>Mas também atual foi seu conhecer quanto e onde do Menino Jesus em seus braços durante um momento de oração, revelando a intimidade espiritual dos Três Reis Deus. Até hoje, esse milagre é comumente a inspirar a arte, que mais representa nas expressões pictóricas e esculturais de Santo António.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Relíquia Section -->
    <section class="reliquia-section">
        <div class="container">
            <div class="reliquia-grid">
                <div class="reliquia-text">
                    <h3>Guarda de uma <em>Relíquia de primeiro grau</em></h3>
                    
                    <div class="text-content">
                        <p>Além de sua sabedoria excepcional e ardor missionário, Santo António trabalha a Ordenação pelos elementos religiosos que marcaram sua vida, sua obra, sua vida e obra e Doutrina de "Santo dos Milagres", tornando-se a descoberta com que alguns se manifestam, mostrar os afetos e Graças e prodígios dos santos de Deus, admiram, adoram os afetos e mostram princípios em nome de Deus.</p>

                        <p>Entre os episódios mais conhecidos está o da mula que se ajoelhou diante da Eucaristia, testemunhando a presença real de Cristo, e o da pregação aos peixes, quando, rejeitado por uma cidade, descobriu a atenção dos peixes do mar à sua pregação.</p>

                        <p>Mas também atual foi seu conhecer quanto a visão do Menino Jesus em seus braços durante um momento de oração, revelando a intimidade espiritual dos Três Reis Deus. Até hoje, esse milagre é comumente a inspirar a arte, que mais representa nas expressões pictóricas e esculturais, e é comum encontrarmos representações de Santo António segurando um menino de si e caridade.</p>
                    </div>
                </div>

                <div class="reliquia-image">
                    <img src="/api/placeholder/350/400" alt="Relíquia de Santo António" />
                    <div class="reliquia-badge">
                        <div class="badge-icon">SA</div>
                        <p>Relíquia de primeiro grau</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-info">
                    <div class="footer-logo">
                        <div class="logo-circle">
                            <i class="fas fa-cross"></i>
                        </div>
                        <div>
                            <h4>Paróquia de Santo António de Pádua</h4>
                            <p>Endereço</p>
                        </div>
                    </div>

                    <div class="address">
                        <p>Av. Tomás Landim, s/n</p>
                        <p>Conj. Parque dos Coqueiros - Bairro</p>
                        <p>Nossa Senhora da Apresentação</p>
                        <p>Natal/RN - CEP: 59.000-000</p>
                    </div>
                </div>

                <div class="footer-contact">
                    <h4>Contato</h4>
                    <div class="contact-info">
                        <p><i class="fas fa-phone"></i> (84) 3643-1234</p>
                        <p><i class="fas fa-envelope"></i> paroquia@santoantonio.com</p>
                    </div>

                    <h4>Horários</h4>
                    <div class="schedule">
                        <p>Domingo - 7h e 19h</p>
                        <p>Terça a sexta - 19h</p>
                        <p>Sábado - 7h</p>
                    </div>

                    <p class="secretary-hours">Funcionamento da Secretaria paroquial:</p>
                    <p class="secretary-hours">Segunda a sexta-feira: 7h30 às 11h30 e das 13h30 às 17h30</p>
                </div>

                <div class="footer-map">
                    <div class="map-placeholder">
                        <img src="/api/placeholder/300/200" alt="Mapa da localização" />
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
                <p>&copy; 2024. Paróquia Matriz de Santo António de Pádua</p>
            </div>
        </div>
    </footer>
</body>
</html>
