<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dungeons and Dragons</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css"
          integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="css/site.css">
</head>
<body class="bg-dark">
<div class="container-fluid">
    <section>
        <div class="content">
            <h2 class="text-white">Welcome</h2>
        </div>
    </section>
    <section>
        <div class="content">
            <h2 class="text-white">Race</h2>
            <div class="card-deck text-dark">
                <div class="row">
                    <div class="card">
                        <img class="card-img-top img-responsive" src="assets/images/races/Dragonborn.jpg" sizes="100" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Dragonborn</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a
                                little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <input type="submit" id="button" class="btn btn-primary btn-block" value="Choose Dragonborn">
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top img-responsive" src="assets/images/races/Human.jpg" sizes="100" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Human</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer">
                            <input type="submit" id="button1" class="btn btn-primary btn-block" value="Choose Human">
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="assets/images/races/Elf.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Elf</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than
                                the first to show that equal height action.</p>
                        </div>
                        <div class="card-footer">
                            <input type="submit" id="button2" class="btn btn-primary btn-block" value="Choose Elf">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <img class="card-img-top" src="assets/images/races/Dwarf.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Dwarf</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit
                                longer.</p>
                        </div>
                        <div class="card-footer">
                            <input type="submit" id="button3" class="btn btn-primary btn-block" value="Choose Dwarf ">
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="assets/images/races/Halfling.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Halfling</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer">
                            <input type="submit" id="button4" class="btn btn-primary btn-block" value="Choose Halfling ">
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="assets/images/races/Tiefling.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Tiefling</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than
                                the first to show that equal height action.</p>
                        </div>
                        <div class="card-footer">
                            <input type="submit" id="button5" class="btn btn-primary btn-block" value="Choose Tiefling">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="hiddenSectionClasses" class="hidden">
        <div class="content" id="item">
            <h2 class="text-white">Classes</h2>
            <div class="card-deck">
                <div class="row">
                    <div class="card">
                        <img class="card-img-top img-responsive" src="assets/images/classes/barbarian.jpg" sizes="100" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Barbarian</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a
                                little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary btn-block" value="Choose Barbarian">
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top img-responsive" src="assets/images/classes/paladin.jpg" sizes="100" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Paladin</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary btn-block" value="Choose Paladin">
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="assets/images/classes/cleric.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Cleric</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than
                                the first to show that equal height action.</p>
                        </div>
                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary btn-block" value="Choose Cleric">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <img class="card-img-top" src="assets/images/classes/druid.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Druid</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit
                                longer.</p>
                        </div>
                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary btn-block" value="Choose Druid">
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="assets/images/classes/fighter.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Fighter</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary btn-block" value="Choose Fighter">
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="assets/images/classes/monk.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Monk</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than
                                the first to show that equal height action.</p>
                        </div>
                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary btn-block" value="Choose Monk">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <img class="card-img-top" src="assets/images/classes/sorcerer.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Sorcerer</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit
                                longer.</p>
                        </div>
                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary btn-block" value="Choose Sorcerer">
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="assets/images/classes/wizard.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Wizard</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary btn-block" value="Choose Wizard">
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="assets/images/classes/warlock.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Warlock</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than
                                the first to show that equal height action.</p>
                        </div>
                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary btn-block" value="Choose Warlock">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <img class="card-img-top" src="assets/images/classes/ranger.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Ranger</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit
                                longer.</p>
                        </div>
                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary btn-block" value="Choose Ranger">
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="assets/images/classes/rogue.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Rogue</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary btn-block" value="Choose Rogue">
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="assets/images/classes/bard.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Bard</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than
                                the first to show that equal height action.</p>
                        </div>
                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary btn-block" value="Choose Bard">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="content">
            <h2 class="text-white">Skills</h2>
        </div>
    </section>
    <section id="equipment">
        <div class="content">
            <h2 class="text-white">Equipment</h2>
            <div class="choices">
                <div id="race" class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Race</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{Chosen race here}</h6>
                        <p>Image here</p>
                    </div>
                </div>
                <div id="class" class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Class</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{Chosen class here}</h6>
                        <p>Image here</p>
                    </div>
                </div>
            </div>
            <div id="equipment">
                <div class="card text-dark text-center">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" id="mainhand-tab" data-toggle="tab" href="#mainhand" role="tab" aria-controls="mainhand" aria-selected="true">Main
                                    Hand</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="offhand-tab" data-toggle="tab" href="#offhand" role="tab" aria-controls="offhand" aria-selected="true">Offhand</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="range-tab" data-toggle="tab" href="#range" role="tab" aria-controls="range" aria-selected="true">Ranged</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="other-tab" data-toggle="tab" href="#other" role="tab" aria-controls="other" aria-selected="true">Other</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane active show" id="mainhand" role="tabpanel" aria-labelledby="mainhand-tab">
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="swordRadio" name="mainRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="swordRadio">Sword</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="daggerRadio" name="mainRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="daggerRadio">Dagger</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="offhand" role="tabpanel" aria-labelledby="offhand-tab">
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="shieldRadio" name="offhandRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="shieldRadio">Shield</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="quiverRadio" name="offhandRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="quiverRadio">Quiver</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="range" role="tabpanel" aria-labelledby="range-tab">
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="crossbowRadio" name="rangeRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="crossbowRadio">Crossbow</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="shortbowRadio" name="rangeRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="shortbowRadio">Shortbow</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="other" role="tabpanel" aria-labelledby="other-tab">
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="torchRadio" name="otherRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="torchRadio">Torch</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="keyRadio" name="otherRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="keyRadio">Skeleton Key</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="content">
            <h2 class="text-white">Download</h2>
        </div>
    </section>
</div>

<footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
            crossorigin="anonymous"></script>
    <script src="js/site.js"></script>
</footer>
</body>
</html>