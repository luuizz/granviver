<?php $this->load->view('header'); ?>

<section class="s-hero-default">
    <div class="container">
        <div class="top-infos">
            <h1>Quem somos</h1>

            <ul class="breadcrumbs">
                <?php foreach ($breadcrumbs as $index => $breadcrumb): ?>
                    <li>
                        <?php 
                            if ($index === count($breadcrumbs) - 1):
                        ?>
                            <?php echo $breadcrumb['name']; ?>
                        <?php else: ?>
                            <a href="<?php echo $breadcrumb['url']; ?>"><?php echo $breadcrumb['name']; ?></a>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>

<section class="section_history s-history">
    <div class="container">
        <div class="left" data-aos="fade-right">
            <img src="assets/image/page-sobre/img.png">
        </div>
        <div class="right" data-aos="fade-left">

            <?php $this->load->view('include/caption', array('title' => 'Nossa história')); ?>

            <h2 class="subtitle" animation_subtitle>Experiência que constrói qualidade de vida</h2>
            <div class="text">
                <p>Nós, da Gran Viver, trabalhamos para conectar sonhos à realidade. Isso significa que criamos espaços
                    onde
                    você possa realizar os seus projetos e aproveitar os melhores momentos da vida com mais segurança,
                    conforto, equilíbrio e bem-estar.</p>

                <p>Em nossos 46 anos de atuação no mercado, mais de 45 empreendimentos foram lançados e já
                    proporcionamos a
                    mais de 10.000 famílias a realização de ter o lote dos seus sonhos. Nossos anos de experiência nos
                    possibilita ter mais expertise no desenvolvimento de produtos, proporcionando sempre aos nossos
                    clientes
                    uma melhor qualidade de moradia.</p>

                <p>Consolidados como a maior loteadora de Minas Gerais, nosso portfólio é composto por cinco linhas de
                    produtos, divididos entre bairros planejados e residenciais fechados. Oferecemos empreendimentos com
                    a
                    qualidade e estilo que você procura, aliando infraestrutura urbana, mobilidade, preservação de áreas
                    verdes, valorização progressiva da região e segurança na busca da realização dos sonhos dos nossos
                    clientes.</p>
            </div>
        </div>
    </div>
</section>

    <section class="section_institucional">
        <div class="left" data-aos="fade-right">
            <div class="text_missao">
                <p class="si_title"><img src="assets/image/page-sobre/missao.png">Missão</p>
                <p clas="title_1" style="margin-bottom:10px;">É criar espaços para que nossos clientes possam aproveitar os melhores momentos da vida.</p>

                <hr >

                <p class="si_title title_2"><img src="assets/image/page-sobre/visao.png" style="margin-top:30px">Visão</p>
                <p>Ter melhor rentabilidade nos negócios que empreende, através de um modelo de gestão com foco em
                    resultados, se mantendo como a maior empresa de parcelamento de Minas Gerais.</p>
            </div>
            <div clas="text_visao">

            </div>
        </div>
        <div class="right" data-aos="fade-left">
            <div class="text_valores">
                <p class="si_title"><img src="assets/image/page-sobre/valores.png">Valores</p>
                <p class="si_subtitle">Seriedade</p>
                <p>Alinhamos o que fazemos com o que pensamos e o que dizemos, sendo coerentes e agindo, acima de tudo,
                    de forma ética.</p>
                <p class="si_subtitle">Sustentabilidade Social e Ambiental</p>
                <p>Temos compromisso com o meio ambiente e com a sociedade. Somos agentes de desenvolvimento social nas
                    localidades onde atuamos. Valorizamos a segurança, o bem-estar e a qualidade de vida das pessoas.
                </p>
                <p class="si_subtitle">Comprometimento</p>
                <p>Implica em dedicação e compromisso com tudo o que fazemos, zelando pelo patrimônio da empresa.
                    Envolve a responsabilidade pelos objetivos propostos e a garantia de que faremos tudo para que estes
                    sejam alcançados.
                </p>
                <p class="si_subtitle">Respeito</p>
                <p>Devemos tratar com justiça, educação e cordialidade a todos com quem nos relacionamos. Respeito é
                    fator determinante para as boas relações. Ele demonstra a consideração e a importância que temos
                    para com o outro, sabendo compreender e respeitar seu ponto de vista, independentemente de quem
                    seja.
                </p>
            </div>
        </div>
    </section>

    <section class="section_atuacao">
        <div class="left" data-aos="fade-right">
            <?php $this->load->view('include/caption', array('title' => 'Presença Gran Viver')); ?>

            <p class="subtitle" animation_subtitle>Presença Gran Viver</p>
            <b>Presente em 38 Municípios.</b>
            <div class="text">
                <div class="list_state">
                    <ul>
                        <li class="title_state mt-0">Minas Gerais</li>
                        <li>Andradas</li>
                        <li>Barbacena</li>
                        <li>Belo Horizonte</li>
                        <li>Betim</li>
                        <li>Bom Despacho</li>
                        <li>Bom Jesus do Galho</li>
                        <li>Brumadinho</li>
                        <li>Confins</li>
                        <li>Congonhas</li>
                        <li>Conselheiro Lafaiete</li>
                        <li>Divinópolis</li>
                        <li>Esmeraldas</li>
                        <li>Formiga</li>
                        <li>Ibirité</li>
                        <li>Iguatama</li>
                        <li>Ipatinga</li>
                        <li>Juiz de Fora</li>
                    </ul>
                    <ul>
                        <li>Lagoa Santa</li>
                        <li>Lavras</li>
                        <li>Montes Claros</li>
                        <li>Nova Lima</li>
                        <li>Nova Serrana</li>
                        <li>Pedro Leopoldo</li>
                        <li>Piedade do Paraopeba</li>
                        <li>Pouso Alegre</li>
                        <li>Prudente de Morais</li>
                        <li>Ribeirão das Neves</li>
                        <li>Santa Luzia</li>
                        <li>Santana do Paraíso</li>
                        <li>São João da Lapa</li>
                        <li>São João Del Rei</li>
                        <li>Sete Lagoas</li>
                        <li>Suzano</li>
                        <li>Teófilo Otoni</li>
                    </ul>
                    <ul>
                        <li>Tiradentes</li>
                        <li>Três Marias</li>
                        <li>Varginha</li>
                        <li>Vespasiano</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="right" data-aos="fade-left">
            <img src="assets/image/page-sobre/mapa.png">
        </div>
    </section>


<?php $this->load->view('footer'); ?>