<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="Assets/Images/favicon.png" />
    <link rel="stylesheet" type="text/css" href="./Assets/styles.css" />
    <script src="https://kit.fontawesome.com/70314bd783.js" crossorigin="anonymous"></script>
    <title>Liam Sullivan</title>
</head>
<body>
    <div class="header-background" id="home">
        <header id="header">
            <h2>LIAM SULLIVAN</h2>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </header>
        <section>
            <p>I'm Liam, I'm a freelance web developer from Bristol, I create bespoke websites that help you land your next customer. If you would like to discuss designs or pricing, feel free to get in touch</p>
            <a href="#portfolio" class="portfolio-button">Portfolio</a>
            <a href="#contact" class="contact-button">Contact</a>
        </section>
    </div>
    <main>
        <section id="services">
            <h1 class="main-titles">Services</h1>
            <div>
                <article>
                    <li title="I'll build your website from scratch"><i class="fas fa-code"></i> <h3> Web Development</h3></li>
                    <li title="I'll work with you to design your website"><i class="fas fa-pencil-alt"></i> <h3> Web Design</h3></li>
                    <li title="All my websites work on all devices"><i class="fas fa-mobile"></i> <h3> Responsive Designs</h3></li>
                </article>
                <article>
                    <li title="I can add small animations to your website for additional flair"><i class="fas css-animations"></i> <h3> CSS Animations</h3></li>
                    <li title="I'll host and manage your website so you don't have to"><i class="fas fa-server"></i> <h3> Web Hosting</h3></li>
                    <li title="Get high ranking search results in web search engines"><i class="fab fa-searchengin"></i> <h3> SEO</h3></li>
                </article>
            </div>
        </section>
        <section id="portfolio">
            <h1 class="main-titles">Portfolio</h1>
            <div class="mobile">
                <summary>
                    <a href="https://smyth-photography.co.uk" target="_blank" class="image-container grace">
                        <img width="100%" height="auto" />
                    </a>
                    <h3 class="headings">Grace Smyth - Wedding Photographer</h3>
                    <p>Designing, Developing & Hosting an online portfolio for a wedding photographer</p>
                </summary>
                <summary>
                    <a href="https://foleydesigns.co.uk" target="_blank" class="image-container ryan">
                        <img width="100%" height="auto" />
                    </a>
                    <h3 class="headings">Ryan Foley - Painter & Decorator</h3>
                    <p>Bespoke painting and decorating website for a bespoke painter and decorator</p>
                </summary>
                <summary>
                    <a href="https://alexanderflemings.co.uk" target="_blank" class="image-container alex">
                        <img width="100%" height="auto" />
                    </a>
                    <h3 class="headings">Alex Flemings - Artistic Photographer</h3>
                    <p>A simple online gallery used to host a photographer's portfolio</p>
                </summary>
            </div>
            <summary class="images">
                <a href="https://smyth-photogrpahy.co.uk" target="_blank" class="image-container grace">
                    <img width="100%" height="auto" />
                </a>
                <a href="https://foleydesigns.co.uk" target="_blank" class="image-container ryan">
                    <img width="100%" height="auto" />
                </a>
                <a href="https://alexanderflemings.co.uk" target="_blank" class="image-container alex">
                    <img width="100%" height="auto" />
                </a>
            </summary>
            <summary class="text">
                <div>
                    <h3 class="headings">Grace Smyth - Wedding Photographer</h3>
                    <p>Designing, Developing & Hosting an online portfolio for a wedding photographer</p>
                </div>
                <div>
                    <h3 class="headings">Ryan Foley - Painter & Decorator</h3>
                    <p>Bespoke painting and decorating website for a bespoke painter and decorator</p>
                </div>
                <div>
                    <h3 class="headings">Alex Flemings - Artistic Photographer</h3>
                    <p>A simple online gallery used to host a photographer's portfolio</p>
                </div>
            </summary>
        </section>
        <section id="contact">
            <h1 class="main-titles">Contact</h1>
            <h2>Get in touch -</h2>
            <h3>From discussing my work to getting a quote, fill in the form below and I'll be happy to speak to you!</h3>
            <form method="POST" action="/#contact">
                <div>
                    <input type="text" placeholder="Name" name="name" />
                    <input type="email" placeholder="Email" name="email" />
                    <button type="submit" name="submit">Submit</button>
                </div>
                <textarea placeholder="Project" name="project"></textarea>
                <div class="clear"></div>
            </form>
            <?php 
                if($_SERVER["REQUEST_METHOD"] == "POST") {
                    $name = filter_var($name = $_POST["name"], FILTER_SANITIZE_STRING);
                    $email = filter_var($name = $_POST["name"], FILTER_SANITIZE_EMAIL);
                    $project = filter_var($project = $_POST["project"], FILTER_SANITIZE_STRING);
                    $to = "liamsullivan43@gmail.com";
                    $subjectHeader = "Freelance Client - " . $name;
                    $subject = "
                    <p>$name</p>
                    <p>$email</p>
                    <br />
                    <p>$project</p>";
                    $headers = "Content-type: text/html";
                    if(mail($to, $subjectHeader, $subject, $headers)){
                        echo '<p class="message">Thank you for your message, I\'ll get back to you as soon as I can!</p>';
                    }
                    else {
                        echo '<p class="message">It seems like something went wrong, try again later or email me directly at \'liamsullivan43@gmail.com\'!</p>';
                    }
                }
            ?>
        </section>
    </main>
</body>
    <script src="./Assets/index.js" type="text/JavaScript"></script>
</html>