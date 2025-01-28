<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOVEL LIBRARY</title>

    <!-- Link to external CSS and fonts -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@0,300;400,500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
   
    <!-- Header section -->
    <header>
        <a href="#" class="logo">RDET<span>HEI</span></a>

        <ul class="navbar">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Information</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#" onclick="openLoginModal()">LOGIN</a></li>
        </ul>

        <div class="h-right">
            <a href="">Follow Us</a>
            <a href=""><i class="ri-youtube-fill"></i></a>
            <a href=""><i class="ri-instagram-fill"></i></a>
            <a href=""><i class="ri-facebook-fill"></i></a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>

    <!-- Home section -->
    <section class="home" id="home">
        <div class="home-text">
            <h5>WELCOME</h5>
            <h1>My Dear<span> Readers</span></h1>
            <p>Find your favorite novel here! New Story are always come to be explored! No Need to await, let's go!</p>
            <a href="#" class="btn" onclick="openLoginModal()">Login</a>
        </div>
    </section>

    <!-- Feature section -->
    <section class="feature">
        <div class="feature-content">
            <div class="row">
                <div class="row-img">
                    <img src="img/fantasy.png">
                </div>
                <h4>Fantasy</h4>
            </div>

            <div class="row">
                <div class="row-img">
                    <img src="img/mori.jpg">
                </div>
                <h4>Action</h4>
            </div>

            <div class="row">
                <div class="row-img">
                    <img src="img/pixai1.png">
                </div>
                <h4>Romance</h4>
            </div>

            <div class="row">
                <div class="row-img">
                    <img src="img/pixai.png">
                </div>
                <h4>Drama</h4>
            </div>

            <div class="row">
                <div class="row-img">
                    <img src="img/pic.png">
                </div>
                <h4>Slice of Life</h4>
            </div>
        </div>
    </section>

    <!-- Novel section -->
    <section class="holiday">
        <div class="holiday-img">
            <img src="img/buku.png">
        </div>
        <div class="holiday-text">
            <h5>Novel</h5>
            <h2>What kinda of novel did you like?</h2>
            <p>We have a lot of novel that can be readed for free, and if you want to, you can make on yourself!</p>
            <a href="#" class="btn">Read More</a>
        </div>
    </section> 
    
    <!-- Genre section -->
    <section class="tour">
        <div class="center-text">
            <h2>Popular Novel</h2>
        </div>
        <div class="tour-content">

            <div class="box">
                <img src="img/sky.jpg">
                <h6>Avalon Castke</h6>
                <h4>Magic and sword</h4>
            </div>

            <div class="box">
                <img src="img/rock.png">
                <h6>Music is a life</h6>
                <h4>Heart can be moved by music</h4>
            </div>

            <div class="box">
                <img src="img/domain.png">
                <h6>Domain Clash</h6>
                <h4>Feel the intense battle</h4>
            </div>

        </div>
    
    <div class="center-btn">
    
        <a href="#" class="btn">View All</a>
    </div>
    </section>

    <!-- Culture section -->
    <section class="Culture">
        <div class="Culture-text">
            <h5>FANTASY</h5>
            <h2>The Dream World Everyone Wanted!</h2>
            <p>Imagine if you're living in a fantasy world filled with dragon, elf, dwarf, and any other races.</p>           
            <a href="#" class="btn">Read More</a>
        </div>

        <div class="Culture-img">
            <img src="img/train.png">
        </div>
    </section>

    <!-- Newsletter section -->
    <section class="newsletter">
        <div class="newsletter-content">
            <div class="newsletter-text">
                <h2>Ready for your next Story?</h2>
                <p>You're not gonna alone in this journey!</p>
            </div>
            <form action="">
                <input type="email" placeholder="Enter Your Email...">
                <input type="submit" value="Get Started" class="btn">
            </form>
        </div>
    </section>

    <!-- Login Modal -->
<form method="POST" action="aksi_login.php">
<div id="loginModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeLoginModal()">&times;</span>
        <h2 id="modalTitle">Login</h2>
        <input type="text" placeholder="Username" name="Username" id="username" required/>
        <input type="password" placeholder="Password" name="Password" id="password" required/>
        <button type="submit" id="modalButton">Login</button>
        <p id="toggleText">Don't have an account? <a href="#" onclick="toggleModal()">Register</a></p>
    </div>
</div>
</form>

