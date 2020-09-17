<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SCHOOL APP</title>

         <!--Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300&display=swap" rel="stylesheet">
         <link rel="stylesheet" href="/css/index.css">
    </head>

    <body>
    
    <div class="container">
        <header>
        <div class="header-logo">
            <img class="big-img" src="/img/drey4.JPG">
            <img class="small-img" src="/img/drey44.jpg">
        </div>
            
       

        <div class="navigation">
            <nav class="nav-bar">
            <ul>
                <li><a href="/school" class="active">HOME</a></li>
                <li><a href="#">CURRICULUM</a></li>
                <li><a href="/login">LOGIN</a></li>
                <li><a href="#">CONTACT US</a></li>
            </ul>
            </nav>
        </div>
        </header>


 
        <div class="mainContent">
            <div class="contentArticle">
                <article class="firstArticle">
                    <header><h3>THE SCHOOL APP</h3></header>
                    <content>
                       Our app automates the processess involved in school.<br>
Accept payments, upload course material, take/grade exams, etc.<br>
Its a full package! Lorem ipsum dolor sit amet, consectetur adipiscing elit.
 Mauris mi dui, ornare nec accumsan eu, viverra vel neque. Nullam congue lorem risus, nec vehicula turpis posuere ac. 
Aliquam feugiat nulla ut est vehicula pharetra. Praesent ac tincidunt dui, non pulvinar sapien. Quisque fringilla mi nec egestas euismod
                    </content>
                </article>

                <img class="hi-mage-1" src="/img/5836.jpg">
                
                <form name="start" class="start" action="/register">
                    <a href="/register"><button type="submit" class="get-started"><span>Get started</span></button></a>
                </form>

            </div>

            <div class="hi-mage">
                <img class="hi-mage-2" src="/img/5836.jpg">
            </div>
        </div>
        <footer class="footer">
            <p>Copyright &COPY; ADURAMIMO, 2020.</p>
        </footer>
    </div>
</body>

    </html>    

