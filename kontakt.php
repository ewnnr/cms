<?php get_header();?>
<div class="kontaktcontainer">
        <div class="text">
            <h2>Hur kan vi hjälpa dig?</h2>
            <p>Är du osäker på om vi utför den tjänst du behöver? Ta det lugnt, vi löser det. Vi har bred kompetens och så länge det är inom skog är vi rätt för dig och ditt företag. Vill du snabbt komma i kontakt med oss, fyll i formuläret här på sidan.</p>
            <p>Vill du hellre ringa eller besöka oss? Du hittar alla uppgifter för kontakt längst ned på sidan. Vi hörs! </p>
        </div>
        <div class="form">
            <h2>Kontakta oss!</h2>
            <form>
                <label>Namn:</label><br>
                <input type="text" name="namn" id="namn"><br>
                <label>E-post:</label><br><input type="text" name="epost" id="epost"><br>
                <label>Meddelande:</label><br><textarea name="meddelande" id="meddelande" cols="30" rows="10"></textarea><br>
                <input type="submit" name="submit" id="submit" value="Skicka meddelande">
            </form>
        </div>
    </div>
    <?php get_footer();?>