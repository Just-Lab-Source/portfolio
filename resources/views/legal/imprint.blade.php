<!DOCTYPE html>
<html lang="de">

<head>
    <!-- Basic Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noai, noimageai">

    <!-- Stylesheets & Icons -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/globals.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('/images/profile.png') }}">

    <!-- Open Graph Meta-Tags -->
    <meta property="og:type" content="{{ $seo['imprint']['og']['type'] }}">
    <meta property="og:title" content="{{ $seo['imprint']['title'] }}">
    <meta property="og:url" content="{{ $seo['imprint']['og']['url'] }}">
    <meta property="og:image" content="{{ asset($seo['imprint']['og']['image']) }}">
    <meta property="og:description" content="{{ $seo['imprint']['og']['description'] }}">

    <!-- SEO Meta-Tags -->
    <meta name="keywords" content="{{ $seo['imprint']['keywords'] }}">
    <meta name="description" content="{{ $seo['imprint']['description'] }}">

    <!-- Title -->
    <title>{{ $seo['imprint']['title'] }}</title>
</head>

<body>

    <x-layout.legal-section-nav />

    <main class="legal">
        <h1>Impressum</h1>

        <!-- Diensteanbieter -->
        <section>
            <h2 id="m46">Diensteanbieter</h2>
            <p>Malgorzata Pacharzyna</p>
            <p>Freeheit 11A</p>
            <p>24257 Schwartbuck</p>
            <p>Deutschland</p>
        </section>

        <!-- Kontakt -->
        <section>
            <h2 id="m56">Kontaktmöglichkeiten</h2>
            <p>E-Mail: <a href="mailto:mail@just-lab.de">mail@just-lab.de</a></p>
            <p>Telefon: <a href="tel:+4915780319562">+49 1578 0319562</a></p>
        </section>

        <!-- Text & Data Mining -->
        <section>
            <h2 id="m5234">Vorbehalt der Nutzung für Text und Data Mining</h2>
            <p>
                Der Inhaber dieser Website gestattet die Nutzung oder das Herunterladen von Inhalten dieser Website
                durch
                Dritte für die Entwicklung, das Training oder den Betrieb von künstlicher Intelligenz oder anderen
                maschinellen Lernsystemen ("Text und Data Mining") ausschließlich mit ausdrücklicher schriftlicher
                Zustimmung des Inhabers.
            </p>
            <p>
                Ohne eine solche Zustimmung ist es untersagt, die Inhalte für Text und Data Mining zu verwenden. Dies
                gilt auch dann, wenn auf der Website keine Meta-Angaben vorhanden sind, die entsprechende Verfahren
                aussperren.
            </p>
        </section>

        <!-- Haftung -->
        <section>
            <h2 id="m65">Haftungs- und Schutzrechtshinweise</h2>
            <p>
                <strong>Haftungsausschluss:</strong> Die Inhalte dieses Onlineangebotes wurden sorgfältig und nach
                unserem aktuellen Kenntnisstand erstellt, dienen jedoch nur der Information und entfalten keine
                rechtlich bindende Wirkung, sofern es sich nicht um gesetzlich verpflichtende Informationen handelt.
            </p>
            <p>
                <strong>Links auf fremde Webseiten:</strong> Inhalte fremder Webseiten, auf die wir direkt oder indirekt
                verweisen, liegen außerhalb unseres Verantwortungsbereiches. Für alle Inhalte und Nachteile aus der
                Nutzung dieser Informationen übernehmen wir keine Verantwortung.
            </p>
            <p>
                <strong>Urheberrechte und Markenrechte:</strong> Alle dargestellten Inhalte wie Texte, Fotos, Grafiken,
                Marken und Warenzeichen sind durch die jeweiligen Schutzrechte geschützt. Die Nutzung oder
                Vervielfältigung unterliegt unseren Rechten oder den Rechten der jeweiligen Urheber.
            </p>
            <p>
                <strong>Hinweise auf Rechtsverstöße:</strong> Sollten Sie Rechtsverstöße innerhalb unseres
                Internetauftritts bemerken, bitten wir um einen Hinweis. Rechtswidrige Inhalte und Links werden nach
                Kenntnisnahme unverzüglich entfernt.
            </p>
        </section>

        <!-- Bildrechte -->
        <section>
            <h2>Bildrechte / Urheberhinweis</h2>
            <p>Alle auf dieser Website verwendeten Bilder wurden von Michael Pacharzyna erstellt.</p>
            <p>Das Urheberrecht liegt bei Just-Lab.de. Jegliche Nutzung ohne ausdrückliche Genehmigung ist untersagt.
            </p>
        </section>

        <!-- Generator Hinweis -->
        <p class="seal">
            <a href="https://datenschutz-generator.de/"
                title="Rechtstext von Dr. Schwenke - für weitere Informationen bitte anklicken." target="_blank"
                rel="noopener noreferrer nofollow">
                Erstellt mit kostenlosem Datenschutz-Generator.de von Dr. Thomas Schwenke
            </a>
        </p>
    </main>

    <x-layout.footer />
    <script src="{{ asset('/js/script.js') }}"></script>
</body>

</html>
