var canvas;
var ball;
var paddle;
var bricks = [];
var brickSchematic = {
  width: 100,
  height: 40,
  color: [102, 51, 0]
};
var gameOver = false;
var win = false;

// Fonction d'initialisation appelée une seule fois au démarrage du jeu
function setup() {
  canvas = createCanvas(800, 600);
  canvas.parent('gameContainer'); // Place le canvas dans le conteneur HTML avec l'ID 'gameContainer'
  paddle = {
    x: width / 2,
    y: height - 20,
    width: 100,
    height: 10,
    color: [255, 255, 0],
    speed: 5 // Vitesse de déplacement du paddle
  };
  createBricks(); // Initialise les briques du jeu
  resetBall(); // Initialise la balle du jeu
}

// Fonction appelée à chaque frame pour dessiner les éléments du jeu
function draw() {
  background(51, 255, 255); // Efface le canvas avec une couleur de fond
  drawPaddle(); // Dessine le paddle
  drawBricks(); // Dessine les briques
  drawBall(); // Dessine la balle
  if (!gameOver && !win) {
    moveBall(); // Déplace la balle
    checkCollision(); // Vérifie les collisions entre la balle et les éléments du jeu
  } else if (gameOver) {
    displayGameOver(); // Affiche l'écran de fin de partie en cas de défaite
  } else if (win) {
    displayWin(); // Affiche l'écran de fin de partie en cas de victoire
  }
}

// Fonction pour dessiner le paddle
function drawPaddle() {
  fill(paddle.color);
  rect(paddle.x - paddle.width / 2, paddle.y, paddle.width, paddle.height);
}

// Fonction pour créer les briques initiales du jeu
function createBricks() {
  var row = width / brickSchematic.width;
  var col = 4;
  for (var i = 0; i < col; i++) {
    for (var j = 0; j < row; j++) {
      var newBrick = {
        x: j * brickSchematic.width,
        y: i * brickSchematic.height,
        width: brickSchematic.width,
        height: brickSchematic.height,
        color: brickSchematic.color
      };
      bricks.push(newBrick); // Ajoute la nouvelle brique à la liste des briques
    }
  }
}

// Fonction pour dessiner les briques
function drawBricks() {
  for (var brick of bricks) {
    fill(brick.color);
    rect(brick.x, brick.y, brick.width, brick.height);
  }
}

// Fonction pour dessiner la balle
function drawBall() {
  fill(0, 0, 0);
  ellipse(ball.x, ball.y, ball.radius * 2);
}

// Fonction pour déplacer la balle
function moveBall() {
  ball.x += ball.xspeed;
  ball.y += ball.yspeed;
  if (ball.x + ball.radius >= width || ball.x - ball.radius <= 0) {
    ball.xspeed *= -1; // Inverse la direction de la balle si elle touche les bords horizontaux du canvas
  }
  if (ball.y - ball.radius <= 0) {
    ball.yspeed *= -1; // Inverse la direction de la balle si elle touche le bord supérieur du canvas
  }
  if (ball.y + ball.radius >= height) {
    gameOver = true; // Indique la fin de partie si la balle touche le bord inférieur du canvas
  }
}

// Fonction pour vérifier les collisions entre la balle et les éléments du jeu
function checkCollision() {
  // Vérifie si la balle touche le paddle
  if (ball.x > paddle.x - paddle.width / 2 && ball.x < paddle.x + paddle.width / 2 && ball.y + ball.radius >= paddle.y && ball.y + ball.radius <= paddle.y + paddle.height / 2) {
    ball.yspeed *= -1; // Inverse la direction de la balle si elle touche le paddle
  }
  // Vérifie si la balle touche une brique
  for (var i = bricks.length - 1; i >= 0; i--) {
    var b = bricks[i];
    if (ball.x + ball.radius >= b.x && ball.x - ball.radius <= b.x + b.width && ball.y + ball.radius >= b.y && ball.y - ball.radius <= b.y + b.height) {
      bricks.splice(i, 1); // Supprime la brique de la liste des briques
      ball.yspeed *= -1; // Inverse la direction de la balle après avoir touché une brique
      break;
    }
  }
  if (bricks.length === 0) {
    win = true; // Indique la victoire si toutes les briques ont été détruites
  }
}

// Fonction pour afficher l'écran de fin de partie en cas de défaite
function displayGameOver() {
  fill(255, 0, 0);
  textSize(32);
  textAlign(CENTER, CENTER);
  text("Game Over", width / 2, height / 2);
  noLoop(); // Arrête la boucle de jeu
}

// Fonction pour afficher l'écran de fin de partie en cas de victoire
function displayWin() {
  fill(0, 255, 0);
  textSize(32);
  textAlign(CENTER, CENTER);
  text("You Win", width / 2, height / 2);
  noLoop(); // Arrête la boucle de jeu
}

// Fonction pour réinitialiser la balle
function resetBall() {
  ball = {
    x: width / 2,
    y: height / 2,
    radius: 10,
    xspeed: 3, // Vitesse horizontale de la balle
    yspeed: 3 // Vitesse verticale de la balle
  };
}

// Fonction appelée lorsqu'une touche est enfoncée
function keyPressed() {
  if (keyCode === LEFT_ARROW) {
    paddle.x -= paddle.speed; // Déplace le paddle vers la gauche
  } else if (keyCode === RIGHT_ARROW) {
    paddle.x += paddle.speed; // Déplace le paddle vers la droite
  }
}

function deplacerPaddleSouris() {
  paddle.x = constrain(mouseX, paddle.width / 2, width - paddle.width / 2);
}


// Fonction pour réinitialiser le jeu
function setupGame() {
  resetBall();
  gameOver = false;
  win = false;
  loop(); // Redémarre la boucle de jeu
}
