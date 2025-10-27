<footer>
    <div class="top">
        <div class="logo">
            <a>Just-Lab</a>
        </div>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="{{ $link['social']['blog'] }}" target="_blank" rel="noopener">Blog</a></li>
            <li><a href="#portfolio">Projects</a></li>
        </ul>
        <div class="social-links">
            <a href="{{ $link['social']['github'] }}" target="_blank" rel="noopener"><i class='bx bxl-github'></i></a>
            <a href="{{ $link['social']['malt'] }}" target="_blank" rel="noopener"><i class='bx bx-store'></i></a>
            <a href="{{ $link['social']['freelance'] }}" target="_blank" rel="noopener"><i class='bx bx-store'></i></a>
        </div>
    </div>

    <div class="separator"></div>

    <div class="bottom">
        <p>
            &copy; {{ date('Y') }} Just-Lab.de All rights reserved. Portfolio Template by AsmrProg.
        </p>
        <div class="links">
            <a href="{{ $link['legal']['imprint'] }}">Imprint</a>
            <a href="{{ $link['legal']['privacy'] }}">Privacy Policy</a>
        </div>
    </div>
</footer>
