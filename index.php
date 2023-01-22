<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management System</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://kit.fontawesome.com/5ba2acc2b6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <?php include('header.php');?>
    
</header>
<main>
    <?php include('about.php');?>
    <div class="row">
        <?php include('login-section.php') ?>
    </div>
    <section class="work">
        <div class="container-fluid text-center">
            <div class="row">
                <div class="col-md-4">
                    <div class="hours">
                        <h2>WORKING HOURS</h2>
                        <div class="time">
                        <div class="booking">Mon-wed</div>
                        <div class="booking">7AM-9PM</div>
                        <div class="booking">
                            <button type="button" class="btn-white">
                            <i class="fa-solid fa-calendar-week"></i>Book
                            </button>
                        </div> 
                    </div>
                    <div class="time">
                        <div class="booking">Thursday</div>
                        <div class="booking">7AM-9PM</div>
                        <div class="booking">
                            <button type="button" class="btn-white">
                            <i class="fa-solid fa-calendar-week"></i>Book
                            </button>
                        </div> 
                    </div>
                    <div class="time">
                        <div class="booking">Friday</div>
                        <div class="booking">7AM-9PM</div>
                        <div class="booking">
                            <button type="button" class="btn-white">
                            <i class="fa-solid fa-calendar-week"></i>Book
                            </button>
                        </div> 
                    </div>
                    <div class="time">
                        <div class="booking">Sat-Sunday</div>
                        <div class="booking">7AM-9PM</div>
                        <div class="booking">
                            <button type="button" class="btn-white">
                            <i class="fa-solid fa-calendar-week"></i>Book
                            </button>
                        </div> 
                    </div>
                    <div class="time">
                        <h4>Time not flexible?</h4>
                        <p> We provide the best medical services based on the needs of our patients</p>
                        <button type="button" class="btn-green btn-transparent mt-20px">
                        <i class="fa-solid fa-calendar-week"></i>Suggest Check up time
                        </button>
                    </div>
                </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pray">
                            <img src="./assets\pexels-tima-miroshnichenko-5452201.jpg" alt="comp" width="1500">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel text-left">
                            <h1>Dr.Brenda Bree</h1>
                            <p class="pt-4">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur a alias, sequi quasi maiores iure qui voluptatibus ullam excepturi deserunt nisi obcaecati fugit neque rem at pariatur porro! Animi eius magni debitis, non suscipit ad, vel, sapiente nisi reprehenderit neque quisquam ut? Ab ipsum molestiae amet voluptas dicta iure accusantium.
                                 </p>
                                 <p>
                                     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur omnis quos quisquam nemo possimus sit! Eum reprehenderit, expedita, quidem, amet provident consectetur cum quisquam eveniet in recusandae laboriosam molestias facere perferendis nulla! Amet laudantium, quae repellat nihil, dolorum a accusamus laboriosam mollitia veniam tenetur non labore veritatis ab ad autem cupiditate doloribus soluta, consequatur molestias culpa sed maxime! Ipsam tempora quasi odio, repellat mollitia nam totam? Dolorem facilis vero beatae excepturi dolorum voluptate maiores laboriosam, doloribus repudiandae natus porro autem! Ut aliquam nisi aperiam architecto assumenda eius beatae ipsa sed laboriosam dignissimos sit quo nulla debitis, facilis adipisci sunt maxime?
                                 </p>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </section>
</main>
<footer>
    <?php include('footer.php')?>
</footer>
  <script src="js/bootstrap.js"></script>  
</body>
</html>