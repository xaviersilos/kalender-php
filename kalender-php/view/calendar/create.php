<section>
<h3>Verjaardag toevoegen</h3>
    <form action="<?= URL ?>calendar/created" method="post">
        <p>Naam<br><input id="name" type="text" name="name" required></p>
        <p>Dag<br><input id="day" type="number" value="1" name="day" min="1" max="31" required></p>
        <p>Maand<br><input id="month" type="number" value="1" name="month" min="1" max="12" required></p>
        <p>Jaar<br><input id="year" type="number" value="1900"name="year" min="1900" max="2020"required></p>
        <input class="button" type="submit">
    </form>
</section>


