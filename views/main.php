<?php
require_once('../model/functions.php');

$id = 0;
foreach ($tarifs as $tarif) : ?>
  <section class="card">
    <header class="card__header">
      Тариф "<?= $tarif->title ?>"
    </header>
    <div onclick="getPage('group.php?group=<?= $id ?>')" class="card__param">
      <div class="card__arrow">&rsaquo;</div>
      <div class="card__speed card__speed_<?= getMod($tarif->title) ?>"><?= $tarif->speed ?> Мбит/с</div>
      <div class="card__price"><?= minPrice($tarif, 'min'); ?> &ndash; <?= minPrice($tarif, 'max'); ?> &#8381;/мес</div>
    </div>
    <footer class="card__footer">
      <a class="card__more" href="<?= $tarif->link ?>">узнать подробнее на сайте www.sknt.ru</a>
    </footer>
  </section>
<?php $id++;
endforeach; ?>