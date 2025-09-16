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
        </div>
    </div>

    <div class="separator"></div>

    <div class="bottom">
        <p>
            &copy; {{ date('Y') }} Just-Lab.de All rights reserved.
        </p>
        <div class="links">
            <a href="/legal/imprint">Imprint</a>
            <a href="/legal/privacy">Privacy Policy</a>
        </div>
    </div>
</footer>
