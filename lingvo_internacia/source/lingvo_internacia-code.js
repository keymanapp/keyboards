<script>
document.addEventListener('DOMContentLoaded', function () {
  function hideKey() {
    const el = document.getElementById('K_LOPT');
    if (el) {
      el.style.display = 'none';
      el.style.visibility = 'hidden';
      el.style.pointerEvents = 'none';
      el.classList.add('kman-hidden'); // пометка на случай перерисовки
      return true;
    }
    return false;
  }

  // Попытка сразу и несколько последующих — на случай асинхронного рендера
  if (!hideKey()) {
    const tries = 10;
    let i = 0;
    const t = setInterval(() => {
      if (hideKey() || ++i >= tries) clearInterval(t);
    }, 200);
  }

  // Наблюдатель DOM: если Keyman перерисовывает клавиши, повторно скрыть
  const obs = new MutationObserver(mutations => {
    hideKey();
  });
  obs.observe(document.body, { childList: true, subtree: true });
});
</script>
