<?php
session_start();
$pageTitle = "Accueil"; // Titre personnalisé
require_once 'include/config.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?> - NaturElle</title>
    <link rel="stylesheet" href="style_css/style.css">
    <script src="panier.js"></script>
</head>
<body>
    <section class="top-txt">
        <div class="head container">
            <div class="head-txt">
                <p>Livraison gratuite à partir de 99DT d'achats, retour ou remboursement garanti sous 30 jours.</p>
            </div>
            <div class="sing_in_up">
                <?php if (isset($_SESSION['user_id'])): ?>
                    <a href="profil.php">MON COMPTE</a>
                    <a href="logout.php">DÉCONNEXION</a>
                <?php else: ?>
                    <a href="connexion.php">CONNEXION</a>
                    <a href="inscription.php">INSCRIPTION</a>
                <?php endif; ?>
                <a href="panier.php" style="margin-left: 15px;">PANIER (<span id="cart-count">0</span>)</a>
            </div>
        </div>
    </section>
    <nav class="navbar">
        <div class="navbar-container">
            <ul class="menu-items">
                <li><a href="#home">Accueil</a></li>
                <li><a href="produits.php">Nos produits</a></li>
                <li><a href="#news">Blog</a></li>
                <li><a href="#contact">Contact</a></li>
                
            </ul>
            <div class="logo">
                <img src="images/logo.png" width="170" height="60" alt="NaturElle">
            </div>
        </div>
    </nav>
    <section id="home">
        <div class="home_page">
            <div class="home_img">
                <img src="images/affiche.jpg" alt="img">
            </div>
            <div class="home_txt">
                <h2><br>Nouveautés</h2>
                <div class="home_label">
                    <p>Une marque de luxe engagée, créant des essentiels éthiques et d'une qualité exceptionnelle.</p>
                </div>
                <button><a href="produits.php">Achetez Maintenant</a></button>
            </div>
        </div>
    </section>

    <section id="collection">
        <div class="collections container">
            <div class="content">
                <img src="https://resize.elle.fr/portrait/var/plain_site/storage/images/beaute/news-beaute/soins/quand-l-auto-massage-du-visage-vient-booster-la-routine-skincare-3967124/95608247-1-fre-FR/Quand-l-auto-massage-du-visage-vient-booster-la-routine-skincare.jpg" alt="img">
                <div class="img-content">
                    <p>Catégorie Visage</p>
                    <button><a href="produits.php">Découvrir</a></button>
                </div>
            </div>
            <div class="content2">
                <img src="https://parachezvous.ma/wp-content/uploads/2023/07/CAT-33-500x500.jpg" alt="img">
                <div class="img-content2">
                    <p>Catégorie Corps</p>
                    <button><a href="produits.php">Découvrir</a></button>
                </div>
            </div>
            <div class="content3">
                <img src="https://lisamento.com/wp-content/uploads/2023/01/Soin-cheveux-huile-de-coco-04.jpg" alt="img">
                <div class="img-content3">
                    <p>Catégorie Cheveux</p>
                    <button><a href="produits.php">Découvrir</a></button>
                </div>
            </div>
        </div>
    </section>
    <section id="visage">
        <div class="seller container">
            <h2>Visage</h2>
            <div class="best-seller">
                <div class="best-p1">
                    <img src="images/cremehydra.jpg" alt="img">
                    <div class="best-p1-txt">
                        <div class="name-of-p">
                            <p>Crème hydratante</p>
                        </div>
                        <div class="price">90.00 TND</div>
                        <div class="buy-now">
                            <?php if (isset($_SESSION['user_id'])): ?>
                                <form action="produits.php" method="post">
                                    <input type="hidden" name="p_id" value="1">
                                    <input type="hidden" name="quantite" value="1">
                                    <button type="submit">Ajouter</button>
                                </form>
                            <?php else: ?>
                                <button onclick="window.location.href='connexion.php'">Ajouter</button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="best-p1">
                    <img src="images/serum.jpg" alt="img">
                    <div class="best-p1-txt">
                        <div class="name-of-p">
                            <p>Sérum</p>
                        </div>
                        <div class="price">89.00 TND</div>
                        <div class="buy-now">
                            <?php if (isset($_SESSION['user_id'])): ?>
                                <form action="produits.php" method="post">
                                    <input type="hidden" name="p_id" value="2">
                                    <input type="hidden" name="quantite" value="1">
                                    <button type="submit">Ajouter</button>
                                </form>
                            <?php else: ?>
                                <button onclick="window.location.href='connexion.php'">Ajouter</button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="best-p1">
                    <img src="images/tonique.png" alt="img">
                    <div class="best-p1-txt">
                        <div class="name-of-p">
                            <p>Toner</p>
                        </div>
                        <div class="price">70.00 TND</div>
                        <div class="buy-now">
                            <?php if (isset($_SESSION['user_id'])): ?>
                                <form action="produits.php" method="post">
                                    <input type="hidden" name="p_id" value="3">
                                    <input type="hidden" name="quantite" value="1">
                                    <button type="submit">Ajouter</button>
                                </form>
                            <?php else: ?>
                                <button onclick="window.location.href='connexion.php'">Ajouter</button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section id="corps">
            <div class="seller container">
                <h2>Corps</h2>
                <div class="best-seller">
                    <div class="best-p1">
                        <img src="images/gommage.jpg" alt="img">
                        <div class="best-p1-txt">
                            <div class="name-of-p">
                                <p>Gommage pour le corps</p>
                            </div>
                            <div class="price">85.00 TND</div>
                            <div class="buy-now">
                                <?php if (isset($_SESSION['user_id'])): ?>
                                    <form action="produits.php" method="post">
                                        <input type="hidden" name="p_id" value="4">
                                        <input type="hidden" name="quantite" value="1">
                                        <button type="submit">Ajouter</button>
                                    </form>
                                <?php else: ?>
                                    <button onclick="window.location.href='connexion.php'">Ajouter</button>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="best-p1">
                        <img src="images/gel.jpg" alt="img">
                        <div class="best-p1-txt">
                            <div class="name-of-p">
                                <p>Gel de douche</p>
                            </div>
                            <div class="price">75.00 TND</div>
                            <div class="buy-now">
                                <?php if (isset($_SESSION['user_id'])): ?>
                                    <form action="produits.php" method="post">
                                        <input type="hidden" name="p_id" value="5">
                                        <input type="hidden" name="quantite" value="1">
                                        <button type="submit">Ajouter</button>
                                    </form>
                                <?php else: ?>
                                    <button onclick="window.location.href='connexion.php'">Ajouter</button>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="best-p1">
                        <img src="https://kyliecosmetics.com/cdn/shop/files/KJS_VanillaBC_24_Moisturizer_Closed_V2.jpg?v=1698975255&width=2500x" alt="img">
                        <div class="best-p1-txt">
                            <div class="name-of-p">
                                <p>Lotion pour le corps</p>
                            </div>
                            <div class="price">95.00 TND</div>
                            <div class="buy-now">
                                <?php if (isset($_SESSION['user_id'])): ?>
                                    <form action="produits.php" method="post">
                                        <input type="hidden" name="p_id" value="6">
                                        <input type="hidden" name="quantite" value="1">
                                        <button type="submit">Ajouter</button>
                                    </form>
                                <?php else: ?>
                                    <button onclick="window.location.href='connexion.php'">Ajouter</button>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <section id="cheveux">   
        <div class="seller container">
            <h2>Cheveux</h2>
            <div class="best-seller">
                <div class="best-p1">
                    <img src="images/masque.jpg" alt="img">
                    <div class="best-p1-txt">
                        <div class="name-of-p">
                            <p>Masque pour cheveux</p>
                        </div>
                        <div class="price">80.00 TND</div>
                        <div class="buy-now">
                            <?php if (isset($_SESSION['user_id'])): ?>
                                <form action="produits.php" method="post">
                                    <input type="hidden" name="p_id" value="7">
                                    <input type="hidden" name="quantite" value="1">
                                    <button type="submit">Ajouter</button>
                                </form>
                            <?php else: ?>
                                <button onclick="window.location.href='connexion.php'">Ajouter</button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="best-p1">
                    <img src="images/shampoo.jpg" alt="img">
                    <div class="best-p1-txt">
                        <div class="name-of-p">
                            <p>Shampoing</p>
                        </div>
                        <div class="price">65.00 TND</div>
                        <div class="buy-now">
                            <?php if (isset($_SESSION['user_id'])): ?>
                                <form action="produits.php" method="post">
                                    <input type="hidden" name="p_id" value="8">
                                    <input type="hidden" name="quantite" value="1">
                                    <button type="submit">Ajouter</button>
                                </form>
                            <?php else: ?>
                                <button onclick="window.location.href='connexion.php'">Ajouter</button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="best-p1">
                    <img src="images/serumCheuveux.jpg" alt="img">
                    <div class="best-p1-txt">
                        <div class="name-of-p">
                            <p>Sérum Cheveux</p>
                        </div>
                        <div class="price">70.00 TND</div>
                        <div class="buy-now">
                            <?php if (isset($_SESSION['user_id'])): ?>
                                <form action="produits.php" method="post">
                                    <input type="hidden" name="p_id" value="9">
                                    <input type="hidden" name="quantite" value="1">
                                    <button type="submit">Ajouter</button>
                                </form>
                            <?php else: ?>
                                <button onclick="window.location.href='connexion.php'">Ajouter</button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="news">
        <div class="news-heading">
            <p>Nouveautés</p>
            <h2>Astuces beauté</h2>
        </div>
        <div class="l-news container">
            <div class="l-news1">
                <div class="news1-img">
                    <img src="https://amateracosmetics.com/wp-content/uploads/2021/01/demaquillage-400x400.jpg" alt="img">
                </div>
                <div class="news1-conte">
                    <div class="date-news1">
                        <p><i class='bx bxs-calendar'></i> 14 Janvier 2023</p>
                        <h4>20 astuces beauté qui vont vous changer la vie</h4>
                        <a href="https://www.moncornerb.com/fr/content/731-conseils-mcb-pour-routine-visage-parfaite" target="_blank">Plus de détails..</a>
                    </div>
                </div>
            </div>
            <div class="l-news2">
                <div class="news2-img">
                    <img src="https://media.istockphoto.com/id/1352840704/fr/photo/portrait-dune-jolie-jeune-femme-appliquant-une-cr%C3%A8me-hydratante-sur-fond-gris.jpg?s=612x612&w=0&k=20&c=zAvuQrTzgGU5G3VckPijBrBeRvs8lMrumzLz4UJVBf0=" alt="img">
                </div>
                <div class="news2-conte">
                    <div class="date-news2">
                        <p><i class='bx bxs-calendar'></i> 22 Mai 2024</p>
                        <h4>7 astuces pour prendre soin de la peau de son visage</h4>
                        <a href="https://www.crpce.com/soins-visage/7-astuces-pour-prendre-soin-de-la-peau-de-son-visage?fbclid=IwY2xjawIOH15leHRuA2FlbQIxMAABHfG2wO-zh85VOyM69szDNyh7eJ3oT7bKSAV6EhxZJuYZ7WmoIVTJHag2Eg_aem_8LZVSgvVD1ztzBs1XpcpvQ" target="_blank">Plus de détails..</a>
                    </div>
                </div>
            </div>
            <div class="l-news3">
                <div class="news3-img">
                    <img src="https://images.ctfassets.net/38qgsavoyupk/5Ew2XUJP4h5iz3tUs0sCS8/4de6bbf6fb3d13c2c44b49902e3a27d2/cheveux-fins_0-fr-fr" alt="img">
                </div>
                <div class="news3-conte">
                    <div class="date-news3">
                        <p><i class='bx bxs-calendar'></i> 6 Janvier 2025</p>
                        <h4>Redonnez du volume aux cheveux fins</h4>
                        <a href="https://www.lepetitmarseillais.com/tous-nos-conseils/soins-des-cheveux/cheveux-fins?fbclid=IwY2xjawIOIF9leHRuA2FlbQIxMAABHVKun-iqAjVVuPL5IAhcKh187Rp8T7SuCd5vlIzQ0Qu943Wk8JEKUAhXXg_aem_ZGpzGzVu1-am3O9iKHtg4g" target="_blank">Plus de détails..</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="contact container">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6385.539387887908!2d10.2788652!3d36.8479914!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd4b942dc61765%3A0xd2d385560445a08d!2sTunisia%20mall%201!5e0!3m2!1sfr!2stn!4v1738612897483!5m2!1sfr!2stn" width="600" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <form action="https://formspree.io/f/xzbowpjq" method="POST">
                <div class="form">
                    <div class="form-txt">
                        <h4>INFORMATIONS</h4>
                        <h1>Contactez-nous</h1>
                        <span>Chez NaturElle, nous célébrons la beauté naturelle à travers des produits 100 % naturels, soigneusement conçus pour nourrir la peau, les cheveux et le corps.</span>
                        <p>Tunisia Mall I</p>
                    </div>
                    <div class="form-details">
                        <input type="text" name="name" id="name" placeholder="Nom" required>
                        <input type="email" name="email" id="email" placeholder="Email" required>
                        <textarea name="message" id="message" cols="52" rows="7" placeholder="Message" required></textarea>
                        <button>ENVOYER</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <script>
        // Initialiser le compteur du panier au chargement de la page
        document.addEventListener('DOMContentLoaded', function() {
            // Fonction pour mettre à jour le compteur du panier
            function updateCartCount() {
                const cartCountElement = document.getElementById('cart-count');
                
                <?php if(isset($_SESSION['user_id'])): ?>
                // Faire une requête AJAX pour obtenir le nombre d'articles dans le panier
                fetch('get_cart_count.php')
                    .then(response => response.json())
                    .then(data => {
                        cartCountElement.textContent = data.count;
                    })
                    .catch(error => {
                        console.error('Erreur lors de la récupération du nombre d\'articles:', error);
                    });
                <?php else: ?>
                cartCountElement.textContent = '0';
                <?php endif; ?>
            }
            
            // Mettre à jour le compteur au chargement de la page
            updateCartCount();
            
            // Mettre à jour le compteur toutes les 30 secondes
            setInterval(updateCartCount, 30000);
        });
    </script>
</body>
</html>
