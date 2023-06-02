document.addEventListener('DOMContentLoaded', () => {

    //card options
    const cardArray = [
        {
            name: 'burger',
            img: 'burger.png'
        },
        {
            name: 'burger',
            img: 'burger.png'
        },
        {
            name: 'apple',
            img: 'apple.png'
        },
        {
            name: 'apple',
            img: 'apple.png'
        },
        {
            name: 'house',
            img: 'house.png'
        },
        {
            name: 'house',
            img: 'house.png'
        },
        {
            name: 'melon',
            img: 'melon.png'
        },
        {
            name: 'melon',
            img: 'melon.png'
        },
        {
            name: 'mug',
            img: 'mug.png'
        },
        {
            name: 'mug',
            img: 'mug.png'
        },
        {
            name: 'icecream',
            img: 'icecream.png'
        },
        {
            name: 'icecream',
            img: 'icecream.png'
        }
    ]

    //randomize card placement
    cardArray.sort(() => 0.5 - Math.random())

    const grid = document.querySelector('.grid')
    const resultDisplay = document.querySelector('#result')
    var cardsChosen = []
    var cardsChosenId  = []
    var cardsWon = []

    //creates the board
    function createBoard() {
        for (let i = 0; i < cardArray.length; i++) {
            var card = document.createElement('img')
            card.setAttribute('src', 'rainbow.png')
            card.setAttribute('data-id', i)
            card.addEventListener('click', flipCard)
            grid.appendChild(card)
        }
    }

    //check for matches
    function checkForMatch() {
        var cards = document.querySelectorAll('img')
        const optionOneId = cardsChosenId[0]
        const optionTwoId = cardsChosenId[1]
        if (cardsChosen[0] === cardsChosen[1]) {
            alert('You found a match!')
            cardsWon.push(cardsChosen)
        } else {
            cards[optionOneId].setAttribute('src', 'rainbow.png')
            cards[optionTwoId].setAttribute('src', 'rainbow.png')
            alert('Sorry, try again!')
        }
        cardsChosen = []
        cardsChosenId = []
        resultDisplay.textContent = cardsWon.length
        if (cardsWon.length === cardArray.length/2) {
            resultDisplay.textContent = ' Congratulations! You have matched all of the cards!'
        }
    }

    //flip the selected card
    function flipCard() {
        var cardId = this.getAttribute('data-id')
        cardsChosen.push(cardArray[cardId].name)
        cardsChosenId.push(cardId)
        this.setAttribute('src', cardArray[cardId].img)
        if (cardsChosen.length === 2) {
            setTimeout(checkForMatch, 500)
        }
    }

    createBoard()

})