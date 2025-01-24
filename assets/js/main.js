document.addEventListener('DOMContentLoaded', () => {
    const loginButton = document.querySelector('.btn-login');
    const container = document.querySelector('.container');

    // Add subtle animation and interactivity
    loginButton.addEventListener('mouseenter', () => {
        loginButton.style.transform = 'scale(1.05)';
    });

    loginButton.addEventListener('mouseleave', () => {
        loginButton.style.transform = 'scale(1)';
    });

    // Add dynamic welcome message
    const welcomeMessage = document.querySelector('main h2');
    const hour = new Date().getHours();
    let greeting = 'Bienvenido';

    if (hour < 12) greeting = 'Buenos días';
    else if (hour < 18) greeting = 'Buenas tardes';
    else greeting = 'Buenas noches';

    welcomeMessage.textContent = `${greeting} Querido usuario`;

    // Simple particle background effect
    function createParticle() {
        const particle = document.createElement('div');
        particle.classList.add('particle');
        document.body.appendChild(particle);

        particle.style.left = `${Math.random() * 100}%`;
        particle.style.animationDuration = `${Math.random() * 3 + 2}s`;
        particle.style.opacity = Math.random().toString();

        particle.addEventListener('animationend', () => {
            particle.remove();
        });
    }

    // Create particles periodically
    setInterval(createParticle, 500);
});