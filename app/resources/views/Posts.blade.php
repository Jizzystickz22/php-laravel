<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>johnson's blog</title>
    <style>
        .h{
            background:#f1f1f1;
            text-align:center;
        }

        .tit{
            margin-left:420px;
            width:500px;
            height:50px
        }

        .body{
            margin-left:420px;
            width:500px;
            height:100px
        }

        #sub{
            margin-left:650px;
            background:rgb(21, 91, 148);
            color:white;
            
        }

        #h2{
            
            color:black;
            text-align:center;
            padding-top:100px;
            
        }

        .d{
            background:red;
            color:white;
            
            text-decoration:none;
            width:50px
        }

        .e{
            background:rgb(21, 91, 148);
            color:white;
            
            text-decoration:none;
            width:50px
        }
        .grid{
            display:grid;
            grid-template-columns:153px 50px;
            margin-left:580px;
        }

        ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    padding-left:1000px
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    
}

/* Change the link color to #111 (black) on hover */
li a:hover {
    background-color: white;
    color:black;
}
    </style>
</head>

<body>
<ul>
<li><a href="home">Home</a></li>
<li><a href="posts">Post Article</a></li>
<li><a href="contact">Contact Us</a></li>
</ul>
    <h1 class="h">
    Welcome to Johnson's blog
    </h1><br>
    <section>
       <form method="POST" action="/Postsaction">
       {{ csrf_field() }}
 
           <h3 class="h">Post title:</h3>
           <input type="string" name="title" class="tit" Required><br><br><br>

          <h3 class="h"> Enter your post:</h3>
           <input type="textarea" name="body" class="body" Required><br><br>
          <input type="submit" name="publish" value="Publish" id="sub">
          
      </form>

    </section>

    <!-- <div class="grid">
      <input type="button" class="d" <a href=""  value="Delete" ></a>
      <input type="button" class="e" <a href=""  value="Edit" ></a>
      </div> -->

    <footer>
    <h3 id="h2">
    copy right reserved @ Johnson's blog 2019.
    </h3>
    </footer>
</body>
</html>