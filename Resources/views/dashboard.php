<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/dashBoard.css">
    <title>Document</title>
</head>
<body>
    <!--Structure principale -->
    <div class="container">
        <!-- Menu latéral -->
        <aside class="lateralSection">
            <!-- Image de profil-->
            <section class="profil">
                <img class="profil__avatar" src="assets/img/avatar.png" alt="">
                <p class="profil__name">Henry George</p>
            </section>
            <!-- Navigation du dashboard-->
            <nav class="nav">
                <ul class="nav__linksList">
                    <li class="nav__linksList__item"><a class="nav__link nav__link--dashBoard nav__link--selected" href="#">Dashboard</a></li>
                    <li class="nav__linksList__item"><a class="nav__link nav__link--invoices" href="#">Invoices</a></li>
                    <li class="nav__linksList__item"><a class="nav__link nav__link--companies" href="#">Companies</a></li>
                    <li class="nav__linksList__item"><a class="nav__link nav__link--contact" href="#">Contact</a></li>
                </ul>
            </nav>
            <!-- section logout-->
            <section class="logout">
                <img class="logout__avatar" src="assets/img/avatar.png" alt="">
                <a class="logout__link" href="#">Lougout</a>
            </section>
        </aside>
        <!-- zone de contenu-->
        <main class="main">
            <!--Header du dashboard-->
            <header class="header">
                <section class="header__titles">
                     <h1>DashBoard</h1>
                     <h2>dashboard/new-invoice</h2>
                </section>
                <section class="header__welcomeMsg">
                    <p class="header__welcomeMsg__title">Welcome back Henry!</p>
                    <p class="header__welcomeMsg__pageDescription">You can here add an invoice, a company and some contacts</p>
                </section> 
                <img class="header__img" src="./assets/img/develloper.svg" alt="">
                

            </header>
            <!-- sections contenant le contenu principal de la page-->
 
            <!-- section resume -->
            <section class="resume">
                <div class="resume__left">
                    <section class="contentSection">
                        <h3 class="contentSection__title">Statistics</h3>
                        <ul class="statBadges">
                            <li class="statBadges__item statBadges__item--bgDark">
                                <span class="statBadges__item__num">245</span>
                                <span class="statBadges__item__descr">Invoices</span>
                            </li>
                            <li class="statBadges__item statBadges__item--bglight">
                                <span class="statBadges__item__num">245</span>
                                <span class="statBadges__item__descr">Contacts</span>
                            </li>
                            <li class="statBadges__item statBadges__item--bglightRed">
                                <span class="statBadges__item__num">245</span>
                                <span class="statBadges__item__descr">Companies</span>
                            </li>
                        </ul>
                    </section>

                    <section class="contentSection">
                        <h3 class="contentSection__title">Last Contacts</h3>
                        <hr>
                        <table class="resumeTable">
                            <thead class="resumeTable__head">
                                <tr>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody class="resumeTable__body">
                                <tr>
                                    <td>Henry Bailleux</td>
                                    <td>0485 78 76 67</td>
                                    <td>henry.bailleux@gr.be</td>
                                </tr>
                                <tr>
                                    <td>Henry Bailleux</td>
                                    <td>0485 78 76 67</td>
                                    <td>henry.bailleux@gr.be</td>
                                </tr>
                                <tr>
                                    <td>Henry Bailleux</td>
                                    <td>0485 78 76 67</td>
                                    <td>henry.bailleux@gr.be</td>
                                </tr>
                                <tr>
                                    <td>Henry Bailleux</td>
                                    <td>0485 78 76 67</td>
                                    <td>henry.bailleux@gr.be</td>
                                </tr>
                            </tbody>
                        </table>
                    </section>

                </div>
                <div class="resume__right">
                    <section class="contentSection">
                        <h3 class="contentSection__title">Last invoices</h3>
                        <hr>
                        <table class="resumeTable">
                            <thead class="resumeTable__head">
                                <tr>
                                    <th>Invoice Number</th>
                                    <th>Dates</th>
                                    <th>Company</th>
                                </tr>
                            </thead>
                            <tbody class="resumeTable__body">
                                <tr>
                                    <td>FF20220815-001</td>
                                    <td>15/09/22</td>
                                    <td>Jouet Jean-Michel</td>
                                </tr>
                                <tr>
                                    <td>FF20220815-001</td>
                                    <td>15/09/22</td>
                                    <td>Jouet Jean-Michel</td>
                                </tr>
                                <tr>
                                    <td>FF20220815-001</td>
                                    <td>15/09/22</td>
                                    <td>Jouet Jean-Michel</td>
                                </tr>
                                <tr>
                                    <td>FF20220815-001</td>
                                    <td>15/09/22</td>
                                    <td>Jouet Jean-Michel</td>
                                </tr>
                            </tbody>
                        </table>
                    </section>
                    <section class="contentSection">
                        <h3 class="contentSection__title">Last Companies</h3>
                        <hr>
                        <table class="resumeTable">
                            <thead class="resumeTable__head">
                                <tr>
                                    <th>Name</th>
                                    <th>TVA</th>
                                    <th>Country</th>
                                </tr>
                            </thead>
                            <tbody class="resumeTable__body">
                                <tr>
                                    <td>Jouet Jean-Michel</td>
                                    <td>FR873 736 367</td>
                                    <td>FRANCE</td>
                                </tr>
                                <tr>
                                    <td>Jouet Jean-Michel</td>
                                    <td>FR873 736 367</td>
                                    <td>FRANCE</td>
                                </tr>
                                <tr>
                                    <td>Jouet Jean-Michel</td>
                                    <td>FR873 736 367</td>
                                    <td>FRANCE</td>
                                </tr>
                                <tr>
                                    <td>Jouet Jean-Michel</td>
                                    <td>FR873 736 367</td>
                                    <td>FRANCE</td>
                                </tr>
                            </tbody>
                        </table>
                    </section>
                </div>
            </section>
        </main>
    </div>
</body>
</html>