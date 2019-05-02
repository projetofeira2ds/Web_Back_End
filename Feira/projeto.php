
<html>
  <head>
    <meta charset="utf-8" />
    <title>Projeto</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="../../lib/bootstrap-4.0.0/css/bootstrap.min.css"> -->
    <style>
        #quemSomosFundo{
            background-image:url('quem-somos.jpg');
            background-size:cover;
            padding:0;
        }
        #quemSomosFundo::before{
            background-color: rgba(255, 253, 253, 0.37);
            display: block;
            height: 100%;
            /* width: 100%; */
        }
        .caixa-texto{
            overflow-y:auto;
            padding:20px;
            height:470px;   
            box-shadow: 23px 26px 150px -22px rgba(53, 56, 56, 1);   
        }
        div::-webkit-scrollbar {
            width: 5px;
            /* border-radius: 5px !important; */
            height: 5px
        }
        div::-webkit-scrollbar-track-piece {
            background: #eee
        }
        div::-webkit-scrollbar-thumb {
            background: #888
        }​
        div::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
            border-radius: 10px;
        }
    </style>
  </head>

  <body style="background-color: #1b1b1b!important;">

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
    <a class="navbar-brand" href="home.php">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="quem_somos.php"><font color="white">Quem Somos</font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dSistemas.php"><font color="white">Desenvolvimento de sistemas</font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="etec.php"><font color="white">Etec</font></a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item mr-2">
          <a href="logout.php" class="nav-link"><font color="white" face="courier" size="4">Sair</font></a>
        </li>
      </ul>
    </div>
  </nav>

    <div class="container-fluid  h-100 block" id="quemSomosFundo" style="background-color: #1b1b1b!important">    
        
                <h3 class="py-3   text-center"> <font face="courier" size="7" color="#FFFFFF">O Projeto </font></h3>
                <div class="bg-DARK caixa-texto_quemSomos ml-3 rounded">
                    <p>
                        <font face="courier" size="4" color="#FFFFFF">
                        Why do we use it?
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).


                        Where does it come from?
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

                        The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.


                        Where does it come from?
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

                        Where does it come from?
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                    </font>
                    </p>
                </div>
            </div>
      

    <!-- <footer class="page-footer font-small blue" >
        <div class="container-fluid text-center text-md-left pt-5 ">
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <h5 class="text-uppercase">Projeto Feira.</h5>
                    <p> </p>
                </div>
                <div class="col-md-3 mb-md-0 mb-3 " style="background-color: ; left: 400px;">
                    <h5 class="text-uppercase" ><font color="#FFFF00">Links</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="quem_somos.php"><font color="#FFFF00">Quem somos nós?</font></a>
                        </li>
                        <li>
                            <a href="projeto.php"><font color="#FFFF00">O projeto.</font></a>
                        </li>
                        <li>
                            <a href="#!"><font color="#FFFF00">Etec.</font></a>
                        </li>
                        <li>
                            <a href="#!"><font color="#FFFF00">Desenvolvimento de Sistemas.</font></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright text-center text-white py-3" style="background-color: #000000!important">
            2018 Etec Dr. Emílio Hernandez Aguilar: DS.
        </div>
    </footer> -->
    <!-- Copyright -->
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>