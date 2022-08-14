<html>
    <head>
        <title>mission of week 4</title>
    </head>
    <style>
      body {
        background: linear-gradient(-45deg, #210242, #9198e5);
          align-items: center;
          display: flex;
 font-family: 'Inter UI', sans-serif;
 height: 100vh;
 justify-content: center;
 margin: 0;
 width: 100vw;
        }
        .card {
  background: white;
  border-radius: 12px;
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
  height: 250px;
  overflow: hidden;
  padding: 20px;
  position: relative;
  width: 300px;
}
.titleX {
  font-size: 25px;
   font-weight: 600;
   color: black;
}
.form {
  transform-origin: 0 50%;
  transition: transform 500ms, opacity 500ms;
}
.button {
  background-color: #fff;
  border: 1px solid #d5d9d9;
  border-radius: 8px;
  box-shadow: rgba(213, 217, 217, .5) 0 2px 5px 0;
  box-sizing: border-box;
  color: #0f1111;
  cursor: pointer;
  display: inline-block;
  font-family: "Amazon Ember",sans-serif;
  font-size: 13px;
  line-height: 29px;
  padding: 0 10px 0 11px;
  position: relative;
  text-align: center;
  text-decoration: none;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: middle;
  width: 100px;
}
.button:hover {
  background-color: #f7fafa;
}
.button:focus {
  border-color: #008296;
  box-shadow: rgba(213, 217, 217, .5) 0 2px 5px 0;
  outline: 0;
}
.number {
  background-color: #fff;
  border: 1px solid #d5d9d9;
  border-radius: 8px;
  box-shadow: rgba(213, 217, 217, .5) 0 2px 5px 0;
  box-sizing: border-box;
  color: #0f1111;
  cursor: pointer;
  display: inline-block;
  font-family: "Amazon Ember",sans-serif;
  font-size: 13px;
  line-height: 29px;
  padding: 0 10px 0 11px;
  position: relative;
  text-align: center;
  text-decoration: none;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: middle;
  width: 100px;
}
.text {
  color: #667;
  font-size: 1em;
  height: 38px;
  margin: 5px 0 0;
}
    </style>
    <body>
      <div class="card">
            <h1 class="titleX"> Sensor </h1>
            <hr/>
            <div class="form" >
            <form class="text" action="database.php" method="GET">
            Enter value of sensor
            <input class="number" type="number" name="value">
          </br>
              <br>
            <input class = "button" type="submit" value="Submit" name="submit">
                </br>
    </div>
            </form>
        </div>
    </body>
</html>