<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mariachi Colombia Nueva Era</title>
    <link rel="icon" href="./styles/assets/img/icon_pag.png">
    <!-- Estilos -->
    <link rel="stylesheet" href="./styles/mobile.css">
    <!-- Estilos -->
    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Source+Sans+Pro:ital,wght@0,700;1,300;1,400&display=swap" rel="stylesheet">
    <!-- Fuentes -->
    <!-- Pagos -->
    <script src="https://www.paypal.com/sdk/js?client-id=Afms3WjzVmgd4FFzYccNa-nA6q48kojicIMYg7SpkTUze0BysA3r6U9uG9vXm-ATdthwLG8IOpOQ8qIk&currency=COP"></script>
    <!-- Pagos -->
</head>
<body>
    <div class="background">
        <img src="./styles/assets/img/humo_3.png" alt="" height="600px">
    </div>
    <header>
        <div class="img_header">
            <img src="./styles/assets/img/mariachi.png" alt="Mariachi">
        </div>
    </header>         
    <main>
        <section class="main_text">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error id, consectetur itaque unde perspiciatis ad praesentium, porro doloribus velit necessitatibus alias eius soluta. Iusto illum facilis dolorem quae voluptates maiores.</p>
        </section>
        <section class="video_container">
            <div class="video"></div>
            <div id="paypal-button-container">
                <script>
                    paypal.Buttons().render('paypal-button-container')
                </script>
            </div>
        </section>
    </main>
</body>
</html>