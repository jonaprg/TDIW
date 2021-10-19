<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="./src/css/style.css">
    <?php include "header.html"; ?>
</head>

<body>
<div id="layout">
    <header class="container">
        <?php include "nav.html"; ?>
    </header>
    <div class="slider">
        <div class="slides">
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">
            <input type="radio" name="radio-btn" id="radio5">
            <div class="slide first">
                <img src="src/img/pics/pic_1.jpg" alt="">
            </div>
            <div class="slide">
                <img src="src/img/pics/pic_2.jpg" alt="">
            </div>
            <div class="slide">
                <img src="src/img/pics/pic_3.jpg" alt="">
            </div>
            <div class="slide">
                <img src="src/img/pics/pic_4.jpg" alt="">
            </div>
            <div class="slide">
                <img src="src/img/pics/pic_5.jpg" alt="">
            </div>
        </div>
        <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
            <label for="radio5" class="manual-btn"></label>
        </div>
    </div>
</div>


</body>

</html>
