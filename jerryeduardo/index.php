<!doctype html>
<html lang="pt-br">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23860575-5"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23860575-5');
    </script>

    <!-- SEO - Search Engine -->
    <title>Criação de Sites Profissionais | Jerry Eduardo - Desenvolvedor Web</title>
    <meta name="author" content="Jerry Eduardo">
    <meta name="copyright" content="Jerry Eduardo">
    <meta name="description" content="">
    <meta name="keywords" content="desenvolvedor web, site responsivo, criação de sites profissionais, 
    criar site institucional, criação de sites personalizados, criar site para empresa, desenvolvedor 
    front-end, web freelancer">
    <meta name="robots" content="index,follow">

    <!-- Meta Tags Extras -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, 
    user-scalable=0, shrink-to-fit=no">   
    <meta name="theme-color" content="#0071C9">
    <meta name="distribution" content="Global">
    <link rel="canonical" href="https://www.jerryeduardo.com.br">
    
    <!-- SEO - Facebook -->
    <meta property="og:locale" content="pt_BR">
    <meta property="og:url" content="https://www.jerryeduardo.com.br">
    <meta property="og:title" content="Criação de Sites Profissionais | Jerry Eduardo">
    <meta property="og:site_name" content="Jerry Eduardo - Desenvolvedor Web">
    <meta property="og:description" content="">
    <meta property="og:image" content="images/logo/jerryeduardo.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="362">
    <meta property="og:image:height" content="95">
    <meta property="og:type" content="website">

    <!-- SEO - Twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:creator" content="@jerryeduardo">
    <meta name="twitter:site" content="@jerryeduardo">
    <meta name="twitter:domain" content="jerryeduardo.com.br">

    <!-- Favicon -->
    <link href="images/icons/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="images/icons/apple-touch-icon-57x57.png" rel="apple-touch-icon" sizes="57x57">
    <link href="images/icons/apple-touch-icon-60x60.png" rel="apple-touch-icon" sizes="60x60">
    <link href="images/icons/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
    <link href="images/icons/apple-touch-icon-76x76.png" rel="apple-touch-icon" sizes="76x76">
    <link href="images/icons/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
    <link href="images/icons/apple-touch-icon-120x120.png" rel="apple-touch-icon" sizes="120x120">
    <link href="images/icons/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">
    <link href="images/icons/apple-touch-icon-152x152.png" rel="apple-touch-icon" sizes="152x152">
    <meta name="msapplication-TileColor" content="#0063b1">
    <meta name="msapplication-TileImage" content="images/icons/mstile-144x144.png">

    <!-- Manifest -->

    <!-- Folha de Estilo -->
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<?php
    require_once 'php/conectarBanco.php';

    $sql = "SELECT * FROM logo WHERE id_logo=1";
    $result = $mysqli -> query($sql);
    $row = $result -> fetch_assoc();

    $id_logo = $row["id_logo"];
    $title_logo = $row["title_logo"];
    $alt_logo = $row["alt_logo"];
    $url_logo = $row["url_logo"];
    $width_logo = $row["width_logo"];
    $height_logo = $row["height_logo"];

    $result -> free_result();
    $mysqli -> close();
?>
        
