<main>
    <div class="col-12">        
        <div class="row col-12">
            <h1 style="position:absolute; margin-top: 30%; margin-left: 15%;" class="guardian-tekst2"><strong>WereldBurgerschap</strong></h1>
            <h1 style="position:absolute; margin-top: 37%; margin-left: 15%;" class="guardian-tekst2"><strong><i>Emily/Limey</i></strong></h1>
            <div class="col-8 d-flex justify-content-center align-items-center">
                <img  src="./images/limey.png" style=" margin-top: 233.5%;">
            </div>
            <div class="col-4">
                <img style="margin-left: 105%;" class="banner" src="./images/bannerblauw.png">
                <div class="card3" style="position: absolute; margin-left: 20%; margin-top: 40%;">
                    test test test
                </div> 
            </div>
        </div>
        <div class="col-12 d-flex justify-content-center align-items-center">              
            <img class="rotate" src="./images/rotate.png" style="margin-right: 35%;">    
        </div>
        <div class="col-12 d-flex justify-content-center align-items-center text-center" style="margin-left: 30%;">
            <a id="helden-link" class="helden-link-pagina" href="helden" style="margin-top: 20%;"><strong>klik hier voor alle helden!</strong></a>
        </div>
    </div>
    <script>
        function fadeEffect(element, duration) {
        element.style.opacity = 0;
        let opacity = 0;
        const interval = 10;
        const targetOpacity = 1;

        const fadeIn = setInterval(() => {
            if (opacity >= targetOpacity) {
                clearInterval(fadeIn);
                setTimeout(() => {
                    const fadeOut = setInterval(() => {
                        if (opacity <= 0) {
                            clearInterval(fadeOut);
                        } else {
                            opacity -= 0.1;
                            element.style.opacity = opacity;
                        }
                    }, interval);
                }, duration);
            } else {
                opacity += 0.1;
                element.style.opacity = opacity;
            }
        }, interval);
    }

    const link = document.getElementById('helden-link');
    const duration = 2000; // Duration in milliseconds (3 seconds)

    setInterval(() => {
        fadeEffect(link, duration);
    }, duration * 2);
    </script>
</main>