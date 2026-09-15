document.querySelectorAll('.filter-btn').forEach(button => {
    button.addEventListener('click', () => {
        document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');

        const filter = button.getAttribute('data-filter');

        document.querySelectorAll('.project-card').forEach(card => {
            const categories = card.getAttribute('data-category').split('|');

            if (filter === 'all' || categories.includes(filter)) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    });
});

const filterFromUrl = new URLSearchParams(window.location.search).get('filter');
const filterButton = [...document.querySelectorAll('.filter-btn')]
    .find(button => button.getAttribute('data-filter') === filterFromUrl);

if (filterButton) {
    filterButton.click();
}