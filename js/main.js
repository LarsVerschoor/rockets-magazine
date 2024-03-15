let container;
let dialogElement;
let dialogBodyElement;
let dialogTitleElement;
let dialogImgElement;
let dialogCloseIcon;
let dialogCloseButton;
let dialogLaunches;
let dialogSuccess;
let dialogFailure;
let dialogPartialFailure;
let dialogManufacturer;
let dialogOrigin;
let dialogHeight;
let dialogMaxPayload;
let dialogStatus;
let dialogDescription;
let refreshIcon;
let dialogTrackRecord;

let allRockets = [];
let rocketDetails = {};
let favoriteRockets = JSON.parse(localStorage.getItem('favoriteRockets')) ?? [];

const ajaxRequest = async (url, callbackSucces, callbackError) => {
    console.log(`AJAX request made to ${url}`);
    try {
        const response = await fetch(url);
        if (!response.ok) throw new Error(`HTTP error (${response.status}): ${response.statusText}`);
        if (callbackSucces) callbackSucces(await response.json());
    }
    catch (error) {
        if (callbackError) callbackError(error);
    }
}

const addFavoriteRocket = (rocketId) => {
    favoriteRockets.push(rocketId);
    console.log(favoriteRockets)
    localStorage.setItem('favoriteRockets', JSON.stringify(favoriteRockets));
}

const removeFavoriteRocket = (rocketId) => {
    const index = favoriteRockets.indexOf(rocketId);
    favoriteRockets.splice(index, 1);
    console.log(favoriteRockets)
    localStorage.setItem('favoriteRockets', JSON.stringify(favoriteRockets));
}

const displayRocketCards = () => {
    container.replaceChildren();
    allRockets.forEach((rocket) => {
        const favorite = favoriteRockets.includes(rocket.id);

        const newCard = document.createElement('article');
        if (favorite) newCard.classList.add('favorite');

        const newTitle = document.createElement('h3');
        newTitle.innerText = rocket.name;

        const newPayloadElement = document.createElement('div');
        newPayloadElement.classList.add('payload');
        newPayloadElement.innerText = `${Number(rocket.max_payload).toLocaleString()}kg capaciteit`;

        const newImage = document.createElement('img');
        newImage.setAttribute('src', `webservice/img/${rocket.image_lowres}`);
        newImage.setAttribute('alt', `Een foto van de raket "${rocket.name}"`);
        newImage.setAttribute('loading', 'lazy');

        const addToFavoritesButton = document.createElement('button');
        addToFavoritesButton.classList.add('favorite');
        addToFavoritesButton.innerText = favorite ? 'Verwijder uit favorieten' : 'Voeg toe aan favorieten';
        addToFavoritesButton.dataset.rocketId = rocket.id;
        addToFavoritesButton.dataset.action = favorite ? 'removeFavorite' : 'addFavorite';

        const newSelectButton = document.createElement('button');
        newSelectButton.classList.add('select');
        newSelectButton.innerText = 'Meer info';
        newSelectButton.setAttribute('aria-label', `Meer info over ${rocket.name}`);
        newSelectButton.dataset.rocketId = rocket.id;
        newSelectButton.dataset.action = 'select';

        newCard.appendChild(newTitle);
        newCard.appendChild(newPayloadElement);
        newCard.appendChild(newImage);
        newCard.appendChild(addToFavoritesButton);
        newCard.appendChild(newSelectButton);
        container.appendChild(newCard);
    })
}

const loadHighResImage = (url, callback) => {
    const image = new Image();
    image.addEventListener('load', () => callback(image));
    image.src = url;
}

