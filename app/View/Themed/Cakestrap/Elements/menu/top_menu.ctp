<nav class="navbar navbar-default" role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button><!-- /.navbar-toggle -->
		<?php echo $this->Html->Link('Exercicio de Cake', 'http://twitter.github.com/bootstrap/', array('class' => 'navbar-brand')); ?>
	</div><!-- /.navbar-header -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
		
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios <b class="caret"></b></a>
				<ul class="dropdown-menu">
			    	<li><a href="<?= $this->base; ?>/users/index">Listar</a></li>
			    	<li><a href="<?= $this->base; ?>/users/logout">Logout</a></li>
			 		
				</ul>
			</li>
					
			
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Tabelas <b class="caret"></b></a>
				<ul class="dropdown-menu">
			    	<li><a href="<?= $this->base; ?>/paginas">Paginas</a></li>
			    	<li><a href="<?= $this->base; ?>/products">Produtos</a></li>
			 		
				</ul>
			</li>
		</ul><!-- /.nav navbar-nav -->
	</div><!-- /.navbar-collapse -->
</nav><!-- /.navbar navbar-default -->