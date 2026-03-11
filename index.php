<?php
// ============================================================
// AROSHA MAHAGEDARA — PROFESSIONAL PORTFOLIO
// ============================================================
$sent = isset($_GET['sent']) ? (int)$_GET['sent'] : -1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Arosha Mahagedara — 2nd Year Computer Science Student from Kandy, Sri Lanka. Skilled in PHP, Web Development, MySQL and more." />
  <title>Arosha Mahagedara | Computer Science Student</title>
  <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>A</text></svg>" />
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>

<!-- ===== NAVBAR ===== -->
<nav class="navbar" id="navbar">
  <a href="#hero" class="nav-logo" id="logo">Arosha<em>.</em></a>
  <ul class="nav-links" id="nav-links">
    <li><a href="#about" id="nav-about">About</a></li>
    <li><a href="#skills" id="nav-skills">Skills</a></li>
    <li><a href="#education" id="nav-education">Education</a></li>
    <li><a href="#experience" id="nav-experience">Experience</a></li>
    <li><a href="#projects" id="nav-projects">Projects</a></li>
    <li><a href="#contact" id="nav-contact" class="nav-cta">Hire Me</a></li>
  </ul>
  <button class="hamburger" id="hamburger" aria-label="Menu">
    <span></span><span></span><span></span>
  </button>
</nav>

<!-- ===== HERO ===== -->
<section id="hero">

  <!-- Left -->
  <div class="hero-left">
    <div class="hero-status">
      <span class="hero-status-dot"></span>
      Available for Internships
    </div>

    <p class="hero-intro">Hello, I'm</p>

    <h1 class="hero-name">
      Arosha
      <span>Mahagedara</span>
    </h1>

    <p class="hero-role">
      <b>Computer Science Student</b> &nbsp;·&nbsp; 2nd Year
    </p>

    <p class="hero-desc">
      Detail-oriented CS student from Kandy, Sri Lanka with a passion for
      server-side development and database management. Building clean,
      efficient web applications one project at a time.
    </p>

    <div class="hero-actions">
      <a href="#projects" class="btn-primary" id="view-work-btn">View My Work</a>
      <a href="#contact" class="btn-outline" id="contact-btn">Get In Touch</a>
    </div>

    <div class="hero-divider"></div>

    <div class="hero-contacts">
      <a href="mailto:arosh1126@gmail.com" class="hero-contact-item" id="hero-email">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
        </svg>
        arosh1126@gmail.com
      </a>
      <a href="https://linkedin.com/in/arosha-mahagedara-32b524336" target="_blank" rel="noopener" class="hero-contact-item" id="hero-linkedin">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/>
        </svg>
        linkedin.com/in/arosha-mahagedara
      </a>
      <span class="hero-contact-item" id="hero-location">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/>
        </svg>
        Kandy, Sri Lanka
      </span>
    </div>
  </div>

  <!-- Right — Photo -->
  <div class="hero-right">
    <img src="images/arosha.jpg" alt="Arosha Mahagedara" class="hero-photo" />
    <div class="hero-photo-overlay"></div>
    <div class="hero-photo-tag">
      <div class="hero-photo-tag-name">Arosha Mahagedara</div>
      <div class="hero-photo-tag-role">CS Student · Kandy</div>
    </div>
  </div>

  <div class="scroll-hint">
    <span class="scroll-line"></span>
    Scroll
  </div>
</section>

