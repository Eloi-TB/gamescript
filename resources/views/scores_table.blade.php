            <ol>
              @if(count($scores)>0)
                @foreach($scores as $score)
                <li> {{ $score->usuarios->name }} - {{ $score->score }} pts</li>
                @endforeach
              @endif
            </ol>
