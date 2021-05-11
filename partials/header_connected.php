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
                    <img src="/img/yatch.png">
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
                        <li>
                            <a class="sharebar__btn js-social-share">
                                <svg class="icon" viewBox="0 0 45.532 45.532"><g><path d="M22.766,0.001C10.194,0.001,0,10.193,0,22.766s10.193,22.765,22.766,22.765c12.574,0,22.766-10.192,22.766-22.765   S35.34,0.001,22.766,0.001z M22.766,6.808c4.16,0,7.531,3.372,7.531,7.53c0,4.159-3.371,7.53-7.531,7.53   c-4.158,0-7.529-3.371-7.529-7.53C15.237,10.18,18.608,6.808,22.766,6.808z M22.761,39.579c-4.149,0-7.949-1.511-10.88-4.012   c-0.714-0.609-1.126-1.502-1.126-2.439c0-4.217,3.413-7.592,7.631-7.592h8.762c4.219,0,7.619,3.375,7.619,7.592   c0,0.938-0.41,1.829-1.125,2.438C30.712,38.068,26.911,39.579,22.761,39.579z"></path></g></svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

    </header>