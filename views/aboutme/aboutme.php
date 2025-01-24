<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javier Teherán Magallanez - Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/celularesphppuro/assets/css/aboutme.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <img src="/celularesphppuro/assets/images/perfil.webp" 
                 alt="Javier Teherán" 
                 class="profile-image">
            <h1>Javier Teherán Magallanez</h1>
            <h2><i class="fas fa-code"></i> Ingeniero en Sistemas</h2>
        </div>
    </header>

    <main class="container">
        <section id="about" class="section">
            <h2 class="section-title"><i class="fas fa-user"></i> Acerca de Mí</h2>
            <p>Soy Egresado en Ingeniería en Sistemas con más de 2 años de experiencia en el desarrollo de software. Me especializo en tecnologías modernas y soluciones innovadoras. Como desarrollador Full Stack, he gestionado todo el ciclo de vida de proyectos, desde la recolección de requerimientos y análisis hasta el desarrollo, despliegue, soporte y actualizaciones de software. Además, cuento con experiencia en administración de VPS en Linux y en entornos de hosting compartidos. Estuve trabajando por 2 años en el Centro de Innovación desarrollando software para uso de la universidad.</p>
        </section>

        <section id="skills" class="section">
            <h2 class="section-title"><i class="fas fa-tools"></i> Habilidades</h2>
            <div class="skills-grid">
                <div class="skill-item">
                    <i class="fas fa-cloud-upload-alt"></i>
                    <h3>Despliegue</h3>
                    <p>GitHub, GitLab, Hosting,vps</p>
                </div>
                <div class="skill-item">
                    <i class="fas fa-code"></i>
                    <h3>Lenguajes</h3>
                    <p>JavaScript, PHP, Python</p>
                </div>
                <div class="skill-item">
                    <i class="fas fa-laptop-code"></i>
                    <h3>Frameworks</h3>
                    <p>Laravel, Vue.js, React </p>
                </div>
                <div class="skill-item">
                    <i class="fas fa-database"></i>
                    <h3>Bases de Datos</h3>
                    <p>MySQL, PostgreSQL,MongoDB</p>
                 </div>
            </div>
        </section>

        <section id="experience" class="section">
            <h2 class="section-title"><i class="fas fa-briefcase"></i> Experiencia</h2>
            <div class="job">
            <h3><i class="fas fa-laptop"></i> Desarrollador de Software</h3>
            <p>Centro de Innovación - Fundación Universitario Tecnológico Comfenalco</p>
            <p>Feb 2023 - Dic 2024</p>
            </div>
            <div class="job">
            <h3><i class="fas fa-chalkboard-teacher"></i> Monitor de Apoyo</h3>
            <p>Tecnológico Comfenalco</p>
            <p>Feb 2022 - Jun 2022</p>
            </div>
        </section>

        <section id="gallery" class="section">
            <h2 class="section-title"><i class="fas fa-image"></i> Galería</h2>
            <div class="gallery">
                <div class="gallery-item">
                    <img src="/celularesphppuro/assets/images/compañeros.webp" 
                         alt="Compañeros del Centro Innova">
                </div>
                <div class="gallery-item">
                    <iframe 
                        src="https://www.instagram.com/reel/CzrGr5tg6nX/embed" 
                        frameborder="0" 
                        allowfullscreen
                        style="border:none;width:100%;height:500px;"
                    ></iframe>
                </div>
            </div>
        </section>
    </main>
    <section id="contact" class="section">
    <h2 class="section-title"><i class="fas fa-envelope"></i> Contáctame</h2>
    <form action="https://formspree.io/f/xnnjqloe" method="post" class="contact-form">
        <div class="form-group">
            <label for="name"><i class="fas fa-user"></i> Nombre</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email"><i class="fas fa-envelope"></i> Correo Electrónico</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="message"><i class="fas fa-comment"></i> Mensaje</label>
            <textarea id="message" name="message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn"><i class="fas fa-paper-plane"></i> Enviar</button>
    </form>
</section>
    <footer class="footer">
        <p>
            <i class="fas fa-envelope"></i> javierteheran19@gmail.com | 
            <i class="fas fa-phone"></i> (+57) 3135044556
            | <i class="fab fa-whatsapp"></i> <a href="https://wa.me/573135044556" target="_blank">WhatsApp</a>
        </p>
    </footer>

    <script src="/celularesphppuro/assets/js/aboutme.js"></script>
</body>
</html>
