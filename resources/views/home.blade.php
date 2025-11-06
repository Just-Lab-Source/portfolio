<!DOCTYPE html>
<html lang="de">

<head>

    <head>
        <!-- Basic Meta -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow, noai, noimageai">

        <!-- Stylesheets & Icons -->
        <link href="{{ asset('/libraries/boxicons/css/boxicons.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/css/globals.css') }}">
        <link rel="icon" type="image/png" href="{{ asset('/images/profile.png') }}">

        <!-- Open Graph Meta-Tags -->
        <meta property="og:type" content="{{ $seo['home']['og']['type'] }}">
        <meta property="og:title" content="{{ $seo['home']['title'] }}">
        <meta property="og:url" content="{{ $seo['home']['og']['url'] }}">
        <meta property="og:image" content="{{ asset($seo['home']['og']['image']) }}">
        <meta property="og:description" content="{{ $seo['home']['og']['description'] }}">

        <!-- SEO Meta-Tags -->
        <meta name="keywords" content="{{ $seo['home']['keywords'] }}">
        <meta name="description" content="{{ $seo['home']['description'] }}">

        <!-- Title -->
        <title>{{ $seo['home']['title'] }}</title>
    </head>

</head>

<body>

    <header>
        <x-layout.nav />

        <div class="main" id="main">
            <div class="left">
                <h5>Hey, I’m Michael</h5>
                <h3>I <span>specialize in</span> fullstack development</h3>
                <p>
                    I’m a young, passionate fullstack developer working with Laravel, React, and TypeScript.
                    Currently open for new client projects while continuing to grow and learn every day.
                </p>
                <a href="mailto:mail@just-lab.de">
                    <button>Get In Touch</button>
                </a>
            </div>
            <div class="right">
                <img src="{{ asset('/images/profile.png') }}">
            </div>
        </div>
    </header>

    <main>
        <div class="skills" id="skills">
            <h5>My Skills</h5>
            <h3>My Expertise</h3>
            <div class="skill-items">

                <!-- Backend Development -->
                <div class="item">
                    <div class="icon"><i class='bx bx-server'></i></div>
                    <h4>Backend Development</h4>
                    <p>
                        Skilled in developing backend applications with <strong>Laravel (PHP)</strong>,
                        working with middleware, API endpoints, databases, and user authentication.
                    </p>
                </div>

                <!-- Frontend Development -->
                <div class="item">
                    <div class="icon"><i class='bx bx-code-alt'></i></div>
                    <h4>Frontend Development</h4>
                    <p>
                        Skilled in <strong>React</strong>, <strong>Next.js</strong>, and <strong>Remix</strong> with
                        <strong>TypeScript</strong>, <strong>CSS / Sass</strong>, and responsive UI design.
                        I also work with <strong>Prisma</strong> and backend integrations to build modern, fullstack web
                        applications.
                    </p>
                </div>

                <!-- Fullstack Projects -->
                <div class="item">
                    <div class="icon"><i class='bx bx-network-chart'></i></div>
                    <h4>Fullstack Projects</h4>
                    <p>
                        Ability to integrate frontend and backend seamlessly, working on APIs,
                        database interactions, and deploying end-to-end applications.
                    </p>
                </div>

                <!-- Tools & Workflow -->
                <div class="item">
                    <div class="icon"><i class='bx bx-cog'></i></div>
                    <h4>Tools & Workflow</h4>
                    <p>
                        Experienced with <strong>Git / GitHub / GitLab</strong> for version control,
                        maintaining organized and efficient code, and familiar with basic workflows for deploying
                        projects.
                    </p>
                </div>

            </div>
        </div>

        <div class="about" id="about">
            <div class="left">
                <img src="{{ asset('/images/profile.png') }}">
            </div>
            <div class="right">
                <h5>About</h5>
                <h3>About Me</h3>
                <p>
                    I’m Michael, a Fullstack Developer based in Germany, passionate about creating
                    modern and efficient web applications. I’m a registered freelancer and actively
                    take on client projects, delivering tailored solutions according to project needs.
                </p>
                <p>
                    I enjoy learning new frameworks and technologies whenever needed to provide
                    quality results. I continuously improve my skills in both frontend and backend
                    development, working with tools like Laravel, React, Remix, NextJS, TypeScript, and CSS/Sass.
                </p>
                <p>
                    In addition, I write a <a href="{{ $link['social']['blog'] }}" target="_blank"
                        rel="noopener">blog</a>
                    where I share insights on programming and technology.
                    I work professionally as a freelancer for <a href="https://pein-gbr.de" target="_blank"
                        rel="noopener">Pein GbR</a>
                    and contribute on a voluntary basis at <a href="{{ $link['external-websites']['utopia-gaming'] }}"
                        target="_blank" rel="noopener">UtopiaGaming</a>.
                </p>
            </div>
        </div>

        <div class="portfolio" id="portfolio">
            <div class="header">
                <div class="info">
                    <h5>Recent Projects</h5>
                    <h3>My Portfolio</h3>
                </div>
                <button onclick="window.open('{{ $link['social']['github'] }}', '_blank')">
                    <i class='bx bxl-github'></i> Visit My GitHub
                </button>

            </div>

            <div class="portfo-items">

                <!-- UtopiaGaming -->
                <div class="item">
                    <img src="{{ asset('/images/utopiagaming.png') }}">
                    <div class="info">
                        <h4>UtopiaGaming</h4>
                        <p>
                            A website for the UtopiaGaming network, which includes hosting services and a Minecraft
                            radio
                            platform.
                        </p>
                        <a href="{{ $link['external-websites']['utopia-gaming'] }}" target="_blank">View Project <i
                                class='bx bx-link-external'></i></a>
                    </div>
                </div>

                <!-- This Portfolio -->
                <div class="item">
                    <img src="{{ asset('/images/portfolio.png') }}">
                    <div class="info">
                        <h4>This Portfolio</h4>
                        <p>
                            My personal portfolio website – the very page you are visiting right now!
                        </p>
                        <span>You’re here! <i class='bx bx-check-circle'></i></span>
                    </div>
                </div>

                <!-- Client Project -->
                <div class="item">
                    <img src="{{ asset('/images/soon.png') }}">
                    <div class="info">
                        <h4>A Secret Project</h4>
                        <p>
                            A large and extensive project currently in development. It’s being worked on carefully
                            and will be available soon.
                        </p>
                        <span>Coming Soon – In Development <i class='bx bx-time-five'></i></span>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <footer>
        <x-layout.footer />
    </footer>
</body>

</html>
