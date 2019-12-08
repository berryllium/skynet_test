  <header class="page__header">
    <div onclick="getPage('group.php?group=<?= $groupID ?>')" class="page__arrow">&lsaquo;</div>
    <h1 class="page__title page__title_select">Выбор тарифа</h1>
  </header>
  <main>
    <section class="card">
      <header class="card__header">
        Тариф "<?= $tarif->title ?>"
      </header>
      <div class="card__param">
        <div class="card__period">Период оплаты &ndash; <?= $tarif->pay_period . ' ' . suffix($tarif->pay_period) ?></div>
        <div class="card__price"><?= $tarif->price / $tarif->pay_period ?> &#8381;/мес</div>
        <div class="card__payment">разовый платеж &ndash; <?= $tarif->price ?> &#8381;</div>
        <div class="card__repayment">со счета спишется &ndash; <?= $tarif->price + $tarif->price_add ?> &#8381;</div>
        <div class="card__start">вступит в силу &ndash; сегодня</div>
        <div class="card__end">активно до &ndash; <?= $date ?></div>
        <footer class="card__footer">
          <button onclick="alert('тариф <?= $tarif->title ?> выбран!')" class="card__btn">Выбрать</button>
        </footer>
      </div>
    </section>
  </main>