<!-- ===== ABOUT ===== -->
<section id="about">
  <div class="container">
    <div class="about-grid">

      <!-- Image -->
      <div class="about-image-wrap reveal" id="about-image-wrap">
        <div class="about-image-frame"></div>
        <img src="images/arosha.jpg" alt="Arosha Mahagedara" class="about-image" />
        <div class="about-exp-pill">
          <div class="num">2+</div>
          <div class="lbl">Years of<br>Study</div>
        </div>
      </div>

      <!-- Text -->
      <div class="about-text reveal" id="about-text">
        <div class="section-label">About Me</div>
        <h2 class="section-title">Passionate about building with code</h2>

        <p>
          I'm a 21-year-old Computer Science student currently in my 2nd year at
          Asia Pacific Institute of Information Technology (APIIT), Kandy, Sri Lanka.
          I have a strong foundation in backend development with PHP and MySQL,
          and I enjoy building practical, efficient web applications.
        </p>
        <p>
          Alongside my academic journey, I've gained real-world experience through
          internships and freelance work — from managing digital marketing campaigns
          to designing brand identities for local businesses. I'm quick to adapt,
          eager to learn, and committed to delivering quality work.
        </p>

        <div class="about-details">
          <div class="about-detail-item">
            <label>Full Name</label>
            <span>Arosha Mahagedara</span>
          </div>
          <div class="about-detail-item">
            <label>Age</label>
            <span>21 Years</span>
          </div>
          <div class="about-detail-item">
            <label>Location</label>
            <span>Kandy, Sri Lanka</span>
          </div>
          <div class="about-detail-item">
            <label>Phone</label>
            <span>0741 311 003</span>
          </div>
          <div class="about-detail-item">
            <label>Email</label>
            <span>arosh1126@gmail.com</span>
          </div>
          <div class="about-detail-item">
            <label>Status</label>
            <span>Open to Opportunities</span>
          </div>
        </div>

        <a href="#contact" class="btn-primary" id="about-contact-btn">Get In Touch</a>
      </div>
    </div>
  </div>
</section>

<!-- ===== SKILLS ===== -->
<section id="skills">
  <div class="container">
    <div class="skills-layout">

      <!-- Left intro + tags -->
      <div class="reveal" id="skills-intro">
        <div class="section-label">Skills</div>
        <h2 class="section-title">Technologies I work with</h2>
        <div class="skills-intro">
          <p>
            Through academic coursework and personal projects, I've built
            a solid foundation in both backend development and frontend markup.
          </p>
          <p>
            I'm continually expanding my skill set and keeping up with
            modern development practices.
          </p>
        </div>
        <div class="skills-tags">
          <span class="skill-tag featured">PHP</span>
          <span class="skill-tag featured">MySQL</span>
          <span class="skill-tag featured">HTML / CSS</span>
          <span class="skill-tag">C Language</span>
          <span class="skill-tag">Java</span>
          <span class="skill-tag">Tailwind CSS</span>
          <span class="skill-tag">Figma</span>
          <span class="skill-tag">Git &amp; GitHub</span>
          <span class="skill-tag">Kotlin</span>
        </div>
      </div>

      <!-- Right — Skill bars -->
      <?php
      $skills = [
        ['name' => 'PHP',         'pct' => 80],
        ['name' => 'HTML & CSS',  'pct' => 85],
        ['name' => 'MySQL',       'pct' => 78],
        ['name' => 'C Language',  'pct' => 70],
        ['name' => 'Java',        'pct' => 60],
        ['name' => 'Git & GitHub','pct' => 65],
        ['name' => 'Figma',       'pct' => 62],
        ['name' => 'Tailwind CSS','pct' => 55],
      ];
      ?>
      <div class="skills-bars reveal" id="skills-bars">
        <?php foreach ($skills as $s): ?>
        <div class="skill-row">
          <div class="skill-row-header">
            <span class="skill-row-name"><?= $s['name'] ?></span>
            <span class="skill-row-pct"><?= $s['pct'] ?>%</span>
          </div>
          <div class="skill-bar-track">
            <div class="skill-bar-fill" data-width="<?= $s['pct'] ?>%"></div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</section>

<!-- ===== EDUCATION ===== -->
<section id="education">
  <div class="container">
    <div class="timeline-grid">

      <div class="reveal" id="edu-intro">
        <div class="section-label">Education</div>
        <h2 class="section-title">Academic Background</h2>
        <div class="section-intro">
          <p>
            My academic journey has provided a strong theoretical and practical
            foundation in computer science, covering programming, databases,
            networking, and software development.
          </p>
        </div>
      </div>

      <?php
      $education = [
        [
          'date'  => '2024 — Present',
          'title' => 'Bachelor of Computer Science',
          'org'   => 'Asia Pacific Institute of Information Technology (APIIT) · Kandy, Sri Lanka',
          'items' => ['Currently in 2nd Year', 'Focus on backend development & databases'],
        ],
        [
          'date'  => '2023 — 2024',
          'title' => 'Diploma of Computer Science',
          'org'   => 'Australian College of Business and Technology · Kandy, Sri Lanka',
          'items' => ['Completed with distinction'],
        ],
      ];
      ?>

      <div class="timeline-list reveal" id="edu-list">
        <?php foreach ($education as $i => $e): ?>
        <div class="timeline-item" id="edu-<?= $i ?>">
          <div class="timeline-date"><?= $e['date'] ?></div>
          <div class="timeline-title"><?= $e['title'] ?></div>
          <div class="timeline-org"><?= $e['org'] ?></div>
          <ul class="timeline-list-items">
            <?php foreach ($e['items'] as $item): ?>
            <li><?= $item ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</section>

