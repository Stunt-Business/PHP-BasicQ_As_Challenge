<!DOCTYPE html>
<html  lang="en">
<head>
      <title> 30 Days Basic PHP Q&A Challenge | Stunt-Business </title>
      <meta charset="UTF-8">
      <meta name="author" content="Benjamin Kataliko Viranga" >
      <meta name="Keywords" content = "Benjamin Kataliko, Benjamin Kataliko Viranga , Benjamin Viranga, Stunt Business" > 
      <meta name="viewport" content="width=device-width, initial-scale=1.0">  
      <meta name="description" content="Stunt Business 30 Days basic PHP Q&A "> 
      <meta name="csrf-token" content="tYG7b2djXWgKYZOj12mZB4xBUXSWorWxfhplqz67">


      <link rel="apple-touch-icon" sizes="180x180" href="https://www.stuntbusiness.ca/img/stunt-business-logo/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="https://www.stuntbusiness.ca/img/stunt-business-logo/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="https://www.stuntbusiness.ca/img/stunt-business-logo/favicon-16x16.png">
      <link rel="mask-icon"     href="https://www.stuntbusiness.ca/img/stunt-business-logo/safari-pinned-tab.svg" color="#5bbad5">
      <link rel="shortcut icon" href="https://www.stuntbusiness.ca/img/stunt-business-logo/favicon.ico">
      <meta name="msapplication-TileColor" content="#603cba">
      <link name="msapplication-config" href="https://www.stuntbusiness.ca/img/stunt-business-logo/browserconfig.xml">
      <meta name="theme-color" content="#ffffff">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <link href="https://fonts.googleapis.com/css?family=Cardo" rel="stylesheet">
      
      <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="./outputs_util/all_stuntb.css">

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <script src='https://www.google.com/recaptcha/api.js'></script>

</head>
<body>
<nav class="navbar  navbar-expand-md navbar-light fixed-top" id="navbar-first">
        <a class="navbar-brand brand pl-2" href="#">
        <img src="./outputs_util/stunt-business.png" alt="Stunt's logo" height="45" class="logo">
        </a> 
        
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown"> 
                <a  class="nav-link" id="languages" style="min-width:50px;text-align:center">
                <i class="fa fa-globe" style="padding-left:0px 5px 0px 5px;"></i>
                <span class="fa fa-caret-down"></span>
                </a> 
                <div class="dropdown-menu" id="lang">
                    <a class="dropdown-item" href="https://www.stuntbusiness.ca/fr/home">Français</a>
                    <a class="dropdown-item" href="https://www.stuntbusiness.ca/en/home">English </a>
                </div>
            </li>
        </ul>
        
        <ul class="navbar-toggler float-right list-unstyled p-2 mr-2 my-auto" id="drop-btn">
            <li data-toggle="collapse" data-target="#nv-first" aria-expanded="true"> <i class="fa fa-chevron-down" id="fa-up-down"></i> </li>
        </ul>
        <div class="collapse navbar-collapse" id="nv-first">
        

        <ul class="navbar-nav ml-auto">

            <li class= "nav-item">
            <a class="nav-link" 
                href="https://www.stuntbusiness.ca/en/contact">Contact</a></li>

            <li class= "nav-item"><a  class="nav-link" href="https://www.stuntbusiness.ca/en/about">About us</a></li>
            <li class= "nav-item"><a  class="nav-link" href="https://www.stuntbusiness.ca/en/faqs">FAQs</a></li>        
            <li class= "nav-item">
                <a class="nav-link" href="https://www.stuntbusiness.ca/en/log-in">
                Log in
                </a>
            </li>
            
        </ul>
    </div>
</nav>

