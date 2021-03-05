@extends('layouts.dashboard')

@section('content')

      <h1>Add new Comic</h1>     
    @if ($errors->any())
    <div class="alert alert-danger">

        <ul>
        @foreach ($error->all() as $error)
        <li>{{error}}</li>
        @endforeach
        </ul>
    </div>
    @endif
      <form action="{{comics.store}}" method="post">
      @csrf
        <div class="form-group">
          <label for="series">Series</label>
          <input type="text" name="series" id="series" class="form-control" placeholder="" value="{{old('series')}}">
          
        </div>
        @error('series')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </form>
      <div class="form-group">
          <label for="onSale">onSale</label>
          <input type="text" name="onSale" id="onSale" class="form-control" placeholder="" value="{{old('onSale')}}">
          
        </div>
        @error('onSale')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
          <label for="volume">Volume</label>
          <input type="text" name="volume" id="volume" class="form-control" placeholder="" value="{{old('volume')}}">
          
        </div>
        @error('volume')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </form>        
      <div class="form-group">
          <label for="trimSize">trimSize</label>
          <input type="text" name="trimSize" id="trimSize" class="form-control" placeholder="" value="{{old('trimSize')}}">
          
        </div>
        @error('trimSize')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </form>        
      <div class="form-group">
          <label for="pageCount">pageCount</label>
          <input type="text" name="pageCount" id="pageCount" class="form-control" placeholder="" value="{{old('pageCount')}}">
          
        </div>
        @error('pageCount')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </form>        
      <div class="form-group">
          <label for="rated">Rated</label>
          <input type="text" name="rated" id="rated" class="form-control" placeholder="" value="{{old('rated')}}">
          
        </div>
        @error('rated')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </form>        
      <div class="form-group">
          <label for="artBy">Art By</label>
          <input type="text" name="artBy" id="artBy" class="form-control" placeholder="" value="{{old('artBy')}}">
          
        </div>
        @error('artBy')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </form>        
      <div class="form-group">
          <label for="writtenBy">Written By</label>
          <input type="text" name="writtenBy" id="writtenBy" class="form-control" placeholder="" value="{{old('writtenBy')}}">
          
        </div>
        @error('writtenBy')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </form>        
      <div class="form-group">
          <label for="cover">Series</label>
          <input type="text" name="cover" id="cover" class="form-control" placeholder="" value="{{old('cover')}}">
          
        </div>
        @error('cover')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </form>       
       <div class="form-group">
          <label for="bigCover">bigCover</label>
          <input type="text" name="bigCover" id="bigCover" class="form-control" placeholder="" value="{{old('bigCover')}}">
          
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
        @error('bigCover')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </form>
      </form>

@endsection
