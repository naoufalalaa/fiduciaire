<?php
    if(isset($_POST['comment'])){
        $email=htmlspecialchars($_POST['email']);
        $message=htmlspecialchars($_POST['message']);
        $req=$bdd->prepare('INSERT INTO commentaire(email,message) VALUES(?,?)');
        $req->execute(array($email,$message));
    }
?>
    <footer class="uk-text-center uk-margin-large-top">
        <div class="uk-padding-small footer">
            <div class="uk-text-left" uk-grid>
                <div class="uk-text-center uk-width-1-5@m">
                    <img src="./assets/img/FIDU-black.png" width="100px" alt="">
                </div>
                <div class="uk-width-3-5@m uk-width-2-3@s">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex quidem itaque impedit fugit eaque beatae at asperiores fuga culpa voluptatum ipsam atque error hic, nihil recusandae, nostrum adipisci neque. Soluta!</p>
                    <form method="post">
                        <input name="email" class="uk-margin uk-input" name="email" type="email" placeholder="Votre E-mail"><br>
                        <textarea name="message" class="uk-textarea" name="message" placeholder="Votre commentaire"></textarea>
                        <br>
                        <button name="comment" type="submit" class="uk-button uk-margin uk-button-danger uk-flex-right">Envoyer</button>
                    </form>
                </div>
                <div class="uk-width-1-5@m uk-width-1-3@s uk-text-center uk-text-left@s">
                    <ul class="uk-list uk-list-divider">
                        <li><span class="theme-compatible" uk-icon="icon: github"></span><small> GitHub : <small>@naoufalalaa</small></small></li>
                        <li><span class="theme-compatible" uk-icon="icon: whatsapp"></span><small> Whatsapp : <small>+212 622-975-254</small></small></li>
                        <li><span class="theme-compatible" uk-icon="icon: facebook"></span><small> Facebook : <small>Naoufal ALAA</small></small></li>
                        <li><span class="theme-compatible" uk-icon="icon: instagram"></span><small> Instagram : <small>@heevenly_made</small></small></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="foot uk-bg-dark">
            <small>Copyright © Naoufal ALAA</small>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.7.2/js/uikit.min.js" integrity="sha512-OSTRfXHexzhPF8VccjHh1s3/9nXkvzZVoctPeA6YGPYhaPoVEwXvXd74IuiwpUTp/OpIoMqm5dEgX9W2xK+ICg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.7.2/js/components/parallax.min.js" integrity="sha512-MGyLEw3Pg0p4kkhtKenaQC+kuu1/6qDIBS8jpJbRea2kw6Zf92gfg6blceLq23aAkSTTmDgQBvPkA6ZtR122wQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.7.2/js/uikit-icons.min.js" integrity="sha512-pCn4YSCG+11Nq6MHxgcmh6IpaSMYbuJmXahX7AWINvUYXpK0yWQGGGeGBiGU23wLfnqEfnSC0+JKYdHdD8Xlsw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>