const { useState, useEffect } = React;

var score=0
const incScore=()=>{
    // document.getElementById("scoref").placeholder-=0
    score+=10
    document.getElementById("scoref").placeholder=score
}

const openArena=()=>{
    // document.getElementById("scoref").placeholder-=0
    var arenaRoute = "/arena";
    window.location.href = arenaRoute;
}


const App = () => {
    const emotions = ["Angry", "Happy", "Crying", "Laughing", "Sad"];
    const [selectedEmotion, setSelectedEmotion] = useState(null);
    const [shuffledImages, setShuffledImages] = useState([]);
    const [targetEmotion, setTargetEmotion] = useState('');

    useEffect(() => {
        shuffleImages();
        chooseTargetEmotion();
    }, [selectedEmotion]); // Trigger effect when selectedEmotion changes

    const shuffleImages = () => {
        // Replace 'image1', 'image2', etc. with actual image paths
        const imageIds = ["Angry", "Happy", "Crying", "Laughing", "Sad"];
        const shuffledIds = imageIds.sort(() => Math.random() - 0.5);
        setShuffledImages(shuffledIds);
    };

    const chooseTargetEmotion = () => {
        // Randomly choose one emotion from the array
        let randomEmotion = targetEmotion; // Initialize with the current target emotion
        while (randomEmotion === targetEmotion) {
            const randomIndex = Math.floor(Math.random() * emotions.length);
            randomEmotion = emotions[randomIndex];
        }
        setTargetEmotion(randomEmotion);
    };

    const handleEmotionClick = (emotion) => {
        if (targetEmotion === null) {
            alert("Please wait for the target emotion to be chosen!");
            return;
        }

        if (emotion === targetEmotion) {
            alert("You selected the target emotion!");
            incScore();
            chooseTargetEmotion(); // Change the target emotion
            shuffleImages();
        } else {
            alert("Oops! Try again.");
            // alert(emotion);

        }

        // Reset the selected emotion
        setSelectedEmotion(null);
    };

    return (
        <div className="app">
            <h2 id="emot-container">
                {targetEmotion ? `Select the ${targetEmotion} planet` : ''}
            </h2>

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

// ...


ReactDOM.render(<App />, document.getElementById("app-container"));
