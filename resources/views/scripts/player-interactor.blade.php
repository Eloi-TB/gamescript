<script>
/* Función Ajax para guardar el la base de datos el juego, usuario y puntuación al finalizar la partida */
function storePlayerScore(game_id, user_id, score){

    var postObject = {
        game_id: game_id,
        user_id: user_id,
        score: score
    };
    var url = "{{ asset('game/store/score') }}";


  @if ($personal_score->score != 0)
    app.api.post (url, postObject,
        function (){
            console.log("Score stored -> success");
            //actualitzar la puntuació
            var actualTopScore = JSON.parse("{{ json_encode($personal_score->score) }}");
            if (score > actualTopScore){
                $('#maximaPuntuacion').text(score);
            }
        },
        function (){
            console.log("Score stored -> failed");
        }
    );
  @endif


    // $.ajax({
    //     url : "@{{ asset('game/store/score') }}",
    //     type: "POST",
    //     //headers: { "X-CSRFToken": $.cookie("csrftoken") },
    //     data : postObject,
    //     success: function(data, textStatus, jqXHR)
    //     {
    //         console.log("Score stored -> success");
    //     },
    //     error: function (jqXHR, textStatus, errorThrown)
    //     {
    //         console.log("Score stored -> failed");
    //     }
    // });
}
</script>
