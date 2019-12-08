<main class="page">
  <header class="page__header">
    <div onclick="getPage('main.php')" class="page__arrow">&lsaquo;</div>
    <h1 class="page__title">Тариф "<?= $title ?>"</h1>
  </header>
  <?php foreach ($tarifs as $tarif) : ?>
    <section class="card">
      <header class="card__header">
        <?= $tarif->pay_period . ' ' . suffix($tarif->pay_period) ?>
      </header>
      <div onclick="getPage('tarif.php?group=<?= $groupID ?>&id=<?= $tarif->ID ?>')" class="card__param">
        <div class="card__arrow">&rsaquo;</div>
        <div class="card__price"><?= $tarif->price / $tarif->pay_period?> &#8381;/мес</div>
        <div class="card__payment">разовый платеж &ndash; <?= $tarif->price ?> &#8381;</div>
        <?php if ($tarif->discrount != '') : ?>
          <div class="card__discount">скидка &ndash; <?= $tarif->discount ?> &#8381;</div>
        <?php endif; ?>
      </div>
    </section>
  <?php endforeach ?>
</main>