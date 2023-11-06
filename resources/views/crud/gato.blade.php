<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Laravel app </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.13.2/datatables.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet"  href="/stylecss/estilos.css" />
  </head> 
  <body class=" bg-dark text-white"> 
    <nav class="img-fluid navbar navbar-expand-lg bg-secondary text-white-center fs-1 " > #El GATO#</nav> 
    <title>Gato</title>
    <style>

      html, body {
  height: 100vh;
  margin: 0;
  padding: 0;
  background: linear-gradient(to bottom, #1B1E1F, #131113, white);

        

  
}

      .board {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-template-rows: repeat(3, 1fr);
        height: 400px;
        width: 400px;
      }
      .cell {
        background-color: #E1DCDB;
        border: 5px solid black;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 50px;
      }
      h1 {
        
        
        color: #E1DCDB; 
      }
    </style>
  </head>
  <body>
  <h1  id="turno"></h1>
    <div class="board">
      <div class="cell"></div>
      <div class="cell"></div>
      <div class="cell"></div>
      <div class="cell"></div>
      <div class="cell"></div>
      <div class="cell"></div>
      <div class="cell"></div>
      <div class="cell"></div>
      <div class="cell"></div>
    </div>
    
 
    <script>
      const cells = document.querySelectorAll(".cell");
      let turn = "X";
      const turnoElement = document.getElementById("turno");
      turnoElement.textContent = "Turno de " + turn;
      for (const cell of cells) {
        cell.addEventListener("click", (event) => {
          if (cell.textContent !== "") {
            return;
          }
          cell.textContent = turn;
          if (checkForWinner()) {
            alert(turn + " wins!");
            reiniciarJuego();
            return;
          }
          if (checkForEmpate()) {
            alert("Empate!");
            reiniciarJuego();
            return;
          }
          turn = turn === "X" ? "O" : "X";
          turnoElement.textContent = "Turno de " + turn;
        });
      }
      function checkForWinner() {
        const combinations = [
          [0, 1, 2],
          [3, 4, 5],
          [6, 7, 8],
          [0, 3, 6],
          [1, 4, 7],
          [2, 5, 8],
          [0, 4, 8],
          [2, 4, 6],
        ];
        for (const combination of combinations) {
          if (
            cells[combination[0]].textContent === cells[combination[1]].textContent &&
            cells[combination[1]].textContent === cells[combination[2]].textContent &&
            cells[combination[0]].textContent !== ""
          ) {
            return true;
          }
        }
        return false;
      }
      function checkForEmpate() {
        let empate = true;
        for (const cell of cells) {
          if (cell.textContent === "") {
            empate = false;
            break;
          }
        }
        return empate;
      }
      function reiniciarJuego() {
        for (const cell of cells) {
          cell.textContent = "";
        }
        turn = "X";
        turnoElement.textContent = "Turno de " + turn;
      }
    </script>