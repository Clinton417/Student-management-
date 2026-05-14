function confirmDelete() {
    return confirm("Are you sure you want to delete this student?");
}

document.addEventListener('DOMContentLoaded', function () {
    if (document.querySelector('.bubble-bg')) {
        createBubbles(18);
    }
});

function createBubbles(count) {
    const container = document.querySelector('.bubble-bg');
    if (!container) {
        return;
    }

    for (let i = 0; i < count; i++) {
        const bubble = document.createElement('div');
        bubble.className = 'bubble';
        const size = Math.floor(Math.random() * 70) + 30;
        bubble.style.width = `${size}px`;
        bubble.style.height = `${size}px`;
        bubble.style.left = `${Math.random() * 100}%`;
        bubble.style.bottom = `${-size}px`;
        bubble.style.background = `rgba(255,255,255,${Math.random() * 0.18 + 0.12})`;
        bubble.style.animationDuration = `${Math.random() * 18 + 10}s`;
        bubble.style.animationDelay = `${Math.random() * 5}s`;
        container.appendChild(bubble);
    }
}
