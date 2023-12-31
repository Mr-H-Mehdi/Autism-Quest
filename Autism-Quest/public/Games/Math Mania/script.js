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



class App extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      selectedRocket: null,
      selectedPlanet: null,
      score: 0
    };
  }

  handleRocketClick = (rocketId) => {
    // Check if a rocket is already selected
    console.log(rocketId);
    if (this.state.selectedRocket !== null) {
      alert("You can only choose one rocket!");
      return;
    }
    document.getElementById(rocketId).style.border="11px solid purple";

    // Set the selected rocket
    this.setState({ selectedRocket: rocketId });
  };

  handlePlanetClick = (planetId) => {
    // Check if a rocket is selected
    if (this.state.selectedRocket === null) {
      alert("Please choose a rocket first!");
      return;
    }

    // Check if the selected rocket matches the planet
    if (`r${planetId.charAt(1)}` === this.state.selectedRocket) {
      alert("Success! Rocket landed on the planet!");
      document.getElementById(this.state.selectedRocket).style.border="";
      this.setState({ selectedRocket: null })
      incScore()
    } else {
      alert("Oops! Rockets and planets do not match.");
      document.getElementById(this.state.selectedRocket).style.border="";
      this.setState({ selectedRocket: null })

    }

    // Reset the selected rocket and planet
    this.setState({ selectedRocket: null, selectedPlanet: null });
  };

  render() {
    return (
      <div className="container">
        <div className="planets">
          <div className="p-container" id="p1" onClick={() => this.handlePlanetClick("p5")}>
            <img className= "p-imgs" id="p-img1" src="Images/p1.png" alt="Planet 1" />
          </div>
          <div className="p-container" id="p2" onClick={() => this.handlePlanetClick("p3")}>
            <img className= "p-imgs" id="p-img2" src="Images/p2.png" alt="Planet 2" />
          </div>
          <div className="p-container" id="p3" onClick={() => this.handlePlanetClick("p1")}>
            <img className= "p-imgs" id="p-img3" src="Images/p3.png" alt="Planet 3" />
          </div>
          <div className="p-container" id="p4" onClick={() => this.handlePlanetClick("p2")}>
            <img className= "p-imgs" id="p-img4" src="Images/p4.png" alt="Planet 4" />
          </div>
          <div className="p-container" id="p5" onClick={() => this.handlePlanetClick("p4")}>
            <img className= "p-imgs" id="p-img5" src="Images/p5.png" alt="Planet 5" />
          </div>
        </div>
        <div className="help-us-land-the-rockets">
          Help us Land the Rockets!
        </div>
        <div className="rockets">
          <div className="r-container" id="r1" onClick={() => this.handleRocketClick("r1")}>
            <img className="r-imgs" id="r-img1" src="Images/r1.png" alt="Rocket 1" />
          </div>
          <div className="r-container" id="r2" onClick={() => this.handleRocketClick("r2")}>
            <img className="r-imgs" id="r-img2" src="Images/r2.png" alt="Rocket 2" />
          </div>
          <div className="r-container" id="r3" onClick={() => this.handleRocketClick("r3")}>
            <img className="r-imgs" id="r-img3" src="Images/r3.png" alt="Rocket 3" />
          </div>
          <div className="r-container" id="r4" onClick={() => this.handleRocketClick("r4")}>
            <img className="r-imgs" id="r-img4" src="Images/r4.png" alt="Rocket 4" />
          </div>
          <div className="r-container" id="r5" onClick={() => this.handleRocketClick("r5")}>
            <img className="r-imgs" id="r-img5" src="Images/r5.png" alt="Rocket 5" />
          </div>
        </div>
      </div>
    );
  }
}

ReactDOM.render(<App />, document.querySelector("#main-page"));
