const getRocketsData = async () => {
    const response = await fetch('webservice/');
    return await response.json();
}

const displayRocketCards = (rockets) => {
    const container = document.getElementById('rockets-container');
    rockets.forEach((rocket) => {
        const newCard = document.createElement('article');

        const newTitle = document.createElement('h3');
        newTitle.innerText = rocket.name;

        const newPayloadElement = document.createElement('div');
        newPayloadElement.classList.add('payload');
        newPayloadElement.innerText = `${rocket.max_payload.toLocaleString()}kg capaciteit`;

        const newImage = document.createElement('img');
        newImage.setAttribute('src', `webservice/img/${rocket.img_lowres}`);
        newImage.setAttribute('loading', 'lazy');

        const newSelectButton = document.createElement('button');
        newSelectButton.classList.add('select');
        newSelectButton.innerText = 'Meer info';
        newSelectButton.dataset.rocketId = rocket.id;

        newCard.appendChild(newTitle);
        newCard.appendChild(newPayloadElement);
        newCard.appendChild(newImage);
        newCard.appendChild(newSelectButton);
        container.appendChild(newCard);
    })
}

const getRocketDetails = async (rocketId) => {
    const response = await fetch(`webservice?id=${rocketId}`);
    return await response.json();
}

const openModal = (rocketDetails) => {
    console.table(rocketDetails);
}

const rocketCardClickHandler = async (e) => {
    const clickedCard = e.target;
    if (clickedCard.nodeName !== 'BUTTON') return;

    const rocketId = clickedCard.dataset.rocketId;
    const details = await getRocketDetails(rocketId);
    openModal(details);
}

const init = async () => {
    const rocketsData = await getRocketsData();
    displayRocketCards(rocketsData);

    document.getElementById('rockets-container').addEventListener('click', rocketCardClickHandler);
}

window.addEventListener('load', init);