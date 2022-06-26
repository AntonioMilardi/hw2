<html>
 <head>
    <meta name="viewport"
    
    content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <?php echo $__env->yieldContent('script'); ?>
    <title> The Truth </title>

    <link href="https://fonts.googleapis.com/css2?family=Hurricane&family=Lobster&family=Oswald:wght@200&family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
    
        <?php echo $__env->yieldContent('css'); ?>
 </head>

     <body>
        <nav> 
            <div id="menu1"> 
              <a href='Home'>Home</a> 
                <a  href="Profilo"> Profilo </a>
                <a href="NotizieTue"> Le tue Notizie</a>
                <a href="logout">Logout</a>
             </div>
               
            
        </nav>
        <header> 
            <div id="overlay"> </div>
              <div class="Titolo"> The Truth </div> 
              
            </header>

            <?php echo $__env->yieldContent('content'); ?>

            <footer>Pagina progettata e sviluppata da Antonio Milardi O46002063</footer>


   </body>
</html>   
<?php /**PATH C:\Users\Antonio Milardi\Desktop\example-app\resources\views/layouts/Default.blade.php ENDPATH**/ ?>