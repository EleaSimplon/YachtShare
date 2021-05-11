<?php

include '../partials/header_connected.php'

?>

<header>
  
  <!-- CAROUSEL 1 -->
  <div id="carousel-1" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-1" data-slide-to="1"></li>
      <li data-target="#carousel-1" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active" style="background-image: url('/img/octopus.png')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4" style="color: white">The Octopus</h2>
          <p class="lead">Offering a genuine first-class experience while cruising or at anchor</p>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url('/img/octo3.png')">
      </div>
      <div class="carousel-item" style="background-image: url('/img/octo2.png')">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</header>

<section class="page3">

  <div class="header-describe"> 
    <div class="title">
          <h1>Octopus - 126 Meters</h1>
          <h2>Harbor</h2>
    </div>
    <div class="texte ">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>  
        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div> 
  </div>

  <div class="body">
    <div class="col-12 col-9@md tabs-book">
      <div class="col-12 tabs">
        <div class="tabs-v3 js-tabs">
          <ul class="tabs-v3__controls js-tabs__controls" aria-label="Tabs Interface">
            <li><a href="#tab1Panel1" class="tabs-v3__control js-tab-focus" aria-selected="true">Options</a></li>
            <li><a href="#tab1Panel2" class="tabs-v3__control js-tab-focus">Disponibility</a></li>
            <li><a href="#tab1Panel3" class="tabs-v3__control js-tab-focus">Crew</a></li>
            <li><a href="#tab1Panel4" class="tabs-v3__control js-tab-focus">Pictures</a></li>
          </ul>

          <div class="tabs-v3__panels js-tabs__panels">
            <section id="tab1Panel1" class="tabs-v3__panel is-visible js-tabs__panel">
              <div class="text-component">
                  <h1>Options</h1>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt reprehenderit voluptatibus expedita. Laboriosam maxime aut dolorem eum qui nemo! Ea!</p>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati natus totam assumenda cumque numquam culpa officia, harum vel quibusdam recusandae, blanditiis non quae pariatur? Laborum, animi dolor tempora laboriosam minus nulla sit, hic molestias velit delectus sint aspernatur possimus soluta?</p>

                  <div class="grid row-tabs">
                    <div class="col-2@lg col-4@md col-12@sm icons-opt">
                      <img src="/img/ppl.svg">26
                    </div>
                    <div class="col-2@lg col-4@md col-12@sm icons-opt">
                      <img src="/img/bed.png">26
                    </div>
                    <div class="col-2@lg col-4@md col-12@sm icons-opt">
                      <img src="/img/fork.png">2
                    </div>
                    <div class="col-2@lg col-4@md col-12@sm icons-opt">
                      <img src="/img/anchor.png">2
                    </div>
                    <div class="col-2@lg col-4@md col-12@sm icons-opt">
                      <img src="/img/television.png">7
                    </div>
                    <div class="col-2@lg col-4@md col-12@sm icons-opt">
                      <img src="/img/bouee.png">7
                    </div>
                  </div>

                <div class="row-plus grid">
                  <div class="col-12 col-6@sm avantages">
                      <h3>Les plus</h3>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                      <p>Laboriosam maxime aut dolorem eum qui nemo!</p>
                      <p>Consectetur adipisicing elit.</p>
                  </div>
                  <div class="col-12 col-6@sm map-opt">
                    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=19dtN0--gjv3cTvzFCTx4VkDJH6tChH-w"></iframe>
                  </div>
                </div>

              </div>
            </section>

            <section id="tab1Panel2" class="tabs-v3__panel js-tabs__panel">
              <div class="text-component">
                <h1>Disponibility</h1>
                  <main>
                    <div class="calendar-container ">
                      <div class="month-header calendar-step1">
                        <ul>
                          <li class="prev-month">&#10094;</li>
                          <li class="next-month">&#10095;</li>
                          <li>
                              <span class="calendar-month-title"></span><br>
                              <span style="font-size:18px" class="calendar-year-title"></span>
                          </li>
                        </ul>
                      </div>
                      <ul class="weekdays"></ul>
                      <ul class="calendar-days"></ul>
                </main>
              </div>
              <div class="grid">
                <div class="col-12@lg row-calendar">
                  <h4>Verify<br> the disponibility</h4>
                    <input class="col-2@lg col-4@md col-12@sm" type="date" name="dateofbirth" id="dateofbirth">
                    <input class="col-2@lg col-4@md col-12@sm" type="date" name="dateofbirth" id="dateofbirth">
                  <button class="btn btn--accent">Check</button>
                </div>
              </div>
            </section>

            <section id="tab1Panel3" class="tabs-v3__panel js-tabs__panel">
              <div class="text-component">
                <h1>Crew</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, ipsa. Maiores sit totam dignissimos perferendis recusandae quis eligendi quos expedita consequatur, natus debitis, deserunt placeat tenetur odit voluptates, ad nihil cum ipsa quae est facere, voluptate sapiente tempora a officiis. Ipsa perspiciatis aut commodi enim expedita. Saepe at cupiditate quaerat explicabo distinctio quae enim.</p>

                <div class="grid row-crew">
                    <div class="card-crew col-3@lg col-6@md col-12@sm">
                      <div class="card">
                        <div class="card-header">
                          <img src="/img/captain.png">
                        </div>
                        <div class="card-body">
                          <h4>Captain Bonnard</h4>
                          <h5>Post, language, age</h5>
                          <p class="p-card">Amet, consectetur adipisicing elit. Dignissimos, ipsa.</p>
                        </div>
                      </div>
                    </div>
                    <div class="card-crew col-3@lg col-6@md col-12@sm">
                      <div class="card">
                        <div class="card-header">
                          <img src="/img/captain2.png">
                        </div>
                        <div class="card-body">
                          <h4>Captain T20</h4>
                          <h5>Post, language, age</h5>
                          <p class="p-card">Consectetur adipisicing elit. Dignissimos, ipsa.</p>
                        </div>
                    </div>
                    </div>
                    <div class="card-crew col-3@lg col-6@md col-12@sm">
                      <div class="card">
                        <div class="card-header">
                          <img src="/img/captain1.png">
                        </div>
                      <div class="card-body">
                        <h4>Captain Max</h4>
                        <h5>Post, language, age</h5>
                        <p class="p-card">Ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      </div>
                    </div>
                    </div>
                    <div class="card-crew col-3@lg col-6@md col-12@sm">
                      <div class="card">
                        <div class="card-header">
                          <img src="/img/sailor.png">
                        </div>
                        <div class="card-body">
                          <h4>Sailor Lélou</h4>
                          <h5>Post, language, age</h5>
                          <p class="p-card">Lorem dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </section>

            <!-- CAROUSEL 2 -->
            <section id="tab1Panel4" class="tabs-v3__panel js-tabs__panel">
              <div class="text-component">
                <h1>Pictures</h1>
                <div id="carousel-2" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-2" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-2" data-slide-to="1"></li>
                    <li data-target="#carousel-2" data-slide-to="2"></li>
                    <li data-target="#carousel-2" data-slide-to="3"></li>
                    <li data-target="#carousel-2" data-slide-to="4"></li>
                  </ol>
                  <div class="carousel-inner">
                  
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="/img/view.png" alt="First slide">
                    </div>

                    <div class="carousel-item">
                      <img class="d-block w-100" src="/img/jacuz.png" alt="Second slide">
                    </div>

                    <div class="carousel-item">
                      <img class="d-block w-100" src="/img/man.png" alt="Third slide">
                    </div>

                    <div class="carousel-item">
                      <img class="d-block w-100" src="/img/moche.png" alt="Third slide">
                    </div>

                    <div class="carousel-item">
                      <img class="d-block w-100" src="/img/heli.png" alt="Third slide">
                    </div>

                  </div>
    
                  <a class="carousel-control-prev" href="#carousel-2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carousel-2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>

            </section>
          </div>
        </div>
      </div>
    </div>
    <div class="recap col-12 col-3@md">
      <div class="box-recap">
              <h2>Order Summary</h2>
              <h3>Octopus</h3>
              <h4>126 Meters</h4>
              <h5>Crew : 26</h5>
            <div class="selecter">
            Departure<input type="date" name="dateoflocation" id="dateoflocation">
            Arrivate<input type="date" name="dateoflocation" id="dateoflocation">
                <Select name="pers">
                  <option> Nbrs of persons </option>
                  <option>1 pers.</option>
                  <option>2 pers.</option>
                  <option>3 pers.</option>
                  <option>4 pers.</option>
                  <option>5 pers.</option>
                  <option>6 pers.</option>
                </Select>
            </div>
          <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.</p>
      </div>        
      <button class="book-boat">BOOK</button>
    </div>  
  </div>
</section>

  <!-- CAROUSEL 3  -->
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




<?php

include '../partials/footer.php'

?>