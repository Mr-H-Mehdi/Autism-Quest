class App extends React.Component {
	constructor(props) {
		super(props);

		this.state = {
			count: 0,
			changed: '',
			timer: 60,
			score: 10,
			rn: ''
		};

		this.increment = this.increment.bind(this);
		this.getNewHit = this.getNewHit.bind(this);
		this.makeBubble = this.makeBubble.bind(this);
		this.runtimer = this.runtimer.bind(this);
	}

	componentDidMount() {
		this.runtimer();
		this.makeBubble();
		this.getNewHit();
	}

	increment() {
        document.getElementById('scoreval').innerText=this.state.score;
		this.setState({ score: this.state.score + 10, changed: true }, () => { });
        
	}

	getNewHit() {
		let rn = Math.floor(Math.random() * 10 );
		this.setState({ rn: rn });
        document.getElementById('hitval').innerText=rn;
	}
    
	makeBubble() {
		let clutter = [];

		for(let i=0;i<=30;i++){
			let num = Math.floor(Math.random()*10)
			clutter.push(<div className="bubble">{num}</div>);
		}
        
		this.setState({ clutter: clutter });
	}

	runtimer() {
		let timerfun = setInterval(() => {
			if(this.state.timer > 0){
				this.setState({ timer: this.state.timer - 1 });
                document.getElementById('timeint').innerText=this.state.timer;
			}
			else{
				clearInterval(timerfun);
				this.setState({ timer: 0, clutter: <> 
                <h1>Game Over</h1>
                
                </> });
			}
		}, 1000);
	}

	render() {
		return (
			<div className="wrapper">

				<div id="pbtm" onClick={(dets) => {
					let clickednum = (Number(dets.target.textContent));
					if(this.state.rn === clickednum)
					{
						this.increment();
						this.makeBubble();
						this.getNewHit();
					}
				}}>
					{this.state.clutter}
				</div>
			</div>
		);
	}
}
ReactDOM.render(
    <App />,
    document.getElementById('pbtm')
);