<?php

include '../partials/header_connected.php'

?>

<section class="page2">

    <div class="mapp">
    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=19dtN0--gjv3cTvzFCTx4VkDJH6tChH-w" width="640" height="480"></iframe>
    </div>

    <div class="research">

        <div class="container search">
            <div class="location">
                <div class="input-group">
                    <div class="input-group__tag"><ion-icon name="location-outline"></ion-icon></div>
                    <input class="form-control flex-grow" type="text" name="inputDomainX" id="inputDomainX" placeholder="Destination">
                </div>
            </div>
            <div class="start">
                <input type="date" name="dateofbirth" id="dateofbirth">
                <input type="date" name="dateofbirth" id="dateofbirth">
            </div>
            <Select name="size">
                <option>Yacht's size</option>
                <option>10 Meters</option>
                <option>30 Meters</option>
                <option>50 Meters</option>
                <option>80 Meters</option>
            </Select>
            <button class="btn btn--accent">Search</button>
        </div>

        <div class="result">
            <h2>Results of your research</h2>
            <a href="#">Or check the available Yacht</a>
        </div>

        <div class="container filter">
            <h3>Filter the<br> selection</h3>
            <Select name="size">
                <option> Yacht's size</option>
                <option>10 Meters</option>
                <option>30 Meters</option>
            </Select>
            <Select name="point">
                <option> Yacht's location</option>
                <option>Nice</option>
                <option>Cannes</option>
            </Select>
            <Select name="pers">
                <option> Capicity</option>
                <option>10 pers.</option>
                <option>12 pers.</option>
            </Select>
            <label for="switch-checkbox-1" >
                Disponibility
            </label>
            <div class="switch">
                <input class="switch__input" type="checkbox" id="switch-checkbox-1">
                <label class="switch__label" for="switch-checkbox-1" aria-hidden="true">Option label</label>
                <div class="switch__marker" aria-hidden="true"></div>
            </div>
        </div>

    </div>

    <!-- CARDS YATCH -->
    <div class="container padding-y-md max-width-lg">
        <div class="grid gap-xs">
            <div class="col-12 col-8@md">
                <div class="grid gap-xs">
                    <?php for ($i=0; $i < 9; $i++) { ?>
                        <div class="card-container col-12 col-12@sm col-6@md col-4@lg"> 
                            <?php  include '../partials/card.php' ?>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <div class="col-12 col-4@md">
                <div class="yacht_results">
                    <div class="liste">
                        <h3>Type of boats</h3>
                        <ul>
                            <li><a href="#0" class="header__link" >Yachts à Moteur.</a></li>
                            <li><a href="#0" class="header__link" >Yachts à Voile.</a></li>
                            <li><a href="#0" class="header__link" >Catamarans.</a></li>
                            <li><a href="#0" class="header__link" >Catamarans à Moteur.</a></li>
                            <li><a href="#0" class="header__link" >Goélettes.</a></li>
                            <li><a href="#0" class="header__link" >Voiliers à Moteur.</a></li>
                            <li><a href="#0" class="header__link" >Yachts de luxe à vendre.</a></li>
                            <li><a href="#0" class="header__link" >Mega Yachts (Private)</a></li>
                        </ul>
                    </div>
                    <div class="pub">
                        <h3>Some Ad</h3>
                        <img src="https://media.giphy.com/media/aDa9iiLZAUTqU/giphy.gif">
                    </div>
                    <div class="pub">
                        <h3>Some Ad</h3>
                        <img src="https://media.giphy.com/media/aDa9iiLZAUTqU/giphy.gif">
                    </div>
                </div> 
            </div>
        </div>
    </div>

    <!-- CAROUSEL  -->
    <div class="carousel-container">
        <div class="carousel-card" id="far-left">
            <img class="carousel-icon" src="/img/luxe.jpg" alt="">
            <h4 class="carousel-title">Yacht Luxe</h4>
            <h5>07/17/2021 by Prestige Yacht.</h5>
            <p class="carousel-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
            <button class="btn btn--accent">Read more...</button>
        </div>
        <div class="carousel-card" id="left">
            <img class="carousel-icon" src="/img/voile.jpg" alt="">
            <h4 class="carousel-title">Yacht Voile</h4>
            <h5>07/17/2021 by Prestige Yacht.</h5>
            <p class="carousel-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
            <button class="btn btn--accent">Read more...</button>
        </div>
        <div class="carousel-card" id="center">
            <img class="carousel-icon" src="/img/big.jpg" alt="">
            <h4 class="carousel-title">Yacht Big</h4>
            <h5>07/17/2021 by Prestige Yacht.</h5>
            <p class="carousel-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
            <button class="btn btn--accent">Read more...</button>
        </div>
        <div class="carousel-card" id="right">
            <img class="carousel-icon" src="/img/int.jpg" alt="">
            <h4 class="carousel-title">Yacht Private</h4>
            <h5>07/17/2021 by Prestige Yacht.</h5>
            <p class="carousel-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
            <button class="btn btn--accent">Read more...</button>
        </div>
        <div class="carousel-card" id="far-right">
            <img class="carousel-icon" src="/img/small.jpg" alt="">
            <h4 class="carousel-title">Yacht Small</h4>
            <h5>07/17/2021 by Prestige Yacht.</h5>
            <p class="carousel-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
            <button class="btn btn--accent">Read more...</button>
        </div>
    </div>

</section>





<?php

include '../partials/footer.php'

?>