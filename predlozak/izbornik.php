<!-- Početak izbornik -->
<div class="title-bar" data-responsive-toggle="example-animated-menu" data-hide-for="medium">
<button class="menu-icon" type="button" data-toggle></button>
<div class="title-bar-title"><?=$nazivAPP?></div>
</div>

<div class="top-bar" id="example-animated-menu" data-animate="hinge-in-from-top spin-out">
    <div class="top-bar-left">
        <ul class="dropdown menu" data-dropdown-menu>
        <li class="menu-text show-for-large"><?php echo $nazivAPP ?></li>
        <li><a href="index.php">Početna</a></li>
        <?php if(isset($_SESSION['autoriziran'])): ?>
            <li><a href="nadzornaPloca.php">Nadzorna ploča</a></li>
        <?php endif; ?>
        
        <li>
        
            <a href="#">Zadaci</a>
            <ul class="menu vertical">
                <li><a href="zadatak1.php">Zadatak 1</a></li>
                <li><a href="Matrica.php">Ciklična matrica</a></li>
                <li><a href="zadatak2.php">Tablica mnozenja</a></li>
                <li><a href="zadatak3.php">Prosti brojevi</a></li>
            </ul>
            
        </li>
        </ul>
    </div>
    <div class="top-bar-right">
        <ul class="menu">
            <li>
                <?php  if(isset($_SESSION['autoriziran'])): ?>
                    <a href="odjava.php">Odjava <?php echo $_SESSION['autoriziran'] ?></a>
                <?php else:?>
                    <a href="prijava.php">Prijava</a>
                <?php endif;?>
            </li>
        </ul>
    </div>
</div>
<!-- Kraj izbornik -->