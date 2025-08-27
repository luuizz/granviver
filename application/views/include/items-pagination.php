<?php
require __DIR__ . '/data-empreendimentos.php';
?>

<?php foreach ($empreendimentos as $emp): ?>
    <?php
        $img = $emp['img']
            ? $baseUrl . '/' . ltrim($emp['img'], '/')
            : $baseUrl . '/assets/image/page-empreendimento/placeholder.png';
    ?>
    <li>
        <a href="#" class="item" 
            data-status="<?= strtolower(str_replace(' ', '-', $emp['status'] ?? 'nao-definido')) ?>" 
            data-tipo="<?= strtolower($emp['tipo'] ?? 'nao-definido') ?>" 
            data-caracteristica="<?= strtolower(str_replace(' ', '-', $emp['caracteristica'] ?? 'nao-definido')) ?>"
            data-cidade="<?= strtolower(str_replace(' ', '-', $emp['cidade'] ?? 'nao-definido')) ?>"
        >
            <div class="banner">
                <figure>
                    <img src="<?= $img ?>" class="img_empreendimento" alt="<?= $emp['nome_imovel'] ?? 'Empreendimento' ?>">
                </figure>

                <div class="infos">
                    <div class="info-city">
                        <i class="fa-solid fa-location-dot"></i>
                        <span><?= $emp['cidade'] ?? 'Cidade não informada' ?></span>
                    </div>
                    <h3 class="title-empreendimento"><?= $emp['nome_imovel'] ?? 'Nome do Empreendimento' ?></h3>
                </div>

                <div class="button">
                    <svg width="88" height="88" viewBox="0 0 88 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M87.6289 87.6126H0C0 87.6126 9.45212 85.523 16.1115 78.4102C22.7709 71.2974 16.1115 43.7619 35.9052 29.8604C54.322 14.8221 66.0314 21.2687 76.1431 16.3729C86.2549 11.4772 87.6289 0.645996 87.6289 0.645996V87.6126Z" fill="#fff"/>
                    </svg>
                    <div class="contact">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
            </div>
            <div class="texts">
                <p><img src="<?= $baseUrl; ?>/assets/image/page-empreendimento/clube.png"> <?= $emp['metragem'] ?? 'Metragem não informada' ?></p>
                <p><img src="<?= $baseUrl; ?>/assets/image/page-empreendimento/fechado.png"> <?= $emp['caracteristica'] ?? 'Característica não informada' ?></p>
                <p><img src="<?= $baseUrl; ?>/assets/image/page-empreendimento/metragem.png"> <?= $emp['status'] ?? 'Status não informado' ?></p>
                <p><img src="<?= $baseUrl; ?>/assets/image/page-empreendimento/obras.png"> <?= $emp['tipo'] ?? 'Tipo não informado' ?></p>
            </div>
        </a>
    </li>
<?php endforeach; ?>
