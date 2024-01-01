const { useState, useEffect } = React;

// Initialize score
var score = 0;

// Function to increase the score
const incScore = () => {
    score += 10;
    document.getElementById("scoref").placeholder = score;
};

// Function to open the game arena
const openArena = () => {
    var arenaRoute = "/arena";
    window.location.href = arenaRoute;
};

// Main App component
const App = () => {
    // Array of emotions
    const emotions = ["Angry", "Happy", "Crying", "Laughing", "Sad"];

    // State for selected emotion
    const [selectedEmotion, setSelectedEmotion] = useState(null);

    // State for shuffled images
    const [shuffledImages, setShuffledImages] = useState([]);

    // State for the target emotion
    const [targetEmotion, setTargetEmotion] = useState('');

    // Effect to shuffle images and choose target emotion when selectedEmotion changes
    useEffect(() => {
        shuffleImages();
        chooseTargetEmotion();
    }, [selectedEmotion]);

    // Function to shuffle images
    const shuffleImages = () => {
        const imageIds = ["Angry", "Happy", "Crying", "Laughing", "Sad"];
        const shuffledIds = imageIds.sort(() => Math.random() - 0.5);
        setShuffledImages(shuffledIds);
    };

    // Function to choose a target emotion
    const chooseTargetEmotion = () => {
        let randomEmotion = targetEmotion;
        while (randomEmotion === targetEmotion) {
            const randomIndex = Math.floor(Math.random() * emotions.length);
            randomEmotion = emotions[randomIndex];
        }
        setTargetEmotion(randomEmotion);
    };

    // Function to handle emotion click
    const handleEmotionClick = (emotion) => {
        if (targetEmotion === null) {
            alert("Please wait for the target emotion to be chosen!");
            return;
        }

        if (emotion === targetEmotion) {
            alert("You selected the target emotion!");
            incScore();
            chooseTargetEmotion();
            shuffleImages();
        } else {
            alert("Oops! Try again.");
        }

        setSelectedEmotion(null);
    };

    return (
        <div className="app">
            {/* Display the target emotion */}
            <h2 id="emot-container">
                {targetEmotion ? `Select the ${targetEmotion} planet` : ''}
            </h2>

            {/* Display shuffled images */}
            <div id="container">
                {shuffledImages.map((imageId, index) => (
                    <img
                        key={index}
                        id={imageId}
                        className="responsive-image"
                        src={`images/${imageId}.png`}  
                        alt={`Image ${index + 1}`}
                        onClick={() => handleEmotionClick(imageId)}
                    />
                ))}
            </div>
        </div>
    );
};

// Render the App component
ReactDOM.render(<App />, document.getElementById("app-container"));
