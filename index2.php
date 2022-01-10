<?php
$days = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
$months = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
$years = ['2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023']
?>

<hr>
<h1>Date du jour</h1>
<form>

    <!-- Instructions : Créer la liste de jour (en chiffres), de mois (en chiffres) et d'année en PHP. -->
    <label for="day">Day</label>
    <select  id="day">
        <?php
        // TODO list of day
        foreach ($days as $day){
            echo "<option>$day</option>";
        }
        ?>
    </select>

    <label for="month">Month</label>
    <select  id="month">
        <?php
        // TODO list of month
        foreach ($months as $month){
            echo "<option>$month</option>";
        }
        ?>
    </select>

    <label for="year">Year</label>
    <select  id="year">
        <?php
        // TODO list of year 2018, 2019, 2020 --> Bonus : faites le avec une vraie date en PHP, renseignez vous sur la doc
        foreach ($years as $year){
            echo "<option>$year</option>";
        }
        ?>
    </select>
</form>
</body>
</html>