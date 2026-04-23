<?php include 'includes/header.php'; ?>

<header class="hero" id="home">
    <div class="overlay">
        <h1 id="hero-text">YOU DREAM IT</h1>
    </div>
</header>

<section id="about" class="about">
    <div class="container">
        <h2>About Dream Bouw Group</h2>

        <p><strong>Dream Bouw Group</strong> is a company built on experience, strong partnerships, and respect for
            every client.</p>

        <p>Over the years, we have been involved in numerous construction and engineering projects, working directly
            in project coordination, site organization, and cost optimization.</p>

        <p>This experience has taught us that the success of a project does not depend only on plans and materials,
            but above all on well-organized teams, professionalism, and responsibility toward the client.</p>

        <p><strong>Dream Bouw Group</strong> was born from the partnerships developed over time with companies and
            professional teams in the construction industry.</p>

        <p>These relationships have been built on trust, respect, and professionalism, and in many cases they have
            grown into strong long-term partnerships.</p>

        <p>Today, we bring together this experience to offer our clients quality, safety, and comfort in every
            project we deliver.</p>

        <p>For us, every construction project represents more than just a job — it is a responsibility and a promise
            that everything will be done correctly, durably, and to high standards.</p>

        <p class="firma">
            Vlad Maxim<br>
            Founder & CEO<br>
            Dream Bouw Group
        </p>
    </div>
</section>

<section id="services" class="section services">
    <div class="container">
        <h2>Services</h2>

        <div class="services-grid">

            <div class="service-card">
                <h3>Construction</h3>
                <p>High-quality construction solutions, from structural systems to full project execution, with
                    precision and durability.</p>
            </div>

            <div class="service-card">
                <h3>Project Management</h3>
                <p>Efficient coordination and planning to ensure successful project delivery from start to finish.</p>
            </div>

            <div class="service-card">
                <h3>Renovations</h3>
                <p>Transforming existing spaces with modern solutions and professional execution.</p>
            </div>

            <div class="service-card">
                <h3>Interior Design</h3>
                <p>Functional and modern interior spaces designed to combine comfort, aesthetics, and everyday
                    usability.</p>
            </div>

            <div class="service-card">
                <h3>Pool Houses</h3>
                <p>Custom outdoor structures designed for relaxation, functionality, and year-round use.</p>
            </div>

        </div>
    </div>
</section>

<section id="lgs" class="lgs">
    <div class="container">
        <h2>Light Gauge Steel (LGS)</h2>

        <p>
            Light Gauge Steel (LGS) is a modern construction system based on cold-formed steel profiles.
            These elements are precisely engineered and assembled to create a strong, stable structural frame.
        </p>

        <ul class="lgs-list">
            <li>High structural strength, calculated according to Eurocodes</li>
            <li>Excellent fire resistance (non-combustible material)</li>
            <li>High resistance to moisture, mold, and pests</li>
            <li>Stable over time — no cracking, shrinking, or warping</li>
            <li>Designed to withstand wind and structural loads</li>
        </ul>

        <p class="lgs-final">
            In short, LGS is not about building lighter — it’s about building smarter,
            with controlled quality and long-term durability.
        </p>
    </div>
</section>

<section id="projects" class="projects">
    <div class="container">
        <h2>Our Work</h2>

        <div class="projects-grid">

            <div class="project-card"
                data-images='["images/project1.jpg","images/project1-2.jpg","images/project1-3.jpg","images/project1-4.jpg"]'>
                <img src="images/project1.jpg" alt="">
            </div>

            <div class="project-card"
                data-images='["images/project2.jpg","images/project2-2.jpg","images/project2-3.jpg","images/project2-4.jpg"]'>
                <img src="images/project2.jpg" alt="">
            </div>

            <div class="project-card"
                data-images='["images/project3.jpg","images/project3-2.jpg","images/project3-3.jpg","images/project3-4.jpg"]'>
                <img src="images/project3.jpg" alt="">
            </div>

            <div class="project-card"
                data-images='["images/project4.jpg","images/project4-2.jpg","images/project4-3.jpg","images/project4-4.jpg"]'>
                <img src="images/project4.jpg" alt="">
            </div>

            <div class="project-card"
                data-images='["images/project5.jpg","images/project5-2.jpg","images/project5-3.jpg","images/project5-4.jpg"]'>
                <img src="images/project5.jpg" alt="">
            </div>

            <div class="project-card"
                data-images='["images/project6.jpg","images/project6-2.jpg","images/project6-3.jpg","images/project6-4.jpg"]'>
                <img src="images/project6.jpg" alt="">
            </div>

        </div>
    </div>
</section>

<section id="contact" class="section contact">
    <div class="container">
        <h2>Contact</h2>

        <p>Email: <a href="mailto:dreambouw@gmail.com">dreambouw@gmail.com</a></p>

        <form action="contact-handler.php" method="POST" class="contact-form">
            <div class="form-row">
                <input type="text" name="name" placeholder="Your name" required>
            </div>

            <div class="form-row">
                <input type="email" name="email" placeholder="Your email" required>
            </div>

            <div class="form-row">
                <input type="text" name="phone" placeholder="Your phone">
            </div>

            <div class="form-row">
                <textarea name="message" placeholder="Your message" rows="6" required></textarea>
            </div>

            <div class="form-row">
                <button type="submit">Send Message</button>
            </div>
        </form>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