<style>
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .modal-content {
        background: linear-gradient(135deg,rgba(102, 42, 18, 0.58),rgba(147, 108, 9, 0.75));
        color: black;
        margin: auto; /* Center the modal */
        padding: 20px;
        border: 1px solid #888;
        width: 90%;
        max-width: 500px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(255, 255, 255, 0.3);
        transition: transform 0.3s ease-in-out;
        position: absolute;
        
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    .modal-content h2 {
        color:rgb(255, 255, 255);
        text-align: center;
        margin-bottom: 20px;
    }

    .modal-content input[type="text"],
    .modal-content input[type="password"] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .modal-content button {
        width: 100%;
        background-color: rgb(0, 0, 0); 
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .modal-content button:hover {
        background-color: rgb(255, 255, 255);
        color: black;
    }

    .modal.show {
        display: block;
    }

    .modal-content.animate {
        transform: scale(1.1);
    }
</style>

<script>
    let isLogin = true;

    function openLoginModal() {
        document.getElementById("loginModal").classList.add('show');
    }

    function closeLoginModal() {
        document.getElementById("loginModal").classList.remove('show');
    }

    function toggleModal() {
        isLogin = !isLogin;
        document.getElementById("modalTitle").innerText = isLogin ? "Login" : "Register";
        document.getElementById("modalButton").innerText = isLogin ? "Login" : "Register";
        document.getElementById("toggleText").innerHTML = isLogin ? "Don't have an account? <a href='#' onclick='toggleModal()'>Register</a>" : "Already have an account? <a href='#' onclick='toggleModal()'>Login</a>";
        document.querySelector("form").action = isLogin ? "aksi_login.php" : "aksi_register.php";
        document.querySelector(".modal-content").classList.add('animate');
        setTimeout(() => {
            document.querySelector(".modal-content").classList.remove('animate');
        }, 300);
    }


  document.addEventListener('DOMContentLoaded', function() {
    const leafContainer = document.createElement('div');
    leafContainer.style.position = 'fixed';
    leafContainer.style.top = '0';
    leafContainer.style.left = '0';
    leafContainer.style.width = '100%';
    leafContainer.style.height = '100%';
    leafContainer.style.pointerEvents = 'none';
    document.body.appendChild(leafContainer);

    function createLeaf() {
      const leaf = document.createElement('div');
      leaf.style.position = 'absolute';
      leaf.style.width = '20px';
      leaf.style.height = '20px';
      leaf.style.backgroundImage = 'url("img/leaf.png")';
      leaf.style.backgroundSize = 'cover';
      leaf.style.top = '-20px';
      leaf.style.left = Math.random() * 100 + 'vw';
      leaf.style.opacity = Math.random();
      leaf.style.transform = `rotate(${Math.random() * 360}deg)`;
      leaf.style.animation = `fall ${Math.random() * 5 + 5}s linear infinite`;

      leafContainer.appendChild(leaf);

      leaf.addEventListener('animationend', function() {
        leafContainer.removeChild(leaf);
      });
    }

    setInterval(createLeaf, 500);

    const style = document.createElement('style');
    style.innerHTML = `
      @keyframes fall {
        to {
          transform: translateY(100vh) rotate(${Math.random() * 360}deg);
        }
      }
    `;
    document.head.appendChild(style);
  });

</script>

    <!-- Footer section -->
    <section class="footer">
        <div class="footer-box">
            <h3>Services</h3>
            <a href="#">Email Marketing</a>
            <a href="#">Campaign</a>
            <a href="#">Brandings</a>
            <a href="#">Offline</a>
        </div>

        <div class="footer-box">
            <h3>About</h3>
            <a href="#">Our Story</a>
            <a href="#">Benefits</a>
            <a href="#">Team</a>
            <a href="#">Careers</a>
        </div>

        <div class="footer-box">
            <h3>Help</h3>
            <a href="#">FAQs</a>
            <a href="#">Contact Us</a>
        </div>

        <div class="footer-box">
            <h3>Social</h3>
            <div class="social">
            <a href=""><i class="ri-youtube-fill"></i></a>
            <a href=""><i class="ri-instagram-fill"></i></a>
            <a href=""><i class="ri-facebook-fill"></i></a>
        </div>
        </div>

    </section>

    <!-- Copyright section -->
    <div class="copyright">
        <p>&copy; 2025 RDET<span>HEI</span></p>
    </div>

    <script src="js/script.js"></script>
    
</body>
</html>