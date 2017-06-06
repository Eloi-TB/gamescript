<script>
function refreshScoreList(game_id){
    var url = "{{ asset('game/topScore') }}/" + game_id;

    app.api.get (url, { gameId: game_id },
        function (data){
            console.log("Top score reload -> success");
            var json = JSON.parse(data);
            var html = "";
             $.each( json, function(i, item) {
               html = html.concat('<tr class="rank'+ i +'">'+
                     '<td>'+
                         '<span class="rank'+ (i + 1) +'"><strong>'+ (i + 1) +'</strong></span>'+
                     '</td>'+
                     '<td>'+
                         item.usuarios.name+
                     '</td>'+
                     '<td>'+
                        item.score  +
                     '</td>'+
                 '</tr>');
               });

             $('#carrega').html(html);

        },
        function (){
            console.log("Top score reload -> failed");
        }
    );
}

/* Función Ajax para guardar el la base de datos el juego, usuario y puntuación al finalizar la partida */
function storePlayerScore(game_id, user_id, score){

    var postObject = {
        game_id: game_id,
        user_id: user_id,
        score: score
    };
    var url = "{{ asset('game/store/score') }}";

    app.api.post (url, postObject,
        function (){
            console.log("Score stored -> success");
            //actualitzar la puntuació
            var actualTopScore = JSON.parse("{{ json_encode($personal_score['score']) }}");
            if (score > actualTopScore){
                $('#maximaPuntuacion').text(score);
            }
        },
        function (){
            console.log("Score stored -> failed");
        }
    );
}
</script>
