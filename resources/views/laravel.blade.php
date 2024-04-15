<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc;
}

.accordion:after {
  content: '\002B';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
</style>
</head>
<body>




<div class="accordion" id="accordionExample">
  @foreach ($faculties as $faculty)
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faculty{{$faculty->id}}" aria-expanded="false" aria-controls="faculty{{$faculty->id}}">
          Бакалавр
        </button>
      </h2>
      <div id="faculty{{$faculty->id}}" class="accordion-collapse collapse" aria-labelledby="heading{{$faculty->id}}" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          @foreach ($profiles as $profile)
            @if ($faculty->id == $profile->faculty_id)
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading{{$profile->id}}">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#profile{{$profile->id}}" aria-expanded="false" aria-controls="profile{{$profile->id}}">
                    {{$profile->name}}
                  </button>
                </h2>
                <div id="profile{{$profile->id}}" class="accordion-collapse collapse" aria-labelledby="heading{{$profile->id}}" data-bs-parent="#faculty{{$faculty->id}}">
                  <div class="accordion-body">
                    @foreach($streams as $stream)
                      @if ($stream->profile_id == $profile->id && strpos($stream->name, "б") && (date("Y") - $stream->year < 5 && date("Y") - $stream->year > 0) && $stream->full_name != '')
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="heading{{$stream->id}}">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#stream{{$stream->id}}" aria-expanded="false" aria-controls="stream{{$stream->id}}">  
                                {{$stream->name}}
                            </button>
                          </h2>
                          <div id="stream{{$stream->id}}" class="accordion-collapse collapse" aria-labelledby="heading{{$stream->id}}" data-bs-parent="#profile{{$profile->id}}">
                            <div class="accordion-body">
                              <strong>This is the accordion body for stream {{$stream->name}}</strong>
                            </div>
                          </div>
                        </div>
                      @endif
                    @endforeach
                  </div>
                </div>
              </div>
            @endif
          @endforeach
        </div>
      </div>
    </div>
  @endforeach
</div>

<div class="accordion" id="accordionExample">
  @foreach ($faculties as $faculty)
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faculty{{$faculty->id}}" aria-expanded="false" aria-controls="faculty{{$faculty->id}}">
          Магистратура
        </button>
      </h2>
      <div id="faculty{{$faculty->id}}" class="accordion-collapse collapse" aria-labelledby="heading{{$faculty->id}}" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          @foreach ($profiles as $profile)
            @if ($faculty->id == $profile->faculty_id)
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading{{$profile->id}}">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#profile{{$profile->id}}" aria-expanded="false" aria-controls="profile{{$profile->id}}">
                    {{$profile->name}}
                  </button>
                </h2>
                <div id="profile{{$profile->id}}" class="accordion-collapse collapse" aria-labelledby="heading{{$profile->id}}" data-bs-parent="#faculty{{$faculty->id}}">
                  <div class="accordion-body">
                    @foreach($streams as $stream)
                      @if ($stream->profile_id == $profile->id && strpos($stream->name, "м") && (date("Y") - $stream->year < 3 && date("Y") - $stream->year > 0) && $stream->full_name != '')
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="heading{{$stream->id}}">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#stream{{$stream->id}}" aria-expanded="false" aria-controls="stream{{$stream->id}}">  
                                {{$stream->name}}
                            </button>
                          </h2>
                          <div id="stream{{$stream->id}}" class="accordion-collapse collapse" aria-labelledby="heading{{$stream->id}}" data-bs-parent="#profile{{$profile->id}}">
                            <div class="accordion-body">
                              <strong>This is the accordion body for stream {{$stream->name}}</strong>
                            </div>
                          </div>
                        </div>
                      @endif
                    @endforeach
                  </div>
                </div>
              </div>
            @endif
          @endforeach
        </div>
      </div>
    </div>
  @endforeach
</div>

<div class="accordion" id="accordionExample">
  @foreach ($faculties as $faculty)
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faculty{{$faculty->id}}" aria-expanded="false" aria-controls="faculty{{$faculty->id}}">
          Заочка
        </button>
      </h2>
      <div id="faculty{{$faculty->id}}" class="accordion-collapse collapse" aria-labelledby="heading{{$faculty->id}}" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          @foreach ($profiles as $profile)
            @if ($faculty->id == $profile->faculty_id)
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading{{$profile->id}}">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#profile{{$profile->id}}" aria-expanded="false" aria-controls="profile{{$profile->id}}">
                    {{$profile->name}}
                  </button>
                </h2>
                <div id="profile{{$profile->id}}" class="accordion-collapse collapse" aria-labelledby="heading{{$profile->id}}" data-bs-parent="#faculty{{$faculty->id}}">
                  <div class="accordion-body">
                    @foreach($streams as $stream)
                      @if ($stream->profile_id == $profile->id && strpos($stream->name, "з") && (date("Y") - $stream->year < 3 && date("Y") - $stream->year > 0) && $stream->full_name != '')
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="heading{{$stream->id}}">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#stream{{$stream->id}}" aria-expanded="false" aria-controls="stream{{$stream->id}}">  
                                {{$stream->name}}
                            </button>
                          </h2>
                          <div id="stream{{$stream->id}}" class="accordion-collapse collapse" aria-labelledby="heading{{$stream->id}}" data-bs-parent="#profile{{$profile->id}}">
                            <div class="accordion-body">
                              <strong>This is the accordion body for stream {{$stream->name}}</strong>
                            </div>
                          </div>
                        </div>
                      @endif
                    @endforeach
                  </div>
                </div>
              </div>
            @endif
          @endforeach
        </div>
      </div>
    </div>
  @endforeach
</div>


</body>
</html>
