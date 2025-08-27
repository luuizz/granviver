<?php require __DIR__ . '/data-empreendimentos.php'; ?>

<?php require __DIR__ . '/data-empreendimentos.php'; ?>

<?php
$cidades = [];
$tipos = [];

foreach ($empreendimentos as $emp) {
    $cidades[] = $emp['cidade'];
    $tipos[] = $emp['tipo'];
}

// eliminar duplicados
$cidades = array_unique($cidades);
$tipos = array_unique($tipos);
?>

<!-- Select Cidade -->
 <div class="select-wrapper">
  <select class="filtro" data-filter="cidade">
      <option value="">Selecione a cidade</option>
      <?php foreach ($cidades as $cidade): ?>
          <option value="<?= strtolower(str_replace(' ', '-', $cidade)) ?>">
              <?= $cidade ?>
          </option>
      <?php endforeach; ?>
  </select>
 </div>

 <!-- Select Tipo -->
<div class="select-wrapper">
  <select class="filtro" data-filter="tipo">
      <option value="">Tipo de Imóvel</option>
      <?php foreach ($tipos as $tipo): ?>
          <option value="<?= strtolower($tipo) ?>">
              <?= $tipo ?>
          </option>
      <?php endforeach; ?>
  </select>
</div>

