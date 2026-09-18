document.addEventListener('DOMContentLoaded', () => {
  // 1. Phone mask formatting
  const phoneInputs = document.querySelectorAll('input[type="tel"]');
  phoneInputs.forEach(input => {
    input.addEventListener('input', (e) => {
      let val = input.value.replace(/\D/g, '');
      if (!val) {
        input.value = '';
        return;
      }
      if (val[0] === '7' || val[0] === '8') {
        val = val.substring(1);
      }
      let formatted = '+7 (';
      if (val.length > 0) formatted += val.substring(0, 3);
      if (val.length >= 3) formatted += ') ' + val.substring(3, 6);
      if (val.length >= 6) formatted += '-' + val.substring(6, 8);
      if (val.length >= 8) formatted += '-' + val.substring(8, 10);
      input.value = formatted;
    });
  });

  // 2. Main Hero Slider (simple lightweight Vanilla JS carousel)
  const heroBullets = document.querySelectorAll('.hero-section .slider-bullet');
  heroBullets.forEach((bullet, idx) => {
    bullet.addEventListener('click', () => {
      heroBullets.forEach(b => b.classList.remove('active'));
      bullet.classList.add('active');
    });
  });

  // 3. News carousel scroll
  const newsContainer = document.querySelector('.news-scroll-container');
  const newsPrevBtn = document.querySelector('.news-prev');
  const newsNextBtn = document.querySelector('.news-next');

  if (newsContainer && newsPrevBtn && newsNextBtn) {
    newsPrevBtn.addEventListener('click', () => {
      newsContainer.scrollBy({ left: -320, behavior: 'smooth' });
    });
    newsNextBtn.addEventListener('click', () => {
      newsContainer.scrollBy({ left: 320, behavior: 'smooth' });
    });
  }

  // 4. Modal handler for CTA buttons
  const modalCta = document.getElementById('modalCallback');
  if (modalCta) {
    const ctaButtons = document.querySelectorAll('[data-bs-target="#modalCallback"]');
    ctaButtons.forEach(btn => {
      btn.addEventListener('click', (e) => {
        const titleAttr = btn.getAttribute('data-model-title');
        const modalTitle = modalCta.querySelector('.modal-title');
        if (modalTitle && titleAttr) {
          modalTitle.textContent = `Заявка на ${titleAttr}`;
        } else if (modalTitle) {
          modalTitle.textContent = 'Заказать звонок';
        }
      });
    });
  }

  // 5. Form submission demo prevention
  const forms = document.querySelectorAll('form');
  forms.forEach(form => {
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      alert('Спасибо! Ваша заявка успешно отправлена.');
      form.reset();
      const modal = bootstrap.Modal.getInstance(document.getElementById('modalCallback'));
      if (modal) modal.hide();
    });
  });
});
