<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
       *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
    line-height: 1.2;
}

body{
    display: flex;
    flex-direction: column;
    height: 100vh;
    background-color: #bbbbbb;
}

footer{
    display: flex;
    flex-wrap: wrap;
    margin-top: auto;
    background-color: #44525F;
    padding: 60px 10%;
}

ul{
    list-style: none;
}

.footer-col{
    width: 25%;
}

.footer-col h4{
    position: relative;
    margin-bottom: 30px;
    font-weight: 400;
    font-size: 22px;
    color: #f1bc0d;
    text-transform: capitalize;
}

.footer-col h4::before{
    content: '';
    position: absolute;
    left: 0;
    bottom: -6px;
    background-color: #27c0ac;
    height: 2px;
    width: 40px;
}

ul li:not(:last-child){
    margin-bottom: 8px;
}

ul li a{
    display: block;
    font-size: 19px;
    text-transform: capitalize;
    color: #bdb6b6;
    text-decoration: none;
    transition: 0.4s;
}

ul li a:hover{
    color: white;
    padding-left: 2px;
}

.links a{
    display: inline-block;
    height: 44px;
    width: 44px;
    color: white;
    background-color: rgba(40, 130, 214, 0.8);
    margin: 0 8px 8px 0;
    text-align: center;
    line-height: 44px;
    border-radius: 50%;
    transition: 0.4s;
}

.links a:hover{
    color: #4d4f55;
    background-color: white;
}

@media(max-width: 740px){
    .footer-col{
        width: 50%;
        margin-bottom: 30px;
        text-align: center;
    }

    .footer-col h4::before{
        all: unset;
    }
}

@media(max-width: 555px){
    .footer-col{
        width: 100%;
    }
}
    
    </style>
</head>
<body>
    <footer>
        <div class="footer-col">
            <h4>products</h4>
            <ul>
                <li><a href="#">teams</a></li>
                <li><a href="#">advertising</a></li>
                <li><a href="#">talent</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h4>network</h4>
            <ul>
                <li><a href="#">technology</a></li>
                <li><a href="#">science</a></li>
                <li><a href="#">business</a></li>
                <li><a href="#">professional</a></li>
                <li><a href="#">API</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h4>company</h4>
            <ul>
                <li><a href="#">about</a></li>
                <li><a href="#">legal</a></li>
                <li><a href="#">contact us</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h4>follow us</h4>
            <div class="links">
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>
</body>
</html>