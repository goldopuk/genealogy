@extends('layout')

@section('title', 'Mobly')

@section('content')

	<p class="intro">
		Hey, Mobly, <br>
		Não sou muito conhecedor em Laravel e não estou usando todos os recursos dele, como Blade, Service Provider/Container, flash message, etc...<br>
		Tambêm, não tenho muito tempo e estou fazendo o desenvolvimento ás pressas. <br>
		Pode ser que tem falhas de segurança aos Xss e CSRF attacks.
		Mas tentei mostrar minha capacidade a trabalhar tanto com o frontend quanto
		com o backend, e implementei scripts para instalar o app, executar os unit tests (limitados...), limpar e ajudar o desenvolvimento desse projeto.<br>
		Inclui angular, bower, compass, composer, build file, scripts de instalação. <br>
		Desculpa pela interface, não esta bonita não e a navigação pouco amigavel... :)<br>
	</p>

	<div class="main categories">
		<h3>Categories</h3>
		<ul class="category-list">
		<?  foreach ($categories as $cat): ?>
			<li>
				<a href="<?= url('category', ['id' => $cat->id]) ?>"><?= $cat->name ?></a> : <?= $cat->description ?>
			</li>
		<? endforeach ?>
		</ul>
	</div>
	
@stop
