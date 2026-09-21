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

const rotatingImage = document.querySelector('.about-rotating-image');
const aboutImages = [
    '/assets/img/selfie-1.jpg',
    '/assets/img/selfie-2.jpg',
    '/assets/img/selfie-3.jpg'
];

if (rotatingImage && aboutImages.length > 1) {
    Promise.all(aboutImages.map(source => new Promise(resolve => {
        const image = new Image();
        image.onload = () => resolve(source);
        image.onerror = () => resolve(null);
        image.src = source;
    }))).then(loadedImages => {
        const availableImages = loadedImages.filter(Boolean);

        if (availableImages.length < 2) {
            return;
        }

        let imageIndex = 0;

        window.setInterval(() => {
            rotatingImage.style.opacity = '0';

            window.setTimeout(() => {
                imageIndex = (imageIndex + 1) % availableImages.length;
                rotatingImage.src = availableImages[imageIndex];
                rotatingImage.style.opacity = '1';
            }, 450);
        }, 5000);
    });
}