<!-- ===== EXPERIENCE ===== -->
<section id="experience">
  <div class="container">
    <div class="timeline-grid">

      <div class="reveal" id="exp-intro">
        <div class="section-label">Experience</div>
        <h2 class="section-title">Work History</h2>
        <div class="section-intro">
          <p>
            Professional experience spanning digital marketing, administrative
            support, and freelance creative work — building real-world skills
            alongside academic study.
          </p>
        </div>
      </div>

      <?php
      $experiences = [
        [
          'date'  => 'May 2024 — Sep 2024',
          'title' => 'Digital Marketing & Administrative Intern',
          'org'   => 'Benthota Bake House (Pvt) Ltd · Dambulla, Sri Lanka · Remote',
          'items' => [
            'Created and managed social media content and online marketing posts',
            'Assisted in digital marketing campaigns and online promotions',
            'Handled Excel data entry, maintained records, and prepared reports',
            'Prepared official documents and supported business documentation',
          ],
        ],
        [
          'date'  => 'Sep 2023 — Jan 2024',
          'title' => 'Freelance Digital & Design Assistant',
          'org'   => 'The Burger Hub · Kandy, Sri Lanka',
          'items' => [
            'Designed brand logos and visual content for business identity',
            'Managed social media pages and created promotional content',
            'Developed digital marketing materials to increase brand visibility',
            'Worked independently while consistently meeting deadlines',
          ],
        ],
      ];
      ?>

      <div class="timeline-list reveal" id="exp-list">
        <?php foreach ($experiences as $i => $exp): ?>
        <div class="timeline-item" id="exp-<?= $i ?>">
          <div class="timeline-date"><?= $exp['date'] ?></div>
          <div class="timeline-title"><?= $exp['title'] ?></div>
          <div class="timeline-org"><?= $exp['org'] ?></div>
          <ul class="timeline-list-items">
            <?php foreach ($exp['items'] as $item): ?>
            <li><?= $item ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</section>

<!-- ===== PROJECTS ===== -->
<section id="projects">
  <div class="container">
    <div class="projects-header">
      <div class="reveal" id="proj-header">
        <div class="section-label">Projects</div>
        <h2 class="section-title" style="margin-bottom:0;">Selected Work</h2>
      </div>
    </div>

    <?php
    $projects = [
      [
        'num'    => '01',
        'cat'    => 'Web Application',
        'title'  => 'NoteHub — Smart Notes Keeper',
        'desc'   => 'A full-stack notes management web application. Features secure user authentication, complete CRUD operations, and a well-structured MySQL database designed for scalability and performance.',
        'techs'  => ['PHP', 'MySQL', 'HTML', 'CSS'],
        'status' => 'progress',
        'label'  => 'In Progress',
        'period' => '2025 — 2026',
      ],
      [
        'num'    => '02',
        'cat'    => 'Android Mobile App',
        'title'  => 'Notes App — Kotlin Android',
        'desc'   => 'A fully functional Android notes application built with Kotlin and Jetpack Compose. Features a login and sign-up system, a dashboard for managing notes, and an add-note screen. Supports both light and dark themes via a custom ThemeManager.',
        'techs'  => ['Kotlin', 'Jetpack Compose', 'Android', 'Material Design'],
        'status' => 'progress',
        'label'  => 'In Progress',
        'period' => '2025 — 2026',
      ],
      [
        'num'    => '03',
        'cat'    => 'Portfolio Website',
        'title'  => 'Personal Portfolio',
        'desc'   => 'This portfolio — a fully custom, responsive personal website built with PHP and HTML/CSS. Clean design, PHP-powered contact form, and seamless XAMPP integration.',
        'techs'  => ['PHP', 'HTML', 'CSS', 'JavaScript'],
        'status' => 'live',
        'label'  => 'Live',
        'period' => '2026',
      ],
      [
        'num'    => '04',
        'cat'    => 'Brand Identity',
        'title'  => 'Brand Design — The Burger Hub',
        'desc'   => 'Freelance brand identity project encompassing logo design, social media content creation, and promotional materials to improve the restaurant\'s online presence.',
        'techs'  => ['Figma', 'Branding', 'Social Media'],
        'status' => 'done',
        'label'  => 'Completed',
        'period' => '2023 — 2024',
      ],
    ];
    ?>

    <div class="projects-grid reveal" id="projects-grid">
      <?php foreach ($projects as $i => $p): ?>
      <div class="project-card" id="project-<?= $i ?>">
        <div class="project-number"><?= $p['num'] ?></div>
        <div class="project-cat"><?= $p['cat'] ?> &nbsp;·&nbsp; <?= $p['period'] ?></div>
        <div class="project-title"><?= $p['title'] ?></div>
        <div class="project-desc"><?= $p['desc'] ?></div>
        <div style="display:flex;gap:0.6rem;flex-wrap:wrap;align-items:center;">
          <?php foreach ($p['techs'] as $t): ?>
          <span class="project-tech"><?= $t ?></span>
          <?php endforeach; ?>
          <span class="project-status <?= $p['status'] ?>">
            <span class="project-status-dot"></span>
            <?= $p['label'] ?>
          </span>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ===== CONTACT ===== -->
