<script>
function refreshScoreList(game_id){
    var url = "{{ asset('game/topScore') }}/{gameId}";

    app.api.get (url, { gameId: game_id },
        function (data){
            console.log("Top score reload -> success");
            //actualitzar la puntuació
            // var actualScores = JSON.parse("@{{ json_encode($personal_score['score']) }}");
            // if (score > actualTopScore){
            //     $('#maximaPuntuacion').text(data);
            // }
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
