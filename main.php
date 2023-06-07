<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="lv">
    <head>
        <meta charset="UTF-8">
        <meta name="keywords" content="HTML, Bootstrap">
        <title>Sākumlapa</title>
        <!--priekš bootstrapa-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!--priekš roboto fonta-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    </head>
    <body>
        <!--banneris-->
        <div class="banneris" style="padding-top: 70px;
        padding-bottom: 5px;
        text-align: center;
        background: #1abc9c;
        color: white;
        font-size: 30px;">
            <h1>Koju top receptes</h1>
            <p>"Oho, šīs receptes ir tā vērtas!" -Gordons Remzijs</p>
			<p>Sveicināts, <?php echo $user_data['user_name']; ?> </p>
        </div>
        <!--navigācija-->
        <nav class="navbar fixed-top navbar-expand p-2" style="padding-top: 56px; background-color: white;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#makaroni" style="color:black;">Makaroni</a>
                <a class="nav-item nav-link" href="#debesmanna" style="color:black;">Debesmanna</a>
                <a class="nav-item nav-link" href="#pelmeni" style="color:black;">Pelmeņi</a>
                <a class="nav-item nav-link" href="#kesadijas" style="color:black;">Kesadijas</a>
				<a class="nav-item nav-link" href="logout.php" style="color:black;">Izrakstīties</a>
              </div>
            </div>
          </nav>
  
        <!--bildes-->
        <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4" style="padding:10px">
            <img src="./pictures/cepti_pelmeni.jpg" class="img" alt="bilde1">
            <img src="./pictures/debesmanna.jpg" class="img" alt="bilde2">
            <img src="./pictures/Kesadijas.jpg" class="img" alt="bilde3">
            <img src="./pictures/Makaroni_ar_malto_galu.jpg" class="img" alt="bilde4">
        </div>
        <!--articles-->
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2">
            <div id="makaroni" style="background-color: #E9EAE0; border-radius: 25px; padding: 50px">
                <div class="p-2">
                    <h2>Makaroni ar malto gaļu un krietnu tiesu tomātu</h2>
                </div>
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="./pictures/Makaroni_ar_malto_galu.jpg" class="d-block" style="width:740px; height:400px" alt="...">
                    </div>
                    <div class="carousel-item">
                      <div class="d-flex justify-content-center">
                        <img src="./pictures/makaroni2.jpg" class="d-block" style="width:740px; height:400px" alt="...">
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="d-flex justify-content-center">
                        <img src="./pictures/makaroni3.jpeg" class="d-block" style="width: 740px; height:400px" alt="...">
                      </div>
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                <figure class="text-left p-2">
                    <blockquote class="blockquote">
                      <p>Šie makaroni ar malto gaļu ir bussin'.</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                      Bobijs Fleys <cite title="Source Title">avots The New York Times</cite>
                    </figcaption>
                </figure> 
                <table class="table table-striped p-2">
                  <caption class="p-2">Sastāvdaļas 3 ēdienreizēm.</caption>
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Sastāvdaļas</th>
                        <th scope="col">Daudzums</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Makaroni</td>
                        <td>150g</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>jauktā vai liellopa maltā gaļa</td>
                        <td>250g</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>(2 bundžas) konservēti tomāti gabaliņos</td>
                        <td>400g</td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td>Sīpols</td>
                        <td>1/2 gab.</td>
                      </tr>
                      <tr>
                        <th scope="row">5</th>
                        <td>Burkāni</td>
                        <td>1 gab.</td>
                      </tr>
                      <tr>
                        <th scope="row">6</th>
                        <td>Olīveļļa vai sviests</td>
                        <td>1.5 ĒK.</td>
                      </tr>
                      <tr>
                        <th scope="row">7</th>
                        <td>Sāls</td>
                        <td>Pēc garšas</td>
                      </tr>
                      <tr>
                        <th scope="row">8</th>
                        <td>Melnie pipari</td>
                        <td>Pēc garšas</td>
                      </tr>
                      <tr>
                        <th scope="row">9</th>
                        <td>garšvielu maisījums gaļai</td>
                        <td>1.5 ĒK</td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="p-2">
                    <p>
                        1. Atsevišķi katlā sālsūdenī novāra makaronus pēc norādēm uz iepakojuma - spirālītes, radziņi vai taurenīši, kas nu katra virtuvē iemīļotāks. Nokāš un noliek malā, tos vajadzēs nedaudz vēlāk.
                    </p>
                    <p>
                        2. Sīpolu smalki jo smalki sakapā. Burkānus nomizo un sarīvē. Lielā katlā lej eļļu, uzsilda uz vidējas uguns un saber tajā sīpolus. Pārber ar sāli un pipariem, cep aptuveni trīs minūtes.
                    </p>
                    <p>
                        3. Tad sīpoliem pievieno sarīvētos burkānus un visu apcep, līdz sīpoli kļuvuši viegli caurspīdīgi. Tos pārliek kādā traukā vēlākam.
                    </p>
                    <p>
                        4. Katlā liek malto gaļu, pārber ar saldās paprikas pulveri, gaļas garšvielu maisījumu un apcep, līdz gaļa viegli apbrūnējusi.
                    </p>
                    <p>
                        5. Kad gaļa apcepta, katlā atpakaļ ieber sīpolus un burkānus, visam pārlej pāri konservētus tomātus gabaliņos un uzkarsē, līdz tomātu sulā redzami burbulīši.
                    </p>
                    <p>
                        6. Katla saturam pievieno vārītos makaronus un sparīgi visu samaisa, lai sastāvdaļas skaisti sajaukušās.
                    </p>
                  </div>
            </div>
            <div id="debesmanna" style="background-color: #E7625F; border-radius: 25px; padding: 50px">
                <div class="text-left p-2">
                    <h2>Gaisīgā un maigā kazeņu-upeņu debesmanna</h2>
                </div>
                <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="./pictures/debesmanna.jpg" class="d-block" style="width:740px; height:400px" alt="...">
                    </div>
                    <div class="carousel-item">
                      <div class="d-flex justify-content-center">
                        <img src="./pictures/debesmanna2.jpg" class="d-block" style="width:740px; height:400px" alt="...">
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="d-flex justify-content-center">
                        <img src="./pictures/debesmanna3jpg.jpg" class="d-block" style="width: 740px; height:400px" alt="...">
                      </div>
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                <figure class="text-left p-2">
                    <blockquote class="blockquote">
                      <p>Debesmannā ir mans mīļākais deserts.</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                      Gordons Remzijs <cite title="Source Title">avots Delfi</cite>
                    </figcaption>
                </figure>
                <table class="table table-striped p-2">
                  <caption class="p-2">Sastāvdaļas 3 ēdienreizēm.</caption>
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Sastāvdaļas</th>
                        <th scope="col">Daudzums</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Ūdens</td>
                        <td>1 litrs</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Manna</td>
                        <td>120g</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Cukurs</td>
                        <td>190g</td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td>saldētas ogas (kazenes, upenes)</td>
                        <td>300g</td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="p-2">
                    <p>
                        1. Katlā ielej 300 mililitrus ūdens un vāri tajā ogas.
                    </p>
                    <p>
                        2. Sablendē ogas un nokās.
                    </p>
                    <p>
                        3. Pielej pārējo ūdeni, pieber cukuru un uzvāri.
                    </p>
                    <p>
                        4. Maisot ber klāt mannu, vaniļas cukuru. Vāri 6-8 minūtes.
                    </p>
                    <p>
                        5. Atdzesē.
                    </p>
                    <p>
                        6. Kul ar mikseri, līdz uzpūtenis gatavs.
                    </p>
                  </div>
            </div>
            <div id="pelmeni" style="background-color: #C0C0C0; border-radius: 25px; padding: 50px">
                <div class="text-left p-2">
                    <h2>Izcili gardie pannā ceptie pelmeņi</h2>
                </div>
                <div id="carouselExampleControls3" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="./pictures/cepti_pelmeni.jpg" class="d-block" style="width:740px; height:400px" alt="...">
                    </div>
                    <div class="carousel-item">
                      <div class="d-flex justify-content-center">
                        <img src="./pictures/cepti_pelmeni2.jpg" class="d-block" style="width:740px; height:400px" alt="...">
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="d-flex justify-content-center">
                        <img src="./pictures/cepti_pelmeni3.jpg" class="d-block" style="width: 740px; height:400px" alt="...">
                      </div>
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls3" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls3" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                <figure class="text-left p-2">
                    <blockquote class="blockquote">
                      <p>Ja es dzīvotu kojās, tas būtu viss ko es ēstu.</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                      Džeimijs Olivers <cite title="Source Title">avots BBC Food</cite>
                    </figcaption>
                </figure>
                <div class="p-2">
                    <h3>Sastāvdaļas</h3>
                    <ul class="list-group">
                        <li class="list-group-item">Panna</li>
                        <li class="list-group-item">1 ĒK Eļļas</li>
                        <li class="list-group-item">Sāls</li>
                        <li class="list-group-item">Pipari</li>
                        <li class="list-group-item">Saldēti pelmeņi</li>
                    </ul>
                </div>
                <div class="p-2">
                    <p>
                        Ja vēlies iemācīties pagatavot ideāli gardus pannā ceptus pelmeņus, pirmkārt, atgādinām, ka šis nebūt nav veselīga uztura pamatprincipiem atbilstošākais ēdiens un gatavošanas paņēmiens. Ja tevi nemoka liekie kilogrami vai sirdsapziņas pārmetumi, tad vienkārši paņem ledus cirtni un dodies pie ledusskapja, lai "atbrīvotu" saldētavas dzīlēs iesalušo pelmeņu paciņu - pārējo mēs tev izstāstīsim.
                    </p>
                    <p>
                        Lai pagatavotu ideāli gardus pelmeņus - sulīgus, ar zeltaini brūnu un kraukšķīgu garoziņu, tev būs nepieciešama vien panna ar vāku, eļļa, sāls, pipari un, protams, saldēti pelmeņi.
                    </p>
                    <p>
                        Pannā ielej tik daudz cepšanai paredzētas eļļas, piemēram, kukurūzas, - lai tā pārklātu visu pannas virsmu, bet ne vairāk. Bieži vien kļūda tiek pieļauta, cepot pelmeņus pārāk lielā eļļas daudzumā. Šādā gadījumā tie no ārpuses ātri vien iegūst kraukšķīgu un pievilcīgi brūnu garoziņu, bet iekšpusē paliek jēli. Savukārt, mēģinot tos cept ilgāk, pelmeņu mīklas apvalks piedeg un pārogļojas, tādēļ šoreiz rīkojies citādi.
                    </p>
                    <p>
                        Kolīdz eļļa sāk dūmot, nekavējoties ber pannā pelmeņus vienā kārtā un apmaisi, lai tie viscaur būtu pārklāti ar eļļu. Tad uzliec pannai vāku un nogaidi 4-5 minūtes, līdz pelmeņi ir apbrūnējuši no vienas puses.
                    </p>
                    <p>
                        Tad pacel vāku, apgriez katru pelmeni uz otriem sāniem, pievieno sāli, piparus, kapātus sīpolus vai jebkādas citas sev tīkamas garšvielas.
                    </p>
                    <p>
                        Kamēr gaidi, līdz pelmeņi apcepsies arī no otras puses, atklāsim, ka ir vēl viens izplatīts pelmeņu cepšanas veids - tie pirms tam tiek pāris minūtes apvārīti sālsūdenī un tikai tad likti uz pannas. Kaut daudziem šāds pelmeņu gatavošanas veids šķiet ērts, un pelmeņi pagatavojas vienmērīgi, tomēr vārīšanas procesā tie zaudē tik ļoti patīkamo, ceptiem pelmeņiem raksturīgo kraukšķīgumu, kas tālākas apstrādes procesā, diemžēl, vairs nav atgūstams.
                    </p>
                    <p>
                        Brīdī, kad konstatē, ka pelmeņi ir vienmērīgi zeltaini apcepušies no visām pusēm, pievieno pannas saturam verdošu ūdeni - tikai tik daudz, lai tas pelmeņus pārklātu līdz pusei. Morāli sagatavojies pamatīgai virtuves uzkopšanai, jo eļļa sprakšķēs uz visām pusēm. Veikli uzliec pannai vāku un pacietīgi gaidi, līdz pannas saturs "nomierinās", šo laiku veltot plīts un sienas flīžu spodrināšanai.
                    </p>
                    <p>
                        Kad pienācis īstais brīdis, nocel pannai vāku, uzgriez liesmu līdz maksimumam un 3-4 minūtes turpini cept pelmeņus, ik pa laikam apmaisot, lai tos "nepierautu" pie pannas.
                    </p>
                    <p>
                        Kad teju viss šķidrums ir iztvaikojis un pelmeņi sāk lipt pie pannas, tie ir gatavi.
                    </p>
                </div>

            </div>
            <div id="kesadijas" style="background-color: coral; border-radius: 25px; padding: 50px">
                <div class="text-left p-2">
                    <h2>Brokastu kesadijas ar olu kulteni, bekonu un kukurūzu</h2>
                </div>
                <div id="carouselExampleControls4" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="./pictures/Kesadijas.jpg" class="d-block" style="width:740px; height:400px" alt="...">
                    </div>
                    <div class="carousel-item">
                      <div class="d-flex justify-content-center">
                        <img src="./pictures/Kesadijas2.jpg" class="d-block" style="width:740px; height:400px" alt="...">
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="d-flex justify-content-center">
                        <img src="./pictures/Kesadijas3.jpg" class="d-block" style="width:740px; height:400px" alt="...">
                      </div>
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls4" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls4" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                <figure class="text-left p-2">
                    <blockquote class="blockquote">
                      <p>Mmmmmm, kasadijas!!!.</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                      Gajs Fieri <cite title="Source Title">avots USA food daily</cite>
                    </figcaption>
                </figure>
                <table class="table table-striped p-2">
                  <caption class="p-2">Sastāvdaļas 3 ēdienreizēm.</caption>
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Sastāvdaļas</th>
                        <th scope="col">Daudzums</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Olas</td>
                        <td>3 gab.</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Piens</td>
                        <td>25 ml</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Sāls</td>
                        <td>Pēc garšas</td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td>Melnie pipari</td>
                        <td>Pēc garšas</td>
                      </tr>
                      <tr>
                        <th scope="row">5</th>
                        <td>Sviests</td>
                        <td>1 ĒK</td>
                      </tr>
                      <tr>
                        <th scope="row">6</th>
                        <td>"Bonduelle" konservēta kukurūza</td>
                        <td>1/2 bundža</td>
                      </tr>
                      <tr>
                        <th scope="row">7</th>
                        <td>Bekons</td>
                        <td>75g</td>
                      </tr>
                      <tr>
                        <th scope="row">8</th>
                        <td>Sarīvēts siers</td>
                        <td>50g</td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="p-2">
                    <p>
                        1. Vispirms sagatavo nepieciešamās sastāvdaļas pildīšanai - papriku nomazgā, izgriež serdi un sakapā smalkos gabaliņos. Kukurūzu nokāš un ieber bļodiņā vēlākam. Sieru sarīvē (var izmanot tādu, kas pašiem labāk tīk - Čedara, cieto, Tilzītes, Holandes vai citu labi kūstošu).
                    </p>
                    <p>
                        2. Traukā iesit olas, pievieno pienu, sāli un piparus un visu sakuļ. Uzkarsē pannu, kurā izkausē sviestu. Lej sakultās olas pannā un sacep kultenī - ļauj vispirms olām sākt recēt ap pannas maliņām, tad ar virtuves lāpstiņu olu masu izjauc un apmaisa pannā, lai veidojas gaisīgs kultenis. Kad olas tik tikko pannā sarecējušas, kulteni beidz cept un atliek traukā vēlākam.
                    </p>
                    <p>
                        3. Bekonu sagriež mazos gabaliņos un apcep tajā pašā pannā, kur bija kultenis, līdz tas viegli kraukšķīgs un "čirkains". Atliek malā.
                    </p>
                    <p>
                        4. Laiks pildīt tortiljas plāksnes! Pannu atbrīvo no bekona tauciņiem un nomazgā. Liek atpakaļ uz plīts un ieslēdz pavisam nelielu uguni (elektriskajām plītīm atzīme 1 vai 2). Pannā liek tortiljas plāksni, uzkaisa tai plānā kārtiņā sieru, tad olu kulteni un bekonu, tad kukurūzu un papriku, beigās visu pārkaisot ar sieru pavisam nedaudz. Tortiljai vajadzētu izskatīties gluži kā picai. Virsū liek vēl vienu tortiljas plāksni un viegli uzsilda, lai apakšējā tortilja kļūst nedaudz zeltaina.
                    </p>
                    <p>
                        5. Tad ar virtuves lāpstiņas palīdzību sapildītās tortiljas plāksnes apgriež otrādi un vēl nedaudz pannā apcep, lai arī otra tortiljas plāksne kļūst zeltaina. Šādi atkārto vēl divas reizes, lai kopā sanāktu trīs lielas pildītās kesadijas.
                    </p>
                    <p>
                        6. Kad kesadijas gatavas un apceptas, sagriež tās četrās daļās un pasniedz. Var ēst tāpat vai kopā ar skābo krējumu, majonēzes mērci vai gvakamoli.
                    </p>
                </div>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Šis ir brīdinājums!</strong> Šeit ir lapas beigas.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
            </div>
        </div>
        <div style="width: 100%; height: 500px; background-color: grey; border-radius: 25px; display: flex; flex-direction: column; align-items: center; justify-content: center; margin: 0 auto;">
          <h2>Ko tu domā par šo mājas lapu?</h2>
          <form>
              <div class="form-group">
                <label for="exampleFormControlInput1">Jūsu epasta adrese</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Vērtējums</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Komentārs</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <div>
                <button>Nosūtīt</button>
              </div>
          </form>
        </div>
        <footer class="bg-light text-center text-lg-start">
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
              Autors: Gustavs Oto Cers | 
              <a class="text-dark" href="mailto:gustavsoto.cers@va.lv">gustavsoto.cers@va.lv</a>
              Aleksis Kālis | 
              <a class="text-dark" href="mailto:gustavsoto.cers@va.lv">aleksis.kalis@va.lv</a>
            </div>
        </footer>
        <!--javascript, ja vajadzēs-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>