<form class="headerMenu" method="get" action="films.php">
    <?php if (isset($_GET['color-changeable']) && 'Top Films' == $_GET['color-changeable']) {?>
        <input type="submit" name="color-changeable" value="Top Films" id="php-button">
    <?php } else {?>
        <input type="submit" name="color-changeable" value="Top Films">
    <?php }?>
</form>
<form class="headerMenu" method="get" action="serials.php">
    <?php if (isset($_GET['color-changeable']) && 'Serials' == $_GET['color-changeable']) {?>
        <input type="submit" name="color-changeable" value="Serials" id="php-button">
    <?php } else {?>
        <input type="submit" name="color-changeable" value="Serials">
    <?php }?>
</form>
<form class="headerMenu" method="get" action="profile.php">
    <?php if (isset($_GET['color-changeable']) && 'Profile' == $_GET['color-changeable']) {?>
        <input type="submit" name="color-changeable" value="Profile" id="php-button">
    <?php } else {?>
        <input type="submit" name="color-changeable" value="Profile">
    <?php }?>
</form>
<form class="headerMenu" method="get" action="index.php">
    <?php if (isset($_GET['color-changeable']) && 'Home' == $_GET['color-changeable']) {?>
        <input type="submit" name="color-changeable" value="Home" id="php-button">
    <?php } else {?>
        <input type="submit" name="color-changeable" value="Home">
    <?php }?>
</form>
<form class="headerMenu" method="get" action="extension.php">
    <?php if (isset($_GET['color-changeable']) && 'Extension' == $_GET['color-changeable']) {?>
        <input type="submit" name="color-changeable" value="Extension" id="php-button">
    <?php } else {?>
        <input type="submit" name="color-changeable" value="Extension">
    <?php }?>
</form>