<div class="row-text hide fixed-top" id="navbar-display">
    <div class="col-text">
        <div class="lang-content">
            <a  class="lang-link" href="https://www.stuntbusiness.ca/fr/home">Français</a>
        </div>
    </div> 
    <div class="col-text">
        <div class="lang-content">
            <a  class="lang-link my-auto" href="https://www.stuntbusiness.ca/en/home">English </a>
        </div>
    </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="init-content">
        <h4 class="pt-3"><b> 30 Days Basic PHP Q&A Challenge </b></h4>
        <br>
        <div>
            → Answers for the PHP Q&A started by the community member instagram : <br>
            <a href="https://www.instagram.com/benjivrik" target="_new">
                <span class="fa-stack fa-lg icon-instagram">
                    <i class="fa fa-square fa-stack-2x"></i>
                    <i class="fa fa-instagram fa-stack-1x"></i>
                </span>
                @benjivrik
            </a>
            <br>
            → Github code : <br>
            <a href="https://github.com/Stunt-Business" target="_new">
                <span class="fa-stack fa-lg icon-github">
                    <i class="fa fa-square fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x"></i>
                </span>
                @Stunt-Business
            </a>
            <br><br>

        </div>
        <hr>
        <h5 id="day2"> Day 2 - Output </h5>
         <p> <b>Data Type</b></p>
        <div class="output">
            <?php
                require('./day2.php');
            ?>
        </div>
        <hr>
        <h5 id="day3"> Day3 - Output </h5>
        <p> <b> Functions. </b></p>
        <div class="output">
            <?php
                require('./day3.php');
            ?>
        </div>
        <hr>
        <h5 id="day4"> Day4 - Output </h5>
         <p> <b> Challenge I - Process input sent from webpage form. </b></p>
        <div class="output">
            <form class="form-inline" method="POST" action="./day4.php">
                <label for="user-input">Enter your number : </label>
                <input type="number" 
                       name="usr-input"
                       class="ml-2 form-control" 
                       placeholder="Enter your number" 
                       id="usr-input" value="0" required>
                <button type="submit"  
                        class="ml-2 custom-btn btn btn-primary" 
                        style="width: 15%;">Submit</button>
            </form>
        </div>
        <hr>
        <h5 id="day5"> Day5 - Output </h5>
        <p> <b> Arrays. </b></p>
        <div class="output">
            <?php
                require('./day5.php');
            ?>
        </div>
        <hr>
        <h5 id="day6"> Day6 - Output </h5>
        <p> <b> Loops. </b></p>
        <div class="output">
            <?php
                require('./day6.php');
            ?>
        </div>
        <hr>
        <h5 id="day7"> Day7 - Output </h5>
        <p> <b> Conditions and booleans. </b></p>
        <div class="output">
            <form class="form-inline" method="POST" action="./day7.php">
                <label for="user-input">Enter your number : </label>
                <input type="number" 
                       name="usr-input"
                       class="ml-2 form-control" 
                       placeholder="Enter your number" 
                       id="usr-input" value="0" required>
                <button type="submit"  
                        class="ml-2 custom-btn btn btn-primary" 
                        style="width: 15%;">Submit</button>
            </form>
        </div>
        <hr>
        <h5 id="day8"> Day8 - Output </h5>
        <p> <b> Challenge II - Basic Calculator </b></p>
        <div class="output">
            <form class="form-inline" method="POST" action="./day8.php">
                <label for="user-input">Enter your operands and your operation : </label>
                <input type="number" 
                       name="oper1"
                       class="ml-2 form-control" 
                       placeholder="Enter your number" 
                       id="usr-input" value="0" required>
                <select name = "op" 
                        class="ml-2 form-control"
                       id="operations">
                    <option value="+" disabled>+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>
                <input type="number" 
                       name="oper2"
                       class="ml-2 form-control" 
                       placeholder="Enter your number" 
                       id="usr-input" value="0" required>
                <button type="submit"  
                        class="ml-2 custom-btn btn btn-primary" 
                        style="width: 15%;">Calculate</button>
            </form>
        </div>
        <hr>
        <h5 id="day9"> Day9 - Output </h5>
        <p> <b> Regular Expressions (regEx) </b></p>
        <div class="output">
            <div class="m-1">
                <br> 
                <div>
                  <span class="mb-2"> 
                    <b> Parse the following text, find the number of appearance of a word or a letter and replace it with REPLACED </b>  
                  </span>
                </div>
                <br>
                <pre>
                    At Stunt, we believe that our services must be rendered upon 
                    three important pillars: customization, expertise, and transparency. 
                    We will carefully listen to your needs and provide relevant comments 
                    and advice as to what can be done to make your product the best it can be. 
                    Our partnerships with other professionals ensure that we produce the best possible outcome. 
                    Furthermore, we will always 
                    let you know how we intend to proceed with the programming of your product 
                    and include you in the process.
                </pre>
            </div>
           <form class="form-inline" method="POST" action="./day9.php">
                <div class="form-group">
                    <input class="form-control" 
                           required="required" 
                           placeholder="word to look for" 
                           name="word" type="text">
                </div>
                <button type="submit"  
                        class="ml-2 custom-btn btn btn-primary" 
                        style="width: 15%;">Search and Replace</button>
           </form>
           <hr>
           <div>
           </div>
        </div>
        <hr>
        <h5 id="day10"> Day10 - Output </h5>
        <p> <b> Challenge III - Form Validation </b></p>
        <div class="output">
            <form class="form-inline" method="POST" action="./day10.php">
            <div class="form-group">
                <input class="custom-form form-control" 
                       required="required" 
                       placeholder="Name" 
                       name="name" type="text">
            </div>
            <div class="form-group">
                <input class="custom-form form-control" 
                       required="required" 
                       placeholder="XYZ followed by 10 number" 
                       name="phone_number" type="text">
            </div>

            <div class="form-group">
                <input class="custom-form form-control" 
                       required="required" 
                       placeholder="Email Address" 
                       name="email" type="text">
            </div>

            <button type="submit"  
                    class="ml-2 custom-btn btn btn-primary" 
                    style="width: 15%;">Submit</button>
           </form>
           
        </div>
        <hr>
        <h5 id="day11"> Day11 - Output </h5>
        <p> <b> File  Handling  </b></p>
        <div class="output">
            <?php
                require('./day11.php');
            ?>
        </div>
        <hr>
        <h5 id="day12"> Day12 - Output </h5>
        <p> <b> Working with JSON File  </b></p>
        <div class="output">
            <?php
                require('./day12.php');
            ?>
        </div>
        <hr>
        <h5 id="day13"> Day13 - Output </h5>
        <p><b> Object Oriented Programming (OOP)</b></p>
        <div class="output">
            <?php
                require('./day13.php');
            ?>
        </div>
        <hr>
        <h5 id="day14"> Day14 - Output </h5>
        <p> <b> OOP - Inheritance  </b></p>
        <div class="output">
            <?php
                require('./day14.php');
            ?>
        </div>
        <hr>
        <h5 id="day15"> Day15 - Output </h5>
        <p> <b> Challenge IV - Basic Calculator with OOP </b></p>
        <div class="output">
            <form class="form-inline" method="POST" action="./day15.php">
                <label for="user-input">Enter your operands a and b : </label>
                <input type="number" 
                       name="oper1"
                       class="ml-2 form-control" 
                       placeholder="Enter your number (a)" 
                       id="usr-input" value="0" required>
                <input type="number" 
                       name="oper2"
                       class="ml-2 form-control" 
                       placeholder="Enter your number (b)" 
                       id="usr-input" value="0" required>
                <button type="submit"  
                        class="ml-2 custom-btn btn btn-primary" 
                        style="width: 15%;">Calculate</button>
            </form>
        </div>
        <hr>
        <h5 id="day16"> Day16 - Output </h5>
        <p> <b> Challenge V - Password Generator </b></p>
        <div class="output">
            <?php
                require('./day16.php');
            ?>
        </div>
        <hr>
        <h5 id="day17"> Day17 - Output </h5>
        <p> <b> Abstract Classes </b></p>
        <div class="output">
            <?php
                require('./day17.php');
            ?>
        </div>
        <hr>
        <h5 id="day18"> Day18 - Output </h5>
        <p> <b> Interfaces </b></p>
        <div class="output">
            <?php
                require('./day18.php');
            ?>
        </div>
        <hr>
        <h5 id="day19"> Day19 - Output </h5>
        <p> <b>Traits </b></p>
        <div class="output">
            <?php
                require('./day19.php');
            ?>
        </div>
        <hr>
        <h5 id="day20"> Day20 - Output </h5>
        <p> <b> Challenge VI - User </b></p>
        <div class="output">
            <div>
                <span class="mb-2"> 
                <b> Displaying the data initialized from the script </b>  
                </span>
            </div>
            <?php
                require('./day20.php');

                foreach($users as $user){
                    $profile   = $user->getProfilePath();
                    $firstname = $user->getFirstName();
                    $lastname  = $user->getLastName();
                    $user_id   = $user->getUserID();

                    // not the optimal way to organize your css
                    // and not the optimal way for displaying the user information
                    echo "<div style='margin: 10px; padding: 5px; display:flex; flex-direction:row'>
                                <div class='w-25'>
                                    <span>→ First-Name : $firstname </span> <br>
                                    <span>→ Last-Name : $lastname   </span> <br>
                                    <span>→ User ID :  $user_id     </span> <br>
                                </div>
                                <div class='pl-2' >
                                    <div class='mb-1 w-100'><b>Picture :</b></div>
                                    <img src='$profile' style='border-radius:80%; max-width:75px;'>
                                </div>
                                
                          </div><hr>";
                }
            ?>
        </div>
        <hr>
        <h5 id="day21"> Day21 - Output </h5>
        <p><b> Challenge VII - Item </b></p>
        <div class="output">
            <div>
                <span class="mb-2"> 
                <b> Displaying the data initialized from the script </b>  
                </span>
            </div>
            <div class='row-container'>
            <?php
                require('./day21.php');

                foreach($items as $item){
                    $profile   = $item->getProfilePath();
                    $item_name = $item->get_name();
                    $item_category = $item->get_category();
                    $item_price = $item -> get_price();

                    // add class css for the blox
                    echo "<div class='item-box' style='display:flex; flex-direction:column'>
                            <div class='pl-2 w-100 text-center'>
                                <img src='$profile' style='border-radius:80%; max-width:200px;'>
                                <hr>
                            </div>
                            <div class='w-100'>
                                <span>Name : $item_name </span><br>
                                <span>Category : $item_category </span><br>
                                <span>Price : $item_price CAD </span>
                            </div>
                        </div>  
                         <hr>";
                }
             ?>
            </div>
        </div>
        <hr>
        <h5 id="day22"> Day22 - Output </h5>
        <p> <b>Challenge VIII - Geometric shape classes </b></p>
        <div class="output">
            <?php
                require('./day22.php');
            ?>
            <div class="row-container">
                <div class = "p-4">
                    <h4> Circle </h4>
                    <canvas id="circle" width="150" height="150"></canvas>
                    <p>
                        <span> Radius: <?php echo $circ->getRadius(); ?> </span> <br>
                        <span> Perimeter: <?php echo $circ->perimeter(); ?> </span> <br>
                        <span> Area: <?php echo $circ->area(); ?> </span> <br>
                    </p>
                </div>
                <div class = "p-4">
                    <h4> Square </h4>
                    <canvas id="square" width="150" height="150"></canvas>
                    <p>
                        <span> Side: <?php echo $sq->getSide(); ?> </span> <br>
                        <span> Perimeter: <?php echo $sq->perimeter(); ?> </span> <br>
                        <span> Area: <?php echo $sq->area(); ?> </span> <br>
                    </p>
                </div>
            </div>
            

        </div>
        <script>
            // ref : https://www.w3resource.com/javascript-exercises/javascript-drawing-exercise-2.php
            // ref : https://www.w3schools.com/tags/canvas_rect.asp
            function draw_circle(radius)
            {
                var canvas = document.getElementById('circle');
                if (canvas.getContext)
                {
                    var ctx = canvas.getContext('2d'); 
                    var X = canvas.width / 2;
                    var Y = canvas.height / 2;
                    // var R = 45;
                    ctx.beginPath();
                    ctx.arc(X, Y, radius, 0, 2 * Math.PI, false);
                    ctx.lineWidth = 3;
                    ctx.strokeStyle = '#FF00FF';
                    ctx.stroke();
                }
            }

            function draw_square(square_side){
                var canvas = document.getElementById("square");
                if (canvas.getContext){
                    var ctx = canvas.getContext("2d");
                    var X = canvas.width / 4;
                    var Y = canvas.height / 3;
                    ctx.beginPath();
                    ctx.rect(X, Y, square_side, square_side);
                    ctx.lineWidth = 3;
                    ctx.strokeStyle = '#FF00FF';
                    ctx.stroke();
                }
                
            }

            draw_circle(<?php echo $circ->getRadius(); ?>);
            draw_square(<?php echo $sq->getSide(); ?>);

        </script>
        <hr>
        <h5 id="day23"> Day23 - Output </h5>
        <p> <b> Challenge VIII - File Manager </b></p>
        <div class="output">
            <?php
                require('./day23.php');
            ?>
        </div>
        <hr>
        <h5 id="day24"> Day24 - Output </h5>
        <p> <b> PHP - MySQL </b></p>
        <div class="output">
            <?php
                require('./day24.php');
            ?>
        </div>
        <hr>
        <h5 id="day25"> Day25 - Output </h5>
        <p><b> Challenge X - store and read items </b></p>
        <div class="output">
            <?php
                require('./day25.php');
            ?>
        </div>
        <hr>
        <h5 id="day26"> Day26 - Output </h5>
        <p><b> Challenge XI - UPDATE and  ORDER BY </b></p>
        <div class="output">
            <?php
                require('./day26.php');
            ?>
        </div>
        <hr>
        <h5 id="day27"> Day27 - Output </h5>
        <p><b>  JPGraph - PHP (linear plot) </b></p>
        <div class="output">
            <?php
                require('./day27.php');
            ?>
            <div class='w-100 text-center'>
                 <img  src="./img_data/day27.jpg"/>
            </div>
        </div>
        <hr>
        <h5 id="day28"> Day28 - Output </h5>
        <p><b>  Challenge XII - JPGraph - PHP (Bar plot) </b></p>
        <div class="output">
            <?php
                require('./day28.php');
            ?>
            <div class='w-100 text-center'>
                 <img  src="./img_data/day28.jpg"/>
            </div>
        </div>
        <hr>
        <h5 id="day29"> Day29 - Output </h5>
        <p><b> Challenge XIII - Sinusoide </b></p>
        <div class="output">
            <?php
                require('./day29.php');
            ?>
            <div class='w-100 text-center'>
                 <img  src="./img_data/day29.jpg"/>
            </div>
        </div>
        <hr>
        <h5 id="day30"> Day30 - Output </h5>
        <p><b> Challenge XIV - Data Processing - Read and Plot </b></p>
        <div class="output">
            <?php
                require('./day30.php');
            ?>
            <div class='w-100 text-center'>
                 <img  src="./img_data/day30.jpg"/>
            </div>
        </div>
        <hr>

      </div>
    </div>
  </div> 
