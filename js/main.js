const getRocketsData = async () => {
    const response = await fetch('webservice/');
    return await response.json();
}

const displayRocketCards = (rockets) => {
    const container = document.getElementById('rockets-container');
    rockets.forEach((rocket) => {
        const newCard = document.createElement('div');

        const newTitle = document.createElement('h3');
        newTitle.innerText = rocket.name;

        const newPayloadElement = document.createElement('div');
        newPayloadElement.innerText = `${rocket.max_payload.toLocaleString()}kg to orbit`;

        newCard.appendChild(newTitle);
        newCard.appendChild(newPayloadElement);
        container.appendChild(newCard);
    })
}

const init = async () => {
    const rocketsData = await getRocketsData();
    displayRocketCards(rocketsData);
}

window.addEventListener('load', init);