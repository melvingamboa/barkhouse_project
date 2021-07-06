const filters = document.querySelectorAll('.filters .item');

for (const filter of filters) {
  filter.addEventListener('click', (e) => {
    const parent = e.target.closest('.item');

    for (const filter of filters) {
      if (filter !== parent) {
        const item = Array.from(filter.classList);
        if (item.includes('active')) {
          filter.classList.remove('active');
        }
      }
    }

    if (Array.from(parent.classList).includes('active')) {
      parent.classList.remove('active');
    } else {
      parent.classList.add('active');
    }
  });
}