const openModal = (rocketDetails) => {
    const {
        name, image_lowres, image_highres, total_launches, successful_launches, failed_launches,
        partially_failed_launches, manufacturer, origin, height, max_payload, status, description
    } = rocketDetails;

    const show = () => {
        dialogElement.showModal();
        dialogBodyElement.scrollTo(0, 0, 'instant');
    }
    dialogImgElement.addEventListener('load', show, { once: true });

    dialogTitleElement.innerText = name;
    dialogImgElement.setAttribute('src', `webservice/img/${image_lowres}`)
    dialogImgElement.setAttribute('alt', `Een foto van de raket "${name}"`);
    dialogLaunches.innerText = `Totaal ${ total_launches } lanceringen`
    dialogSuccess.innerText = successful_launches;
    dialogFailure.innerText = failed_launches;
    dialogPartialFailure.innerText = partially_failed_launches;
    dialogManufacturer.innerText = `Fabrikant: ${manufacturer}`;
    dialogOrigin.innerText = `Herkomst: ${origin}`;
    dialogHeight.innerText = `Hoogte: ${height}m`;
    dialogMaxPayload.innerText = `Capaciteit: ${Number(max_payload).toLocaleString()}kg`;
    dialogStatus.innerText = `Status: ${status}`;
    dialogDescription.innerText = description;
    dialogTrackRecord.setAttribute('aria-label',
        `${successful_launches} successen, 
        ${failed_launches} mislukkingen, 
        ${partially_failed_launches} gedeeltelijke mislukkingen`
    );

    loadHighResImage(`webservice/img/${image_highres}`, (image) => {
        dialogImgElement.setAttribute('src', image.src);
    });
}

const rocketCardClickHandler = async (e) => {
    const clickedElement = e.target;
    if (clickedElement.nodeName !== 'BUTTON') return;

    if (clickedElement.dataset.action === 'select') {
        const targetRocketId = clickedElement.dataset.rocketId;

        // Check if data has already been fetched in the past
        if (rocketDetails[targetRocketId]) {
            openModal(rocketDetails[targetRocketId]);
            return;
        }

        ajaxRequest(`webservice?id=${targetRocketId}`, (details) => {
            rocketDetails[details.id] = details;
            openModal(details);
        });
    }
    else if (clickedElement.dataset.action === 'addFavorite') {
        addFavoriteRocket(clickedElement.dataset.rocketId);
        displayRocketCards();
    }
    else if (clickedElement.dataset.action === 'removeFavorite') {
        removeFavoriteRocket(clickedElement.dataset.rocketId);
        displayRocketCards();
    }
}

const displayRocketsError = (error) => {
    container.replaceChildren();

    container.classList.add('error-container');
    const newErrorElement = document.createElement('span');
    newErrorElement.classList.add('error');
    newErrorElement.innerText = error;
    container.appendChild(newErrorElement);
}

const init = () => {
    container = document.getElementById('rockets-container');
    dialogElement = document.getElementById('dialog');
    dialogBodyElement = document.getElementById('dialog-body');
    dialogTitleElement = document.getElementById('dialog-title');
    dialogImgElement = document.getElementById('dialog-img');
    dialogCloseIcon = document.getElementById('dialog-close');
    dialogCloseButton = document.getElementById('close');
    dialogLaunches = document.getElementById('dialog-launches');
    dialogSuccess = document.getElementById('dialog-success');
    dialogFailure = document.getElementById('dialog-failure');
    dialogPartialFailure = document.getElementById('dialog-partial-failure');
    dialogManufacturer = document.getElementById('dialog-manufacturer');
    dialogOrigin = document.getElementById('dialog-origin');
    dialogHeight = document.getElementById('dialog-height');
    dialogMaxPayload = document.getElementById('dialog-max-payload');
    dialogStatus = document.getElementById('dialog-status');
    dialogDescription = document.getElementById('dialog-description');
    refreshIcon = document.getElementById('img-refresh');
    dialogTrackRecord = document.getElementById('dialog-track-record');

    container.addEventListener('click', rocketCardClickHandler);
    dialogCloseIcon.addEventListener('click', () => dialogElement.close());
    dialogCloseButton.addEventListener('click', () => dialogElement.close());
    dialogImgElement.addEventListener('click', () => {
        if (!document.fullscreenElement) {
            console.log('test')
            if (dialogImgElement.requestFullscreen) dialogImgElement.requestFullscreen();
            dialogImgElement.classList.add('fullscreen');
            return;
        }
        document.exitFullscreen();
    })

    ajaxRequest('webservice/', (rockets) => {
        allRockets = rockets;
        displayRocketCards();
    }, displayRocketsError);

    refreshIcon.addEventListener('click', () => ajaxRequest('webservice/', displayRocketCards, displayRocketsError));

    document.addEventListener('click', (e) => {
        if (e.target.nodeName !== 'DIALOG') return;
        dialogElement.close();
    });
}

window.addEventListener('load', init);