<footer class="navbar">
    <?php if (isset($_SESSION["connected"])) :?>
    <a href="<?= BASE_URL ?>/event"><img src="./public/images/icones/Calendar.svg" alt="icone du calendrier"/></a>
    <a href="<?= BASE_URL ?>/task"><img src="./public/images/icones/Check square.svg" alt="icone des tâches"/></a>
    <a href="<?= BASE_URL ?>/timer"><img src="./public/images/icones/Icône timer.svg" alt="icone du timer"/></a>
    <?php endif ?>
</footer> 