<!DOCTYPE html>
<html lang="de">

<head>

    <head>
        <!-- Basic Meta -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow, noai, noimageai">

        <!-- Stylesheets & Icons -->
        <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
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
                    I’m a young, passionate programmer currently contributing on a voluntary basis.
                    Soon, I will be taking on freelance projects and delivering custom solutions for clients.
                </p>

                <p>Contact me if you have questions - I'll be happy to help. Currently, I am not available for freelance
                    projects.</p>
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
                        Experienced in building robust server-side applications with <strong>Laravel (PHP)</strong>,
                        creating APIs, managing databases, and implementing secure authentication systems.
                    </p>
                </div>

                <!-- Frontend Development -->
                <div class="item">
                    <div class="icon"><i class='bx bx-code-alt'></i></div>
                    <h4>Frontend Development</h4>
                    <p>
                        Skilled in <strong>React & Remix</strong>, <strong>TypeScript</strong>, <strong>CSS /
                            Sass</strong>,
                        and responsive UI design to deliver smooth and interactive user experiences.
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
                    modern and efficient web applications. I’m currently pursuing my goal of becoming
                    a freelance developer and taking on client projects.
                </p>
                <p>
                    In addition, I write a <a href="{{ $link['social']['blog'] }}" target="_blank"
                        rel="noopener">blog</a>
                    where I share insights on programming and technology. I’m also an active team member at
                    UtopiaGaming.
                </p>
                <p>
                    My work combines expertise in backend and frontend technologies, including Laravel, React, Remix,
                    TypeScript, and CSS/Sass, allowing me to deliver complete, high-quality solutions.
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
    <script src="{{ asset('/js/script.js') }}"></script>
</body>

</html>