<section id="contact">
  <div class="container">
    <div class="contact-layout">

      <!-- Info -->
      <div class="reveal" id="contact-info">
        <div class="section-label">Contact</div>
        <h2 class="section-title">Let's work together</h2>
        <div class="contact-info">
          <p>
            Whether you have an internship opportunity, a freelance project,
            or just want to connect — I'd love to hear from you.
          </p>

          <div class="contact-lines">

            <a href="mailto:arosh1126@gmail.com" class="contact-line" id="contact-email-link">
              <div class="contact-line-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
                </svg>
              </div>
              <div>
                <div class="contact-line-label">Email</div>
                <div class="contact-line-value">arosh1126@gmail.com</div>
              </div>
            </a>

            <a href="tel:+940741311003" class="contact-line" id="contact-phone-link">
              <div class="contact-line-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.99 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.9 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
                </svg>
              </div>
              <div>
                <div class="contact-line-label">Phone</div>
                <div class="contact-line-value">+94 74 131 1003</div>
              </div>
            </a>

            <a href="https://linkedin.com/in/arosha-mahagedara-32b524336" target="_blank" rel="noopener" class="contact-line" id="contact-linkedin-link">
              <div class="contact-line-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/>
                </svg>
              </div>
              <div>
                <div class="contact-line-label">LinkedIn</div>
                <div class="contact-line-value">arosha-mahagedara</div>
              </div>
            </a>

            <div class="contact-line" id="contact-location-item">
              <div class="contact-line-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/>
                </svg>
              </div>
              <div>
                <div class="contact-line-label">Location</div>
                <div class="contact-line-value">Kandy, Sri Lanka</div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!-- Form -->
      <div class="contact-form-wrap reveal" id="contact-form-wrap">
        <?php if ($sent === 1): ?>
        <div class="form-success show">Message sent successfully! I'll get back to you soon.</div>
        <?php endif; ?>

        <form action="contact.php" method="POST" id="contact-form" novalidate>
          <div class="form-row">
            <div class="form-group">
              <label for="name">Full Name</label>
              <input type="text" id="name" name="name" placeholder="Your name" required autocomplete="name" />
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" placeholder="your@email.com" required autocomplete="email" />
            </div>
          </div>
          <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" placeholder="What is this about?" />
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Tell me about your project or opportunity..." required></textarea>
          </div>
          <button type="submit" class="btn-submit" id="submit-btn">Send Message</button>
        </form>
      </div>

    </div>
  </div>
</section>

<!-- ===== FOOTER ===== -->
<footer>
  <div class="container">
    <div class="footer-inner">
      <div class="footer-logo">Arosha<em>.</em></div>
      <p class="footer-copy">&copy; <?= date('Y') ?> Arosha Mahagedara. All rights reserved.</p>
      <div class="footer-links">
        <a href="mailto:arosh1126@gmail.com" id="footer-email">Email</a>
        <a href="https://linkedin.com/in/arosha-mahagedara-32b524336" target="_blank" rel="noopener" id="footer-linkedin">LinkedIn</a>
        <a href="tel:+940741311003" id="footer-phone">Phone</a>
      </div>
    </div>
  </div>
</footer>

<script src="js/script.js"></script>
</body>
</html>
