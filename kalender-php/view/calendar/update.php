<section>
<h3>Verjaardag bewerken (<?php echo $birthday['id']?>)</h3>
    <form action="<?= URL ?>calendar/updated" method="post">
        <p>Naam<br><input id="name" type="text" value="<?php echo $birthday['person']?>" name="person" required></p>
        <p>Dag<br><input id="day" type="number" value="<?php echo $birthday['day']?>" name="day" min="1" max="31" required></p>
        <p>Maand<br><input id="month" type="number" value="<?php echo $birthday['month']?>" name="month" min="1" max="12" required></p>
        <p>Jaar<br><input id="year" type="number" value="<?php echo $birthday['year']?>"name="year" min="1900" max="2020"required></p>
        <input type="hidden" name="id" value="<?php echo $birthday['id']?>">   
        <input class="button" type="submit">
    </form>
</section>