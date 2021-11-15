<?php \controllers\accessController::controlAccessDashboard(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>MyPhotoshop</title>
    <meta charset="utf-8" />
    <link href="<?php echo BASE; ?>css/global.css" rel="stylesheet"/>
    <link href="<?php echo BASE; ?>css/style.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="palavras-chave,do,meu,site">
	<meta name="description" content="Descrição do meu website">
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
<?php if($slug != 'login' && $slug != 'register'){ ?>
<header>
    <div>
        <form method="post" class="wrap w95 center itemsFlex alignCenter justSpaceBetween">
            <div class="col w10 logo hideDeviceSmall">
                <i data-feather="feather"></i>
            </div>
            <div class="col w20 hideDeviceSmall">
                <h3><?php echo $_SESSION['name'] ?></h3>
            </div>
            <div class="col itemsFlex alignCenter w30 hideDeviceSmall">
                <p>Poupular Fomats</p>
                <select class="w30 marginLeftSmall">
                    <option>On</option>
                </select>
            </div>
            <div class="col itemsFlex alignCenter justEnd w30 w70DeviceSmall">
                <button class="buttonInput marginRightDefault">
                    <i data-feather="download-cloud" class="marginRightSmall"></i>
                    <p>Save Draft</p>
                </button>
                <button id="download" name="download" class="button buttonBgGreen">
                    <i data-feather="download" class="marginRightSmall"></i>
                    <p>Download</p>
                </button>
            </div>
            <div class="col w10 textRight">
                <a class="button menu"><i data-feather="menu"></i></a>
                <figure class="imgSmallUser hideDeviceSmall">
                    <img src="<?php echo BASE; ?>uploads/myImg.png" />
                </figure>
            </div>
        </form>
    </div>
</header>

<main class="itemsFlex positionRelative">

<aside class="panel w10 hideDeviceSmall">
    <div class="wrap">
        <ul>
            <li class="tab tabs--active">
                <i data-feather="bookmark"></i>
                <h6>INFOS</h6>
            </li>
            <li class="tab">
                <i data-feather="command"></i>
                <h6>SETTINGS</h6>
            </li>
            <li class="tab">
                <i data-feather="type"></i>
                <h6>TEXT</h6>
            </li>
            <li class="tab">
                <i data-feather="grid"></i>
                <h6>ELEMENTS</h6>
            </li>
            <li class="tab">
                <i data-feather="user"></i>
                <h6>PROFILE</h6>
            </li>
            <li class="tab"><a href="https://github.com/Raissadev">
                <i data-feather="github"></i>
                <h6>RAISSADEV</h6>
                </a>
            </li>
        </ul>
    </div>
</aside>



<aside class="panelEditor w20 hideDeviceSmall">

    <form method="post">

        <section class="wrap content content--active" id="layout">
            <div class="col">
                <div class="title itemsFlex alignCenter marginDownSmall">
                    <i data-feather="command" class="marginRightSmall"></i>
                    <h4>Welcome!</h3>
                </div>
            </div>
            <div class="col">
                <h4>Welcome to the platform <?= $_SESSION['name'] ?>! This platform was developed with the intention of presenting an interactive and easy-to-use tool.</h4>
            </div>    
        </section>

        <section class="wrap content" id="pincel">
            <div class="col">
                <div class="title itemsFlex alignCenter marginDownSmall">
                    <i data-feather="command" class="marginRightSmall"></i>
                    <h4>Image Settings</h3>
                </div>
                <div class="itemsFlex alignCenter justSpaceBetween">
                    <input type="text" class="w48" value="900" id="weightImage" />
                    <input type="text" class="w48" value="900" id="heightImage" />
                </div>
            </div>
            <div class="col">
                <div class="row marginDownSmall">
                    <p>Color</p>
                    <div class="itemsFlex alignCenter marginTopSmallIn">
                        <label for="color_selector" class="marginRightSmall"><i data-feather="feather"></i></label>
                        <input type="color" class="marginRightSmall" id="color_selector" style="display:none" />
                        <input type="text" id="hex_input" />
                    </div>
                </div>
                <div class="row marginTopSmall">
                    <p>Opacity</p>
                    <div class="itemsFlex alignCenter marginTopSmallIn">
                        <i data-feather="eye" class="marginRightSmall"></i>
                        <input type="range" min="0" max="100" class="w60 marginRightSmall" id="opacity_selector" />
                        <input type="text" value="100%" class="w30" id="opacity_input" />
                    </div>
                </div>
            </div>
        </section>

        <section class="wrap content" id="text">
            <div class="col">
                <div class="title itemsFlex alignCenter marginDownSmall">
                    <i data-feather="command" class="marginRightSmall"></i>
                    <h4>Text</h3>
                </div>
            </div>
            <div class="col">
                <div class="row marginDownSmall">
                    <p>Align</p>
                    <div class="itemsFlex alignCenter marginTopSmallIn">
                        <a class="button alignLeft marginRightSmall"><i data-feather="align-left"></i></a>
                        <a class="button alignCenterText marginRightSmall"><i data-feather="align-center"></i></a>
                        <a class="button alignRight marginRightSmall"><i data-feather="align-right"></i></a>
                    </div>
                </div>
                <div class="row marginDownSmall">
                    <p>Font</p>
                    <div class="itemsFlex alignCenter marginTopSmallIn">
                        <input type="text" value="23" class="w20 marginRightSmall" id="sizeFontInput" />
                        <input type="text" value="400" class="w20" id="weightFontInput" />
                    </div>
                </div>
                <div class="row marginDownSmall">
                    <p>Size Box</p>
                    <div class="itemsFlex alignCenter marginTopSmallIn">
                        <input type="text" value="400" class="w20 marginRightSmall" id="weightBox" />
                        <input type="text" value="400" class="w20" id="heightBox" id="heightBox" />
                    </div>
                </div>
            </div>
        </section>

        <section class="wrap content" id="elements">
            <div class="col">
                <div class="title itemsFlex alignCenter marginDownSmall">
                    <i data-feather="command" class="marginRightSmall"></i>
                    <h4>Elements Settings</h3>
                </div>
            </div>
            <div class="col">
                <div class="row itemsFlex flexWrap">
                    <a id="text_build" class="button textButton marginRightSmall"><i data-feather="type"></i></a>
                    <a class="button marginRightSmall"><input id="readUrl" name="file" type="file" accept="image/png, image/jpeg" style="display:none" /><label for="readUrl"><i data-feather="image"></i></label></a>
                    <a id="pincel" class="button marginRightSmall"><i data-feather="feather"></i></a>
                    <a id="btnUndo" class="button marginRightSmall"><i data-feather="refresh-cw"></i></a>
                </div>
            </div>
            <div class="col">
                <p>Texto</p>
                <input type="text" id="digits" value="Insert Text Here!" />
            </div>
        </section>

        <section class="wrap content" id="profile">
            <div class="col">
                <div class="title itemsFlex alignCenter marginDownSmall">
                    <i data-feather="command" class="marginRightSmall"></i>
                    <h4>My Profile</h3>
                </div>
            </div>
            <div class="col">
                <figure class="imgDefaultUser marginDownSmall">
                    <img src="<?php echo BASE; ?>uploads/myImg.png" />
                </figure>
                <div class="row">
                    <h4 class="marginDownSmallIn"><?php echo $_SESSION['name']; ?></h4>
                    <p><?php echo $_SESSION['email']; ?></p>
                </div>
            </div>
        </section>

    </form>

</aside>


<?php } ?>