</div>

<footer class="page-footer">
     <div class="container-fluid">
       <div class="col-md-12">
        <div class="row pt-4">
            
            <div class="mx-auto col-md-4">
            <h4 class="p-4"> Contact Us</h4>
            <ul class="list-unstyled  pl-4">
                <li> <a class="link-no-deco" href="https://www.stuntbusiness.ca/en/contact#email-us"> Email us </a></li>
                
                <li> <a class="link-no-deco" href="https://www.stuntbusiness.ca/en/contact#join-us"> Join our team! </a></li>
                <li> <a class="link-no-deco" href="https://www.stuntbusiness.ca/en/contact#contact-form"> General Inquiry </a></li>
            </ul>
            </div>
            <div class="col-md-4">
            <h4 class="p-4"> About us<span class="glyphicon glyphicon-info-sign"></span> </h4>
            <ul class="list-unstyled  pl-4">
                <li> <a class="link-no-deco" href="https://www.stuntbusiness.ca/en/about#who-are-we"> What is Stunt-Business? </a></li>
                
                <li> <a class="link-no-deco" href="https://www.stuntbusiness.ca/en/about#why-choosing-us"> Why choose us? </a></li>
                <li> <a class="link-no-deco" href="https://www.stuntbusiness.ca/en/about#representant."> Meet the Founders </a></li>
            </ul>
            </div>
            <div class="col-md-4">
            <h4 class="p-4"> Our Services<span class="glyphicon glyphicon-wrench"></span></h4>
            <ul class="list-unstyled pl-4">
                <li> <a class="link-no-deco" href="https://www.stuntbusiness.ca/en/services"> Web Development </a></li>
                <li> <a class="link-no-deco" href="https://www.stuntbusiness.ca/en/services"> Programming </a></li>
                <li> <a class="link-no-deco" href="https://www.stuntbusiness.ca/en/services"> Tutoring </a></li>
                
            </ul>
            </div>
        </div>
        </div>
        <div class="col-md-12" style="bottom:0 !important;">
        <hr class="end-of-box-footer">
        <div class ="row">
            <div class="mr-auto">
                <ul class="list-inline ml-4 pl-3">
                    <li class="list-inline-item">
                    <a class="link-no-deco" href="https://www.stuntbusiness.ca/en/legal/terms-and-conditions"> Terms and Conditions </a>
                    </li>
                    <li class="list-inline-item"> 
                    <a class="link-no-deco" href="https://www.stuntbusiness.ca/en/legal/data-privacy"> Data Privacy </a>
                    </li>
                </ul>
            </div>
        </div>
        <hr class="end-of-box-footer">
        <div class="row"> 
            <div class="mx-auto">
            <h4 class="text-center">Give us your feedback!<span class="glyphicon glyphicon-comment" ></span></h4>
            <ul class="list-inline ml-5 mr-5">
                <li class = "list-inline-item">
                <a href="https://www.facebook.com/StuntBusiness" target="_new">
                    <span class="fa-stack fa-lg icon-facebook">
                    <i class="fa fa-square fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x"></i>
                    </span>
                </a>
                </li>
                <li class="list-inline-item">
                <a href="https://www.twitter.com/BusinessStunt" target="_new">
                    <span class="fa-stack fa-lg icon-twitter">
                    <i class="fa fa-square fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x"></i>
                </span>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="https://www.instagram.com/stuntbusiness" target="_new">
                <span class="fa-stack fa-lg icon-instagram">
                <i class="fa fa-square fa-stack-2x"></i>
                <i class="fa fa-instagram fa-stack-1x"></i>
                </span>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="https://www.linkedin.com/company/stunt-business/" target="_new">
                <span class="fa-stack fa-lg icon-linkedin">
                <i class="fa fa-square fa-stack-2x"></i>
                <i class="fa fa-linkedin fa-stack-1x"></i>
                </span>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="https://github.com/Stunt-Business" target="_new">
                <span class="fa-stack fa-lg icon-github">
                <i class="fa fa-square fa-stack-2x"></i>
                <i class="fa fa-github fa-stack-1x"></i>
                </span>
                </a>
            </li>
        </ul>  
        </div>
        </div> <!-- End of the row -->           
    </div>
    </div>
    <hr class="end-of-box-footer">
  <div class="footer-copyright text-center"> 
    &copy 
    <a class="link-no-deco" href="https://www.stuntbusiness.ca" >
    Stunt-Business - <?php echo date("Y"); ?>  </a>
  </div>
