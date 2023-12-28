        // import React, { useState, useEffect } from 'react';
        const BubbleGame = () => {
            const [useState]=React;
            // State variables
            const [timer, setTimer] = useState(60);
            const [score, setScore] = useState(0);
            const [randomNumber, setRandomNumber] = useState(null);
            const [bubbles, setBubbles] = useState([]);
    
            // Increase the score by 10
            const increaseScore = () => {
                setScore((prevScore) => prevScore + 10);
            };
    
            // Get a new random hit value
            const getNewHit = () => {
                const newRandomNumber = Math.floor(Math.random() * 10);
                setRandomNumber(newRandomNumber);
            };
    
            // Generate a new set of bubbles
            const makeBubble = () => {
                const newBubbles = Array.from({ length: 25 }, () => Math.floor(Math.random() * 10));
                setBubbles(newBubbles);
            };
    
            // Run the timer and handle game over
            const runTimer = () => {
                const timerInterval = setInterval(() => {
                if (timer > 0) {
                    setTimer((prevTimer) => prevTimer - 1);
                } else {
                    clearInterval(timerInterval);
                    setBubbles([]);
                }
                }, 1000);
            };
    
            // Handle bubble click event
            const handleBubbleClick = (clickedNum) => {
                if (randomNumber === clickedNum) {
                increaseScore();
                makeBubble();
                getNewHit();
                }
            };
    
            // Effect to run the timer and initialize bubbles and hits on component mount
            useEffect(() => {
                runTimer();
                makeBubble();
                getNewHit();
    
                // Cleanup function to clear the interval when component unmounts
                return () => clearInterval();
            }, []); // Empty dependency array to run the effect only once on mount
    
            return React.createElement('div', null,
                React.createElement('div', null, `Time: ${timer}`),
                React.createElement('div', null, `Score: ${score}`),
                React.createElement('div', { id: 'pbtm' },
                    bubbles.map((num, index) =>
                        React.createElement('div', {
                            key: index,
                            className: 'bubble',
                            onClick: () => handleBubbleClick(num),
                        }, num)
                    )
                ),
                timer === 0 && React.createElement('h1', null, 'Game Over')
            );
            };
    
    
            ReactDOM.render(<BubbleGame/>, document.querySelector('#pbtm'))
    
            // export default BubbleGame;
    
    