<body>
    <nav class="navbar">
        <div class="center">
            <!-- Jerry<span style="color: rgb(0, 113, 201);">Eduardo</span> -->
            <div class="container-logo transition-4">
                <a href="#home" title="<?php echo $title_logo; ?>">
                    <img alt="<?php echo $alt_logo; ?>" src="<?php echo $url_logo; ?>" width="<?php echo $width_logo; ?>px" height="<?php echo $height_logo; ?>px" />
                </a>
            </div><!--Logo-->

            <label for="menu" class="transition-4">
                <div class="menu">
                    <img src="images/img_content/menu.svg" title="Menu" alt="Menu">
                </div>
            </label>
            <input type="checkbox" id="menu">

            <div class="container-pages transition-3">
                <a class="page adefault transition-3 border-radius3" href="#home" title="Home">Home</a>
                <a class="page adefault transition-3 border-radius3" href="#servicos" title="Serviços">Serviços</a>
                <a class="page adefault transition-3 border-radius3" href="#portfolio" title="Portfólio">Portfólio</a>
                <a class="page adefault transition-3 border-radius3" href="#sobre" title="Sobre">Sobre</a>
                <a class="page adefault transition-3 border-radius3" href="#contato" title="Contato">Contato</a>
            </div><!--Menu-->

            <nav>
                <div class="whatsapp border-radius25">  
                    <a href="https://api.whatsapp.com/send?phone=5511992186807" target="_blank">
                    <img src="images/img_content/whatsapp.svg" title="WhatsApp" alt="Logo WhatsApp"></a>
                </div>
                <div class="page-up border-radius25">  
                    <a href="#home">
                    <img src="images/img_content/page-up.svg" title="Voltar ao Topo" alt="Voltar ao Topo"></a>
                </div>
            </nav><!--WhatsApp/Subir-->

        </div><!--Center-->

        <div class="clear"></div>
    </nav>
        
    <header class="header" id="home">
        <div class="x-mg center">
            <div class="content-header">
                <h1>Criação de Sites Profissionais</h1>
                <p><strong>Você não possui um site ou está desatualizado ou antigo?</strong> Projetos de criação de sites 
                    profissionais, conteúdo gerenciável e arquitetura de indexação direcionada aos padrões do Google. 
                    Um site para chamar de meu. <strong>Focado na atração de usuários de forma orgânica</strong>, potencializando ao 
                    máximo os resultados que você pode obter com sua <strong>presença online.</strong>
                </p>

                <div class="btn-header">
                    <a class="btn-header-action btn-style border-radius25" title="Receber um Orçamento" href="prebriefing.html">Receber um Orçamento!</a>
                </div>

                <div class="precise">
                    <img src="images/img_content/precise.svg" title="Correto" alt="Correto">
                    <span>Suporte 24 horas</span> 
                </div>
                <div class="precise">
                    <img src="images/img_content/precise.svg" title="Correto" alt="Correto">
                    <span>Design Personalizado</span> 
                </div>
                <div class="precise">
                    <img src="images/img_content/precise.svg" title="Correto" alt="Correto">
                    <span>Painel Admnistrativo</span> 
                </div>
            </div><!--Content-Header-->

            <div class="container-img">
                <img class="img-webp" data-original="images/img_content/responsive.jpg" data-webp="images/img_content/responsive.webp"
                src="images/img_content/responsive.webp" title="Site Responsivo" alt="Site responsivo que se adapta a diferentes tamanhos de tela e dispositivos">
            </div><!--Imagem-Header-->
            
        </div><!--Center-->
        
        <div class="clear"></div>
    </header>

    <section class="section" id="servicos">
        <div class="content-section center">
            <h1>Serviços</h1>
            <div class="trace border-radius3"></div>

            <div class="container-service">
                <div class="service standard">
                    <img src="images/img_content/identidade-visual.svg" title="Identidade Visual" alt="">
                    <h2 style="margin-top: 15px;">Identidade Visual</h2>
                    <p style="margin-top: 15px;"><strong></strong>É um conjunto de elementos gráficos que objetivam comunicar ao público a 
                    ideia, os valores, o propósito e a missão de uma empresa.</p>
                    <P>Com base nessa informação, podemos opinar de forma assertiva que uma identidade visual bem arquitetada 
                    e marcante é uma <strong>estratégia essencial para a marca</strong>, elevando o seu potencial.</P>
                </div>
                <div class="service standard">
                    <img src="images/img_content/ui-ux-design.svg" title="UI e UX Design" alt="">
                    <h2>UI e UX Design</h2>
                    <p>Sites com <strong>qualidade e responsiveis</strong>. Com um CMS fácil de usar e sem a necessidade do 
                            programador para atualizar o site</p>
                </div>
                <div class="service standard">
                    <img src="images/img_content/sites.svg" title="Criação de Sites" alt="">
                    <h2>Criação de Sites</h2>
                    <p>Sites com <strong>qualidade e responsiveis</strong>. Com um CMS fácil de usar e sem a necessidade do 
                            programador para atualizar o site</p>
                </div>
                <div class="service standard">
                    <img src="images/img_content/seo.svg" title="Otimização de SEO" alt="">
                    <h2>Otimização de SEO</h2>
                    <p>Sites com <strong>qualidade e responsiveis</strong>. Com um CMS fácil de usar e sem a necessidade do 
                            programador para atualizar o site</p>
                </div>
                <div class="service standard">
                    <img src="images/img_content/integracao.svg" title="Integração de Ferramentas" alt="">
                    <h2>Integração de Ferramentas</h2>
                    <p>Sites com <strong>qualidade e responsiveis</strong>. Com um CMS fácil de usar e sem a necessidade do 
                            programador para atualizar o site</p>
                </div>
                <div class="service standard">
                    <img src="images/img_content/atualizacao.svg" title="Manutenção e Atualização" alt="">
                    <h2>Manutenção e Atualização</h2>
                    <p>Sites com <strong>qualidade e responsiveis</strong>. Com um CMS fácil de usar e sem a necessidade do 
                            programador para atualizar o site</p>
                </div>
            </div><!--Container-Service-->
            
        </div><!--Content-Section-->
    </section><!--Serviços-->
        
    <section class="section" id="portfolio">
        <div class="content-section center">
            <h1>Portfólio</h1>
            <div class="trace border-radius3"></div>
            <h2 class="sub-section">Aqui estão os projetos mais recentes que realizei, feitos com o carinho 
                que cada projeto merece.</h2>

            <div class="container-project">
                <div class="project border-radius25">
                    <a href="portfolio-jerryeduardo.html">
                        <img class="img-webp" data-original="images/img_content/portfolio.png" 
                        data-webp="images/img_content/portfolio.webp" src="images/img_content/portfolio.webp" title="Portfólio - Jerry Eduardo" alt="">
                    </a>
                    <h3>Portfólio - Jerry Eduardo</h3>
                    <p><strong>Categoria:</strong> Site Institucional</p>
                    <p><strong>Data:</strong> Agosto 30, 2020</p>  
                    <div class="btn-project">
                        <a class="btn-action btn-style border-radius25" title="Detalhes do Projeto" 
                        href="portfolio-jerryeduardo.html">Detalhes do Projeto</a>
                    </div>
                    <div class="bottom-false"></div>
                </div>
                <div class="project border-radius25">
                    <a href="amazon-institucional-13-06-2020.html">
                        <img class="img-webp" data-original="images/img_content/portfolio.png" 
                        data-webp="images/img_content/portfolio.webp" src="images/img_content/portfolio.webp" title="" alt="">
                    </a>
                    <h3>Amazon</h3>
                    <p><strong>Categoria:</strong> Site Institucional</p>
                    <p><strong>Data:</strong> Junho 13, 2020</p>  
                    <div class="btn-project">
                        <a class="btn-action btn-style border-radius25" title="Detalhes do Projeto" 
                        href="amazon-institucional-13-06-2020.html">Detalhes do Projeto</a>
                    </div>
                    <div class="bottom-false"></div>
                </div>
                <div class="project border-radius25">
                    <a href="amazon-institucional-13-06-2020.html">
                        <img class="img-webp" data-original="images/img_content/portfolio.png" 
                        data-webp="images/img_content/portfolio.webp" src="images/img_content/portfolio.webp" title="" alt="">
                    </a>
                    <h3>Amazon</h3>
                    <p><strong>Categoria:</strong> Site Institucional</p>
                    <p><strong>Data:</strong> Junho 13, 2020</p>  
                    <div class="btn-project">
                        <a class="btn-action btn-style border-radius25" title="Detalhes do Projeto" 
                        href="amazon-institucional-13-06-2020.html">Detalhes do Projeto</a>
                    </div>
                    <div class="bottom-false"></div>
                </div>
                <div class="project border-radius25">
                    <a href="amazon-institucional-13-06-2020.html">
                        <img class="img-webp" data-original="images/img_content/portfolio.png" 
                        data-webp="images/img_content/portfolio.webp" src="images/img_content/portfolio.webp" title="" alt="">
                    </a>
                    <h3>Amazon</h3>
                    <p><strong>Categoria:</strong> Site Institucional</p>
                    <p><strong>Data:</strong> Junho 13, 2020</p>  
                    <div class="btn-project">
                        <a class="btn-action btn-style border-radius25" title="Detalhes do Projeto" 
                        href="amazon-institucional-13-06-2020.html">Detalhes do Projeto</a>
                    </div>
                    <div class="bottom-false"></div>
                </div>
                <div class="project border-radius25">
                    <a href="amazon-institucional-13-06-2020.html">
                        <img class="img-webp" data-original="images/img_content/portfolio.png" 
                        data-webp="images/img_content/portfolio.webp" src="images/img_content/portfolio.webp" title="" alt="">
                    </a>
                    <h3>Amazon</h3>
                    <p><strong>Categoria:</strong> Site Institucional</p>
                    <p><strong>Data:</strong> Junho 13, 2020</p>  
                    <div class="btn-project">
                        <a class="btn-action btn-style border-radius25" title="Detalhes do Projeto" 
                        href="amazon-institucional-13-06-2020.html">Detalhes do Projeto</a>
                    </div>
                    <div class="bottom-false"></div>
                </div>
                <div class="project border-radius25">
                    <a href="amazon-institucional-13-06-2020.html">
                        <img class="img-webp" data-original="images/img_content/portfolio.png" 
                        data-webp="images/img_content/portfolio.webp" src="images/img_content/portfolio.webp" title="" alt="">
                    </a>
                    <h3>Amazon</h3>
                    <p><strong>Categoria:</strong> Site Institucional</p>
                    <p><strong>Data:</strong> Junho 13, 2020</p>  
                    <div class="btn-project">
                        <a class="btn-action btn-style border-radius25" title="Detalhes do Projeto" 
                        href="amazon-institucional-13-06-2020.html">Detalhes do Projeto</a>
                    </div>
                    <div class="bottom-false"></div>
                </div>

                <div class="btn-view mg-min798">
                    <a class="btn-view-action transition-4 border-radius25" title="Ver Mais" href="portfolio.html">Ver Mais +</a>
                </div>
                <div class="bottom-false"></div>
            </div><!--Container-Project-->

        </div><!--Content-Section-->
    </section><!--Portfólio-->
        
    <section class="section" id="sobre">
        <div class="content-section center">
            <h1>Sobre</h1>
            <div class="trace"></div>
            <h2></h2>

            <div class="container-sobre">
                <div class="sobre font-16">
                    <p>Desenvolvedor web, programador PHP e WordPress. Procuro estar sempre a par das novidades para criar 
                        interfaces seguindo conceitos modernos e avançados, focadas na usabilidade e no design emocional.</p>

                    <p>Sou graduado em <strong>Ciências da Computação pela UVV e Master in Business Administration (MBA) em 
                        Gestão Empresarial pela Fundação Getúlio Vargas.</strong></p>
                            
                    <p>Já trabalhei em diversas empresas do ramo, mas hoje trabalho exclusivamente como Freelancer 
                        atendendo à diversas empresas de publicidade, auxiliando nos projetos e atendendo microempresários 
                        que necessitam de um projeto web.</p>
                </div>

                <div class="rede-social">
                    <div class="perfil">
                        <img class="img-webp" data-original="images/img_content/perfil.jpg" data-webp="images/img_content/perfil.webp" 
                        src="images/img_content/perfil.webp" title="Jerry Eduardo" alt="Foto de rosto - Jerry Eduardo">
                    </div>
                    <div class="facebook">
                        <a href="https://www.facebook.com/" target="_blank">
                            <img src="images/img_content/facebook.svg" title="Facebook" alt="Logo Facebook">
                        </a>
                    </div>
                    <div class="instagram">
                        <a href="https://www.instagram.com/" target="_blank">
                            <img src="images/img_content/instagram.svg" title="Instagram" alt="Logo Instagram">
                        </a>
                    </div>
                    <div class="linkedin">
                        <a href="https://www.linkedin.com/in/jerry-souza-b11b9116a/" target="_blank">
                            <img src="images/img_content/linkedin.svg" title="Linkedin" alt="Logo Linkedin">
                        </a>
                    </div>
                </div>
            </div><!--Content-Sobre-->
                
            <div class="clear"></div>
        </div><!--Content-Section-->
    </section><!--Sobre-->
        
    <section class="section" id="contato">
        <div class="content-section contato-cover center">
            <h1>Contato</h1>
            <div class="trace"></div>
            <h2 class="sub-section">Quer conhecer mais sobre o meu trabalho? Entre em contato!</h2>

            <div class="container-contato">
                <div class="contato standard">
                    <form action="/pagina-processa-dados-do-form" method="post">
                        <div class="label-float">
                            <input type="text" id="name" autocomplete="off" placeholder=" " required>
                            <label>Nome</label>
                        </div>
                        <div class="label-float">
                            <input type="email" id="email" autocomplete="off" placeholder=" " required>
                            <label>E-mail</label>
                        </div>
                        <div class="label-float">
                            <input type="tel" id="telephone" autocomplete="off" placeholder=" " required>
                            <label>Telefone (com DDD)</label>
                        </div>
                        <div class="label-float">
                            <input type="text" id="company" autocomplete="off" placeholder=" " required>
                            <label>Empresa</label>
                        </div>
                        <div class="label-float">
                            <textarea id="message" autocomplete="off" placeholder=" " required></textarea>
                            <label>Mensagem</label>
                        </div>
                            
                        <button class="btn-send transition-3 border-radius25" type="submit">Enviar</button>
                    </form>

                    <div class="canais">
                        <p><a href="mailto:jerry.edu@gmail.com" title="E-mail" target="_blank">jerry.edu@gmail.com</a></p>
                        <p><a href="https://api.whatsapp.com/send?phone=5511992186807" title="WhatsApp" target="_blank">WhatsApp<br /><strong>(11) 99218-6807</strong></a></p>
                        <p>Horário de Atendimento<br /><strong>9h às 17h</strong></p>
                    </div>
                </div><!--Contato-->

            </div><!--Container-Contato-->
        </div><!--Content-Section-->
    </section><!--Contato-->

    <footer class="footer">
        <div class="content-footer">
            <div>
                <div class="facebook-footer">
                    <a href="https://www.facebook.com/" target="_blank">
                        <img src="images/img_content/facebook.svg" title="Facebook" alt="Logo Facebook">
                    </a>
                </div>
                <div class="instagram-footer">
                    <a href="https://www.instagram.com/" target="_blank">
                        <img src="images/img_content/instagram.svg" title="Instagram" alt="Logo Instagram">
                    </a>
                </div>
                <div class="linkedin-footer">
                    <a href="https://www.linkedin.com/in/jerry-souza-b11b9116a/" target="_blank">
                        <img src="images/img_content/linkedin.svg" title="Linkedin" alt="Logo Linkedin">
                    </a>
                </div>
            </div>

            <div class="container-footer">
            <p>Copyright© 2020 <strong>Jerry<span style="color: rgb(0, 113, 201);">Eduardo.</span></strong> 
                Todos os Direitos Reservados.</p>
            </div><!--Container-Footer-->
            
        </div><!--Content-Footer-->
    </footer><!--Footer-->

    <!-- Javascript -->
    <script src="//code.jivosite.com/widget/94YLCVZxT4" async></script>
    <script rel="dns-prefetch" src="js/jquery-3.5.1.min.js"></script>
    <script rel="dns-prefetch" src="js/modernizr-custom.js"></script>
    <script rel="dns-prefetch" src="js/app.js"></script>

    </body>
</html>