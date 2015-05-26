@extends('layout')

@section('title', 'Mobly')

@section('content')


	<div class="categories">
		<h2>Categories</h2>
		<ul>
		<?  foreach ($categories as $cat): ?>
			<li>
				<a href="<?= url('category', ['id' => $cat->id]) ?>"><?= $cat->name ?></a>
			</li>
		<? endforeach ?>
		</ul>
	</div>
	
@stop

   