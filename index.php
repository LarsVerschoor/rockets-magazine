<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, viewport-fit=cover"">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/main.js"></script>
    <title>Rockets Magazine</title>
</head>
<body>
<header>
    <h1>Raketten magazine</h1>
    <p>Een magazine website met informatie over een uitgebreide selectie van echte raketten. Van elke raket op deze website staat informatie over het maximum gewicht naar low-earth-orbit (capaciteit), de fabrikant, de herkomst, de lengte en het aantal lanceringen. Elke raket heeft een 1080x1080 resolutie foto en een korte beschrijving.</p>
</header>

<main>
    <section id="rockets">
        <h2>Alle raketten</h2>
        <img src="img/icon-refresh.svg" alt="Refresh lijst met raketten" id="img-refresh">
        <div id="rockets-container"></div>
    </section>

</main>

<footer>
    <a target="_blank" href="https://github.com/LarsVerschoor/rockets-magazine">github.com/LarsVerschoor/rockets-magazine</a>
</footer>

<dialog id="dialog">
    <div class="dialog-header">
        <h2 id="dialog-title"></h2>
        <button id="dialog-close"><img src="img/icon-close.svg" alt="Sluit popup"></button>
    </div>
    <div class="dialog-body" id="dialog-body">
        <img src="" alt="" id="dialog-img">
        <div>[Click image to view fullscreen]</div>
        <h3>Lanceringen</h3>
        <div id="dialog-launches"></div>
        <table class="dialog-track-record" id="dialog-track-record">
            <tbody>
            <tr>
                <td id="dialog-success"></td>
                <td id="dialog-failure"></td>
                <td id="dialog-partial-failure"></td>
            </tr>
            </tbody>
            <thead>
            <tr>
                <th>Succes</th>
                <th>Mislukt</th>
                <th>Deels mislukt</th>
            </tr>
            </thead>
        </table>
        <h3>Beschrijving</h3>
        <p id="dialog-description"></p>
        <h3>Gegevens</h3>
        <div id="dialog-manufacturer"></div>
        <div id="dialog-origin"></div>
        <div id="dialog-height"></div>
        <div id="dialog-max-payload"></div>
        <div id="dialog-status"></div>
        <button id="close">Sluiten</button>
    </div>
</dialog>
</body>
</html>