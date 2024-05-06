<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="Css/style.css">
</head> 
<body> 
   
    <nav class="navbar">
        <div class="container-fluid">  
            <div class="barra-pesquisa"> 
            <form class="d-flex" role="search">
                <input id="search" class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Pesquisar</button>
              </form>
            </div> 
          <a href="cadastro.php"><button>Cadastrar</button></a>
        </div>
      </nav>
    
      <section>
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/image.png" class="d-block w-100" alt="..."  width="100%" height="400vh" >
    </div>
    <div class="carousel-item">
      <img src="assets/img/w1.png" class="d-block w-100" alt="..."  width="100%" height="400vh">
    </div>
    <div class="carousel-item">
      <img src="assets/img/image.png" class="d-block w-100" alt="..."  width="100%" height="400vh">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section> 

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1>
					Receitas da Comunidade
				</h1>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" alt="Bootstrap Thumbnail First" src="assets/img/p1.webp" />
						<div class="card-block">
							<h5 class="card-title">
								Pizza Frango
							</h5>
							<p class="card-text">
              A pizza de frango é uma deliciosa combinação de ingredientes que agrada aos paladares mais exigentes. Esta pizza começa com uma base de massa fina e crocante, coberta com molho de tomate fresco e temperado. 
							</p>
							<p>
								<a class="btn btn-primary" href="#">Comprar</a> <a class="btn" href="#">Ver</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" alt="Bootstrap Thumbnail Second"  src="assets/img/p2.jpg" />
						<div class="card-block">
							<h5 class="card-title">
								Coxinha Recheada
							</h5>
							<p class="card-text">
              A coxinha recheada é uma delícia irresistível que combina uma crocante camada externa com um recheio suculento e saboroso. Começando pela massa, que é preparada de forma artesanal para garantir uma textura macia por dentro e crocante por fora.
							</p>
							<p>
								<a class="btn btn-primary" href="#">Comprar</a> <a class="btn" href="#">Ver</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" alt="Bootstrap Thumbnail Third" src="assets/img/p3.jpg" />
						<div class="card-block">
							<h5 class="card-title">
								Pastel de Carne
							</h5>
							<p class="card-text">
								
O pastel de carne é uma iguaria tradicional que encanta pelo seu sabor e textura únicos. Começando pela massa, fina e crocante, que envolve cuidadosamente um recheio irresistível. Este recheio é composto por uma mistura suculenta de carne moída, temperada com uma combinação de ervas e especiarias que realçam seu sabor.
							</p>
							<p>
								<a class="btn btn-primary" href="#">Comprar</a> <a class="btn" href="#">Ver</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="jumbotron">
				<h2>
					Sandra Rocha
				</h2>
				<p>
					
O pudim é uma sobremesa clássica que encanta paladares ao redor do mundo há séculos. Com sua textura cremosa e sabor delicado, o pudim é uma verdadeira tentação para os amantes de doces.
				</p>
				<p>
					<a class="btn btn-primary btn-large" href="#">Peça Aqui</a>
				</p>
			</div>
		</div>
	</div>
</div>
</body> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>