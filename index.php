<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Creative - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation--> <!--
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">Start Bootstrap</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav> -->
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Current occurrences found</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">

                            <?php

                                $content = file_get_contents('https://df.olx.com.br/distrito-federal-e-regiao/brasilia/ra-xix---candangolandia/imoveis/aluguel?pe=1500&roe=3&ros=2&sf=1');

                                preg_match_all('/<span color="dark" aria-label="(.*?)" class="wlwg1t-1 fsgKJO sc-ifAKCX eLPYJb" font-weight="400">(.*?)<\/span>/s', $content, $matchesx);
                                preg_match_all('/<span color="dark" class="wlwg1t-1 fsgKJO sc-ifAKCX eLPYJb" font-weight="400">(.*?)<\/span>/s', $content, $matchesy);
                                preg_match_all('/<div class="aoie8y-0 hRScWw">(.*?)<\/div>/s', $content, $matchesz);
                                preg_match_all('/<span color="dark" title="(.*?)" class="sc-1j5op1p-0 lnqdIU sc-ifAKCX eLPYJb" font-weight="400">(.*?)<\/span>/s', $content, $matchest);

                                echo "<br>";

                                $numeros = array("0","1","2","3","4");

                                ?>


                                <table class="table branco">
                                <thead>
                                    <tr>
                                    <th scope="col">Nº</th>
                                    <th scope="col">Dia</th>
                                    <th scope="col">Hora</th>
                                    <th scope="col">Formato</th>
                                    <th scope="col">Preço</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php

                                $string = 'Sarah has 4 dolls and 6 bunnies.';                                
                                $int = (int) filter_var($string, FILTER_SANITIZE_NUMBER_INT);

                                echo "<h1>".$matchest[0][1]."</h1>";
                                
                                /*$valor = $matchesz[0][0];

                                $valor = str_replace("." , "" , $valor );
                                $valor = str_replace("," , "" , $valor);
                                $valor = str_replace("R$ " , "" , $valor);

                                $pre = preg_replace("/[^0-9]/", "", $valor);
                                echo "<h1>".$preg."</h1>";
                                var_dump($pre);*/
                                //echo "<h1>AAAAAAAAAAAAAAAAA</h1>";
                                //echo "<h1>".$valor."</h1>";
                                

                                                                
                                foreach ($numeros as $key => $value){

                                    /*$valor = $matchesz[0][$value];

                                    $valor = str_replace("." , "" , $valor );
                                    $valor = str_replace("," , "" , $valor);
                                    $valor = str_replace("R$ " , "" , $valor);

                                    if (intval($valor) > 1300){
                                        echo "<tr class=\"table-success\">";
                                    } else{
                                        echo "<tr>";
                                    }*/

                                    echo "<tr>";
                                    echo "<th scope=\"row\">".$value."</th>";
                                    echo "<td>".$matchesx[0][$value]."</td>";
                                    echo "<td>".$matchesy[0][$value]."</td>";
                                    echo "<td>".$value."</td>";
                                    echo "<td>".$matchesz[0][$value]."</td>";
                                    echo "</tr>";

                                }
                                
                                ?>

                                </tbody>
                                </table>

                                <?php

                                /*foreach ($numeros as $key => $value){
                                    echo "<p>".$matchesx[0][$value]." às ";
                                    echo $matchesy[0][$value]."<br/>";
                                    echo $matchesz[0][$value]."<br/></p>";
                                }*/

                                ?>

                        </p> <!--
                        <a class="btn btn-primary btn-xl" href="#about">Find Out More</a> -->

                    </div>
                </div>
            </div>
        </header>

        <!-- Footer--> <!--
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2022 - Company Name</div></div>
        </footer> -->
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
