<?php
include __DIR__ . '/../config/settings.php';


$menuItems = [
    ['class' => 'home', 'title' => 'Ir para página inicial', 'href' => './', 'label' => 'HOME'],
    ['class' => 'quemsomos-m', 'href' => '/sobre', 'label' => 'QUEM SOMOS'],
    ['class' => 'empreendimentos-m', 'href' => '/empreendimento', 'label' => 'EMPREENDIMENTOS'],
    ['class' => 'perguntas-m', 'href' => '/perguntas', 'label' => 'PERGUNTAS FREQUENTES'],
    ['class' => 'terreno-m', 'href' => '/terreno', 'label' => 'OFEREÇA SEU TERRENO'],
    ['class' => 'contato_empresarial', 'href' => '/contato', 'label' => 'CONTATO']
];


function renderMenu($items, $baseUrl) {
    echo '<ul class="menu">';
    foreach ($items as $item) {
        $title = isset($item['title']) ? ' title="' . $item['title'] . '"' : '';

        // Monta o link completo combinando a URL base com o href do item
        $fullHref = ($item['href'] === './') ? $baseUrl : $baseUrl . $item['href'];

        echo '<li>';
        echo '<a class="' . $item['class'] . '"' . $title .
             ' href="' . $fullHref . '" onclick="itemMenu(\'' . $item['class'] . '\')">' .
             $item['label'] . '</a>';
        echo '</li>';
    }
    echo '</ul>';
}
?>
