<section class="contact" id="contact">
    <div class="content contact-content">
        <h2>Nous contacter</h2>
        <div class="contact-card">
            <div class="contact-infos">
                <img class="logo" src="src/assets/logo-nobg.png" alt="logo du garage"></img>
                <h3>Garage Auto V. Parrot</h3>
                <ul class="infos-items">
                    <li class="infos-item"><i class="fas fa-map-marker-alt"></i>1 av. de Paris - 75000, Paris</li>
                    <li class="infos-item"><i class="fas fa-mobile-alt"></i>01 02 03 04 05</li>
                    <li class="infos-item"><i class="fas fa-envelope"></i>contact@garage-parrot.fr</li>
                </ul>
                <div class="socials">
                    <a href="https://www.instagram.com/" id="instagram"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.facebook.com/" id="facebook"><i class="fab fa-facebook-square"></i></a>
                </div> 
            </div>
            <div class="contact-form">
                <form class="contact-msg" method="POST">
                    <label for="mailNom">Nom</label>
                    <input type="text" class="form_data" name="mailNom">
                    <label for="mailPrenom">Prénom</label>
                    <input type="text" class="form_data" name="mailPrenom">
                    <label for="mailEmail">Email</label>
                    <input type="text" class="form_data" name="mailEmail" required="required">
                    <label for="mailTel">Téléphone</label>
                    <input type="text" class="form_data" name="mailTel">
                    <label for="mailMessage">Votre message</label>
                    <textarea name="mailMessage" rows="10" required="required"></textarea>
                   
                    <button class="contact-btn" type="submit" name="mailEnvoi" id="submit">Envoyer</button>
                    <br>  
                </form>
            </div>
        </div>
        
    </div>
</section>