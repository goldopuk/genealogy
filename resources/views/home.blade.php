@extends('layout')

@section('title', 'Mobly')

@section('content')

	<p class="intro">
		Não sou muito conhecedor em Laravel. Por isso, não estou usando todos os recursos dele, como Service Provider/Container, flash message, etc...
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

   