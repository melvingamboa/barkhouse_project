const menus = document.querySelectorAll('.navbar-nav.upper .nav-link');
const dropdowns = document.querySelectorAll('.dropdown-content');

for (const menu of menus) {
  menu.addEventListener('click', (e) => {
    for (const dropdown of dropdowns) {
      dropdown.classList.remove('active');
    }

    for (const menu of menus) {
      const icon = menu.querySelector('i');
      icon.classList.add('icofont-rounded-down');
      icon.classList.remove('icofont-rounded-up');
    }

    const parent = e.target.closest('.nav-link');
    const name = parent.dataset.target;
    const icon = parent.querySelector('i');
    const dropdown = document.querySelector(`.dropdown-content.${name}`);

    icon.classList.add('icofont-rounded-up');
    icon.classList.remove('icofont-rounded-down');
    dropdown.classList.add('active');
  });
}
