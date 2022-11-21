@extends ('layouts.base')
@section ('title')
@section('main')

@foreach($matches as $matche)
      @endforeach

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="container">
    <div class="card">
    <div class="card__header">
      <img src="https://source.unsplash.com/600x400/?computer" alt="card__image" class="card__image" width="600">
    </div>
    <div class="card__body">
      <span class="tag tag-blue">!!!!</span>
      <h4>Свежая новость - 1<</h4>
      <p>
      <?php  echo $matche[32]; ?>
      </p>
    </div>
    <div class="card__footer">
    </div>
  </div>


  <div class="card">
    <div class="card__header">
      <img src="https://source.unsplash.com/600x400/?food" alt="card__image" class="card__image" width="600">
    </div>
    <div class="card__body">
      <span class="tag tag-brown">Food</span>
      <h4>Свежая новость - 2</h4>
      <p><?php  echo $matche[33]; ?></p>
    </div>
    <div class="card__footer">
    </div>
  </div>
    

  <div class="card">
    <div class="card__header">
      <img src="https://source.unsplash.com/600x400/?car,automobile" alt="card__image" class="card__image" width="600">
    </div>
    <div class="card__body">
      <span class="tag tag-red">Automobile</span>
      <h4>Свежая новость - 3</h4>
      <p><?php  echo $matche[34]; ?></p>
    </div>
  </div>
</div>
<!-- partial -->
  
</body>
</html>

        </div>
    </div>
</div>
@endsection
