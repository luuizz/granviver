<?php $this->load->view('header'); ?>

<section class="s-hero-default">
    <div class="container">
        <div class="top-infos">
            <h1>Empreendimentos</h1>

            <ul class="breadcrumbs">
                <?php foreach ($breadcrumbs as $index => $breadcrumb): ?>
                    <li>
                        <?php 
                            // Verifica se é o último item. Se for, exibe sem link
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

<section class="section_empreendimento">
    <div class="container">
        <div class="top">
            <?php $this->load->view('include/caption', array('title' => 'Construindo o seu o futuro')); ?>

            <h2 class="subtitle text-center">Conheça nossos empreendimentos</h2>
        </div>

        <div class="all-filters">
            <form action="">
                <button class="filtro ativo" data-filter="all">Ver Todos</button>
                <button class="filtro" data-filter="obras-avançadas">Em Obras</button>
                <button class="filtro" data-filter="pronto-para-construir">Obras Concluídas</button>
                <?php $this->load->view('include/select-options'); ?>
            </form>
        </div>
        <!-- Lista de Itens (será preenchida dinamicamente) -->
        <ul id="itens">
            <?php $this->load->view('include/items-pagination'); ?>
        </ul>

        <!-- Container de paginação -->
        <div id="pagination-container"></div>
    </div>
</section>

<?php $this->load->view('footer'); ?>