            <!-- Consultas de resultados -->
            @if(count($scores)>0)
            <!-- por cada puntuación del juego -->
            @php
            $j = 0
            @endphp
            <div  class="col-sm-12 col-md-4" >
                <table  class="table table-striped table-bordered">
                    <thead>
                        <caption>{{ trans('messages.record')}}</caption>
                        <tr>
                            <th scope="row">
                                {{ trans('messages.tableRank')}}
                            </th>
                            <th>
                                {{ trans('messages.tableUser')}}
                            </th>
                            <th>
                                {{ trans('messages.tableScore')}}
                            </th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <td colspan="3">
                                <div>
                                    {{ trans('messages.personal')}}:
                                    <span id="maximaPuntuacion">{{{ $personal_score->score or 'Sin puntuación'}}}</span>pts
                                <div>
                            </td>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($scores as $score)
                        <tr class="rank{{ $j++ }}">
                            <td>
                                <span class="rank{{ $j }}"><strong>{{ $j }}</strong></span>
                            </td>
                            <td>
                                {{ $score->usuarios->name }}
                            </td>
                            <td>
                                {{ $score->score }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @endif