</footer>

<script>
jQuery(document).ready(function() {
  
      // var width, height;
      //dropdown menu function

      jQuery("#languages").click(function () {
            var width, height;
            width = jQuery(window).width(); 
            height = jQuery(window).height();
            if(width >= 768)//check width
            {
              jQuery("#navbar-display").addClass('hide');
              //toggle the regular dropdown
              if( jQuery("#lang").css('display') !== 'none')
              {
                  jQuery("#lang").slideUp('fast');
              }//endif
              else
              {
                if( jQuery("#lang").css('display') === 'none'){
                    jQuery("#lang").slideDown('fast');
                }//endif
              }//endelse
            } //endif
            else
            {
              if( jQuery("#navbar-display").css('display') !== 'none')
              {
                  jQuery("#navbar-display").addClass('hide');
              }//endif
              else
              {
                if( jQuery("#navbar-display").css('display') === 'none'){
                    jQuery("#navbar-display").removeClass('hide');
                    jQuery("#nv-first").collapse('hide');
                    jQuery("#nv-second").collapse('hide');
                    jQuery("#fa-up-down").addClass("fa-chevron-down");
                    jQuery("#fa-up-down-second").addClass("fa-chevron-down");


                }//endif
              }//endelse
            }//endelse
        });

        //dropdown btn checking first
        jQuery("#drop-btn").click(function () {
          if( jQuery("#nv-first").css('display') !== 'none')
          {
              jQuery("#fa-up-down").removeClass("fa-chevron-up");
              jQuery("#fa-up-down").addClass("fa-chevron-down");
              jQuery("#nv-first").collapse('hide');
              jQuery("#navbar-display").addClass('hide');
          }//endif
          else
          {
            if( jQuery("#nv-first").css('display') === 'none'){
                jQuery("#fa-up-down").removeClass("fa-chevron-down");
                jQuery("#fa-up-down").addClass("fa-chevron-up");
                jQuery("#nv-first").collapse('show');
                jQuery("#navbar-display").addClass('hide');
            }//endif
          }//endelse
      });
      //dropdown btn checking second
      jQuery("#drop-btn-second").click(function () {
          if( jQuery("#nv-second").css('display') !== 'none')
          {
              jQuery("#fa-up-down-second").removeClass("fa-chevron-up");
              jQuery("#fa-up-down-second").addClass("fa-chevron-down");
              jQuery("#nv-second").collapse('hide');
              jQuery("#navbar-display").addClass('hide');
          }//endif
          else
          {
            if( jQuery("#nv-second").css('display') === 'none'){
                jQuery("#fa-up-down-second").removeClass("fa-chevron-down");
                jQuery("#fa-up-down-second").addClass("fa-chevron-up");
                jQuery("#nv-second").collapse('show');
                jQuery("#navbar-display").addClass('hide');
            }//endif
          }//endelse
      });

      
});
$('.alert-success').fadeIn().delay(5000).fadeOut();
$('.alert-warning').fadeIn().delay(5000).fadeOut();
</script>
</body>
</html>