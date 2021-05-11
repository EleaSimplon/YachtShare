<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- LINK CSS -->
    <link rel="stylesheet" href="/codyhouse-framework/main/assets/css/custom.css">
    <!-- LINK ICON URL -->
    <link rel="icon" href="/img/yatch.png"/>
    <title>Yacht Share Services</title>
</head>
<body>

    <header class="header position-relative js-header ">
        <div class="header__container container max-width-lg">
            <div class="header__logo">
                <a href="/layout.php">
                    <img src="img/yatch.png">
                </a>
            </div>

            <button class="btn btn--subtle header__trigger js-header__trigger" aria-label="Toggle menu" aria-expanded="false" aria-controls="header-nav">
                <i class="header__trigger-icon" aria-hidden="true"></i>
                <span>Menu</span>
            </button>

            <nav class="header__nav js-header__nav" id="header-nav" role="navigation" aria-label="Main">
                <div class="header__nav-inner">
                    <div class="header__label">Main menu</div>
                    <ul class="header__list">
                    <li class="header__item"><a href="/layout.php" class="header__link" aria-current="page">Home</a></li>
                    <li class="header__item"><a href="/view/map.php" class="header__link">Find a Yacht</a></li>
                    <li class="header__item"><a href="/view/describe.php" class="header__link">Details</a></li>
                    <li class="header__item"><a href="#0" class="header__link">Contact</a></li>
                    <li class="header__item"><a href="#0" class="header__link">Blog</a></li>
                    <li class="header__item"><a href="#0" class="header__link">Legal mentions</a></li>
                    <!-- <li class="header__item header__item--divider" aria-hidden="true"></li> -->
                    <li class="header__item"><a href="#0" class="btn btn--primary">Book a Yacht</a></li>
                    </ul>
                </div>
            </nav>
        </div>

    </header>