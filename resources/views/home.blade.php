@extends('layout')

@section('title', 'Mobly')

@section('content')

	<div class="main categories">
		<h3>Categories</h3>
		<ul class="category-list">
		<?  foreach ($categories as $cat): ?>
			<li>
				<a href="<?= url('category', ['id' => $cat->id]) ?>"><?= $cat->name ?></a>
			</li>
		<? endforeach ?>
		</ul>
	</div>
	
@stop

   