<script type="text/javascript" src="{{ asset('js/games/phaser.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/publi.js') }}"></script>
@include('scripts.player-interactor')
<script>
var contador=0;
var contPubli=0;
var game = new Phaser.Game(400, 490, Phaser.AUTO, 'game_div');

var main_state = {

    preload: function() {
        this.game.stage.backgroundColor = '#71c5cf';
        this.game.load.image('bird', "{{ asset('img/birds/bird.png') }}");
        this.game.load.image('pipe', "{{ asset('img/birds/pipe.png') }}");

        // Load jump sound
        this.game.load.audio('jump', "{{ asset('sounds/birds/jump.wav') }}");
    },

    create: function() {
        var space_key = this.game.input.keyboard.addKey(Phaser.Keyboard.SPACEBAR);
        space_key.onDown.add(this.jump, this);

        this.pipes = game.add.group();
        this.pipes.createMultiple(20, 'pipe');
        this.timer = this.game.time.events.loop(1500, this.add_row_of_pipes, this);

        this.bird = this.game.add.sprite(100, 245, 'bird');
        this.bird.body.gravity.y = 1000;
         // Change the anchor point of the bird
        this.bird.anchor.setTo(-0.2, 0.5);

        this.score = 0;
        var style = { font: "30px Arial", fill: "#ffffff" };
        this.label_score = this.game.add.text(20, 20, "0", style);

        // Add sounds to the game
        this.jump_sound = this.game.add.audio('jump');
    },

    update: function() {
        if (this.bird.inWorld == false)
            this.restart_game(); ////////// poner pausa

        // Make the bird slowly rotate downward
        if (this.bird.angle < 20)
            this.bird.angle += 1;

        this.game.physics.overlap(this.bird, this.pipes, this.hit_pipe, null, this);
    },

    jump: function() {
        // if the bird hit a pipe, no jump
        if (this.bird.alive == false)
            return;

        this.bird.body.velocity.y = -350;

        // Animation to rotate the bird
        this.game.add.tween(this.bird).to({angle: -20}, 100).start();

        // Play a jump sound
        this.jump_sound.play();
    },

    // Dead animation when the bird hit a pipe
    hit_pipe: function() {
        // If the bird has already hit a pipe, we have nothing to do
        if (this.bird.alive == false)
            return;

        // Set the alive flag to false
        this.bird.alive = false;

        // Prevent new pipes from apearing
        this.game.time.events.remove(this.timer);

        // Go trough all the pipes, and stop their movement
        this.pipes.forEachAlive(function(p){
            p.body.velocity.x = 0;
        }, this);
    },
	/* Finalización de la partida */

    restart_game: function() {
        this.game.time.events.remove(this.timer);
      //  this.game.state.start('main');
        //Almacenar la puntuación del jugador al finalizar la partida.

        game.lockRender = true;
        if (contador == 0){
        storePlayerScore(
            JSON.parse("{{ json_encode($game_id->id) }}"),
            JSON.parse("{{ json_encode(Auth::id()) }}"),
            this.score
        );
        refreshScoreList(
            JSON.parse("{{ json_encode($game_id->id) }}")
        );
       contador++;}
    },

    add_one_pipe: function(x, y) {
        var pipe = this.pipes.getFirstDead();
        pipe.reset(x, y);
        pipe.body.velocity.x = -200;
        pipe.outOfBoundsKill = true;
    },

    add_row_of_pipes: function() {
        var hole = Math.floor(Math.random()*5)+1;

        for (var i = 0; i < 8; i++)
            if (i != hole && i != hole +1)
                this.add_one_pipe(400, i*60+10);

        this.score += 1;
        this.label_score.content = this.score;
    },
};



function iniciar(){
  contador=0;
  game.state.add('main', main_state);
  game.state.start('main');
}
setInterval(public, 10000);
</script>

<div>

  <button onclick="iniciar()">Iniciar juego</button>

</div>
