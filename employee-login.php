<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />

        <title>Vk Soft Technologies</title>
        <meta content="" name="description" />
        <meta content="" name="keywords" />

        <!-- Favicons -->
        <link href="assets/img/favicon.jpg" rel="icon" />
        <link href="assets/img/apple-touch-icon.jpg" rel="apple-touch-icon" />

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
        <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet" />
        <link rel="stylesheet" href="assets/css/style1.css" />

       
    </head>

    <body>
        <?php require("header.php");?>

            
            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact" style="background-color: #42EADDFF">
                <div class="container">
                    <div class="section-title">
                        <h2 >Employee Login</h2>
                    </div>
                            <form action="forms/contact.php" method="post"  class="my-php-email-form">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label >Your Name</label>
                                        <input type="text" name="name" class="form-control" required />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label >Your Email</label>
                                        <input type="email" class="form-control" name="email"  required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label >Subject</label>
                                    <input type="text" class="form-control" name="subject"  required />
                                </div>
                                <div class="form-group">
                                    <label >Telephone</label>
                                    <textarea class="form-control" name="message1" rows="10" required></textarea>
                                </div>
                                
                                <div class="text-center button"><button type="submit">submit</button></div>
                            </form>
                        </div>
                    </section>
           
            
        
       
        <?php require("footer.php");?>
         </body>
</html>